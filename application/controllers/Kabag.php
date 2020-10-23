<?php
defined('BASEPATH') or $this->getResponse()->setBody('No direct script access allowed');

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
        if ($this->session->userdata('akses') !== 'kabag') {
            return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
        }
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
    }

    //grafik
    public function grafik()
    {
        $data = $this->Kabag_model->jumperInstansi();
        return $this->output->set_output(json_encode($data));
        // print_r($cek);
        // exit();
    }

    //detail personel setiap hak akses kabag
    public function detail($nrp)
    {
        $this->load->model('Personel_model');
        $data['personel'] = $this->Personel_model->detailPersonel($nrp);

        if ($this->session->userdata('akses') !== 'kabag') {
            return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
        }
        $data['judul'] = 'Detail Data Personel';

        $this->load->view('templates/user/header_user', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('page/detail', $data);
        $this->load->view('templates/user/footer');
    }

    //kelola admin
    public function kelola_admin()
    {
        if ($this->session->userdata('akses') !== 'kabag') {
            return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
        }
        $data['judul'] = 'Kelola Admin';

        $data['personel'] = $this->Kabag_model->kelolaAdmin();

        $this->load->view('templates/user/header_user', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('page/keladmin', $data);
        $this->load->view('templates/user/footer');
    }

    //pilih instansi
    public function pilihInstansi()
    {
        $this->load->model('Instansi_model');
        $data = $this->Instansi_model->daftar_instansi();

        return $this->output->set_output(json_encode($data));
    }

    //untuk edit admin
    public function edit_Admin($nrp)
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $data['judul'] = 'Kelola Admin';

            $this->load->model('Personel_model');
            $data = $this->Personel_model->geteditPersonel($nrp);

            return $this->output->set_output(json_encode($data));
        }
        return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
    }

    //untuk update admin
    public function update_Admin()
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $this->Kabag_model->update_editPersonel();
            return $this->output->set_output(json_encode('success'));
        }
        return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
    }

    //untuk ubah pass admin
    public function ubahPassadmin()
    {
        if ($this->session->userdata('akses') != 'personel') {
            $this->Kabag_model->ubahPassAdmin();
            return $this->output->set_output(json_encode('success'));
        }
        return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
    }

    //tambah admin
    public function tambahAdmin()
    {
        $nrp = $this->input->post('nrp', true);
        // $level = $this->input->post('level', true);

        $this->load->model('Personel_model');
        $admin = $this->Personel_model->detailitu($nrp);

        if ($admin) {
            if ($admin['level'] == 'personel') {
                $this->Kabag_model->update_admin();
                return $this->output->set_output(json_encode('berhasil'));
            }
            return $this->output->set_output(json_encode('sudah'));
        } else {
            $this->Kabag_model->tambahAdmin();
            return $this->output->set_output(json_encode('berhasil'));
        }
    }

    //untuk hapus data admin
    public function hapusAdmin()
    {
        if ($this->session->userdata('akses') == 'kabag') {
            $this->Kabag_model->hapusAdmin();

            return $this->output->set_output(json_encode('success'));
        } else {
            return $this->output->set_output("Anda tidak berhak mengakses halaman ini");
        }
    }

    //tambah instansi polsek
    public function tambahInstansiPolsek()
    {
        if ($this->session->userdata('akses') !== 'kabag') {
            return $this->output->set_output("Anda tidak berhak mengakses halaman ini!");
        }
        $data['judul'] = 'Polsek';
        $this->load->model('Instansi_model');
        $data['instansi'] = $this->Instansi_model->daftar_instansi();

        $this->load->view('templates/user/header_user', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('page/tambah_instansi_polsek', $data);
        $this->load->view('templates/user/footer');
    }

    //get instansi berdasarkan id
    public function getInstansi($idInstansi)
    {
        $this->load->model('Instansi_model');
        $data = $this->Instansi_model->get_editInstansi($idInstansi);

        return $this->output->set_output(json_encode($data));
    }

    //update instansi
    public function updateInstansi()
    {
        $id_instansi = $this->input->post('instansi_hid', true);

        // $upload_image = $_FILES['image']['name'];
        $upload_image = filter_input_array(INPUT_POST, ['image' => FILTER_SANITIZE_STRING, 'name' => FILTER_SANITIZE_STRING]);

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
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"> Maaf ukuran foto terlalu besar (Max 2MB)!</div>');
            }
        }
        $data = [
            "id_instansi" => $this->input->post('instansi_hid', true),
            "nama_instansi" => $this->input->post('nama_instansi', true),
            "alamat" => $this->input->post('alamat', true)
        ];
        $this->db->where('id_instansi', $this->input->post('instansi_hid'));
        $this->db->update('instansi', $data);


        redirect('kabag/tambahInstansiPolsek');
    }


    //hapus instansi
    public function hapusInstansi()
    {
        $this->Personel_model->hapus_Instansi();

        return $this->output->set_output(json_encode('success'));
    }

    //tambah instansi db
    public function tambahKesatuan()
    {
        // $upload_image = $_FILES['image']['name'];
        $upload_image = filter_input_array(INPUT_POST, ['image' => FILTER_SANITIZE_STRING, 'name' => FILTER_SANITIZE_STRING]);

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
                $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"> Maaf ukuran foto terlalu besar (Max 2MB)!</div>');
            }
        }
        $data = [
            "nama_instansi" => $this->input->post('instansi_nama', true),
            "alamat" => $this->input->post('instansi_alamat', true)
        ];
        $this->db->insert('instansi', $data);

        redirect('kabag/tambahInstansiPolsek');
    }
}
