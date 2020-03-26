<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class show_siswa extends CI_Controller
	{


			  public function __construct(){
			    parent::__construct();
			    
			    $this->load->model('Model_siswa'); 
			    $this->load->model('Model_nilai'); 
			    $this->load->model('Model_guru'); // Load SiswaModel ke controller ini
			    
			  }
			  

/// siswa

	public function tampil_admin_siswa()
	{
		$data['siswa'] = $this->Model_siswa->view_siswa();
		$this->load->view('v_admin/view_admin_siswa', $data);
	}

	public function tampil_siswa()
	{
		$data['siswa'] = $this->Model_siswa->view_siswa();
		$this->load->view('v_siswa/view_siswa', $data);
	}

	public function tambah_siswa()
	{
	   	$this->load->view('v_siswa/tambah_siswa');
	}

	public function insert_siswa() {

		$data = array('id_siswa' => $this->input->post('id_siswa'), 'nama_siswa' => $this->input->post('nama_siswa'),'alamat' => $this->input->post('alamat'),'agama' => $this->input->post('agama'));

		$proses = $this->Model_siswa->simpan_siswa($data);
		if (!$proses) {
			header('Location: tampil_admin_siswa');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tambah_siswa')."'>Kembali ke form</a>";
		}	
	}

	public function edit_siswa()
	{
		$id_siswa = $this->uri->segment(3);
		$data['siswa'] = $this->Model_siswa->edit_siswa($id_siswa);
		$this->load->view('v_siswa/edit_siswa', $data);
	}

	public function update_siswa()
	{
		$id_siswa = $this->input->post('id_siswa');
		$data = array('id_siswa' => $this->input->post('id_siswa'), 'nama_siswa' => $this->input->post('nama_siswa'),'alamat' => $this->input->post('alamat'),'agama' => $this->input->post('agama'));
	
		$proses = $this->Model_siswa->update_siswa($id_siswa, $data);
		if (!$proses) {
			header('Location: tampil_admin_siswa');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_siswa')."'>Tampil data</a>";
		}
	}

	public function hapus_siswa()
	{
		$id_siswa = $this->uri->segment(3);
		$proses = $this->Model_siswa->hapus_siswa($id_siswa);
		if (!$proses) {
			redirect(base_url('show_siswa/tampil_admin_siswa/'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_siswa/')."'>Tampil data</a>";
		}
	}

	public function data_siswa()
	{
		$data['siswa'] = $this->Model_siswa->view_siswa();
		$this->load->view('v_siswa/data_siswa', $data);
	}
		
	public function data_guru()
	{
		$data['guru'] = $this->Model_guru->view_guru();
		$this->load->view('v_siswa/data_guru', $data);
	}
	
	public function data_nilai()
	{
		$data['query'] = $this->Model_nilai->view_nilai();
		$this->load->view('v_siswa/data_nilai', $data);
	}




	//komentar
	public function komentar()
	{	$data['siswa'] = $this->Model_siswa->view_siswa();
		$this->load->view('v_murid/komentar', $data);
	}

	public function insert_komentar() {

		$data = array('id_siswa' => $this->input->post('id_siswa'), 'nama_siswa' => $this->input->post('nama_siswa'),'komentar' => $this->input->post('komentar'));

		$proses = $this->Model_siswa->simpan_siswa($data);
		if (!$proses) {

		
			$this->load->view('v_siswa/awal_siswa');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tambah_siswa')."'>Kembali ke form</a>";
		}	
	}

	//buku_tamu
	public function insert_buku() {

		$data = array('id_siswa' => $this->input->post('id_siswa'), 'nama_siswa' => $this->input->post('nama_siswa'),'komentar' => $this->input->post('komentar'));

		$proses = $this->Model_siswa->simpan_siswa($data);
		if (!$proses) {

		
			$this->load->view('beranda/buku_tamu');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tambah_siswa')."'>Kembali ke form</a>";
		}	
	}

	//pdf
	function generate_to_pdf(){
			$this->pdf->load_view('v_pdf/cetak_pdf');
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf");
		}
}


?>