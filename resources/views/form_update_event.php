

<style type="text/css">
div.ui-datepicker{
 font-size:12px;
}
</style>
  <head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css"/>
  </head>
    <link href="JQuery/smoothness/jquery-ui-1.10.3.custom.css" rel="stylesheet">

    <script src="JQuery/jquery-1.9.1.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>


    <script type="text/javascript">
	   $(document).ready(function(){

       $("#tglevent").datetimepicker();
    })


</script>

<?php
$koneksi = mysql_connect("localhost", "root","") or die("koneksi gagal");
mysql_select_db("kalender");
$sql = "SELECT * from event where id = '$_GET[id]'";
$proses = mysql_query($sql);
$record = mysql_fetch_array($proses);
?>
<form id="form1" name="form1" method="post" action="proses_update_event.php">


      <table border="1">
        <tr>
              <td> Id Event </td>
              <td>:<input type = "text" name="idevent"  id="idevent" value="<?php echo $record['id'] ?>" size="35" maxlength="10"/> </td>
        </tr>
        <tr>
              <td> Nama Event</td>
              <td>:<input type = "text" name="namaevent"  id="namaevent" value="<?php echo $record['nama'] ?>" size="35" maxlength="50"/> </td>
        </tr>
        <tr>
              <td> Tanggal Event</td>
              <td>:<input type = "text" name="tglevent"  id="tglevent" value="<?php echo $record['tgl'] ?> "size="35" maxlength="50"/> </td>
        </tr>
        <tr>
              <td> Deskripsi </td>
              <td>:<textarea name="deskripsi" cols="40" rows="10"><?php echo $record['deskripsi'] ?> </textarea> </td>
        </tr>

        <tr>
            <td><input type="submit" name="update" value="Update"/> </td>
        </tr>
      </table>

</form>
