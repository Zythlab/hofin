<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mrating extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function setNilai($id_penginapan,$id_pengguna){
		$data = array(
			"id_pengguna" => $id_pengguna,
			"id_penginapan" => $id_penginapan
			);
		$this->db->insert("m_rating",$data);
	}

	public function hapusNilai($id_penginapan,$id_pengguna){
		$data = array(
			"id_pengguna" => $id_pengguna,
			"id_penginapan" => $id_penginapan
			);
		$this->db->where($data);
		$this->db->delete('m_rating');
	}

	public function getNilai($id_penginapan,$id_pengguna){
		$data = array(
			"id_pengguna" => $id_pengguna,
			"id_penginapan" => $id_penginapan
			);
		$this->db->where($data);
		$query = $this->db->get('m_rating');
		if ($query->num_rows() > 0) {
			return true;
		} else return false;
	}
}