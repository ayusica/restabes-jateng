<?php
defined('BASEPATH') or $this->getResponse()->setBody('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        // echo 'Home';
        $data['judul'] = 'POLRESTABES SEMARANG';

        $this->load->view('templates/header', $data);
        $this->load->view('home/index'); //folder home file index
        $this->load->view('templates/footer');
    }
}
