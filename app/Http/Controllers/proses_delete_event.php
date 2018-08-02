<?php
$koneksi = mysql_connect("localhost", "root","") or die("koneksi gagal");
mysql_select_db("kalender");
$sql = "DELETE from event where id ='$_GET[id]'";
$proses = mysql_query($sql);
	if ($proses) {
		echo "<script>alert('Penghapusan data barang berhasil !')</script>";
	//	header('Location:deskripsi.php');
		//echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	} else {
		echo "<script>alert('Penghapusan data barang tidak berhasil !')</script>";
		//echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
	}




?>
