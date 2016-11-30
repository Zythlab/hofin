<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mkomentar extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function setKomentar($komentar,$id_penginapan,$id_pengguna){
		$array = array(
			'id_pengguna' => $id_pengguna,
			'id_penginapan' => $id_penginapan,
			'isi_komentar' => $komentar,
			);
		$this->db->insert('m_komentar', $array);
	}

	public function getKomentar($id_penginapan){
		$this->db->from('m_pengguna');
		$this->db->join('m_komentar', 'm_komentar.id_pengguna = m_pengguna.id_pengguna');
		$this->db->join('m_penginapan', 'm_komentar.id_penginapan = m_penginapan.id_penginapan');
		$this->db->where('m_komentar.id_penginapan',$id_penginapan);
		$query = $this->db->get();
		return $query->result();
	}
}