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
              <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam id cupiditate facilis quis reiciendis sint aliquam ex velit explicabo earum consectetur</h3>
            </div>
          </div>
        </div>
    </div>

    <div class="text-center justify-content-center mt-5">
        <h4 class="text-primary">Platform Al-Jabbar untuk Industri Ekonomi</h4>
        <h2>Mudah dalama mengatur operasional armada dan perjalanan</h2>
        <h5 class="text-secondary fw-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente odio praesentium consequatur quidem architecto, nobis sit, eligendi atque maxime, eos explicabo.</h5>
    </div>
@endsection
