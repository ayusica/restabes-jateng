<?php
defined('BASEPATH') or $this->getResponse()->setBody('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        $this->load->library('form_validation');
    }

    /*----------------------------------------------------------
     * author       : Sisca Ayu Febrianti
     * controller   : index
     * fungsi       : menampilkan fungsi index login
     * tgl          : 27 Januari 2020
     * ---------------------------------------------------------*/

    public function index()
    {
        if ($this->session->userdata('masuk') == TRUE) {
            if ($this->session->userdata('akses') == 'kabag') {
                redirect('kabag/dashboard');
            }
            redirect('personel/profil');
        } else {
            $data['judul'] = 'Halaman Masuk';

            $this->form_validation->set_rules('nrp', 'NRP', 'trim|required|numeric');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/header_login', $data);
                $this->load->view('login/index');
                $this->load->view('templates/footer');
            } else {
                $this->auth();
            }
        }
    }


    private function auth()
    {
        $nrp = htmlspecialchars($this->input->post('nrp', TRUE), ENT_QUOTES);
        $password = md5($this->input->post('password'));

        $personel = $this->Login_model->auth_personel($nrp);


        if ($personel) {
            if ($personel['pass'] ==  $password) {
                $personel = [
                    'nrp' => $personel['nrp'],
                    'nama' => $personel['nama'],
                    'akses' => $personel['level'],
                    'img' => $personel['gambar'],
                    'id_instansi' => $personel['id_instansi'],
                    'masuk' => TRUE
                ];

                $this->session->set_userdata($personel);
                if ($personel['akses'] == 'kabag') {
                    redirect('kabag/dashboard');
                } else {
                    redirect('personel/profil');
                }
            } else {
                return $this->output->set_output($this->session->set_flashdata('msg', '<div class="text text-warning" role="alert"><small>Password Salah!</small></div>'));
            }
        } else {
            return $this->output->set_output($this->session->set_flashdata('msg', '<div class="text text-warning" role="alert"><small>NRP Belum Terdaftar!</small></div>'));
        }
        redirect('login/index');
    }

    /*----------------------------------------------------------
     * author       : Sisca Ayu Febrianti
     * controller   : logout
     * fungsi       : untuk keluar sisfo-bag sumda
     * tgl          : 27 Januari 2020
     * ---------------------------------------------------------*/

    public function logout()
    {
        $this->session->sess_destroy();
        $url = base_url("");
        redirect($url);
    }
}
