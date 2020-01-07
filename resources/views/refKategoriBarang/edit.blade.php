<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
<form action="{{route('refKategoriBarang.update', $data->id)}}" method="post">
       @csrf
       @method('PATCH') 
       <label for="">Nama Kategori</label>
       <input type="text" name="name" value="{{ $data->name}}">
       <button type="submit">Simpan</button>
   </form> 
</body>
</html>