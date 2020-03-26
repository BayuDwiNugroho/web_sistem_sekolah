<?php

class Model_guru extends CI_Model {

    public $table ="guru";
       
    function chekLogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',  md5($password));
        $user = $this->db->get('guru')->row_array();
        return $user;
    }

    public function view_guru()
	{
		$guru = $this->db->get('guru');
		return $guru;
	}
	
	public function simpan_guru($data)
	{
		$this->db->insert('guru', $data);
	}

	public function edit_guru($id_guru)
	{
		$query = $this->db->get_where('guru', array('id_guru' => $id_guru));
		return $query;
	}

	public function update_guru($id_guru, $data)
	{
		$this->db->where('id_guru', $id_guru);
		$query = $this->db->update('guru', $data);
	}

	public function hapus_guru($id_guru)
	{
		$this->db->where('id_guru', $id_guru);
		$query = $this->db->delete('guru');

	}

}