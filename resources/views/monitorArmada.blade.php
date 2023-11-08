@extends('layouts.main')
    <link rel="stylesheet" href="{{ asset('assets/css/monitorArmada.css') }}">
@section('container')
    <div class="d-flex">
        <div class="row">
            <div id="carouselSlide" class="carousel slide">
                <div class="carousel-inner crsl">
                <div class="carousel-item active crslItem ">
                    <img src="https://images.unsplash.com/photo-1618805154647-7d89ac05926b?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class=" w-100 crsl1" alt="..." style="height: 1100px">
                    <div class="carousel-caption d-none d-md-block">
                        <h5 class="breadcumb mb-5"><a href="/" class="text-light">Beranda</a> / Monitor Armada</h5>
                        <h3>Tingkatkan Efektivitas Manajemen dan Reputasi Perusahaan</h3>
                    </div>
                </div>
                </div>
            </div>

            <div class="text-center justify-content-center mt-5 col-md-9 teksFitur">
                <h4 style="color: #47A992;">Platform Al-Jabbar untuk Industri Ekonomi</h4>
                <h2>Mudah dalam memonitor armada dan kinerja pengemudi</h2>
                <h5 class="text-secondary fw-normal mb-5">Transport Berkah Armada dapat mengoptimalkan visibilitas dan kendali pada armada dan pengemudi, untuk meningkatkan pelayanan dan kepuasan penumpang.</h5>
            </div>
            <div class="fiturSamping col-md-7 mb-5 mt-5 d-flex">
                <div class="cardSamping1 shadow-lg rounded border border-0" style="width: 25rem;">
                    <div class="card-body mt-5">
                        <h1><i class="fa-solid fa-chart-column" ></i></h1>
                        <h5 class="text-start">Mempermudah mengatur keuangan</h5>
                        <p class="card-text">Grafik Keuangan</p>
                    </div>
                </div>
                <div class="cardSamping2 shadow-lg rounded border border-0" style="width: 25rem;">
                    <div class="card-body mt-5">
                        <h1><i class="fa-solid fa-chart-column" ></i></h1>
                        <h5 class="text-start">Mempermudah mengatur keuangan</h5>
                        <p class="card-text">Grafik Keuangan</p>
                    </div>
                </div>
            </div>
            <div class="fitur col-md-7 mb-5 mt-5">
                <div class="card mb-5 border-0 shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-md-6" style="display: flex; flex: wrap;">
                            <img src="https://images.unsplash.com/photo-1548345680-f5475ea5df84?auto=format&fit=crop&q=80&w=2073&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        </div>
                        <div class="col-md-6">
                            <div class="card-body-right">
                                <h3>Pantau lokasi dan keberadaan armada</h3>
                                <h5 class="text-secondary fw-normal">Fitur GPS membantu menampilkan letak keberadaan armada</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-5 mb-5 border-0 shadow-lg">
                    <div class="row no-gutters">
                        <div class="col-md-6">
                            <div class="card-body-left">
                                <h3>Pantau lokasi dan keberadaan armada</h3>
                                <h5 class="text-secondary fw-normal">Fitur GPS membantu menampilkan letak keberadaan armada</h5>
                            </div>
                        </div>
                        <div class="col-md-6" style="display: flex">
                            <img src="https://images.unsplash.com/photo-1585583416718-5bea75d5312a?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
