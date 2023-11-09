@extends('layouts.main')
<link rel="stylesheet" href="{{asset('assets/css/keuangan.css')}}">
@section('container')

    {{-- slide image --}}
    <div id="carouselSlide" class="carousel slide">
        <div class="carousel-inner crsl">
            <div class="carousel-item active crslItem ">
                <img src="https://images.unsplash.com/photo-1627719172038-611c725920bc?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="d-block w-100 crsl1" alt="..." style="height: 1100px">
                <div class="carousel-caption d-none d-md-block">
                <h5 class="breadcumb mb-5"><a href="/" class="text-light">Beranda</a> / Manajemen Keuangan</h5>
                <h3>Mengelola keuangan menjadi lebih mudah dengan Grafik Keuangan dan Riwayat Perjalanan</h3>
            </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-5" style="margin-bottom: 150px">
        <div class="container">
            {{-- header --}}
            <div class="text-center justify-content-center ">
                <h4 style="color: #47a992">Platform Al-Jabbar untuk Manajemen Keuangan</h4>
                <h2 >Tingkatan efisiensi dalam mengatur keuangan armada</h2>
                <h5 class="text-center text-secondary fw-normal mb-5" style="padding-left: 50px; padding-right: 50px; font-weight: 400;">Kendalikan keuangan perusahaan dengan mudah. Monitor dan optimalkan pengeluaran dan pendapatan perusahaan bersama Transport Berkah Armada</h5>
            </div>

            {{-- Card Fitur --}}
            <div class="row justify-content-center" style="padding: 50px;">
                <div class="col-md-4">
                    <div class="card shadow border-0" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-chart-column"></i></h1>
                        <div class="card-body">
                            <h5 class="text-center">Grafik Keuangan</h5>
                            <p class="card-text text-center">Membantu untuk memantau keuangan armada dengan menggunakan grafik</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card shadow border-0" style="width: 350px; height: 300px">
                        <h1 class="text-center" style="padding-top: 50px"><i class="fa-solid fa-clock-rotate-left"></i></h1>
                            <div class="card-body">
                                <h5 class="text-center">Pantau Pemasukan dan Pengeluaran Armada</h5>
                                <p class="card-text text-center">Membantu untuk memantau pemasukan dan pengeluaran armada</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        {{-- Fitur --}}
        <div class="cardFitur col-md-9 mb-5 mt-4">
            <div class="card mb-5 border-0">
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <img src="https://images.unsplash.com/photo-1561414927-6d86591d0c4f?auto=format&fit=crop&q=80&w=1973&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="..." style="width: 450px; height: 290px;">
                    </div>
                    <div class="col-md-6">
                        <div class="card-body-right">
                            <h3 class="">Pemasukan dan Pengeluaran Armada</h3>
                            <h5 class="text-secondary fw-normal">Fitur Pemasukan dan Pengeluaran Armada membantu menampilkan pemasukan dan pengeluaran armada</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-5 mt-5 border-0" >
                <div class="row no-gutters">
                    <div class="col-md-6">
                        <div class="card-body-left">
                            <h3>Grafik Keuangan</h3>
                            <h5 class="text-secondary fw-normal">Fitur Grafik Keuangan membantu menampilkan grafik keuangan armada</h5>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img src="https://images.unsplash.com/photo-1591696205602-2f950c417cb9?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="..." style="width: 450px; height: 290px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
