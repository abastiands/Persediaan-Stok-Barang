<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Persediaan Stok Barang</title>

  <!-- Shortcut icon -->
  <link rel="shortcut icon" href="{{ asset('/images/home.png') }}"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('lte/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ ('lte/dist/css/adminlte.min.css') }}">
  <!-- Toastr optional -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<!--
`body` tag options:

  Apply one or more of the following classes to to the body tag
  to get the desired effect

  * sidebar-collapse
  * sidebar-mini
-->
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  @include('header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('sidebar')
  <!-- /.sidebar -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          @yield('header_dashboard')
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <!-- @yield('content') -->
            @if(View::hasSection('content'))
              @yield('content')
            @else
              <h1 class="text-center">Selamat Datang</h1>
              <div class="row align-items-start">
                <div class="col col-md-2 col-12 my-3 text-center">
                  <a href="/bahans" class="bg-dark w-100 p-3">
                    <i class="far fa-lemon"></i>
                    Data Bahan
                  </a>
                </div>
                <div class="col col-md-2 col-12 my-3 text-center">
                  <a href="/jenisproduks" class="bg-dark w-50 p-3">
                    <i class="fa fa-mug-hot"></i>
                    Data Jenis
                  </a>
                </div>
                <div class="col col-md-2 col-12 my-3 text-center">
                  <a href="produks" class="bg-dark w-50 p-3">
                    <i class="fa fa-box-open"></i>
                    Data Produk
                  </a>
                </div>
                <div class="col col-md-2 col-12 my-3 text-center">
                  <a href="/stoks" class="bg-dark w-50 p-3">
                    <i class="fa fa-book"></i>
                    Data Stok
                  </a>
                </div>
                <div class="col col-md-2 col-12 my-3 text-center">
                  <a href="/penjualans" class="bg-dark w-50 p-3">
                    <i class="fa fa-wallet"></i>
                    Data Penjualan
                  </a>
                </div>
                <div class="col col-md-2 col-12 my-3 text-center">
                  <a href="/prediksis" class="bg-dark w-50 p-3">
                    <i class="fa fa-chart-line"></i>
                    Data Prediksi
                  </a>
                </div>
              </div>
            @endif
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('footer')
  <!--  -->
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE -->
<script src="{{ asset('lte/dist/js/adminlte.js') }}"></script>
<!-- Toastr optional -->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script>
        //message with toastr
        @if(session()->has('success'))
        
            toastr.success('{{ session('success') }}', 'BERHASIL!'); 

        @elseif(session()->has('error'))

            toastr.error('{{ session('error') }}', 'GAGAL!'); 
            
        @endif
    </script>
</body>
</html>
