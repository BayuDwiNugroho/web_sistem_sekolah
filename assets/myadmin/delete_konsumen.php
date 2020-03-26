<?php
include "mysqli_koneksi.php";
if (isset($_GET['kd_kons'])) {
$kd_kons = $_GET['kd_kons'];
} else {
die ("Error. No Id Selected! ");
}
?>
<html>
<head><title>Delete Konsumen </title>
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
<?php
//proses delete berita
if (!empty($kd_kons) && $kd_kons != "") {
$query = "DELETE FROM konsumen WHERE kd_kons ='$kd_kons'";
$sql = mysqli_query ($con,$query);
if ($sql) {
echo "<h2><font color=blue>Konsumen telah berhasil dihapus</font></h2>";
} else {
echo "<h2><font color=red>Konsumen gagal dihapus</font></h2>";
}
echo "Klik <a href='index_admin.php?page=konsumen'>di sini</a> untuk kembali ke halaman arsip Konsumen";
} else {
die ("Access Denied");
}
?>
</body>
</html>