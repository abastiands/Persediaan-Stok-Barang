<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Persediaan Stok Barang</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: lightgray">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('produks.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                            <h1>Data Produk</h1>
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">Bahan</label>
                                <select class="form-control" id="bahan-option" name="id_bahan">
                                    @foreach ($bahans as $bahan)
                                    <option value="{{ old('id', $bahan->id) }}">{{ $bahan->nama }}</option>
                                    @endforeach
                                </select>

                                <label class="font-weight-bold">Jenis</label>
                                <select class="form-control" id="jenis-option" name="id_jenis">
                                    @foreach ($jenisproduks as $jenisproduk)
                                    <option value="{{ old('id', $jenisproduk->id) }}">{{ $jenisproduk->nama }}</option>
                                    @endforeach
                                </select>

                                <label class="font-weight-bold">Nama</label>
                                <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama', $produk->nama) }}" placeholder="Masukkan Nama Produk">
                            
                                <!-- error message untuk nama -->
                                @error('nama')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">UBAH</button>
                            <button type="reset" class="btn btn-md btn-warning">ULANG</button>
                            <button type="button" class="btn btn-md btn-danger" onclick="history.back(-1)">KEMBALI</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
</body>
</html>