<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Urmin extends CI_Controller
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
        $this->load->model('Urmin_model');
        $this->load->model('Instansi_model');
        $this->load->model('Personel_model');

        //pagination
        $this->load->library('pagination');
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * fungsi : controller untuk mengelola fungsional KAURMIN
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/

    public function personel_polrestabes()
    {
        if ($this->session->userdata('akses') == 'kaurmin') {
            $data['judul'] = "Personel Polrestabes Semarang";

            //load model
            $data['personel'] = $this->Urmin_model->polrestabes_personel();

            $data['instansi'] = $this->Instansi_model->daftar_instansi();

            $data['bagian'] = $this->Instansi_model->unsur_bagian();

            $this->load->view('templates/user/header_user', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('page/personel_polrestabes', $data);
            $this->load->view('templates/user/footer');
        } else {
            return $this->output->set_output("Anda tidak berhak mengakses halaman ini!");
        }
    }

    public function tambah_Poltabes()
    {
        $nrp = $this->input->post('nrp', true);
        // $level = 'personel';
        $personel = $this->Personel_model->detailitu($nrp);

        if ($personel) {
            return $this->output->set_output(json_encode('sudah'));
        } else {
            $this->Urmin_model->tambah_personel_polrestabes();
            return $this->output->set_output(json_encode('sukses'));
        }
    }

    public function detail_poltabes($nrp)
    {
        $data = $this->Personel_model->geteditPersonel($nrp);

        return $this->output->set_output(json_encode($data));
    }

    //untuk hapus data personel poltabes
    public function hapus_Pol()
    {
        if ($this->session->userdata('akses') != 'personel') {
            $this->Urmin_model->hapusAja();

            return $this->output->set_output(json_encode('success'));
        }
        return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
    }

    //update data poltabes
    public function update_Poltabes()
    {
        $this->load->model('Urmin_model');
        $this->Urmin_model->update_PolPersonel();

        return $this->output->set_output(json_encode('success'));
    }

    //ganti password
    public function ganti_Password()
    {
        $this->load->model('Kabag_model');
        $this->Kabag_model->ubahPassAdmin();

        return $this->output->set_output(json_encode('success'));
    }

    //impor data dari excel ke sistem
    public function form_polrestabes()
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

        $this->load->view('page/form_polrestabes', $data);
    }

    public function import()
    {
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
                    'id_instansi' => 1,
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

        redirect("urmin/personel_polrestabes"); // Redirect ke halaman awal
    }

    //download data pdf perbagian
    public function pdf_bagian($id_bagian)
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';

        $dompdf = new Dompdf();

        $data['personel'] = $this->Urmin_model->personel_bagpdf($id_bagian);

        $data['bag'] = $this->Instansi_model->unsur_bagian();

        $html = $this->load->view('page/bagian_pdf', $data, true);

        $dompdf->load_html($html);

        $dompdf->set_paper('A4', 'landscape');

        $dompdf->render();

        // $pdf = $dompdf->output();

        $dompdf->stream("Data Personel Polrestabes Semarang.pdf", array('Attachment' => 0));

        return $this->output->set_output(json_encode($data));
    }

    //select bagian
    public function selectBagian()
    {
        $data = $this->Instansi_model->unsur_bagian();

        return $this->output->set_output(json_encode($data));
    }

    // hasil personel per instansi
    public function getPersonelBagian($id_bagian)
    {
        $data = $this->Urmin_model->getPersonelBagian($id_bagian);

        return $this->output->set_output(json_encode($data));
    }
}
