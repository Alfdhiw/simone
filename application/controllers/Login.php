<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper(array('url', 'form'));
		$this->load->model('auth/Auth_model', 'auth');
		$this->CI = &get_instance();
	}
	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('login/login');
		} else {
		}
	}

	public function loginuser()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('login/login');
		} else {

			// cek email
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$user = $this->auth->getUsernameUsers($email);
			// $user_id = $user->kode;
			// if ($query->num_rows() > 0) {

			if ($user) {
				// var_dump($this->db->last_query());
				// die;
				if (md5($password) == $user->password) {
					$query = $this->auth->getUserPassUsers($email, $password);
					$data = $query->row();

					if ($data->role == 1) {
						$this->CI->session->set_userdata('userid', $data->kode);
						$this->CI->session->set_userdata('nama', $data->nama);
						$this->CI->session->set_userdata('foto', $data->foto);
						$this->CI->session->set_userdata('email', $data->email);
						$this->CI->session->set_userdata('role_id', 1);
						$this->CI->session->set_userdata('logged_in', true);
						redirect('dashboard');
					} elseif ($data->role == 2) {
						$this->CI->session->set_userdata('userid', $data->kode);
						$this->CI->session->set_userdata('username', $data->username);
						$this->CI->session->set_userdata('nama', $data->nama);
						$this->CI->session->set_userdata('foto', $data->foto);
						$this->CI->session->set_userdata('email', $data->email);
						$this->CI->session->set_userdata('role_id', 2);
						$this->CI->session->set_userdata('logged_in', true);
						redirect('home');
					} elseif ($data->role == 6) {
						if ($data->status == 0) {
							$this->session->set_flashdata('message', '<div class="alert alert-danger" style="color:red;" role="alert">' . 'Akun anda terkena blokir. Silahkan hubungi Admin!' . '</div>');
							redirect('login');
						} else {
							if ($data->is_active == 1) {
								$this->CI->session->set_userdata('kode_mahasiswa', $data->kode);
								$this->CI->session->set_userdata('nama', $data->nama);
								$this->CI->session->set_userdata('email', $data->email);
								$this->CI->session->set_userdata('role_id', 6);
								$this->CI->session->set_userdata('logged_in', true);
							} else {
								$this->session->set_flashdata('message', '<div class="alert alert-danger" style="color:red;" role="alert">' . 'Akun anda belum aktif, silahkan hubungi admin.' . '</div>');
								redirect('login');
							}
						}
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" style="color:red;" role="alert">Password salah!</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" style="color:red;" role="alert">' . 'Akun belum terdaftar.' . '</div>');
				redirect('login');
			}
		}
	}
}
