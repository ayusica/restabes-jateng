<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sium extends CI_Controller
{

    private $filename = "import_data"; // Kita tentukan nama filenya 

    public function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }

        //model 
        $this->load->model('Instansi_model');
        $this->load->model('Sium_model');
        $this->load->model('Personel_model');
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * fungsi : controller untuk mengelola fungsional KASIUM
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/

    //detail polsek
    public function detailPolsek($nrp)
    {
        $data = $this->Personel_model->geteditPersonel($nrp);

        echo json_encode($data);
    }

    //tambah personel polsek
    public function tambahPolsek()
    {
        $nrp = $this->input->post('nrp', true);
        $personel = $this->Personel_model->detailitu($nrp);

        if ($personel) {
            echo json_encode('sudah');
        } 
        $this->Sium_model->tambah_personel_polsek();
        echo json_encode('sukses');
    }

    //daftar polsek
    public function daftarPolsek()
    {

        $data['judul'] = "Daftar Polsek";
        if ($this->session->userdata('akses') == 'kasium') {
            $data['instansi'] = $this->Instansi_model->daftar_polsek();
        } else {
            $data['instansi'] = $this->Instansi_model->daftar_instansi();
        }

        $this->load->view('templates/user/header_user', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('page/daftar_polsek', $data);
        $this->load->view('templates/user/footer');
    }


    //polsek
    public function polsek()
    {
        if (($this->session->userdata('akses') == 'kasium') && $this->uri->segment(3) == 1) {
            redirect('sium/daftar_polsek');
        }

        $data['judul'] = "Instansi";

        $data['org_instansi'] = $this->Sium_model->lihat_polsek($this->uri->segment(3));

        $data['instansi'] = $this->Instansi_model->instansiID($this->uri->segment(3));
        $data['daftar_instansi'] = $this->Instansi_model->daftar_instansi();

        $data['bagian'] = $this->Instansi_model->unsur_bagian();

        $this->load->view('templates/user/header_user', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('page/polsek', $data);
        $this->load->view('templates/user/footer');
    }

    //update record personel polsek setelah edit
    public function updatePolsek()
    {
        $this->load->model('Urmin_model');

        echo json_encode('success');
    }

    //ganti password
    public function gantiPassword()
    {
        $this->load->model('Kabag_model');
        // $data = $this->Kabag_model->ubahPassAdmin();
        echo json_encode('success');
    }

    //untuk hapus data personel polsek
    public function hapusPol()
    {
        if ($this->session->userdata('akses') != 'personel') {
            $this->load->model('Urmin_model');
            $this->Urmin_model->hapusAja();

            echo json_encode('success');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //download data pdf
    public function pdfPolsek()
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';

        $dompdf = new Dompdf();


        $data['personel'] = $this->Sium_model->lihat_polsek($this->uri->segment(3));
        $data['instansi'] = $this->Instansi_model->instansiID($this->uri->segment(3));
        $data['daftar_instansi'] = $this->Instansi_model->daftar_instansi();

        $html = $this->load->view('page/polsek_pdf', $data, true);

        $dompdf->load_html($html);

        $dompdf->set_paper('A4', 'landscape');

        $dompdf->render();


        $dompdf->stream("Data Personel Polsek.pdf", array('Attachment' => 0));
    }

    //impor data polsek
    public function formPolsek()
    {
        $data = array(); // Buat variabel $data sebagai array

        if (isset($_POST['preview'])) { // Jika user menekan tombol Preview pada form
            // lakukan upload file dengan memanggil function upload 
            $this->load->model('Excel_model');
            $upload = $this->Excel_model->upload_file($this->filename);

            if ($upload['result'] == "success") { // Jika proses upload sukses
                // Load plugin PHPExcel nya
                include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

                $excelreader = new PHPExcel_Reader_Excel2007();
                $loadexcel = $excelreader->load('assets/excel/' . $this->filename . '.xlsx'); // Load file yang tadi diupload ke folder excel
                $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

                // Masukan variabel $sheet ke dalam array data yang nantinya akan di kirim ke file form.php
                // Variabel $sheet tersebut berisi data-data yang sudah diinput di dalam excel yang sudha di upload sebelumnya
                $data['sheet'] = $sheet;
            } else { // Jika proses upload gagal
                $data['upload_error'] = $upload['error']; // Ambil pesan error uploadnya untuk dikirim ke file form dan ditampilkan
            }
        }

        $data['instansi'] = $this->input->get('id');
        $this->load->view('page/form_polsek', $data);
    }

    public function importPolsek()
    {
        $data['instansi'] = $this->Instansi_model->instansiID($this->uri->segment(3));

        // Load plugin PHPExcel nya
        include APPPATH . 'third_party/PHPExcel/PHPExcel.php';

        $excelreader = new PHPExcel_Reader_Excel2007();
        $loadexcel = $excelreader->load('assets/excel/' . $this->filename . '.xlsx'); // Load file yang telah diupload ke folder excel
        $sheet = $loadexcel->getActiveSheet()->toArray(null, true, true, true);

        // Buat sebuah variabel array untuk menampung array data yg akan kita insert ke database
        $data = array();

        $numrow = 1;
        foreach ($sheet as $row) {
            // Cek $numrow apakah lebih dari 1
            // Artinya karena baris pertama adalah nama-nama kolom
            // Jadi dilewat saja, tidak usah diimport
            if ($numrow > 1) {
                // Kita push (add) array data ke variabel data
                array_push($data, array(
                    'nama' => $row['A'], // Insert data nama dari kolom A di excel
                    'nrp' => $row['B'], // Insert data nrp dari kolom B di excel
                    'pkt' => $row['C'], // Insert data pangkat dari kolom C di excel
                    'jabatan' => $row['D'], // Insert data jabatan dari kolom D di excel
                    'tempat' => $row['E'], // Insert data tempat dari kolom E di excel
                    'tgl_lahir' => $row['F'], // Insert data tanggal lahir dari kolom F di excel
                    'agama' => $row['G'], // Insert data agama dari kolom G di excel
                    'suku' => $row['H'], // Insert data suku dari kolom H di excel
                    'tmt_jab' => $row['I'], // Insert data tmt.jab dari kolom I di excel
                    'id_bagian' => $row['J'], // Insert data id_bagian dari kolom J di excel
                    'id_instansi' => $this->uri->segment(3),
                    'level' => 'personel',
                    'pass' => md5(strrev($row['B'])),
                    'gambar' => 'default.png'

                ));
            }

            $numrow++; // Tambah 1 setiap kali looping
        }
        // Panggil fungsi insert_multiple yg telah kita buat sebelumnya di model
        $this->load->model('Excel_model');
        $this->Excel_model->insert_multiple($data);

        redirect("sium/polsek/" . $this->uri->segment(3)); // Redirect ke halaman awal
    }
}
