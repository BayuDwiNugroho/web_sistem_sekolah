<?php
	if (!defined('BASEPATH'))exit('No direct script access allowed');

	class c_pdf extends CI_Controller {
		
		function __construct() {
			parent::__construct();
		}

		function index(){
			$this->load->view('v_pdf/pdf');
		}
		
		function generate_to_pdf(){
			$this->pdf->load_view('v_pdf/cetak_pdf');
			$this->pdf->render();
			$this->pdf->stream("name-file.pdf");
		}
	}

?>
