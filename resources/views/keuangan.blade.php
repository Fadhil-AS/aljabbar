@extends('layouts.main')
<link rel="stylesheet" href="{{asset('assets/css/keuangan.css')}}">
@section('container')

    {{-- slide image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
            <div class="carousel-item active crslItem ">
                <img src="https://images.unsplash.com/photo-1627719172038-611c725920bc?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 crsl1" alt="...">
                <div class="carousel-caption d-none d-md-block">
                <h5 class="breadcumb"><a href="/" class="text-light">Beranda</a> / Manajemen Keuangan</h5>
                <h3>Mengelola keuangan menjadi lebih mudah dengan Grafik Keuangan dan Riwayat Perjalanan</h3>
            </div>
            </div>
        </div>
    </div>

    {{-- header --}}
    <div class="text-center justify-content-center mt-5">
        <h4 class="text-primary">Platform Al-Jabbar untuk Manajemen Keuangan</h4>
        <h2>Tingkatan efisiensi dalam mengatur keuangan</h2>
    </div>

    {{-- Card Fitur --}}
    <div class="cardGroup mt-5 d-flex container-fluid">
        <div class="card shadow-lg rounded border border-0" style="width: 18rem;">
            <div class="card-body mt-5">
                <h1><i class="fa-solid fa-chart-column" ></i></h1>
                <h5 class="text-start">Mempermudah mengatur keuangan</h5>
                <p class="card-text">Grafik Keuangan</p>
            </div>
        </div>

        <div class="card shadow-lg rounded border border-0" style="width: 18rem;">
            <div class="card-body mt-5">
                <h1><i class="fa-solid fa-clock-rotate-left"></i></h1>
                <h5 class="text-start">Melihat perjalanan yang telah dilalui</h5>
                <p class="card-text">Riwayat Perjalanan</p>
            </div>
        </div>
    </div>

    {{-- Fitur --}}
    <div class="cardFitur mt-5">
        <div class="card shadow-lg rounded border border-0" style="width: 50%;">
            <div class="row no-gutters">
                <div class= "col-md-6 ">
                    <img src="https://images.unsplash.com/photo-1561414927-6d86591d0c4f?auto=format&fit=crop&q=80&w=1973&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                </div>
                <div class= "col-md-5">
                    <div class="card-body">
                        <h3 class="card-title">Riwayat Perjalanan</h3>
                        <h5 class="text-secondary fw-normal">Fitur Riwayat untuk melihat perjalanan yang telah dilakukan</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="card card shadow-lg rounded border border-0 mt-5 mb-5" style="width: 50%;">
            <div class="row no-gutters">
                <div class="col-md-6">
                    <div class="card-body">
                        <h3 class="card-title">Pantau Grafik Keuangan</h3>
                        <h5 class="text-secondary fw-normal">Fitur Grafik keuangan untuk membantu tracking keuangan</h5>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="https://images.unsplash.com/photo-1591696205602-2f950c417cb9?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                </div>
            </div>
        </div>
    </div>
@endsection
