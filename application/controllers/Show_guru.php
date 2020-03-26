<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class show_guru extends CI_Controller
	{
/// guru

	public function __construct(){
			    parent::__construct();
			    
			    $this->load->model('Model_guru'); // Load SiswaModel ke controller ini
	}

	public function tampil_admin_guru()
	{
		$data['guru'] = $this->Model_guru->view_guru();
		$this->load->view('v_admin/view_admin_guru', $data);
	}

	public function tampil_guru()
	{
		$data['guru'] = $this->Model_guru->view_guru();
		$this->load->view('v_guru/view_guru', $data);
	}

	public function tambah_guru()
	{
	   	$this->load->view('v_guru/tambah_guru');
	}

	public function insert_guru() {

		$data = array('id_guru' => $this->input->post('id_guru'), 'nama_guru' => $this->input->post('nama_guru'),'mapel' => $this->input->post('mapel'),'kelas' => $this->input->post('kelas'));

		$proses = $this->Model_guru->simpan_guru($data);
		if (!$proses) {
			header('Location: tampil_admin_guru');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tambah_siswa')."'>Kembali ke form</a>";
		}	
	}

	public function edit_guru()
	{
		$id_guru = $this->uri->segment(3);
		$data['guru'] = $this->Model_guru->edit_guru($id_guru);
		$this->load->view('v_guru/edit_guru', $data);
	}

	public function update_guru()
	{
		$id_guru = $this->input->post('id_guru');
		$data = array('id_guru' => $this->input->post('id_guru'), 'nama_guru' => $this->input->post('nama_guru'),'mapel' => $this->input->post('mapel'),'kelas' => $this->input->post('kelas'));

		$proses = $this->Model_guru->update_guru($id_guru, $data);
		if (!$proses) {
			header('Location: tampil_admin_guru');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_siswa')."'>Tampil data</a>";
		}
	}

	public function hapus_guru()
	{
		$id_guru = $this->uri->segment(3);
		$proses = $this->Model_guru->hapus_guru($id_guru);
		if (!$proses) {
			redirect(base_url('show_guru/tampil_admin_guru'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_siswa/')."'>Tampil data</a>";
		}
	}

	
}


?>