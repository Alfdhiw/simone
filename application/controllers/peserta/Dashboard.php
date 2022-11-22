<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Dashboard extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('auth/Auth_model');
    }

    //function halaman utama dashboard
    public function index(){
        $id = $this->session->userdata('userid');
		$data['nama'] = $this->db->get_where('mahasiswa', ['kode_mahasiswa' => $id])->row_array();
        $this->load->view('home/template/header',$data);
		$this->load->view('home/home-mahasiswa',$data);
		$this->load->view('home/template/footer',$data);
    }

    //function untuk absen mahasiswa
}