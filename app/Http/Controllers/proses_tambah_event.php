<?php
      $koneksi = mysql_connect("localhost", "root","") or die("koneksi gagal");
      mysql_select_db("kalender");

      if(!$_POST['namaevent'] || !$_POST['tglevent'] || !$_POST['deskripsi']){
         echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";
      }else {
          $query = "INSERT INTO event(nama, tgl, deskripsi) VALUES ('$_POST[namaevent]','$_POST[tglevent]','$_POST[deskripsi]')";
          $proses = mysql_query($query);
          if ($proses) {
            echo "<script>alert('Penyimpanan data event berhasil !')</script>";
            header('Location: deskripsi.php');

          //	echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
          } else {
            echo "<script>alert('Penyimpanan data event tidak berhasil !')</script>";
          //	echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
      }
    }

?>
