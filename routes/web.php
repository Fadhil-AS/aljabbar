<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage');
});

Route::get('/bergabung', function () {
    return view('gabung');
});

Route::get('/monitor', function () {
    return view('monitorArmada');
});

Route::get('/pengingat', function () {
    return view('pengingat');
});

Route::get('/keuangan', function () {
    return view('keuangan');
});

Route::get('/selengkapnya', function () {
    return view('selengkapnya');
});

// login system
Route::get('/login', function () {
    return view('loginsys.login');
});

Route::get('/signup', function () {
    return view('loginsys.signup');
});

// admin
Route::get('/admin', function () {
    return view('admin.beranda');
});

Route::get('/admin/armada', function () {
    return view('admin.armada');
});

Route::get('/admin/driver', function () {
    return view('admin.driver');
});

Route::get('/admin/helper', function () {
    return view('admin.helper');
});
