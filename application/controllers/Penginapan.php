<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penginapan extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	public function index()
	{
		$data['populer'] = $this->Mpenginapan->populer();
		$data['content'] = $this->load->view('HalamanAwal', $data, true);
		$this->load->view('template', $data);  
	}
	public function dashboard(){
		if($this->session->userdata('role') == '1'){
			$id_pengguna = $this->session->userdata('id'); 
			$data['penginapan'] = $this->Mpenginapan->tampilDataPenginapan($id_pengguna); 
			$this->load->view('VDataPenginapan', $data);  
		} else redirect('penginapan');
	}
	public function tambah(){
		
		$id_pengguna = $this->session->userdata('id');
		$config['upload_path']          = ('./assets/uploads/');
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100000000;
		$config['overwrite'] 			= TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto'))
		{
			 $error = array('error' => $this->upload->display_errors());
			 print_r($error);
		}
		else
		{
			 $error = array('error' => $this->upload->display_errors());
		}
		
		$file_name = $this->upload->data();
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$alamat = $this->input->post('alamat');
		$daerah = $this->input->post('daerah');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$foto = $file_name['file_name'];

		$this->Mpenginapan->tambah($id_pengguna,$nama,$harga,$alamat,$daerah,$kategori,$deskripsi,$foto);
		redirect('penginapan/dashboard');
	}
	public function ubah(){
		$id_penginapan = $this->input->post('id_penginapan');

		$config['upload_path']          = './assets/uploads/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['overwrite'] 			= TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('foto'))
		{
			$file_name = '';
		}
		else
		{
			$file_name = $this->upload->data()['file_name'];
		}
		$file_name = $this->upload->data();
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$alamat = $this->input->post('alamat');
		$daerah = $this->input->post('daerah');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$foto = $file_name['file_name'];
		$this->Mpenginapan->ubah($id_penginapan,$nama,$harga,$alamat,$daerah,$kategori,$deskripsi,$foto);
		redirect('penginapan/dashboard');
	}
	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Mpenginapan->hapus($id);
		redirect('penginapan/dashboard');
	}

	public function cariPenginapan(){
		$daerah = $this->input->post('daerah');
		if(isset($_GET['daerah'])){
			$daerah = $_GET['daerah'];
		}
		if($daerah=="0"){
			$data['penginapan'] = $this->Mpenginapan->semuaPenginapan();
		}else{
			$data['penginapan'] = $this->Mpenginapan->cariPenginapan($daerah);
		}
		$data['content'] = $this->load->view('VPenginapan', $data, true);
		$this->load->view('template2', $data); 
	}

	public function detailPenginapan(){
		$id_penginapan = $this->uri->segment(3);
		$id_pengguna = $this->session->userdata('id');
		$data['penginapan'] = $this->Mpenginapan->detailPenginapan($id_penginapan);
		$kategori = $this->Mpenginapan->getKategoriRekomendasi($id_penginapan);
		$data['rekomendasi'] = $this->Mpenginapan->getRekomendasi($kategori,$id_penginapan);
		$data['komentar'] = $this->Mkomentar->getKomentar($id_penginapan);
		$data['suka'] = $this->Mrating->getNilai($id_penginapan,$id_pengguna);
		$data['content'] = $this->load->view('VDetailPenginapan', $data, true);
		$this->load->view('template2', $data); 
	}

	public function setKomentar(){
		$komentar = $this->input->post('komentar');
		$id_pengguna = $this->session->userdata('id');
		$id_penginapan = $this->input->post('id_penginapan');
		$this->Mkomentar->setKomentar($komentar,$id_penginapan,$id_pengguna);
		redirect('penginapan/detailPenginapan/'.$id_penginapan.'');
	}

	public function setNilai(){
		$suka = $this->uri->segment(3);
		$id_penginapan = $this->uri->segment(4);
		$id_pengguna = $this->session->userdata('id');
		if($suka == "1"){
			$this->Mpenginapan->setNilai($id_penginapan);
			$this->Mrating->setNilai($id_penginapan,$id_pengguna);
		}else{
			$this->Mpenginapan->hapusNilai($id_penginapan);
			$this->Mrating->hapusNilai($id_penginapan,$id_pengguna);
		}
		redirect('penginapan/detailPenginapan/'.$id_penginapan.'');
	}
}
