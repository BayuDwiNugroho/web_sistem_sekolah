<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_pdf extends CI_Model {

	public function get_produk()
	{
		$query = $this->db->get('lap_nilai');
		return $query->result_array();
	}
}
?>