<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Data Barang</title>
</head>
<body>
    {{-- {{ $data }} --}}
    <form action="{{ route('dataBarang.update', $data->id)}}" method="post">
        @method('PUT')
        @csrf
        <div style="margin-top:10px">
            <label>Kode Barang</label>
        <input type="text" name="kode" value="{{ $data->kode }}">
        </div>
        <div style="margin-top:10px">
            <label>Nama Barang</label>
        <input type="text" name="nama" value="{{ $data->nama }}" >
        </div>
    
        <div style="margin-top:10px">
            <label>Kategori Barang</label>
            <select name="refkategori_id">
                @foreach ($kategori as $item)
                    <option value="{{ $item->id }}" 
                        {{$data->refkategori_id == $item->id ? 'selected':''}} >{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
    
        <div style="margin-top:10px">
            <label>Status Barang</label>
            <select name="status">
                <option value="1" {{$data->status == 1 ? 'selected':''}}>Bagus</option>
                <option value="2" {{$data->status == 2 ? 'selected':''}}>Kurang Bagus</option>
                <option value="3" {{$data->status == 3 ? 'selected':''}}>Rusak</option>
            </select>
        </div>
        
        <button type="submit">Update</button>
    </form>
</body>
</html>