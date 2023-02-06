@extends('welcome')

@section('header_dashboard')
    <div class="col-sm-6">
        <h1 class="m-0">Data Jenis</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Jenis</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('jenisproduks.create') }}" class="btn btn-md btn-success mb-3">TAMBAH JENIS</a>
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($jenisproduks as $jenisproduk)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $jenisproduk->nama }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('jenisproduks.destroy', $jenisproduk->id) }}" method="POST">
                                <a href="{{ route('jenisproduks.edit', $jenisproduk->id) }}" class="btn btn-sm btn-primary">UBAH</a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Bahan belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
                </table>  
                {{ $jenisproduks->links() }}
        </div>
    </div>
@endsection