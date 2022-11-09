<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('home/template/header');
        $this->load->view('home/home');
        $this->load->view('home/template/footer');
    }

    public function mahasiswa()
    {
        $this->load->view('home/template/header');
        $this->load->view('home/home-mahasiswa');
        $this->load->view('home/template/footer');
    }

    public function absen()
    {
        $this->load->view('home/template/header');
        $this->load->view('home/absen');
        $this->load->view('home/template/footer');
    }
}
