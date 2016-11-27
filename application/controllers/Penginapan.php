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
		$id_pengguna = "1"; 
		$data['penginapan'] = $this->Mpenginapan->tampilDataPenginapan($id_pengguna); 
		$this->load->view('VDataPenginapan', $data);  
	}
	public function tambah(){
		$id_pengguna = "1";
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$alamat = $this->input->post('alamat');
		$daerah = $this->input->post('daerah');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');

		// $config['upload_path'] = realpath(APPPATH . '../assets/img/content'); // path where image will be saved
		// $config['allowed_types'] = 'gif|jpg|png|jpeg';
		// $this->load->library('upload', $config);
		// $this->upload->do_upload('foto');
		// $data_upload_files = $this->upload->data();
		// $foto = $data_upload_files[full_path];

		// echo $data_upload_files['full_path'];
		$this->Mpenginapan->tambah($id_pengguna,$nama,$harga,$alamat,$daerah,$kategori,$deskripsi,$foto);
		redirect('penginapan/dashboard');
	}
	public function ubah(){
		$id_penginapan = $this->input->post('id_penginapan');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$alamat = $this->input->post('alamat');
		$daerah = $this->input->post('daerah');
		$kategori = $this->input->post('kategori');
		$deskripsi = $this->input->post('deskripsi');
		$this->Mpenginapan->ubah($id_penginapan,$nama,$harga,$alamat,$daerah,$kategori,$deskripsi);
		redirect('penginapan/dashboard');
	}
	public function hapus(){
		$id = $this->uri->segment(3);
		$this->Mpenginapan->hapus($id);
		redirect('penginapan/dashboard');
	}

	public function cariPenginapan(){
		$daerah = $this->input->post('daerah');
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
		$data['penginapan'] = $this->Mpenginapan->detailPenginapan($id_penginapan);
		$kategori = $this->Mpenginapan->getKategoriRekomendasi($id_penginapan);
		$data['rekomendasi'] = $this->Mpenginapan->getRekomendasi($kategori,$id_penginapan);
		$data['content'] = $this->load->view('VDetailPenginapan', $data, true);
		$this->load->view('template2', $data); 
	}
}
