<?php
include "mysqli_koneksi.php";
if (isset($_GET['id'])) {
$id = $_GET['id'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Buku Tamu</title>
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
<?php
//proses delete berita
if (!empty($id) && $id != "") {
$query = "DELETE FROM bukutamu WHERE id='$id'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Buku Tamu telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Buku Tamu gagal dihapus</font></h2>";
}
echo "Klik <a href='index_admin.php?page=bukutamu'>di sini</a> untuk kembali ke halaman arsip bukutamu";
} else {
die ("Access Denied");
}
?>
</body>
</html>