@extends('welcome')

@section('header_dashboard')
    <div class="col-sm-6">
        <h1 class="m-0">Data Penjualan Produk</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Penjualan</li>
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
                    <th scope="col" class="text-center">Produk</th>
                    <th scope="col" class="text-center">Terjual</th>
                    <th scope="col" class="text-center">Pilihan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($penjualans as $penjualan)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        @foreach ($produks as $produk)
                            @if ($produk->id !== $penjualan->id_produk)
                                @continue
                            @endif
                            <td>{{ $produk->nama }}</td>
                        @endforeach
                        <td class="text-center">{{ $penjualan->terjual }}</td>
                        <td class="text-center">
                            <form method="POST">
                                <a href="{{ route('penjualans.edit', $penjualan->id) }}" class="btn btn-sm btn-primary">UBAH</a>
                                @csrf
                            </form>
                        </td>
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Penjualan Produk belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
                </table>  
                {{ $penjualans->links() }}
        </div>
    </div>
@endsection