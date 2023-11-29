<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bergabungController;

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


// landing page
Route::get('/', function () {
    return view('homepage');
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

//bergabung
// Route::get('/bergabung', [bergabungController::class, 'index']);
Route::get('/bergabung', [bergabungController::class, 'create']);
// Route::post('/bergabung/posts', [bergabungController::class, 'store'])->name('posts.gabung');
Route::post('/bergabung/posts', function () {
    return redirect('/bergabung/posts')->with('success', 'Post berhasil dibuat!');
});

// admin
Route::get('/admin', function () {
    return view('admin.beranda');
});


Route::get('/admin/armada', function () {
    return view('admin.armada');
});

// crud armada
Route::get('/admin/armada/detail', function () {
    return view('admin.crud.armada.detailArmada');
});

Route::get('/admin/armada/edit', function () {
    return view('admin.crud.armada.editArmada');
});

Route::get('/admin/helper', function () {
    return view('admin.helper');
});

// crud helper
Route::get('/admin/helper/detail', function () {
    return view('admin.crud.helper.detailHelper');
});

Route::get('/admin/helper/edit', function () {
    return view('admin.crud.helper.editHelper');
});

Route::get('/admin/keuangan', function () {
    return view('admin.keuangan');
});

// crud driver
Route::get('/admin/driver', function () {
    return view('admin.driver');
});

Route::get('/admin/driver/detail', function () {
    return view('admin.crud.driver.detailDriver');
});

Route::get('/admin/driver/edit', function () {
    return view('admin.crud.driver.editDriver');
});
