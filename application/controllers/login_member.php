<?php 

class Login_member extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');

	}

	

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'nama' => $username,
			'password' => md5($password)
			);
		$hasil = $this->m_login->cek_login("member",$where);
		$cek = $this->m_login->cek_login("member",$where)->num_rows();
		if($cek > 0){
			foreach ($hasil->result() as $rows) {
				$rows_data['username']=$rows->nama;
				//$rows_data['level']=$rows->nama_user;
				$this->session->set_userdata($rows_data);
			}
			redirect('home/template');
			// $data_session = array(
			// 	'nama' => $username,
			// 	'status' => "login"
			// 	);

			//$this->session->set_userdata($data_session);
			// if ($this->session->userdata('level')=='Administrator') {
			// 	redirect('dashboard');
			// }
			// elseif ($this->session->userdata('level')=='guru') {
			// 	redirect('dashboard_guru');
			// }		
		}else{
			
			echo "<script>
					alert('passsword /username salah');
				</script>";
			redirect(base_url("home/login"));
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}