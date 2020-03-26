<?php 
/*if (!defined('BASEPATH')) exit('No direct script access allowed');

class Laporan extends CI_Controller {
	//===========================================================*
    // Contoh Membuat Laporan PDF dengan Libray TCPDF, By:		 *
    //               I Nyoman Sweta								 *
    //               http://www.komang.my.id/					 *
    //               info@komang.my.id							 *
    //===========================================================*
	public function __construct()
		{	
			parent::__construct();
			$this->load->library('FPDF');
			//$this->load->model('M_pdf');
		}
	public function index()
		{
			$this->load->view('v_pdf/cetak_produk.php');
		}
	/*public function cetak_produk()
		{
			$data['produk'] = $this->produk_model->get_produk();
			$this->load->view('cetak_produk', $data);
	}*/



Class Laporan extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
       $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string
        $pdf->Cell(190,7,'SEKOLAH MENENGAH KEJURUSAN NEEGRI 2 LANGSA',0,1,'C');
        $pdf->SetFont('Arial','B',12);
          $pdf->Cell(190,7,'Jl Pati, Kecamatan Pati, Kabupaten Pati, Telpon : 021-23462',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'ID Siswa',1,0);
        $pdf->Cell(25,6,'Nama Siswa',1,0);
        $pdf->Cell(15,6,'Kelas',1,0);
        $pdf->Cell(20,6,'Nilai IPA',1,0);
        $pdf->Cell(20,6,'Nilai IPS',1,0);
        $pdf->Cell(20,6,'Nilai MTK',1,0);
        $pdf->Cell(25,6,'Nilai B. IND',1,0);
        $pdf->Cell(25,6,'Nilai B. INGG',1,1);
        $pdf->SetFont('Arial','',10);
        $nilai= $this->db->get('lap_nilai')->result();
        foreach ($nilai as $row){
            $pdf->Cell(20,6,$row->id_siswa,1,0);
            $pdf->Cell(25,6,$row->nama_siswa,1,0);
            $pdf->Cell(15,6,$row->kelas,1,0);
            $pdf->Cell(20,6,$row->nilai_ipa,1,0);
            $pdf->Cell(20,6,$row->nilai_ips,1,0);
            $pdf->Cell(20,6,$row->nilai_mtk,1,0);
            $pdf->Cell(25,6,$row->nilai_bind,1,0);
			$pdf->Cell(25,6,$row->nilai_bing,1,1);            
        }
        $pdf->Output();
        /*
        $id = $this->uri->segment(3);
        $sqlSiswa = "SELECT * FROM lap_nilai WHERE id_siswa = $id";
        $siswa = $this->db->query($sqlSiswa)->row_array();
       
       // $this->load->library('pdf.php');
        $pdf = new FPDF('P','mm','A4');
        $pdf->AddPage();
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,5,'NAMA SEKOLAH',1,1,'C');
        $pdf->SetFont('Arial','B',14);
        $pdf->Cell(190,7,'SD BDN PATI ',1,1,'C');
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(190,5,'Jl Pati, Kecamatan Pati, Kabupaten Pati, Telpon : 021-23462',1,1,'C');
         
        $pdf->Cell(190,5,'',0,1);
        
        $pdf->SetFont('Arial','B',9);
        // BLOCK INFO SISWA
        $pdf->Cell(30,5,'ID Siswa',0,0,'L');
        $pdf->Cell(88,5,': '.$siswa['id_siswa'],0,0,'L');
        $pdf->Cell(30,5,'KELAS',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa['kelas'],0,1,'L');
        
        $pdf->Cell(30,5,'NAMA',0,0,'L');
        $pdf->Cell(88,5,': '.$siswa['nama_siswa'],0,0,'L');
        $pdf->Cell(30,5,'Nilai IPA',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa('nilai_ipa'),0,1,'L');
        
        $pdf->Cell(30,5,'Nilai IPS',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa('nilai_ips'),0,1,'L');
        $pdf->Cell(30,5,'Nilai Matematika',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa('nilai_mtk'),0,1,'L');

        $pdf->Cell(30,5,'Nilai Bahasa Indonesia',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa('nilai_bind'),0,1,'L');
        $pdf->Cell(30,5,'Nilai Bahasa Inggris',0,0,'L');
        $pdf->Cell(40,5,': '.$siswa('nilai_bing'),0,1,'L');
        
        // END BLOCK INFO SISWA
        */
        
        // BLOCK NILAI SISWA ------------------------
      /*  $pdf->Cell(1,10,'',0,1);
        $pdf->Cell(8,5,'NO',1,0,'L');
        $pdf->Cell(50,5,'Mata Pelajaran',1,0,'L');
        $pdf->Cell(10,5,'KKM',1,0,'L');
        $pdf->Cell(12,5,'Angka',1,0,'L');
        $pdf->Cell(30,5,'Huruf',1,0,'L');
        $pdf->Cell(23,5,'Ketercapaian',1,0,'L');
        $pdf->Cell(20,5,'Rata Kelas',1,0,'L');
        $pdf->Cell(37,5,'Deskripsi Kemampuan',1,1,'L');
        $pdf->SetFont('Arial','',9);
        $sqlMapel = "SELECT tj.id_jadwal,tm.nama_mapel 
                    FROM tbl_jadwal as tj,tbl_mapel as tm
                    WHERE tj.kd_mapel=tm.kd_mapel and tj.id_rombel=1";
        $mapel = $this->db->query($sqlMapel)->result();
        $no=1;
        foreach ($mapel as $m){
            $pdf->Cell(8,5,$no,1,0,'L');
            $pdf->Cell(50,5,$m->nama_mapel,1,0,'L');
            $pdf->Cell(10,5,75,1,0,'L');
            $nilai = chek_nilai($siswa['nim'], $m->id_jadwal);
            $pdf->Cell(12,5,  $nilai,1,0,'L');
            $pdf->Cell(30,5,  Terbilang($nilai),1,0,'L');
            $pdf->Cell(23,5,  $this->ketercapaian_kopetensi($nilai),1,0,'L');
            $pdf->Cell(20,5,  ceil($this->rata_rata_nilai($m->id_jadwal)),1,0,'L');
            $pdf->Cell(37,5,'Deskripsi Kemampuan',1,1,'L');
            $no++;*/
    }



 	}
?>