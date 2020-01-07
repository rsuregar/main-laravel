<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- {{ $lists }} --}}
    <a href="{{route('refKategoriBarang.buat')}}">Tambah Data</a>
  <table border="1px" width="100%">
      <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Waktu Input</th>
          <th>Aksi</th>
      </tr>
      @foreach($lists as $item)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->created_at}}</td>
            <td>
            <a href="{{route('refKategoriBarang.show', $item->id)}}">Show</a>
                <a href="{{route('refKategoriBarang.edit', $item->id)}}">Edit</a>
            <a href="{{route('delete', $item->id)}}">Delete</a>
            </td>
        </tr>
      @endforeach
      
</table>  
</body>
</html>