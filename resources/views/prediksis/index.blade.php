@extends('welcome')

@section('header_dashboard')
    <div class="col-sm-6">
        <h1 class="m-0">Data Prediksi Stok Produk</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">Prediksi Stok</li>
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
                    <th scope="col" class="text-center">Stok</th>
                    <th scope="col" class="text-center">Terjual</th>
                    <th scope="col" class="text-center">Sisa</th>
                    <th scope="col" class="text-center">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no = 1; @endphp
                    @forelse ($prediksis as $prediksi)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        @foreach ($produks as $produk)
                            @if ($produk->id !== $prediksi->id_produk)
                                @continue
                            @endif
                            <td>{{ $produk->nama }}</td>
                            <td class="text-center">{{ $produk->stok }}</td>
                        @endforeach
                        <td class="text-center">{{ $prediksi->terjual }}</td>
                        @foreach ($produks as $produk)
                            @php 
                                $sisa = $produk->stok - $prediksi->terjual;
                                $stokbagi = $produk->stok / 2;
                                $restock = $prediksi->terjual + $stokbagi;
                                $totalstok = $restock + $sisa;
                            @endphp
                            @if ($produk->id !== $prediksi->id_produk)
                                @continue
                            @endif
                            <td class="text-center">{{ $sisa }}</td>
                            @if ($prediksi->terjual >= $stokbagi)
                                <td>Persediaan stok perlu ditambah sebesar {{ $restock }}. Sehingga total stok bulan berikutnya sebesar {{ $totalstok }}.</td>
                            @else
                                <td>Persediaan stok tidak perlu ditambah atau ditambah sebesar {{ $prediksi->terjual }}. Sehingga total stok bulan berikutnya sebesar {{ $sisa }} atau {{ $produk->stok }}.</td>
                            @endif
                        @endforeach
                    </tr>
                    @empty
                        <div class="alert alert-danger">
                            Data Penjualan Produk belum Tersedia.
                        </div>
                    @endforelse
                </tbody>
                </table>  
                {{ $prediksis->links() }}
        </div>
    </div>
@endsection