<?php
include "mysqli_koneksi.php";
if (isset($_GET['kd_kons'])) {
$kd_kons = $_GET['kd_kons'];
} else {
die ("Error. No kd_kons Selected! ");
}
$query = "SELECT kd_kons, nm_kons, alm_kons, kota_kons, kd_pos, phone, email FROM konsumen WHERE kd_kons='$kd_kons'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);

$kd_kons = $hasil['kd_kons'];
$nm_kons = stripslashes ($hasil['nm_kons']);
$alm_kons = stripslashes ($hasil['alm_kons']);
$kota_kons = stripslashes ($hasil['kota_kons']);
$kd_pos= stripslashes ($hasil['kd_pos']);
$phone = stripslashes ($hasil['phone']);
$email = stripslashes ($hasil['email']);

//proses edit berita
if (isset($_POST['Edit'])) {
$kd_kons = $_POST['hkd_kons'];
$nm_kons = addslashes (strip_tags ($_POST['nm_kons']));
$alm_kons = $_POST['alm_kons'];
$kota_kons = addslashes (strip_tags ($_POST['kota_kons']));
$kd_pos = addslashes (strip_tags ($_POST['kd_pos']));
$phone= addslashes (strip_tags ($_POST['phone']));
$email= addslashes (strip_tags ($_POST['email']));

//update berita
$query = "UPDATE konsumen SET kd_kons='$kd_kons',nm_kons='$nm_kons', alm_kons='$alm_kons',
kota_kons='$kota_kons', kd_pos='$kd_pos' WHERE kd_kons='$kd_kons'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index_admin.php?page=konsumen';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>konsumen gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Barang</title>
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
						<li><i class="fa fa-laptop"></i>Edit Konsumen</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">
	
        <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="nm_kons">Nama Konsumen </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="nm_kons" placeholder="Nama Konsumen " name="nm_kons" value="<?php echo $nm_kons?>">
		         </div>
		      </div>
     	</td>
     </tr>
      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="alm_kons">Alamat Konsumen </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="alm_kons" placeholder="Alamat Konsumen " name="alm_kons" value="<?php echo $alm_kons?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="kota_kons">Kota Konsumen</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="kota_kons" placeholder="Kota Konsumen " name="kota_kons" value="<?php echo $kota_kons?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="kd_pos">Kode Pos</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="kd_pos" placeholder="Kode Pos " name="kd_pos" value="<?php  echo $kd_pos?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="phone">Phone </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="<?php echo $phone?>">
		         </div>
		      </div>
     	</td>
     </tr>

      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="email">Email </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="<?php echo 
	             $email?>">
		         </div>
		      </div>
     	</td>
     </tr>
     		<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="hidden" name="hkd_kons" value="<?=$kd_kons?>">
					<input type="submit" name="Edit" value="Edit Konsumen">&nbsp;
					<input type="button" name="Cancel" value="Cancel" onClick="batal()">
				</td>
		</tr>
		</table>
	</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>