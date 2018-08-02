<form id="form1" name="form1" method="GET" action="/event/add">

<table align="center" border="1">
  <tr>

        <td align="center"> Nama Event </td>
        <td align="center"> Tanggal Event </td>
        <td align="center"> Deskripsi </td>
        <td align="center"colspan="2"> Aksi </td>

  </tr>

    @foreach ($events as $event)
      <tr>

        <td align="center">{{ $event->nama}} </td>
        <td align="center">{{ $event->tgl}} </td>
        <td align="center">{{ $event->deskripsi }}</td>
        <td align="center"><a href="/event/update/{{$event->id}}">Update</a> </td>
        <td align="center"><a href="/delete/{{$event->id}}">Delete </a></td>
      </tr>

    @endforeach
          <tr>
              <td colspan="5" align="center">  <input type="submit" value="Tambah"/> </td>
          </tr>
        </table>

</form>
