<?php
include "mysqli_koneksi.php";
if (isset($_GET['kd_barang'])) {
$kd_brg = $_GET['kd_barang'];
} else {
die ("Error. No kd_barang Selected! ");
}
$query = "SELECT kd_brg, nm_brg, satuan, harga, harga_beli, stok, stok_min FROM barang WHERE kd_brg='$kd_brg'";
$sql = mysqli_query ($con,$query);
$hasil = mysqli_fetch_array ($sql);

$kd_brg = $hasil['kd_brg'];
$nm_brg = stripslashes ($hasil['nm_brg']);
$satuan = stripslashes ($hasil['satuan']);
$harga = stripslashes ($hasil['harga']);
$harga_beli= stripslashes ($hasil['harga_beli']);
$stok = stripslashes ($hasil['stok']);
$stok_min = stripslashes ($hasil['stok_min']);

//proses edit barang
if (isset($_POST['Edit'])) {
$kd_brg = $_POST['hkd_brg'];
$nm_brg = addslashes (strip_tags ($_POST['nm_brg']));
$satuan = $_POST['satuan'];
$harga = addslashes (strip_tags ($_POST['harga']));
$harga_beli = addslashes (strip_tags ($_POST['harga_beli']));
$stok= addslashes (strip_tags ($_POST['stok']));
$stok_min= addslashes (strip_tags ($_POST['stok_min']));

//update barang
$query = "UPDATE barang SET nm_brg='$nm_brg', satuan='$satuan',
harga='$harga', harga_beli='$harga_beli', stok='$stok', stok_min='$stok_min' WHERE kd_brg='$kd_brg'";
$sql = mysqli_query ($con,$query);
if ($sql) {
//	echo "<h2><font color=blue>Berita telah berhasil diedit</font></h2>";
	?>
	<script language="JavaScript">  
		alert('Data berhasil di update......');  
 		document.location='index_admin.php?page=barang';  
	</script>
<?php	
} else {
	echo "<h2><font color=red>Barang gagal diedit</font></h2>";
}
}

?>
<html>
<head><title>Barang</title>
<script language="JavaScript">  
function batal(){
 		document.location='index_admin.php?page=barang';  
}		
</script>
</head>
<body>
<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Edit Barang</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">

		<tr>
			<td>
				<div class="form-group">
			       <label  class="control-label col-sm-4" for="kd_brg">Kode Barang :</label>
			         <div class="col-sm-4">
			            <input type="text" class="form-control" id="kd_brg" placeholder="Kode Barang  " name="kd_brg" value="<?php echo $kd_brg?>">
			           </div>
		         </div>
	        </td>
	    </tr>
	      <tr>  
	      <td>
		      <div class="form-group">
			       <label class="control-label col-sm-4" for="nm_brg">Nama Barang:</label>
			           <div class="col-sm-4">
		                <input type="text" class="form-control" id="nm_brg" placeholder="Nama Barang" name="nm_brg" value="<?php echo $nm_brg?>">
			           </div>
		        </div>
	      </td>
      </tr>
      
      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="satuan">Satuan :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="satuan" placeholder="Satuan " name="satuan" value="<?php echo $satuan?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="Harga">Harga :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="harga" placeholder="Harga " name="harga" value="<?php echo $harga?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="Harga_beli">Harga Beli:</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="harga_beli" placeholder="Harga Beli " name="harga_beli" value="<?php echo $harga_beli?>">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="stok">Stok :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="stok" placeholder="Stok " name="stok" value="<?php echo $stok?>">
		         </div>
		      </div>
     	</td>
     </tr>

      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="Stok_min">Stok Minimal :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="stok_min" placeholder="Stok Minimal" name="stok_min" value="<?php echo $stok_min?>">
		         </div>
		      </div>
     	</td>
     </tr>
     		<tr>
				<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="hidden" name="hkd_brg" value="<?=$kd_brg?>">
					<input type="submit" name="Edit" value="Edit Barang">&nbsp;
					<input type="button" name="Cancel" value="Cancel" onClick="batal()">
				</td>
		</tr>
		</table>
	</FORM>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</body>
</html>