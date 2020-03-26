<?php
include "mysqli_koneksi.php";
//proses input buku tamu
if (isset($_POST['Input'])) {

$id = $_POST['id'];
$nama = $_POST['nama'];
$email  = $_POST['email'];
$situs = $_POST['situs'];
$pesan = $_POST['pesan'];
$time = $_POST['waktu'];

//insert ke tabel
$query= "INSERT INTO bukutamu VALUES ('$id', '$nama', '$email', '$situs', '$pesan' , '$time')";
$sql = mysqli_query ($con,$query);
if ($sql) {
//echo "<h2><font color=blue>Berita telah berhasil ditambahkan</font></h2>";
?>
	<script language="JavaScript">  

		alert('Berita berhasil ditambahkan......');  

 		document.location='index_admin.php?page=bukutamu';  

	</script>
<?php	
} else {
echo "<h2><font color=red>Buku Tamu gagal ditambahkan</font></h2>";
}
}
?>
<html>
<head><title>Input Buku Tamu</title>
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
						<li><i class="fa fa-laptop"></i>Input Buku Tamu</li>						  	
					</ol>
				</div>
			</div>
<FORM ACTION="" METHOD="POST" NAME="input">
<table cellpadding="0" cellspacing="0" border="0" width="90%">
	<tr>
			<td>
				<div class="form-group">
			       <label  class="control-label col-sm-4" for="id">Id  </label>
			         <div class="col-sm-4">
			            <input type="text" class="form-control" id="id" placeholder="ID" name="id">
			           </div>
		         </div>
	        </td>
	    </tr>
	  <tr>  
	      <td>
		      <div class="form-group">
			       <label class="control-label col-sm-4" for="nama">Nama  </label>
			           <div class="col-sm-4">
		                <input type="text" class="form-control" id="nama" placeholder="Nama " name="nama">
			           </div>
		        </div>
	      </td>
      </tr>
      
      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="email">Email </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="email" placeholder="email " name="email">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="situs">Situs </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="situs" placeholder="situs" name="situs">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="pesan ">Pesan </label>
		         <div class="col-sm-4">
	             <input type="text" class="form-control" id="pesan" placeholder="pesan" name="pesan">
		         </div>
		      </div>
     	</td>
     </tr>


      <tr>
	      <td>
	      <div class="form-group">
		       <label class="control-label col-sm-4" for="waktu">Waktu</label>
		         <div class="col-sm-4">
	             <input type="datetime-local" class="form-control" id="waktu" placeholder="  waktu  " name="waktu">
		         </div>
		      </div>
     	</td>
     </tr>
    	
<tr>
<td>&nbsp;</td>
<td>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Buku Tamu">&nbsp;
<input type="button" name="Cancel" value="Cancel" onClick="batal()">
</td>
</tr>
</table>
</FORM>
</body>
<!-- ck editor -->
    <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
</html>