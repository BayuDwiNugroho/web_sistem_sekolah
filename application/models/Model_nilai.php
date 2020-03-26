<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class Model_nilai extends CI_Model
	{
		
	//nilai berdasarkan per login
	public function v_nilai()
	{
		$this->db->select('*');
    	$this->db->from('lap_nilai a'); 
    	$this->db->join('siswa b', 'b.id_siswa=a.id_siswa', 'left');
        $this->db->where('b.id_siswa',$_SESSION['id_siswa']);
    	 $qry = $this->db->get(); 
		//$query = $this->db->get_where('lap_nilai' , array('id_siswa' => $id_siswa, ););
		return $qry;
	}


	public function view_nilai()
	{
		$query = $this->db->get('lap_nilai');
		return $query;
	}

	public function tampil_nilai(){
		$query = $this->db->get_where('lap_nilai', array('id_lap' => $id_lap));
		return $query;
	}



	public function simpan_nilai($data)
	{
		$this->db->insert('lap_nilai', $data);
	}

	public function edit_nilaiku($id_lap)
	{
		$query = $this->db->get_where('lap_nilai', array('id_lap' => $id_lap));
		return $query;
	}

	public function update_nilai($id_lap, $data)
	{
		$this->db->where('id_lap', $id_lap);
		$query = $this->db->update('lap_nilai', $data);
	}

	public function hapus_nilai($id_lap)
	{
		$this->db->where('id_lap', $id_lap);
		$query = $this->db->delete('lap_nilai');

	}


	//webmurid

	///web siswa
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