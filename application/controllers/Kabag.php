<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kabag extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //validasi jika user belum login
        if ($this->session->userdata('masuk') != TRUE) {
            $url = base_url('login');
            redirect($url);
        }

        //model 
        $this->load->model('Kabag_model');
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * fungsi : controller untuk mengelola fungsional KABAG
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/

    //halaman dashboard kabag
    public function dashboard()
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $data['judul'] = 'Selamat Datang';

            $data['personel'] = $this->Kabag_model->getAllPersonel();
            $data['jum'] = $this->Kabag_model->HitungJumlahPersonel();
            $data['pol'] = $this->Kabag_model->HitungJumlahPolsek();

            $this->load->model('Instansi_model');
            $data['ins'] = $this->Instansi_model->daftar_instansi();

            $this->load->view('templates/user/header_user', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('page/dashboard', $data);
            $this->load->view('templates/user/footer');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //grafik
    public function grafik()
    {
        $data = $this->Kabag_model->jumperInstansi();
        echo json_encode($data);
        // print_r($cek);
        // exit();
    }

    //detail personel setiap hak akses kabag
    public function detail($nrp)
    {
        $this->load->model('Personel_model');
        $data['personel'] = $this->Personel_model->detailPersonel($nrp);

        if ($this->session->userdata('akses') == 'kabag') {
            $data['judul'] = 'Detail Data Personel';

            $this->load->view('templates/user/header_user', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('page/detail', $data);
            $this->load->view('templates/user/footer');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //kelola admin
    public function kelola_admin()
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $data['judul'] = 'Kelola Admin';

            $data['personel'] = $this->Kabag_model->kelolaAdmin();

            $this->load->view('templates/user/header_user', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('page/keladmin', $data);
            $this->load->view('templates/user/footer');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //pilih instansi
    public function pilih_instansi()
    {
        $this->load->model('Instansi_model');
        $data = $this->Instansi_model->daftar_instansi();

        echo json_encode($data);
    }

    //untuk edit admin
    public function edit_Admin($nrp)
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $data['judul'] = 'Kelola Admin';

            $this->load->model('Personel_model');
            $data = $this->Personel_model->geteditPersonel($nrp);

            echo json_encode($data);
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //untuk update admin
    public function update_Admin()
    {
        if ($this->session->userdata('akses') == 'kabag') {

            // $data = $this->Kabag_model->update_editPersonel();
            echo json_encode('success');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //untuk ubah pass admin
    public function ubah_PassAdmin()
    {
        if ($this->session->userdata('akses') != 'personel') {
            // $data = $this->Kabag_model->ubahPassAdmin();
            echo json_encode('success');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //tambah admin
    public function tambah_Admin()
    {
        $nrp = $this->input->post('nrp', true);
        // $level = $this->input->post('level', true);

        $this->load->model('Personel_model');
        $admin = $this->Personel_model->detailitu($nrp);

        if ($admin) {
            if ($admin['level'] == 'personel') {
                $this->Kabag_model->update_admin();
                echo json_encode('berhasil');
            } else {
                echo json_encode('sudah');
            }
            // }else if(NOT $admin){
        } else {
            $this->Kabag_model->tambahAdmin();
            echo json_encode('berhasil');
        }
    }

    //untuk hapus data admin
    public function hapus_Admin()
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $this->Kabag_model->hapusAdmin();

            echo json_encode('success');
        } else {
            echo "Anda tidak berhak mengakses halaman ini";
        }
    }

    //tambah instansi polsek
    public function tambah_instansi_polsek()
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $data['judul'] = 'Polsek';
            $this->load->model('Instansi_model');
            $data['instansi'] = $this->Instansi_model->daftar_instansi();

            $this->load->view('templates/user/header_user', $data);
            $this->load->view('templates/user/sidebar', $data);
            $this->load->view('templates/user/topbar', $data);
            $this->load->view('page/tambah_instansi_polsek', $data);
            $this->load->view('templates/user/footer');
        } else {
            "Anda tidak berhak mengakses halaman ini!";
        }
    }

    //get instansi berdasarkan id
    public function get_Instansi($id_instansi)
    {
        $this->load->model('Instansi_model');
        $data = $this->Instansi_model->get_editInstansi($id_instansi);

        echo json_encode($data);
    }

    //update instansi
    public function update_instansi()
    {
        $id_instansi = $this->input->post('instansi_hid', true);

        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = "./assets/img/g_instansi";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            $user = $this->db->get_where('instansi', ['id_instansi' => $id_instansi])->row_array();
            if ($this->upload->do_upload('image')) {
                $old_image = $user['foto'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/g_instansi/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            } else {
                //notifikasi foto gagal upload
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"> Maaf ukuran foto terlalu besar (Max 2MB)!</div>');
            }
        }
        $data = [
            "id_instansi" => $this->input->post('instansi_hid', true),
            "nama_instansi" => $this->input->post('nama_instansi', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->where('id_instansi', $this->input->post('instansi_hid'));
        $this->db->update('instansi', $data);


        redirect('kabag/tambah_instansi_polsek');
    }


    //hapus instansi
    public function hapus_Instansi()
    {
        $this->Personel_model->hapus_Instansi();

        echo json_encode('success');
    }

    //tambah instansi db
    public function tambah_kesatuan()
    {
        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '2048';
            $config['upload_path'] = "./assets/img/g_instansi";
            $config['encrypt_name'] = TRUE;

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('image')) {
                $new_image = $this->upload->data('file_name');
                $this->db->set('foto', $new_image);
            } else {
                //notifikasi foto gagal upload
                echo $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"> Maaf ukuran foto terlalu besar (Max 2MB)!</div>');
            }
        }
        $data = [
            "nama_instansi" => $this->input->post('instansi_nama', true),
            "alamat" => $this->input->post('instansi_alamat', true)
        ];
        $this->db->insert('instansi', $data);

        redirect('kabag/tambah_instansi_polsek');
    }
}
