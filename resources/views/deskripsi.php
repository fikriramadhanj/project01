      <?php

      $koneksi = mysql_connect("localhost", "root","") or die("koneksi gagal");
			mysql_select_db("kalender");
      $query = "SELECT * from event";
      $proses = mysql_query($query);
      $no =0;
      ?>
      <!-- <form id="form1" name="form1" method="post" action="form_tambah_event.php"> -->

        <table border = "1">
      <tr>
              <td valign="top"> <center> No </center></td>
              <td valign="top">  <center>  Nama Event  </center> </td>
              <td valign="top">  <center> Tanggal Event  </center> </td>
              <td valign="top"> <center> Deskripsi </center> </td>
              <td valign="top" colspan="3"> <center> Action </center> </td>

      </tr>

      <?php
      $no=1;
        $sql = "select * from event order by id asc";
        $proses = mysql_query($sql);
        while ($record = mysql_fetch_array($proses))
        {
      ?>

        <tr>
				        <td valign="center"><center><?php echo $no; ?> </center> </td>
				        <td valign="center"><center> <?php echo $record['nama']; ?> </center></td>
                <td valign="center"><center><?php echo $record['tgl']; ?> </center></td>
                <td valign="center"><center><?php echo $record['deskripsi']; ?> </center></td>
                <td valign="center"><center><a type="button" href="form_update_event.php?id=<?php echo $record['id']; ?>">Update</a> </center></td>
                <td valign="center"><center><a type="button" href="proses_delete_event.php?id=<?php echo $record['id']; ?>">Delete </a> </center></td>
                <?php $no++; ?>
        </tr>

        <?php
      }
        ?>
      </table>
        <br> <br>

      <input type="submit" value="Tambah" onclick='top.location="form_tambah_event.php"'></td>
