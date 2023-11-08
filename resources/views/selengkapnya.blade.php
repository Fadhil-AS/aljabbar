@extends('layouts.main')
{{-- untuk css/js --}}
<link rel="stylesheet" href="{{ asset('assets/css/selengkapnya.css') }}">


@section('container')
{{-- buat ngoding --}}
    {{-- front image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner ">
          <div class="carousel-item active " >
            <img src="https://images.unsplash.com/photo-1494515843206-f3117d3f51b7?auto=format&fit=crop&q=80&w=2072&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="..." class="img-fluid"   style="filter: brightness(50%);object-fit: cover;width: 100%;height: 95%;">
            <div class="carousel-caption d-none d-md-block" >
              <h5 class="breadcumb"><a href="/" class="text-light">Beranda</a> / Selengkapnya</h5>
              <h3>Segera nikmati kemudahan perjalanan dengan aplikasi ticketing bis kami. Pilih, bayar, dan berangkat, semua dalam genggaman Anda!</h3>
            </div>
          </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 150px;margin-bottom: 150px">
      <div class="container">
        <h4 class="text-primary text-center">Transport Berkah Armada</h4>
        <h2 class="text-center">"Kami adalah jawaban lengkap untuk kebutuhan bisnis Anda."</h2>
        <h5 class="text-secondary fw-light text-center">"Inovatif dan andal, bisnis kami di dunia ticketing bis memberikan pengalaman perjalanan yang mulus. Dengan teknologi canggih, kami memungkinkan Anda untuk mencari, membeli, dan melacak tiket bis dengan mudah. Kami berkomitmen untuk memberikan layanan yang efisien dan menyenangkan kepada pelanggan kami, menghadirkan kemudahan dalam merencanakan perjalanan mereka. Dari pemilihan kursi hingga konfirmasi instan, kami membuat perjalanan dengan bis menjadi lebih aman, efisien, dan menyenangkan."</h5>

        <div class="row justify-content-center">
          <div class="col-md-4">
            <div class="card border-0 shadow" style="height: 500px">
              <i class="fa-solid fa-globe fa-5x" style="margin-top: 20px"></i>
              <div class="card-body">
                <h2 class="card-title">Monitor Armada</h2>
                <p class="card-text">
                  Fitur monitor armada memungkinkan perusahaan melacak lokasi kendaraan secara real-time dan mencatat informasi seperti kecepatan, jarak, waktu dan rute setiap kendaraan. Fitur ini berguna untuk mengawasi penggunaan armada dan memastikan operasional berjalan sesuai rencana.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow" style="height: 500px">
              <i class="fa-solid fa-file-invoice-dollar fa-5x" style="margin-top: 20px"></i>
              <div class="card-body">
                <h2 class="card-title">Pengingat Registrasi Armada</h2>
                <p class="card-text">
                  Fitur pengingat registrasi berguna untuk melacak tanggal kadaluarsa pajak, kir, dan perizinan lainnya dari setiap kendaraan. Sistem akan mengirimkan notifikasi ke admin sebelum batas waktu agar proses perpanjangan berjalan lancar.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card border-0 shadow" style="height: 500px">
              <i class="fa-solid fa-money-bill-1-wave fa-5x" style="margin-top: 20px"></i>
              <div class="card-body">
                <h2 class="card-title">Manajemen Keuangan</h2>
                <p class="card-text">
                  Fitur manajemen keuangan mencatat semua pengeluaran armada seperti biaya bahan bakar, servis berkala, tol, parkir dan biaya operasional lainnya. Laporan keuangan terperinci dihasilkan untuk membantu analisis dan mengontrol biaya operasional.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    </div>
    </div>


@endsection
