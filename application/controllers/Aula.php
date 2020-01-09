<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aula extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Aula';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/index');
        $this->load->view('templates/footer_sd');
    }

    public function tanya()
    {
        $data['title'] = 'Aula Tanya';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/tanya');
        $this->load->view('templates/footer_sd');
    }

    public function projek()
    {
        $data['title'] = 'Aula Projek';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/projek');
        $this->load->view('templates/footer_sd');
    }

    public function grup()
    {
        $data['title'] = 'Grup Projek';
        $this->load->view('templates/header_sd');
        $this->load->view('templates/sidebar_aula');
        $this->load->view('aula/grup');
        $this->load->view('templates/footer_sd');
    }
}
