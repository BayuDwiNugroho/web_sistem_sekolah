<?php

	/**
	* 
	*/
	class c_guru extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
		}

		function index(){
		
			//$data['query'] = $this->Model_nilai->view_nilai();
			$this->load->view('v_guru/awal_guru');
		}

		function guru(){

        	$this->session->userdata('id_level_user');
			$this->load->view('v_guru/view_guru.php');
		}

		function nilai(){	
			$this->load->view('v_nilai/view_nilai.php');
		}

	}

?>