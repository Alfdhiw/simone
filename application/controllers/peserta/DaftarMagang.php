<?php
defined('BASEPATH') or exit('No direct script access allowed');


class DaftarMagang extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('M_Pendaftaran');
    }

    //function halaman utama dashboard
    public function index(){
        $id = $this->session->userdata('userid');
		$data['nama'] = $this->db->get_where('peserta', ['kode_magang' => $id])->row_array();
        $this->load->view('home/template/header',$data);
		$this->load->view('home/home',$data);
		$this->load->view('home/template/footer',$data);
    }

    //function untuk pendaftaran peserta magang
    public function pendaftaranMagang(){
        $this->form_validation->set_rules('nama','Nama Lengkap','required');
			$this->form_validation->set_rules('email', 'Pastikan Email Aktif', 'required');
			$this->form_validation->set_rules('sekolah', 'Universitas atau Sekolah', 'required');
			$this->form_validation->set_rules('jurusan', 'Asal Jurusan', 'required');

			$data['pendidikan']=$this->M_Pendaftaran->selectTipePendidikan();
            $data['jenis']   =$this->M_Pendaftaran->selectJenisKel();
            $data['divisi'] = $this->M_Pendaftaran->pilihDivisi();
			$data['nama_divisi'] = $this->M_Pendaftaran->getAllNama();
			$data['daftar'] = $this->M_Pendaftaran->selectTipePendidikan();
			if($this->form_validation->run() == FALSE){
				$this->load->helper('captcha');
				$data['title']  = 'Pendaftaran Magang';
				$original_string = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
				$original_string = implode("", $original_string);
				$captcha = substr(str_shuffle($original_string), 0, 6);
				$vals = array(
               'word' => $captcha,
			   'img_url' => base_url() . './assets/captcha/',
               'img_path' => './assets/captcha/',
               'font_size' => 10,
               'img_width' => 150,
               'img_height' => 50,
               'expiration' => 3600
				);
				$cap = create_captcha($vals);
				$data['image'] = $cap['image'];
				if (file_exists(BASEPATH . "./assets/captcha/" . $this->session->userdata['image']))
					unlink(BASEPATH . "./assets/captcha/" . $this->session->userdata['image']);
				$this->session->set_userdata(array('captcha' => $captcha, 'image' => $cap['time'] . '.jpg'));
				// // get data nama user (untuk tampil di sidebar dan navbar)
				// $data['user']   = $this->db->query('select * from admin where nama = "' . $_SESSION['nama'] . '"')->row();
				$this->load->view('home/template/header',$data);
                $this->load->view('home/home',$data);
                $this->load->view('home/template/footer',$data);
			}else{
				if (file_exists(BASEPATH . "./assets/captcha/" . $this->session->userdata['image']))
					unlink(BASEPATH . "./assets/captcha/" . $this->session->userdata['image']);
				$this->session->unset_userdata('captcha');
				$this->session->unset_userdata('image');

				$id_magang=$this->M_Pendaftaran->getIdPesertaMagang();
                $config = array();
				$config['upload_path'] = './assets/data/magang/pas_foto';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['file_name']    = $id_magang .'-'. date('d-m-Y');

				$this->load->library('upload', $config, 'foto');
				$this->foto->initialize($config);
				$upload_foto = $this->foto->do_upload('foto');

				$config['upload_path'] = './assets/data/magang/surat_pengantar';
				$config['allowed_types'] = 'pdf';
				$config['file_name']    = $id_magang .'-'. date('d-m-Y');

				$this->load->library('upload', $config, 'surat_pengantar');
				$this->surat_pengantar->initialize($config);
				$upload_surat_pengantar = $this->surat_pengantar->do_upload('surat_pengantar');

                if($upload_foto && $upload_surat_pengantar){
                    $length=$this->M_Pendaftaran->generatePassword();

					$data = array(
						 'kode_magang'        => $id_magang,
                        'nama'              =>$this->input->post('nama'),
                        'email'             =>$this->input->post('email'),
                        'jeniskel'          =>$this->input->post('jeniskel'),
                        'sekolah'           =>$this->input->post('sekolah'),
                        'jurusan'          =>$this->input->post('jurusan'),
                        'kode_kategori'     =>$this->input->post('divisi'),
                        'foto'              =>$this->foto->data("file_name"),
                        'surat_pengantar'   =>$this->surat_pengantar->data("file_name"),
                        'is_active'         =>1,
                        'status'            =>0,
                        'password'          =>$length,
                        'tingkat_pendidikan'=>$this->input->post('tingkat_pendidikan')
					);

					$this->db->insert('peserta', $data);

					redirect('mahasiswa/DaftarMagang/index',$data);
					if ($this->input->post('captcha') != $this->session->userdata['captcha']) {
						$this->form_validation->set_message('validate_captcha', 'Cpatcha Code is wrong');
						return false;
					} else {
						return true;
					}

				}else{
					redirect('mahasiswa/DaftarMagang/tambah');
				}
			}
    }
    //function untuk load captcha
	public function form(){
		if(empty($_POST)){
			$this->captcha_setting();
		}else{
			//membandingkan nilai
			if(strcasecmp($_SESSION['captchaWord'],$_POST['captcha']) == 0){
				echo "<script type='text/javascript'>alert('Pendaftaran Berhasil');</script>";
				$this->captcha_setting();
			}else{
				echo "<script type='text/javascript'>alert('Coba Lagi');</script>";
				$this->captcha_setting();
			}
		}
	}


	//function untuk generate code captcha
	public function captcha_setting(){
		$values = array(
			'word'=>'',
			'word_length'=>8,
			'img_path'=>'./assets/captcha',
			'img_url' => base_url(). '/assets/captcha',
			'font_path'=> base_url(). 'system/fonts/texb.ttf',
			'img_width'=>150,
			'img_height'=>50,
			'expiration' =>3600 #atau 1jam
		);
		$data =create_captcha($values);
		$_SESSION['captchaWord'] = $data['word'];
	}
	public function captcha_refresh(){
$values = array(
'word' => '',
'word_length' => 8,
'img_path' => './images/',
'img_url' => base_url() .'images/',
'font_path' => base_url() . 'system/fonts/texb.ttf',
'img_width' => '150',
'img_height' => 50,
'expiration' => 3600
);
$data = create_captcha($values);
$_SESSION['captchaWord'] = $data['word'];
echo $data['image'];

}
}