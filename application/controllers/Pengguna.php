<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index(){
		if (!$error = $this->input->get('error'))
			$error = '';
		else if ($_GET['error'] == 1)
			$error = '<code>Password atau username tidak valid.</code><br><br>';
		if (!$sukses = $this->input->get('register'))
			$sukses = '';
		else if ($_GET['register'] == 1)
			$sukses = '<label class="label label-success">Anda telah berhasil mendaftar silahkan login untuk melanjutkan.</label><br><br>';
		$data['notice'] = $error;
		$data['sukses'] = $sukses;
		$data['content'] = $this->load->view('login', $data, true);
		$this->load->view('template2', $data);  
	}

	public function login(){
		$usr = $this->input->post('username');
		$pass = $this->input->post('password');
		$pass = md5($pass);

		$result = $this->Mpengguna->login($usr, $pass);
		if ($result) {
			if ($this->session->userdata('role') == "1") redirect("penginapan/dashboard");
			else if ($this->session->userdata('role') == "2") redirect("penginapan");
		}else redirect("pengguna?error=1");
	}

	public function register(){
		$role = $this->input->post('role');
		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));
		$this->Mpengguna->register($nama,$username,$password,$role);
		redirect("pengguna?register=1");
	}

	public function logout()
	{
		$this->Mpengguna->logout();
		redirect(base_url());
	}

}
