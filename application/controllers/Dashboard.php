<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __cunstruct(){
		parent::__cunstruct();
		$this->load->helper('url');
    	$this->load->model('Model_nilai');
    	$this->load->model('M_berita');
        $this->load->library('upload');
	}
	
	public function index()
	{
		redirect('Dashboard/lists');
	}

	///ke dashboard atas
	public function lists(){

		$hsl['data']=$this->db->query("SELECT * FROM tbl_berita ORDER BY berita_id DESC");
		$this->load->view('home/dashboard',$hsl);
	}

	//tulis berita
	public function berita()
	{
		$this->load->view('v_berita/v_post_news');
	}

	public function logout()
	{
		unset($_SESSION);
		session_destroy();
		redirect("dashboard","refresh");
	}

	public function biopori()
	{
		$this->load->view('beranda/biopori');
	}

	public function kebun()
	{
		$this->load->view('beranda/kebun');
	}

	public function juara()
	{
		$this->load->view('beranda/juara');
	}

	public function visi()
	{
		$this->load->view('beranda/visi');
	}

	public function galeri()
	{
		$this->load->view('beranda/galeri');
	}

	public function buku_tamu()
	{
		$this->load->view('beranda/buku_tamu');
	}

	public function baksos()
	{
		$this->load->view('beranda/baksos');
	}

	public function idul()
	{
		$this->load->view('beranda/idul');
	}
	public function ngaji()
	{
		$this->load->view('beranda/ngaji');
	}
	public function outbond()
	{
		$this->load->view('beranda/outbond');
	}

	public function nyanyi()
	{
		$this->load->view('beranda/nyanyi');
	}

}
