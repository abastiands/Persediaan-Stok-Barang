@extends('welcome')

@section('header_dashboard')
    <div class="col-sm-6">
        <h1 class="m-0">Data Stok Produk</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Stok Produk</li>
        </ol>
    </div><!-- /.col -->
@endsection

@section('content')
    <div class="card border-0 shadow rounded">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                    <th scope="col" class="text-center">No.</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Stok</th>
                    <th scope="col" class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($stoks as $stok)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td>{{ $stok->nama }}</td>
                        <td class="text-center">{{ $stok->stok }}</td>
                        <td class="text-center">
                            <form method="POST">
                                <a href="{{ route('stoks.edit', $stok->id) }}" class="btn btn-sm btn-primary">UBAH</a>
                                @csrf
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
                {{ $stoks->links() }}
        </div>
    </div>
@endsection