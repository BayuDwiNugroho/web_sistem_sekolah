<?php
	include "mysqli_koneksi.php";
	//proses input barang
	if (isset($_POST['Input'])) {

		$kd_kons = $_POST['kd_kons'];     	
 		$nm_kons  =  $_POST['nm_kons'];  
 		$alm_kons =  $_POST['alm_kons'];  
 		$kota_kons =  $_POST['kota_kons'];  
 		$kd_pos =  $_POST['kd_pos'];  
 		$phone  =  $_POST['phone'];
 		$email  = $_POST['email'];   
		

	//insert ke tabel
	$query= "INSERT INTO konsumen VALUES ('$kd_kons', '$nm_kons', '$alm_kons','$kota_kons', '$kd_pos', '$phone', '$email')";	
	$sql = mysqli_query ($con,$query);
	if ($sql) {
	//echo "<h2><font color=blue>telah berhasil ditambahkan</font></h2>";
	?>
		<script language="JavaScript">  

			alert('Barang berhasil ditambahkan......');  

	 		document.location='index_admin.php?page=konsumen';  

		</script>
<?php	
		} else {
			echo "<h2><font color=red>Barang gagal ditambahkan</font></h2>";
		}
	}
?>
<html>
	<head><title>Input Konsumen</title>
		
		<script language="JavaScript">  
		function batal(){
		 		document.location='index_admin.php?page=konsumen';  
		}		
		</script>
		</head>
		
		<body>
		<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
							<ol class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
								<li><i class="fa fa-laptop"></i>Input Konsumen</li>						  	
							</ol>
						</div>
					</div>
		
		<FORM ACTION=" " METHOD="POST" NAME="input">
		<table cellpadding="0" cellspacing="0" border="0" width="90%">
		<tr>
			<td>
				<div class="form-group">
			       <label  class="control-label col-sm-4" for="kd_kons">Kode Konsumen </label>
			         <div class="col-sm-4">
			            <input type="text" class="form-control" id="kd_kons" placeholder="Kode Konsumen" name="kd_kons">
			           </div>
		         </div>
	        </td>
	    </tr>
	  <tr>  
	      <td>
		      <div class="form-group">
			       <label class="control-label col-sm-4" for="nm_kons">Nama Konsumen</label>
			           <div class="col-sm-4">
		                <input type="text" class="form-control" id="nm_kons" placeholder="Nama Konsumen" name="nm_kons">
			           </div>
		        </div>
	      </td>
      </tr>
      
      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="alm_kons">Alamat Konsumen </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="alm_kons" placeholder="Alamat Konsumen " name="alm_kons">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="kota_kons">Kota Konsumen</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="kota_kons" placeholder="Kota Konsumen " name="kota_kons">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="kd_pos">Kode Pos</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="kd_pos" placeholder="Kode Pos " name="kd_pos">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="phone">Phone </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone">
		         </div>
		      </div>
     	</td>
     </tr>

      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="email">Email </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="email" placeholder="Email" name="email">
		         </div>
		      </div>
     	</td>
     </tr>
    	<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Input" value="Input Konsumen">&nbsp;
			<input type="button" name="Cancel" value="Cancel" onClick="batal()">
			</td>
		</tr>
	</table>
	</FORM>
</body>
		<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>