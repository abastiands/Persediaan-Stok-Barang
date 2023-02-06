@extends('welcome')

@section('header_dashboard')
    <div class="col-sm-6">
        <h1 class="m-0">Data Produk</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Produk</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('produks.create') }}" class="btn btn-md btn-success mb-3">TAMBAH PRODUK</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col" class="text-center">Bahan</th>
                    <th scope="col" class="text-center">Jenis</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($produks as $produk)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        @foreach ($bahans as $bahan)
                            @if ($bahan->id !== $produk->id_bahan)
                                @continue
                            @endif
                            <td>{{ $bahan->nama }}</td>
                        @endforeach
                        @foreach ($jenisproduks as $jenisproduk)
                            @if ($jenisproduk->id !== $produk->id_jenis)
                                @continue
                            @endif
                            <td>{{ $jenisproduk->nama }}</td>
                        @endforeach
                        <td>{{ $produk->nama }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('produks.destroy', $produk->id) }}" method="POST">
                                <a href="{{ route('produks.edit', $produk->id) }}" class="btn btn-sm btn-primary">UBAH</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Produk belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
                </table>  
                {{ $produks->links() }}
        </div>
    </div>
@endsection