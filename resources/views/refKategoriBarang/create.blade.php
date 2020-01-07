<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>
</head>
<body>
<form action="{{route('refKategoriBarang.store')}}" method="post">
       @csrf 
       <label for="">Nama Kategori</label>
       <input type="text" name="name">
       <button type="submit">Simpan</button>
   </form> 
</body>
</html>