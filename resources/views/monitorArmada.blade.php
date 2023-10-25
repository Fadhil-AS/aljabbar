@extends('layouts.main')
<link rel="stylesheet" href="{{ asset('assets/css/monitorArmada.css') }}">
@section('container')
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
        <div class="carousel-item active crslItem ">
            <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?auto=format&fit=crop&q=80&w=2069&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 crsl1" alt="...">
            <div class="carousel-caption d-none d-md-block">
            <h5 class="breadcumb"><a href="/" class="text-light">Beranda</a> / Monitor Armada</h5>
            <h3>Tingkatkan Efektivitas Manajemen dan Reputasi Perusahaan</h3>
            </div>
        </div>
        </div>
    </div>

    <div class="text-center justify-content-center mt-5">
        <h4 class="text-primary">Platform Al-Jabbar untuk Industri Ekonomi</h4>
        <h2>Mudah dalam memonitor armada dan kinerja pengemudi</h2>
        <h5 class="text-secondary fw-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente odio praesentium consequatur quidem architecto, nobis sit, eligendi atque maxime, eos explicabo.</h5>
    </div>
    <div class="fitur">
        <div class="card mt-5" style="width: 50%;">
            <div class="row no-gutters">
                <div class="col-md-6">
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
        <div class="card mt-5 mb-5" style="width: 50%;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="card-body-left">
                        <h3>Pantau lokasi dan keberadaan armada</h3>
                        <h5 class="text-secondary fw-normal">Fitur GPS membantu menampilkan letak keberadaan armada</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1585583416718-5bea75d5312a?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>

@endsection
