@extends('layouts.main')
    <link rel="stylesheet" href="{{ asset('assets/css/pengingat.css') }}">
@section('container')
    {{-- Background image --}}
    <div id="carouselSlide" class="carousel slide" style="margin-bottom: 150px">
        <div class="carousel-inner crsl">
          <div class="carousel-item active crslItem ">
            <img src="https://images.unsplash.com/photo-1546955870-9fc9e5534349?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid" alt="..." style="width:100%; height: 85%; object-fit: cover; filter: brightness(50%)">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="breadcumb mb-5"><a href="/" class="text-light" style="text-decoration: none">Beranda</a> / Pengingat</h5>
              <h3 class="mb-5">Sederhanakan Manajemen Armada Anda di Transport Berkah Armada</h3>
            </div>
          </div>
        </div>
    </div>

    {{-- platform transport berkah armada --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            <h4 class="text-center" style="color: #47a992">Platform Al-Jabbar untuk Industri Ekonomi</h4>
            <h2 class="text-center">Mudah dalam mengatur operasional armada dan perjalanan</h2>
            <h5 class="text-center text-secondary" style="padding-left: 50px; padding-right: 50px;">Transport Berkah Armada bantu meningkatkan visibilitas dan kontrol terhadap armada dan pengemudi untuk memaksimalkan layanan dan kepuasan</h5>
            <div class="row justify-content-center" style="padding: 50px">
                <div class="col-md-4">
                    <div class="card shadow border-0" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-laptop"></i></h1>
                        <div class="card-body">
                            <h5 class="text-start">Pantau asset kendaraan anda secara real time</h5>
                            <p class="card-text">Alat sensor yang efektif untuk memantau armada baik yang diam maupun bergerak</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-bolt"></i></h1>
                        <div class="card-body">
                            <h5 class="text-start">Cepat dalam ambil keputusan</h5>
                            <p class="card-text">Amati perilaku pengemudi untuk mengantisipasi kendala pada armada</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card shadow border-0" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-chart-gantt"></i></h1>
                        <div class="card-body">
                            <h5 class="text-start">Manajemen operasional mudah</h5>
                            <p class="card-text">Atur dan jadwalkan armada anda dengan teratur dan akurat</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    {{-- fitur --}}
    {{-- Visibilitas dan Transparansi --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            <div class="row justify-content-center" style="padding: 50px">
                <div class="col-md-6 justify-content-center pt-5" style="">
                    {{-- <h5 class="text-end" style="color: #47a992">Visibilitas dan Transparansi</h5> --}}
                    <h2 class="text-end">Pantau Lokasi dan Armada kapanpun dan dimanapun</h2>
                    <p class="text-end">Fitur TBA mempunyai fitur live view untuk menampilkan detail kendaraan dan pengemudi. Mudah dalam memantau armada, antisipasi keterlambatan, dan menjaga kepuasan pelanggan</p>
                </div>
                <div class="col-6">
                    <img src="https://images.unsplash.com/photo-1548345680-f5475ea5df84?auto=format&fit=crop&q=80&w=1773&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="" style="width: 500px; height: 350px">
                </div>
            </div>
        </div>
    </div>

    {{-- Monitor biaya perjalanan --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            <div class="row justify-content-center" style="padding: 50px">
                <div class="col-md-6 justify-content-center" style="">
                    <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="float-end" style="width: 500px; height: 350px">
                </div>
                <div class="col-6 pt-5">
                    {{-- <h5 class="" style="color: #47a992">Monitor biaya perjalanan</h5> --}}
                    <h2 class="">Efisiensi tinggi, tingkatkan margin perusahaan</h2>
                    <p class="">Fleet Operation mencatat pengeluaran tiap perjalanan, mulai dari bahan bakar hingga uang saku pengemudi. Lindungi perusahaan dari kerugian dengan iFuel Ultrasonic yang memberikan notifikasi ketika terjadi pengurangan BBM secara tiba-tiba.</p>
                </div>
            </div>

        </div>
    </div>

    {{-- Pantau perilaku berkendara --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            <div class="row justify-content-center" style="padding: 50px">
                <div class="col-md-6 justify-content-center pt-5" style="">
                    {{-- <h5 class="text-end" style="color: #47a992">Pantau perilaku berkendara</h5> --}}
                    <h2 class="text-end">Jaga kinerja pengemudi, jaga kualitas layanan</h2>
                    <p class="text-end">Driver Behaviour mendeteksi perubahan kecepatan dan perilaku berkendara, seperti rem mendadak atau menikung tajam. Data lalu diolah dan dijadikan penilaian kualitas pengemudi sebagai bahan evaluasi.</p>
                </div>
                <div class="col-6">
                    <img src="https://images.unsplash.com/photo-1610483576433-9a1108bc9ab6?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="" style="width: 500px; height: 350px">
                </div>
            </div>
        </div>
    </div>

    {{-- Dokumentasi yang dapat diandalkan  --}}
    <div class="container-fluid" style="margin-bottom: 150px">
        <div class="container">
            <div class="row justify-content-center" style="padding: 50px">
                <div class="col-md-6 justify-content-center" style="">
                    <img src="https://images.unsplash.com/photo-1606235136180-c08f347a86d8?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" class="float-end" style="width: 500px; height: 350px">
                </div>
                <div class="col-6 pt-5">
                    {{-- <h5 class="" style="color: #47a992">Dokumentasi yang dapat diandalkan</h5> --}}
                    <h2 class="">Optimasi kapasitas dan waktu kerja armada</h2>
                    <p class="">Armada terjaga prima dengan fitur Vehicle Management yang mengirim notifikasi perawatan berkala bagi kendaraan. Fitur License Reminder juga mengingatkan waktu dokumen kendaraan yang akan jatuh tempo.</p>
                </div>
            </div>
        </div>
    </div>



    {{-- hardware --}}
    {{-- <div class="container-fluid" style="margin-bottom: 450px">
        <div class="container">
            <h4 class="text-center" style="color: #47a992">Hardware</h4>
            <h2 class="text-center">Perangkat dan Sensor untuk Lengkapi Armada</h2>
            <h5 class="text-center text-secondary" style="padding-left: 50px; padding-right: 50px;">Tingkatkan kontrol dengan sensor telematik sesuai kebutuhan bisnis Anda.</h5>
            <div class="row" style="padding: 50px">
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-trackvision-pro.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">TrackVision Basic</h5>
                            <p class="card-text text-secondary">Real-time video monitoring kendaraan dengan dual kamera yang menghadap ke jalan dan sekitar kabin kendaraan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-ifuel-ultrasonic.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">iFuel Ultrasonic </h5>
                            <p class="card-text text-secondary text-start">Pemantauan penggunaan bahan bakar melalui sinyal ketinggian jumlah bahan bakar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-easy-track-1.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">Easy Track </h5>
                            <p class="card-text text-secondary text-start">Pelacak armada yang terhubung dengan IoT dan sensor pada kendaraan.</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card border-0" style="height: 500px; width: 18rem">
                        <img src="https://www.mceasy.com/wp-content/uploads/2023/04/hardware-ifuel-stick.webp" class="card-img-top" alt="">
                        <div class="card-body">
                            <h5 class="card-title">iFuel Stick </h5>
                            <p class="card-text text-secondary text-start">Pemantauan penggunaan bahan bakar dengan deteksi volume bahan bakar.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
