<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	function __construct() {
		parent::__construct();
	}

	public function index(){
		$data['title'] = "login";
		$data['content'] = $this->load->view('login', $data, true);
		$this->load->view('template2', $data);  
	}

}
	