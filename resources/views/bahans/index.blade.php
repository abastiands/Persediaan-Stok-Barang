@extends('welcome')

@section('header_dashboard')
    <div class="col-sm-6">
        <h1 class="m-0">Data Bahan</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Bahan</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <a href="{{ route('bahans.create') }}" class="btn btn-md btn-success mb-3">TAMBAH BAHAN</a>
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
                    @forelse ($bahans as $bahan)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $bahan->nama }}</td>
                        <td class="text-center">
                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('bahans.destroy', $bahan->id) }}" method="POST">
                                <a href="{{ route('bahans.edit', $bahan->id) }}" class="btn btn-sm btn-primary">UBAH</a>
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
                {{ $bahans->links() }}
        </div>
    </div>
@endsection