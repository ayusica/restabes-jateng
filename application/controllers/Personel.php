<?php
defined('BASEPATH') or $this->getResponse()->setBody('No direct script access allowed');

class Personel extends CI_Controller
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
        $this->load->model('Personel_model');
    }

    /*------------------------------------------------------
     * author : Sisca Ayu Febrianti
     * fungsi : controller untuk mengelola fungsional Personel
     * tanggal: 27 Januari 2020
     * -----------------------------------------------------*/

    //profil pengguna
    public function profil()
    {
        $data['judul'] = 'Profil Personel';

        $data['personel'] = $this->Personel_model->detailPersonel($this->session->userdata('nrp'));

        // $data['personel'] = $this->db->get_where('personel', ['nrp' => $this->session->userdata('nrp')])->row_array();

        $this->load->view('templates/user/header_user', $data);
        $this->load->view('templates/user/sidebar', $data);
        $this->load->view('templates/user/topbar', $data);
        $this->load->view('page/profil1', $data);
        $this->load->view('templates/user/footer', $data);
    }

    //edit profil
    public function edit_Profil($nrp)
    {
        $data = $this->Personel_model->geteditPersonel($nrp);

        return $this->output->set_output(json_encode($data));
    }

    //update profil
    public function update_Profil()
    {
        $nrp = $this->input->post('nrp_hid', true);

        $upload_image = $_FILES['image']['name'];

        if ($upload_image) {
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = "./assets/img/profil";
            $config['encrypt_name'] = TRUE;
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['quality'] = '50%';
            $config['width'] = 600;
            $config['height'] = 400;

            $this->load->library('upload', $config);
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();

            $user = $this->db->get_where('personel', ['nrp' => $nrp])->row_array();
            if ($this->upload->do_upload('image')) {
                $old_image = $user['gambar'];
                if ($old_image != 'default.png') {
                    unlink(FCPATH . 'assets/img/profil/' . $old_image);
                }
                $new_image = $this->upload->data('file_name');
                $this->db->set('gambar', $new_image);
            }
            //notifikasi foto gagal upload
            $this->session->set_flashdata('msg', '<div class="alert alert-danger" role="alert"> Maaf ukuran foto terlalu besar (Max 2MB)!</div>');

            // var_dump($upload_image);
            // die;
            // var_dump($config);
            // var_dump($this->upload->display_errors());
            // die;
        }
        $data = [
            "nama" => $this->input->post('nama', true),
            "nrp" => $this->input->post('nrp_hid', true),
            "tempat" => $this->input->post('tempat', true),
            "tgl_lahir" => $this->input->post('tgl_lahir', true),
            "agama" => $this->input->post('agama', true),
            "suku" => $this->input->post('suku', true),
            "tmt_jab" => $this->input->post('tmt_jab', true)
        ];
        $this->db->where('nrp', $this->input->post('nrp_hid'));
        $this->db->update('personel', $data);
        $this->session->set_flashdata('msg', '<div class="alert alert-success" role="alert"> Data telah diubah!</div>');

        // $this->Personel_model->update_Profil();
        // var_dump($data);
        // die;
        redirect('personel/profil');
    }

    //ubah password profil
    public function ubahPass()
    {
        $user = $this->Personel_model->detailitu($this->session->userdata('nrp'));

        $newPassword = $this->input->post('newPassword');

        if (md5($this->input->post('oldPassword')) == $user['pass']) {
            $this->Personel_model->ubahPass($newPassword);
            return $this->output->set_output(json_encode('berhasil'));
        }
        return $this->output->set_output(json_encode('beda'));
    }

    //download pdf profil
    public function pdf_profil($nrp)
    {
        require_once APPPATH . 'third_party/dompdf/dompdf_config.inc.php';

        if (($this->session->userdata('nrp') == $nrp) || ($this->session->userdata('akses') != 'personel')) {

            $dompdf = new Dompdf();

            $data['personel'] = $this->Personel_model->detailPersonel($nrp);

            $html = $this->load->view('page/profil_pdf', $data, true);

            $dompdf->load_html($html);

            $dompdf->set_paper('A4', 'potrait');

            $dompdf->render();


            $dompdf->stream("Data Profil.pdf", array('Attachment' => 0));
        }
        return $this->output->set_output("Maaf Ini Bukan Halaman Anda!");
    }


    public function ubah_PassPer()
    {
        $user = $this->Personel_model->detailitu($this->session->userdata('nrp'));

        $baruPassword = $this->input->post('baruPassword');

        if (md5($this->input->post('lamaPassword')) == $user['pass']) {
            if ($this->input->post('konfPassword') == $baruPassword) {
                $this->Personel_model->ubahPassPer($baruPassword);
                return $this->output->set_output(json_encode('berhasil'));
            } else {
                return $this->output->set_output(json_encode('tidak'));
            }
        } else {
            return $this->output->set_output(json_encode('beda'));
        }
    }
}
