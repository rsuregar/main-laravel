<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>
</head>
<body>
<form action="{{ route('dataBarang.store')}}" method="post">
    @csrf
    <div style="margin-top:10px">
        <label>Kode Barang</label>
        <input type="text" name="kode">
    </div>
    <div style="margin-top:10px">
        <label>Nama Barang</label>
        <input type="text" name="nama">
    </div>

    <div style="margin-top:10px">
        <label>Kategori Barang</label>
        <select name="refkategori_id">
            @foreach ($kategori as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>

    <div style="margin-top:10px">
        <label>Status Barang</label>
        <select name="status">
            <option value="1">Bagus</option>
            <option value="2">Kurang Bagus</option>
            <option value="3">Rusak</option>
        </select>
    </div>
    
    <button type="submit">Simpan</button>

<hr>
</form>
    <table border="1px">
        <tr>
            <th>No</th>
            <th>Kode</th>
            <th>Kategori</th>
            <th>Nama Barang</th>
            <th>Status</th>
        </tr>
    </table>
</body>
</html>