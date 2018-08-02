<?php
      $koneksi = mysql_connect("localhost", "root","") or die("koneksi gagal");
      mysql_select_db("kalender");

      if(!$_POST['namaevent'] || !$_POST['tglevent'])
      {
          echo "<script>alert('Data tidak boleh ada yang kosong !')</script>";
          //echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
      }else {
        $sql = "UPDATE event set nama = '$_POST[namaevent]', tgl = '$_POST[tglevent]', deskripsi = '$_POST[deskripsi]' where id = '$_POST[idevent]'";
        $proses = mysql_query($sql);
          if ($proses) {
            echo "<script>alert('Pengubahan data event berhasil !')</script>";
            header('Location: deskripsi.php');

            //echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
          } else {
            echo "<script>alert('Pengubahan data event tidak berhasil !')</script>";
            //echo "<meta http-equiv='refresh' content='0;home.php?go=Barang'>";
          }
       }


  ?>
