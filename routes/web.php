<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bergabungController;
use App\Http\Controllers\helperController;
use App\Http\Controllers\driverController;
use App\Http\Controllers\armadaController;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\loginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make som{{ ethi }}ng great!
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
    return view('keuangan');{{  }}
});

Route::get('/selengkapnya', function () {
    return view('selengkapnya');{{  }}
});

// login system
Route::get('/login', function () {{{  }}
    return view('loginsys.login');
});

//bergabung
// Route::get('/bergabung', [bergabungController::class, 'index']);
Route::get('/bergabung', [bergabungController::class, 'create'])->name('bergabung');
Route::post('/bergabung/posts', [bergabungController::class, 'store'])->name('posts.gabung');

// admin
Route::get('/admin', function () {
    return view('admin.beranda');
});

//beranda
Route::get('/admin', [berandaController::class, 'index'])->name('admin');


// helper
Route::get('/admin/helper', [helperController::class, 'index'])->name('admin.helper');
Route::post('/admin/helper/posts', [helperController::class, 'store'])->name('post.helper');
Route::get('/admin/helper/{id}/detail', [helperController::class, 'show'])->name('detail.helper');
Route::get('/admin/helper/{id}/edit', [helperController::class, 'edit'])->name('edit.helper');
Route::put('/admin/helper/{id}', [helperController::class, 'update'])->name('update.helper');
Route::delete('/admin/helper/delete/{id}', [helperController::class, 'destroy'])->name('destroy.helper');

// driver
Route::get('/admin/driver', [driverController::class, 'index'])->name('admin.driver');
Route::post('/admin/driver/posts', [driverController::class, 'store'])->name('post.driver');
Route::get('/admin/driver/{id}/detail', [driverController::class, 'show'])->name('detail.driver');
Route::get('/admin/driver/{id}/edit', [driverController::class, 'edit'])->name('edit.driver');
Route::put('/admin/driver/{id}', [driverController::class, 'update'])->name('update.driver');
Route::delete('/admin/driver/delete/{id}', [driverController::class, 'destroy'])->name('destroy.driver');

// armada
Route::get('/admin/armada', [armadaController::class, 'index'])->name('admin.armada');
Route::post('/admin/armada/posts', [armadaController::class, 'store'])->name('post.armada');
Route::get('/admin/armada/{id}/detail', [armadaController::class, 'show'])->name('detail.armada');
Route::get('/admin/armada/{id}/edit', [armadaController::class, 'edit'])->name('edit.armada');
Route::put('/admin/armada/{id}', [armadaController::class, 'update'])->name('update.armada');
Route::delete('/admin/armada/delete/{id}', [armadaController::class, 'destroy'])->name('destroy.armada');


//login logout
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'authenticate']);
Route::post('/logout', [loginController::class, 'logout']);

Route::get('/admin/keuangan', function () {
    return view('admin.keuangan');
});

