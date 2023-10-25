@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('assets/css/pengingat.css') }}">
@section('container')
    {{-- slide image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
          <div class="carousel-item active crslItem ">
            <img src="https://images.unsplash.com/photo-1604050926948-c9949b62e11e?auto=format&fit=crop&q=80&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&w=1984" class="d-block w-100 crsl1" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="breadcumb"><a href="/" class="text-light">Beranda</a> / Pengingat</h5>
              <h3>Sederhanakan Manajemen Armada Anda di Transport Berkah Armada</h3>
            </div>
          </div>
        </div>
    </div>

    {{-- platform transport berkah armada --}}
    <div class="text-center justify-content-center mt-5 platform">
        <h4 class="text-primary">Platform Al-Jabbar untuk Industri Ekonomi</h4>
        <h2>Mudah dalam mengatur operasional armada dan perjalanan</h2>
        <h5 class="text-secondary fw-normal">Transport Berkah Armada bantu meningkatkan visibilitas dan kontrol terhadap armada dan
            pengemudi untuk memaksimalkan layanan dan kepuasan penumpang</h5>
        <div class="cardGroup d-flex mt-5 container-fluid">
            <div class="card shadow-lg rounded border border-0" style="width: 18rem;">
                <div class="card-body mt-5">
                    <h1><i class="fa-solid fa-laptop"></i></h1>
                    <h5 class="text-start">Pantau asset kendaraan anda secara real time</h5>
                    <p class="card-text">Alat sensor yang efektif untuk memantau armada baik yang diam maupun bergerak</p>
                </div>
            </div>
            <div class="card shadow-lg rounded border border-0" style="width: 18rem;">
              <div class="card-body mt-5">
                <h1><i class="fa-solid fa-bolt"></i></h1>
                <h5 class="text-start">Cepat dalam ambil keputusan</h5>
                <p class="card-text">Amati perilaku pengemudi untuk mengantisipasi kendala pada armada</p>
              </div>
            </div>
            <div class="card shadow-lg rounded border border-0" style="width: 18rem;">
                <div class="card-body mt-5">
                    <h1><i class="fa-solid fa-chart-gantt"></i></h1>
                    <h5 class="text-start">Manajemen operasional mudah</h5>
                    <p class="card-text">Atur dan jadwalkan armada anda dengan teratur dan akurat</p>
                </div>
            </div>
        </div>
    </div>

    {{-- fitur --}}
    <div class="container-fluid">
        <div class="fitur mx-auto">

            {{-- Visibilitas dan Transparansi --}}
            <div class="card shadow-lg rounded cardFitur border border-0" style="">
                <div class="card-body d-flex row g-0 ">
                    <div class="text-fitur col-sm-6 col-md-6">
                        <h5 class="card-title text-start">Visibilitas dan Transparansi</h5>
                        <h3 class="card-subtitle mb-2 text-start">Pantau Lokasi dan Armada kapanpun dan dimanapun</h3>
                        <p class="card-text">Fitur TBA mempunyai fitur live view untuk menampilkan detail kendaraan dan pengemudi. Mudah dalam memantau armada, antisipasi keterlambatan, dan menjaga kepuasan pelanggan</p>
                    </div>
                    <div class="col-6 col-md-6 ">
                        <img src="https://images.unsplash.com/photo-1548345680-f5475ea5df84?auto=format&fit=crop&q=80&w=1773&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="image float-end">
                    </div>
                </div>
            </div>

            {{-- Monitor biaya perjalanan --}}
            <div class="card shadow-lg rounded cardFitur border border-0 mt-5" style="">
                <div class="card-body d-flex row g-0 ">
                    <div class="col-6 col-md-6 ">
                        <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="image float-start">
                    </div>
                    <div class="text-fitur col-sm-6 col-md-6">
                        <h5 class="card-title text-start">Monitor biaya perjalanan</h5>
                        <h3 class="card-subtitle mb-2 text-start">Efisiensi tinggi, tingkatkan margin perusahaan</h3>
                        <p class="card-text">Fleet Operation mencatat pengeluaran tiap perjalanan, mulai dari bahan bakar hingga uang saku pengemudi. Lindungi perusahaan dari kerugian dengan iFuel Ultrasonic yang memberikan notifikasi ketika terjadi pengurangan BBM secara tiba-tiba.</p>
                    </div>
                </div>
            </div>

            {{-- Pantau perilaku berkendara --}}
            <div class="card shadow-lg rounded cardFitur border border-0 mt-5" style="">
                <div class="card-body d-flex row g-0 ">
                    <div class="text-fitur col-sm-6 col-md-6">
                        <h5 class="card-title text-start">Pantau perilaku berkendara</h5>
                        <h3 class="card-subtitle mb-2 text-start">Jaga kinerja pengemudi, jaga kualitas layanan</h3>
                        <p class="card-text">Driver Behaviour mendeteksi perubahan kecepatan dan perilaku berkendara, seperti rem mendadak atau menikung tajam. Data lalu diolah dan dijadikan penilaian kualitas pengemudi sebagai bahan evaluasi.</p>
                    </div>
                    <div class="col-6 col-md-6 ">
                        <img src="https://images.unsplash.com/photo-1610483576433-9a1108bc9ab6?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="image float-end">
                    </div>
                </div>
            </div>

            {{-- Dokumentasi yang dapat diandalkan --}}
            <div class="card shadow-lg rounded cardFitur border border-0 mt-5" style="">
                <div class="card-body d-flex row g-0 ">
                    <div class="col-6 col-md-6 ">
                        <img src="https://images.unsplash.com/photo-1606235136180-c08f347a86d8?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="image float-start">
                    </div>
                    <div class="text-fitur col-sm-6 col-md-6">
                        <h5 class="card-title text-start">Dokumentasi yang dapat diandalkan</h5>
                        <h3 class="card-subtitle mb-2 text-start">Optimasi kapasitas dan waktu kerja armada</h3>
                        <p class="card-text">Armada terjaga prima dengan fitur Vehicle Management yang mengirim notifikasi perawatan berkala bagi kendaraan. Fitur License Reminder juga mengingatkan waktu dokumen kendaraan yang akan jatuh tempo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- integrasi --}}
    <div class="integrasi container-fluid bg-integrasi ">
        <h3 class="text-center mt-5">Perusahaan Al-Jabbar yang telah terintegrasi dengan Transport Berkah Armada</h3>
        <div class="container mx-auto p-2 align-items-center">
            <img src="https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-putra-rafflesia.jpg" alt="" class="imgIntegrasi">
            <img src="https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-rosalia-indah.jpg" alt="" class="imgIntegrasi">
            <img src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/294/2023/10/03/Logo-Whoosh-1902335397.jpg" alt="" class="imgIntegrasi">
            <img src="https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg" alt="" class="imgIntegrasi">
            <img src="https://assets.kompasiana.com/items/album/2016/06/20/transjakarta-new-logo-57681ea11293733e048b45a3.jpeg?t=o&v=1200" alt="" class="imgIntegrasi">
            <img src="https://awsimages.detik.net.id/content/2009/07/23/4/Garuda-Logo-Vertical-dalam.jpg" alt="" class="imgIntegrasi">
        </div>
    </div>

    {{-- hardware --}}
    <div class="container-fluid">
        <div class="hardware">
            <div class="text-center mt-5">
                <h5 class="text-primary">Hardware</h5>
                <h2>Perangkat dan Sensor untuk Lengkapi Armada</h2>
                <h5 class="text-secondary">Tingkatkan kontrol dengan sensor telematik sesuai kebutuhan bisnis Anda.</h5>
            </div>

            <div class="cardGroup d-flex container-fluid mt-5">
                {{-- TrackVision Basic --}}
                <div class="card border-0 cardHardware" style="">
                    <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-trackvision-pro.webp" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">TrackVision Basic</h5>
                        <p class="card-text text-secondary">Real-time video monitoring kendaraan dengan dual kamera yang menghadap ke jalan dan sekitar kabin kendaraan.</p>
                        <a href="#" class="text-none">Selengkapnya ></a>
                    </div>
                </div>
                {{-- iFuel Ultrasonic --}}
                <div class="card border-0 cardHardware" style="">
                    <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-ifuel-ultrasonic.webp" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">iFuel Ultrasonic </h5>
                        <p class="card-text text-secondary text-start">Pemantauan penggunaan bahan bakar melalui sinyal ketinggian jumlah bahan bakar.</p>
                        <a href="#" class="text-none">Selengkapnya ></a>
                    </div>
                </div>
                {{-- Easy Track --}}
                <div class="card border-0 cardHardware" style="">
                    <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-easy-track-1.webp" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Easy Track </h5>
                        <p class="card-text text-secondary text-start">Pelacak armada yang terhubung dengan IoT dan sensor pada kendaraan.</p>
                        <a href="#" class="text-none">Selengkapnya ></a>
                    </div>
                </div>
                {{-- iFuel Stick --}}
                <div class="card border-0 cardHardware" style="">
                    <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-ifuel-stick.webp" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">iFuel Stick </h5>
                        <p class="card-text text-secondary text-start">Pemantauan penggunaan bahan bakar dengan deteksi volume bahan bakar.</p>
                        <a href="#" class="text-none">Selengkapnya ></a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid">
        <div class="text-center mt-5">
            <h5 class="text-primary">Ambil kendali penuh</h5>
            <h2>Kelola operasional armada dengan lebih baik</h2>
            <h5 class="text-secondary">Transport Berkah Armada menyediakan solusi digital dan telematik untuk meningkatkan kontrol dan akselerasi operasional. Partner yang mendukung bisnis dan perusahaan dalam memberikan kualitas layanan terbaik.</h5>
        </div>
        <div class="text-center mx-auto mt-5 mb-5">
            <button class="btn btn-primary">
                Ajukan Demo
            </button>
        </div>
    </div>

@endsection
