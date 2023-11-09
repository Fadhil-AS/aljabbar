@extends('layouts.main')
    <link rel="stylesheet" href="{{ asset('assets/css/monitorArmada.css') }}">
@section('container')
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
        <div class="container-fluid mt-5" style="margin-bottom: 150px">
            <div class="container">
                <div class="text-center justify-content-center mt-5 mb-5 col-md-9 teksFitur">
                    <h4 style="color: #47A992;">Platform Al-Jabbar untuk Industri Ekonomi</h4>
                    <h2>Mudah dalam memonitor armada dan kinerja pengemudi</h2>
                    <h5 class="text-secondary fw-normal mb-5">Transport Berkah Armada dapat mengoptimalkan visibilitas dan kendali pada armada dan pengemudi, untuk meningkatkan pelayanan dan kepuasan penumpang.</h5>
                </div>
                <div class="fiturSamping col-md-9 mb-5 mt-5 d-flex" style="padding: 50px">
                    <div class="cardSamping1 shadow-lg rounded border border-0 me-5" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-location-dot"></i></h1>
                        <div class="card-body ms-2 me-2">
                            <h5 class="text-center mt-4">Mempermudah monitor armada</h5>
                            <p class="card-text text-center">Kecepatan, lokasi, dan rute armada terlihat secara langsung dari TBA</p>
                        </div>
                    </div>
                    <div class="cardSamping2 shadow-lg rounded border border-0" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-briefcase"></i></h1>
                        <div class="card-body ms-2 me-2">
                            <h5 class="text-center mt-4">Monitor kinerja driver</h5>
                            <p class="card-text text-center">Perilaku driver termonitor dari TBA secara langsung</p>
                        </div>
                    </div>
                </div>
                <div class="fitur col-md-9 mb-5 mt-5">
                    <div class="card mb-5 border-0">
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
                    <div class="card mt-5 mb-5 border-0">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <div class="card-body-left">
                                    <h3>Pantau lokasi dan keberadaan driver</h3>
                                    <h5 class="text-secondary fw-normal">Fitur GPS membantu menampilkan letak keberadaan driver</h5>
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
