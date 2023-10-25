@extends('layouts.main')
{{-- untuk css/js --}}
<link rel="stylesheet" href="{{ asset('assets/css/selengkapnya.css') }}">
@section('container')
{{-- buat ngoding --}}
    {{-- front image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
          <div class="carousel-item active crslItem ">
            <img src="https://images.unsplash.com/photo-1494515843206-f3117d3f51b7?auto=format&fit=crop&q=80&w=2072&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 crsl1" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="breadcumb"><a href="/" class="text-light">Beranda</a> / Selengkapnya</h5>
              <h3>"Segera nikmati kemudahan perjalanan dengan aplikasi ticketing bis kami. Pilih, bayar, dan berangkat, semua dalam genggaman Anda!"</h3>
            </div>
          </div>
        </div>
    </div>

    <div class="text-center justify-content-center mt-5">
        <h4 class="text-primary">Transport Berkah Armada</h4>
        <h2>"Kami adalah jawaban lengkap untuk kebutuhan bisnis Anda."</h2>
        <h5 class="text-secondary fw-light">"Inovatif dan andal, bisnis kami di dunia ticketing bis memberikan pengalaman perjalanan yang mulus. Dengan teknologi canggih, kami memungkinkan Anda untuk mencari, membeli, dan melacak tiket bis dengan mudah. Kami berkomitmen untuk memberikan layanan yang efisien dan menyenangkan kepada pelanggan kami, menghadirkan kemudahan dalam merencanakan perjalanan mereka. Dari pemilihan kursi hingga konfirmasi instan, kami membuat perjalanan dengan bis menjadi lebih aman, efisien, dan menyenangkan."</h5>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="https://www.mceasy.com/wp-content/uploads/2023/05/VSMS.webp">
          <h2>Monitor Armada</h2>
          <h5>
            "Monitor Armada" adalah istilah yang umumnya merujuk pada sistem pengawasan atau kontrol yang digunakan untuk memantau dan mengelola armada kendaraan, seperti mobil, truk, atau kapal. Sistem ini memberikan visibilitas dan kendali yang lebih baik terhadap lokasi, kondisi, dan kinerja seluruh armada, yang dapat membantu perusahaan atau lembaga dalam mengoptimalkan operasi, meningkatkan keamanan, dan menghemat biaya. Dengan "Monitor Armada," Anda dapat melacak pergerakan armada, memantau konsumsi bahan bakar, mengelola jadwal perawatan, dan bahkan memantau perilaku pengemudi, semua dalam rangka meningkatkan efisiensi dan produktivitas.
          </h5>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <img src="https://samsatdigital.id/assets/img/LOGO_SIGNAL.png">
          <h2>Pengingat Registrasi Armada</h2>
          <h5>
            "Pengingat Registrasi Armada (Pajak)" adalah layanan yang dirancang untuk membantu pemilik armada kendaraan, seperti perusahaan transportasi atau organisasi besar, dalam menjaga kendaraan mereka selalu terdaftar dan mematuhi kewajiban pajak yang relevan. Layanan ini memberikan peringatan atau notifikasi secara berkala kepada pemilik armada tentang tanggal jatuh tempo registrasi kendaraan dan pembayaran pajak, sehingga mereka dapat memastikan agar seluruh kendaraan dalam armada mereka tetap sah secara hukum dan menghindari denda atau sanksi yang mungkin timbul jika registrasi atau pajak tidak dibayarkan tepat waktu. Dengan "Pengingat Registrasi Armada (Pajak)," pemilik armada dapat memastikan bahwa operasi kendaraan mereka berjalan lancar dan legal.
          </h5>
        </div>
    </div>

      <div class="card">
        <div class="card-body">
            <img src="https://media.istockphoto.com/id/1145229969/id/vektor/logo-uang.jpg?s=612x612&w=0&k=20&c=kSOQyoSWN6GkE5pE55nZ-RbgHQK3B1g3txmGyfrpvfQ=">
          <h2>Manajemen Keuangan</h2>
          <h5>
            "Manajemen Keuangan" adalah praktik dan proses yang digunakan oleh individu, bisnis, atau organisasi untuk mengelola, mengatur, dan mengoptimalkan penggunaan sumber daya keuangan mereka. Ini mencakup berbagai aspek, seperti perencanaan keuangan, penganggaran, pengelolaan investasi, perencanaan pajak, dan pengelolaan risiko keuangan. Tujuan dari manajemen keuangan adalah untuk mencapai tujuan keuangan yang telah ditetapkan, seperti pertumbuhan bisnis, profitabilitas, pembayaran utang, atau akumulasi dana pensiun. Dengan efektif mengelola keuangan, individu atau organisasi dapat mengambil keputusan yang lebih baik, menghindari masalah keuangan, dan mencapai stabilitas serta pertumbuhan finansial yang berkelanjutan.
          </h5>
        </div>
    </div>



@endsection
