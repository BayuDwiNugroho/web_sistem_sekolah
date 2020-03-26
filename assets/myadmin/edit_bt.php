<?php
	include "mysqli_koneksi.php";
		if (isset($_GET['id'])) {
				$id = $_GET['id'];
			} else {
					die ("Error. No Id Selected! ");
			}
		
		$query = "SELECT id, nama, email, situs, pesan, waktu FROM bukutamu WHERE id='$id'";
		
		$sql = mysqli_query ($con,$query);
		$hasil = mysqli_fetch_array ($sql);
		$id = $hasil['id'];
		$nama = stripslashes ($hasil['nama']);
		$email = stripslashes ($hasil['email']);
		$situs = stripslashes ($hasil['situs']);
		$pesan = stripslashes ($hasil['pesan']);
		$time =  ($hasil['waktu']);
		
		//proses edit buku tamu
		if (isset($_POST['Edit'])) {
		$id = $_POST['hid'];
		$nama = addslashes(stripslashes ($_POST['nama']));
		$email = addslashes(stripslashes ($_POST['email']));
		$situs = addslashes(stripslashes ($_POST['situs']));
		$pesan = addslashes(stripslashes ($_POST['pesan']));
		$time =  ($_POST['waktu']);
		
				
		//update berita
		$query = "UPDATE bukutamu SET nama='$nama',email='$email',situs='$situs',
		pesan='$pesan',waktu='$time' WHERE id='$id'";
		$sql = mysqli_query ($con,$query);
		if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index_admin.php?page=bukutamu';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Berita gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Edit Buku Tamu</title>
<script language="JavaScript">  
function batal(){
 		document.location='index_admin.php?page=bukutamu';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Buku Tamu</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

  <tr>  
	      <td>
		      <div class="form-group">
			       <label class="control-label col-sm-4" for="nama">Nama  </label>
			           <div class="col-sm-4">
		                <input type="text" class="form-control" id="nama" placeholder="Nama " name="nama" value="<?php echo $nama?>">
			           </div>
		        </div>
	      </td>
      </tr>
      
      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="email">Email </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="email" placeholder="email " name="email"  value="<?php echo $email?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="situs">Situs </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="situs" placeholder="situs" name="situs"  value="<?php echo $situs?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="pesan ">Pesan </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="pesan" placeholder="pesan" name="pesan"  value="<?php echo $pesan?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="waktu">Waktu</label>
		         <div class="col-sm-4">
	             <input type="datetime-local" class="form-control" id="waktu" placeholder="  waktu  " name="waktu"  value="<?php echo $time?>">
		         </div>
		      </div>
     	</td>
     </tr>
    <tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;
<input type="hidden" name="hid" value="<?=$id?>">
<input type="submit" name="Edit" value="Edit Berita">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()"></td>
</tr>
</table>
</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>