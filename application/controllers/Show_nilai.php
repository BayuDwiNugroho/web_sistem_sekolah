<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	/**
	* 
	*/
	class show_nilai extends CI_Controller
	{


			  public function __construct(){
			    parent::__construct();
			    
			    $this->load->model('Model_nilai'); // Load SiswaModel ke controller ini
			  }
			  
///	nilai
    public function nilai_mrd()
	{
		$data['qry'] = $this->Model_nilai->v_nilai();
		$this->load->view('v_murid/nilai_murid', $data);
	}

	public function tampil_nilai()
	{
		$data['query'] = $this->Model_nilai->view_nilai();
		$this->load->view('v_nilai/view_nilai', $data);
	}

	public function tambah1()
	{
	   	$this->load->view('v_nilai/tambah_nilai');
	}

	public function insert1() {


		$data = array('id_lap' => $this->input->post('id_lap'), 'nama_siswa' => $this->input->post('nama_siswa'),'kelas' => $this->input->post('kelas'),'nilai_ipa' => $this->input->post('nilai_ipa'),'nilai_ips' => $this->input->post('nilai_ips'),'nilai_mtk' => $this->input->post('nilai_mtk'),'nilai_bind' => $this->input->post('nilai_bind'),'nilai_bing' => $this->input->post('nilai_bing'));
		$proses = $this->Model_nilai->simpan_nilai($data);
		if (!$proses) {
			header('Location: tampil_nilai');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tambah_nilai')."'>Kembali ke form</a>";
		}	
	}

	public function edit_nilai()
	{
		$id_lap = $this->uri->segment(3);
		$data['query'] = $this->Model_nilai->edit_nilaiku($id_lap);
		$this->load->view('v_nilai/edit_nilai', $data);
	}

	public function update_nilai()
	{
		$id_lap = $this->input->post('id_lap');
		$data = array('id_lap' => $this->input->post('id_lap'), 'nama_siswa' => $this->input->post('nama_siswa'),'kelas' => $this->input->post('kelas'),'nilai_ipa' => $this->input->post('nilai_ipa'),'nilai_ips' => $this->input->post('nilai_ips'),'nilai_mtk' => $this->input->post('nilai_mtk'),'nilai_bind' => $this->input->post('nilai_bind'),'nilai_bing' => $this->input->post('nilai_bing'));
		$proses = $this->Model_nilai->update_nilai($id_lap, $data);
		if (!$proses) {
			header('Location: tampil_nilai');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_nilai')."'>Tampil data</a>";
		}
	}

	public function hapus_nilai()
	{
		$id_lap = $this->uri->segment(3);
		$proses = $this->Model_nilai->hapus_nilai($id_lap);
		if (!$proses) {
			echo "Data Berhasil dihapus";
			redirect(base_url('show_nilai/tampil_nilai/'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('show_nilai/tampil_nilai/')."'>Tampil data</a>";
		}
	}


/// siswa

	public function tampil_siswa()
	{
		$data['siswa'] = $this->Model_nilai->view_siswa();
		$this->load->view('v_siswa/view_siswa', $data);
	}

	public function tambah_siswa()
	{
	   	$this->load->view('v_siswa/tambah_siswa');
	}

	public function insert_siswa() {

		$data = array('id_siswa' => $this->input->post('id_siswa'), 'nama_siswa' => $this->input->post('nama_siswa'),'alamat' => $this->input->post('alamat'),'kelas' => $this->input->post('kelas'));

		$proses = $this->Model_nilai->simpan_siswa($data);
		if (!$proses) {
			header('Location: tampil_siswa');
		} else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tambah_siswa')."'>Kembali ke form</a>";
		}	
	}

	public function edit_siswa()
	{
		$id_siswa = $this->uri->segment(3);
		$data['siswa'] = $this->Model_nilai->edit_siswa($id_siswa);
		$this->load->view('v_siswa/edit_siswa', $data);
	}

	public function update_siswa()
	{
		$id_siswa = $this->input->post('id_siswa');
		$data = array('id_siswa' => $this->input->post('id_siswa'), 'nama_siswa' => $this->input->post('nama_siswa'),'alamat' => $this->input->post('alamat'),'kelas' => $this->input->post('kelas'));
	
		$proses = $this->Model_nilai->update_siswa($id_siswa, $data);
		if (!$proses) {
			header('Location: tampil_siswa');
		} else {
			echo "Data Gagal Diupdate";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_siswa')."'>Tampil data</a>";
		}
	}

	public function hapus_siswa()
	{
		$id_siswa = $this->uri->segment(3);
		$proses = $this->Model_nilai->hapus_nilai($id_siswa);
		if (!$proses) {
			redirect(base_url('index.php/crud/tampil_siswa/'));
		} else {
			echo "Data Gagal dihapus";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/tampil_siswa/')."'>Tampil data</a>";
		}
	}
}


?>