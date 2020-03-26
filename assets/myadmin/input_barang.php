<?php
	include "mysqli_koneksi.php";
	//proses input barang
	if (isset($_POST['Input'])) {

		$kd_brg = $_POST['kd_brg'];
		$nm_brg = $_POST['nm_brg'];
		$satuan = $_POST['satuan'];
		$harga = $_POST['harga'];
		$harga_beli = $_POST['harga_beli'];
		$stok = $_POST['stok'];
		$stok_min = $_POST['stok_min'];

	//insert ke tabel
	$query= "INSERT INTO barang VALUES ('$kd_brg', '$nm_brg', '$satuan', '$harga', '$harga_beli', '$stok', '$stok_min')";	
	$sql = mysqli_query ($con,$query);
	if ($sql) {
	//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
	?>
		<script language="JavaScript">  

			alert('Barang berhasil ditambahkan......');  

	 		document.location='index_admin.php?page=barang';  

		</script>
<?php	
		} else {
			echo "<h2><font color=red>Barang gagal ditambahkan</font></h2>";
		}
	}
?>
<html>
	<head><title>Input Barang</title>
		
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
								<li><i class="fa fa-laptop"></i>Input Barang</li>						  	
							</ol>
						</div>
					</div>
		
		<FORM ACTION=" " METHOD="POST" NAME="input">
		<table cellpadding="0" cellspacing="0" border="0" width="90%">
		<tr>
			<td>
				<div class="form-group">
			       <label  class="control-label col-sm-4" for="kd_brg">Kode Barang :</label>
			         <div class="col-sm-4">
			            <input type="text" class="form-control" id="kd_brg" placeholder="Kode Barang" name="kd_brg">
			           </div>
		         </div>
	        </td>
	    </tr>
	  <tr>  
	      <td>
		      <div class="form-group">
			       <label class="control-label col-sm-4" for="nm_brg">Nama Barang:</label>
			           <div class="col-sm-4">
		                <input type="text" class="form-control" id="nm_brg" placeholder="Nama Barang" name="nm_brg">
			           </div>
		        </div>
	      </td>
      </tr>
      
      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="satuan">Satuan :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="satuan" placeholder="Satuan " name="satuan">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="Harga">Harga :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="harga" placeholder="Harga " name="harga">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="Harga_beli">Harga Beli:</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="harga_beli" placeholder="Harga Beli " name="harga_beli">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="stok">Stok :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="stok" placeholder="Stok " name="stok">
		         </div>
		      </div>
     	</td>
     </tr>

      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="Stok_min">Stok Minimal :</label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="stok_min" placeholder="Stok Minimal" name="stok_min">
		         </div>
		      </div>
     	</td>
     </tr>
    	<tr>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="Input" value="Input Barang">&nbsp;
			<input type="button" name="Cancel" value="Cancel" onClick="batal()">
			</td>
		</tr>
	</table>
	</FORM>
</body>
		<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>