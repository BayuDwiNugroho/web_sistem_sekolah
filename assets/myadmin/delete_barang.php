<?php
include "mysqli_koneksi.php";
if (isset($_GET['kd_barang'])) {
$kd_brg = $_GET['kd_barang'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Barang</title>
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
<?php
//proses delete berita
if (!empty($kd_brg) && $kd_brg != "") {
$query = "DELETE FROM barang WHERE kd_brg='$kd_brg'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Barang telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Barang gagal dihapus</font></h2>";
}
echo "Klik <a href='index_admin.php?page=barang'>di sini</a> untuk kembali ke halaman arsip berita";
} else {
die ("Access Denied");
}
?>
</body>
</html>