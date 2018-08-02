<form id="form1" name="form1" method="POST" action="/update/{{$update->id}}">
<table border="1">
  <tr>
        <td> Id event</td>
        <td>:<input type = "text" name="id" id="id" value="{{$update->id}}" </td>
  </tr>
  <tr>
        <td> Nama Event</td>
        <td>:<input type = "text" name="nama" id="nama" value="{{$update->nama}}" size="35" maxlength="50"/> </td>
  </tr>
  <tr>
        <td> Tanggal Event</td>
        <td>:<input type = "text" name="tanggal" id="tanggal" value="{{$update->tgl}}" size="35" maxlength="50"/> </td>
  </tr>
  <tr>
        <td> Deskripsi </td>
        <td>:<textarea name="deskripsi" cols="40" rows="10"> {{$update->deskripsi}}</textarea> </td>

  </tr>

  <tr>
      <td><input type="submit" value="Update"> </td>

  </tr>
</table>
</form>
