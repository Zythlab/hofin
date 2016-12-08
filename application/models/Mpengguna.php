<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Mpengguna extends CI_Model
{

	public function __construct()
	{
		parent::__construct();
	}

	public function login($usr,$pass){
		$this->db->where("username", $usr);
        $this->db->where("password", $pass);
        $query = $this->db->get("m_pengguna");

        if ($query->num_rows() > 0) {
            foreach ($query->result() as $rows) {
                $newdata = array(
                    'nama' => $rows->nama,
                    'role' => $rows->role,
                    'id' => $rows->id_pengguna,
                    'username' => $rows->username,
                );
            }
            $this->session->set_userdata($newdata);
            return true;
        }
        return false;
	}

	public function register($nama,$username,$password,$role){
		$data = array(
					"nama" => $nama,
					"username" => $username,
					"password" => $password,
					"role" => $role,
				);
		$this->db->insert("m_pengguna", $data);
	}

	public function logout(){
		$this->session->sess_destroy();
	}
}