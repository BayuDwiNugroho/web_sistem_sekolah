<?php

	/**
	* 
	*/
	class c_admin extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
		}

		function index(){

        	$this->session->userdata('id_level_user');
			$this->load->view('v_admin/awal_admin.php');
		}

	}

?>