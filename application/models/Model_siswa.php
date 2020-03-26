<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class Model_siswa extends CI_Model
	{
	 
	function chekLogin($username,$password)
	{
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('siswa')->row_array();
        return $user;
    }
	
	///web nilai
	public function view_siswa()
	{
		$siswa = $this->db->get('siswa');
		return $siswa;
	}

	public function simpan_siswa($data)
	{
		$this->db->insert('siswa', $data);
	}

	public function edit_siswa($id_siswa)
	{
		$query = $this->db->get_where('siswa', array('id_siswa' => $id_siswa));
		return $query;
	}

	public function update_siswa($id_siswa, $data)
	{
		$this->db->where('id_siswa', $id_siswa);
		$query = $this->db->update('siswa', $data);
	}

	public function hapus_siswa($id_siswa)
	{
		$this->db->where('id_siswa', $id_siswa);
		$query = $this->db->delete('siswa');

	}

	}



	
?>