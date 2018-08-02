
<html>
      <head>
        <link rel="stylesheet" href="/warna.css">


      </head>
<body>
    <?php

        $koneksi = mysqli_connect("localhost","root","","kalender");
        $query = "SELECT * from event";
        $proses = $koneksi->query($query);
        $row = $proses->fetch_array(MYSQLI_BOTH);
        //print_r($row);


        

      ?>
    </br> </br>

        <table width="300" align="center">
        <tr align="center">
        <td bgcolor="aquamarine" style="color:red">
        <table width="100%" border="0"  cellspacing="0" cellpadding="0">
        <tr>
        <td width="50%" align="left">&nbsp;&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $prev_month . "&year=" . $prev_year; ?>" style="color:black">-Previous-</a></td>
        <td width="50%" align="right"><a href="<?php echo $_SERVER["PHP_SELF"] . "?month=". $next_month . "&year=" . $next_year; ?>" style="color:black">-Next-</a>&nbsp;&nbsp;</td>
        </tr>

        <tr align="center">
        <td colspan="7" bgcolor="#999999" style="color:#FFFFFF"><strong><?php echo $monthNames[$cMonth-1].' '.$cYear; ?></strong></td>
        </tr>

            <table style="border:2px solid #1E90FF" width="100%">
            <tr bgcolor="#ADD8E6">
                  <td align=center><font color="#FF0000">Minggu</font></td>
                  <td align=center>Senin</td>
                  <td align=center>Selasa</td>
                  <td align=center>Rabu</td>
                  <td align=center>Kamis</td>
                  <td align=center>Jumat</td>
                  <td align=center>Sabtu</td>
            </tr>


          <?php

                $hari	= date("d");
                $bulan= date ("m");
                $tahun= date("Y");
                $jumlahhari=date("t",mktime(0,0,0,$bulan,$hari,$tahun));

                $s=date ("w", mktime (0,0,0,$bulan,1,$tahun));


                $timestamp = mktime(0,0,0,$cMonth,1,$cYear);
                $maxday = date("t",$timestamp);
                $thismonth = getdate ($timestamp);
                $startday = $thismonth['wday'];
                for ($i=0; $i<($maxday+$startday); $i++)
                {


                		if(($i % 7) == 0 ) echo "<tr>";
                		if($i < $startday) echo "<td></td>";
                		else echo "<td align='center' valign='middle' height='20px'>". ($i - $startday + 1) . "</td>";
                		if(($i % 7) == 6 ) echo "</tr>";
                }
                ?>






      </table>


</body>

</html>
