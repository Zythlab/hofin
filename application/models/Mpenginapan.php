<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mpenginapan extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function tampilDataPenginapan($id_pengguna){
		$this->db->where('id_pengguna', $id_pengguna);
		$query = $this->db->get("m_penginapan");
		return $query->result();
	}

	public function tambah($id, $nama,$harga,$alamat,$daerah,$kategori,$deskripsi,$foto){
		
		$array = array(
			'id_pengguna' => $id,
			'nama_penginapan' => $nama,
			'harga' => $harga,
			'alamat' => $alamat,
			'daerah' => $daerah,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			'foto' => $foto,
			);
		$this->db->insert('m_penginapan', $array);
	}

	public function ubah($id, $nama,$harga,$alamat,$daerah,$kategori,$deskripsi){
		$array = array(
			'nama_penginapan' => $nama,
			'harga' => $harga,
			'alamat' => $alamat,
			'daerah' => $daerah,
			'kategori' => $kategori,
			'deskripsi' => $deskripsi,
			);
		$this->db->where('id_penginapan', $id);
		$this->db->update('m_penginapan', $array);
	}

	public function hapus($id){
		$this->db->where('id_penginapan', $id);
		$this->db->delete('m_penginapan');
	}

	public function populer(){
		$this->db->from('m_pengguna');
		$this->db->join('m_penginapan', 'm_pengguna.id_pengguna = m_penginapan.id_pengguna');
		$this->db->order_by('rating','DESC');
		$this->db->limit('4');
		$query = $this->db->get();
		return $query->result();
	}

	public function semuaPenginapan(){
		$this->db->from('m_pengguna');
		$this->db->join('m_penginapan', 'm_pengguna.id_pengguna = m_penginapan.id_pengguna');
		$query = $this->db->get();
		return $query->result();
	}

	public function cariPenginapan($daerah){
		$this->db->from('m_pengguna');
		$this->db->join('m_penginapan', 'm_pengguna.id_pengguna = m_penginapan.id_pengguna');
		$this->db->where('daerah', $daerah);
		$query = $this->db->get();
		return $query->result();
	}

	public function detailPenginapan($id){
		$this->db->from('m_pengguna');
		$this->db->join('m_penginapan', 'm_pengguna.id_pengguna = m_penginapan.id_pengguna');
		$this->db->where('id_penginapan',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function getKategoriRekomendasi($id){
		$this->db->from('m_pengguna');
		$this->db->join('m_penginapan', 'm_pengguna.id_pengguna = m_penginapan.id_pengguna');
		$this->db->where('id_penginapan',$id);
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
			$kategori = $row->kategori;
		}
		return $kategori;
	}

	public function getRekomendasi($kategori,$id){
		$this->db->from('m_pengguna');
		$this->db->join('m_penginapan', 'm_pengguna.id_pengguna = m_penginapan.id_pengguna');
		$this->db->where('kategori',$kategori);
		$this->db->where('id_penginapan !=', $id);
		$this->db->limit('4');
		$query = $this->db->get();
		return $query->result();
	}
}