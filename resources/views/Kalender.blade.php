
<html>
      <head>
        <link rel="stylesheet" href="/warna.css">
        <meta charset="utf-8">
        <title>click demo</title>
        <style>

        td:hover {
            color: black;
            background: pink;
          }
          </style>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script>
          $( "td" ).click(function() {
            $( this ).click();
          });


        </script>
      </head>
<body>

    </br> </br>
    <p>
      {{ $day ? 'Event Harian' : 'Event Bulanan'}}
    </p>
    <table border="1" align="center">
      <tr>
            <td align="center"> Nama Event </td>
            <td align="center"> Tanggal Event </td>
            <td align="center"> Deskripsi </td>
            <td align="center"colspan="2"> Aksi </td>

      </tr>

        @foreach ($kalender as $event)
          <tr>
            <td align="center">{{ $event->nama}} </td>
            <td align="center">{{ $event->tgl}} </td>
            <td align="center">{{ $event->deskripsi }}</td>
            <td align="center"><a href="/event/update/{{$event->id}}">Update</a> </td>
            <td align="center"><a href="/delete/{{$event->id}}">Delete </a></td>
          </tr>

        @endforeach



    </table>
        <br> <br>
        <table width="300" align="center">
        <tr align="center">
        <td bgcolor="aquamarine" style="color:red">
        <table width="100%" border="0"  cellspacing="0" cellpadding="0">
        <tr>
        <td width="50%" align="left">&nbsp;&nbsp;<a href="<?php echo $_SERVER["PHP_SELF"] ."?month=". $prev_month . "&year=" .$prev_year; ?>" style="color:black">-Previous-</a></td>
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
                $bulan= date("m");
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
                		else echo "<td align='center' valign='middle' height='20px'><a href='/kalender?month=".$cMonth."&year=".$cYear."&day=".($i - $startday + 1)."'>".($i - $startday + 1)."</a></td>";
                		if(($i % 7) == 6 ) echo "</tr>";
                }
?>






      </table>


</body>

</html>
