<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	
	public function index()
	{
		$data['title'] = 'Dashboard Admin';
		$id = $this->session->userdata('userid');
		$data['nama'] = $this->db->get_where('admin', ['kode_admin' => $id])->row_array();
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar', $data);
		$this->load->view('admin/template/topbar', $data);
		$this->load->view('admin/admin', $data);
		$this->load->view('admin/template/footer', $data);
	}

	public function menu_management()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/menu_management');
		$this->load->view('admin/template/footer');
	}

	public function user_role()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/user_role');
		$this->load->view('admin/template/footer');
	}

	public function data_mahasiswa()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_mahasiswa');
		$this->load->view('admin/template/footer');
	}

	public function data_penyelia()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/data_penyelia');
		$this->load->view('admin/template/footer');
	}

	public function monitoring()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/monitoring');
		$this->load->view('admin/template/footer');
	}
}
