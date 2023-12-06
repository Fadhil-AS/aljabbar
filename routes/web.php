<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\bergabungController;
use App\Http\Controllers\helperController;
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

// helper
Route::get('/admin/helper', [helperController::class, 'index'])->name('admin.helper');
Route::post('/admin/helper/posts', [helperController::class, 'store'])->name('post.helper');
Route::get('/admin/helper/{id}/detail', [helperController::class, 'show'])->name('detail.helper');
Route::get('/admin/helper/{id}/edit', [helperController::class, 'edit'])->name('edit.helper');
Route::put('/admin/helper/{id}', [helperController::class, 'update'])->name('update.helper');
Route::delete('/admin/helper/delete/{id}', [helperController::class, 'destroy'])->name('destroy.helper');

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
