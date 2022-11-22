<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_Pendaftaran extends CI_Model
{

    //function untuk generate id mahasiswa
    public function getIdPesertaMagang(){
        $this->db->select('MAX(RIGHT(kode_magang,5)) as kode_magang',FALSE);
        $this->db->from('peserta');
        $this->db->where('kode_magang !=','NULL');
        $query = $this->db->get();
        $kode = $query->row();
        $num = substr($kode->kode_magang,1,5);
        $add =(int)$num + 1;
        if(strlen($add) == 1){
            $kodebaru = "0000" . $add;
        }else if(strlen($add)==2){
            $kodebaru = "000" . $add;
        }else if(strlen($add)==3){
            $kodebaru = "00" . $add;
        }else if(strlen($add)==4){
            $kodebaru = "0" . $add;
        }else{
            $kodebaru = "". $add;
        }
        $id_magang = "STD-".date('Y').'-'.$kodebaru;
        return $id_magang;
    }

    //function untuk get data peserta
    public function getDataPeserta(){
        $this->db->select("*");
        $this->db->from('peserta');
        $query = $this->db->get();
        return $result=$query->row();
    }

    // //function untuk generatae id siswa
    //function untuk generate password
    public function generatePassword($length=10){
         $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    //function untuk pendaftaran mahasiswa
    public function pendaftaranMagang(){
                $this->db->select('MAX(RIGHT(kode_magang,5)) as kode_magang',FALSE);
        $this->db->from('peserta');
        $this->db->where('kode_magang !=','NULL');
        $query = $this->db->get();
        $kode = $query->row();
        $num = substr($kode->kode_magang,1,5);
        $add =(int)$num + 1;
        if(strlen($add) == 1){
            $kodebaru = "0000" . $add;
        }else if(strlen($add)==2){
            $kodebaru = "000" . $add;
        }else if(strlen($add)==3){
            $kodebaru = "00" . $add;
        }else if(strlen($add)==4){
            $kodebaru = "0" . $add;
        }else{
            $kodebaru = "". $add;
        }
        $id_magang = "STD-".date('Y').'-'.$kodebaru;
        $data = array(
            'kode_magang'        => $id_magang,
            'nama'              =>$this->input->post('nama'),
            'email'             =>$this->input->post('email'),
            'jeniskel'          =>$this->input->post('jeniskel'),
            'sekolah'           =>$this->input->post('sekolah'),
            'fakultas'          =>$this->input->post('jurusan'),
            'kode_kategori'     =>$this->input->post('divisi'),
            'foto'              =>$this->foto->data("file_name"),
            'surat_pengantar'   =>$this->surat_pengantar->data("file_name"),
            'is_active'         =>1,
            'status'            =>0,
            'tingkat_pendidikan'=>$this->input->post('tingkat_pendidikan')
        );

        $_FILES['fotos']['name']        =$_FILES['fotos']['name'];
        $_FILES['fotos']['type']        =$_FILES['fotos']['type'];
        $_FILES['fotos']['tmp_name']    =$_FILES['fotos']['tmp_name'];
        $_FILES['fotos']['error']       =$_FILES['fotos']['error'];
        $_FILES['fotos']['size']        =$_FILES['fotos']['size'];

        $_FILES['surat']['name']        =$_FILES['surat']['name'];
        $_FILES['surat']['type']        =$_FILES['surat']['type'];
        $_FILES['surat']['tmp_name']    =$_FILES['surat']['tmp_name'];
        $_FILES['surat']['error']       =$_FILES['surat']['error'];
        $_FILES['surat']['size']        =$_FILES['surat']['size'];

        $dataPath =APPPATH.'../assets/data/magang/surat_pengantar';
        $fotoPath =APPPATH.'../assets/data/magang/pas_foto';
        $namaFile =$id_magang .date('d-m-Y');
        // $namaFile2 =$id_mahasiswa .date('d-m-Y');

        $config1['upload_path'] = $fotoPath;
        $config1['allowed_type'] = 'jpg|png|jpeg';
        $config1['max_size'] = 5000;
        $config1['encrypt_name'] = true;
        $config1['file_name'] =$namaFile;

        $config2['upload_path'] = $dataPath;
        $config2['allowed_type'] = 'pdf';
        $config2['max_size'] = 5000;
        $config2['encrypt_name'] = true;
        $config2['file_name'] =$namaFile;

        $this->load->library('upload',$config1);
        $this->upload->initialize($config1);
        if($this->upload->do_upload('fotos')){
            $dataFile1=$this->upload->data();
            $this->upload->initialize($config2);
            if($this->upload->do_upload('surat')){
                $dataFile2 =$this->upload->data();
                $dataFile =[
                    'foto'=>$dataFile1['file_name'],
                    'surat_pengantar'=>$dataFile2['file_name']
                ];
            }
            $this->db->insert('siswa',$data + $dataFile);
        }
    }

    //memilih tipe pendidikan setiap peserta magang
     public function selectTipePendidikan(){
        $this->db->select('tingkat_pendidikan');
        $this->db->from('peserta');
         $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
     }

     //function untuk memilih jenis kelamin peserta magang
     public function selectJenisKel(){
        $this->db->select('jeniskel');
        $this->db->from('peserta');
         $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
     }

      //mengambil id dari tabel divisi yg dibuat
      public function pilihDivisi(){
       $query="SELECT `peserta`.kode_kategori as id, `kategori_magang`.`divisi` FROM  `peserta` JOIN `kategori_magang` ON `peserta`.`kode_kategori` = `kategori_magang`.`kode_kategori`";
       return $this->db->query($query)->row_array();
  }
     //memanggil data nama divisi
  public function getAllNama(){
    return $this->db->get('kategori_magang')->result_array();
  }
}