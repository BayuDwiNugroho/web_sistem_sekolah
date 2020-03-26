<?php

	/**
	* 
	*/
	class login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('m_login');
			$this->load->model('Model_user');
       		$this->load->model('Model_guru');
            $this->load->model('Model_admin');
            $this->load->model('Model_siswa');
		}

		function masuk()
		{
			$this->load->view('home/login');
		}

		function chek_login() {
        if (isset($_POST['submit'])) {
            // proses login disini

            $username = $this->input->post('username');
            $password = $this->input->post('password');
        //    $id_siswa = $this->input->post('id_siswa');


          //$loginUser = $this->Model_user->chekLogin($username, $password);
           	$loginGuru = $this->Model_guru->chekLogin($username, $password);
            $loginAdmin = $this->Model_admin->chekLogin($username, $password);
            $loginSiswa = $this->Model_siswa->chekLogin($username, $password);
            if (!empty($loginSiswa)) {
                // sukses login user
                $this->session->set_userdata($loginSiswa);
                redirect('c_siswa');
            } elseif (!empty($loginGuru)) {
                // login guru
               /* $session = array(
                    'nama_lengkap'  =>  $loginGuru['nama_guru'],
                    'id_level_user' =>  3,
                    'id_guru'       =>  $loginGuru['id_guru']);*/
                $this->session->set_userdata($loginGuru);
                redirect('c_guru');
            } elseif (!empty($loginAdmin)) {
                // sukses login user
                $this->session->set_userdata($loginAdmin);
                redirect('c_admin');
            } 
            else {
                // gagal login
                redirect('dashboard');
            }
        } else {
           redirect('dashboard');
        }
    }

    function logout() {
        $this->session->sess_destroy();
        redirect('dashboard');
    }
 


	}

	
?>