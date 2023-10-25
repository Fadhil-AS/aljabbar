@extends('layouts.main')

<link rel="stylesheet" href="{{asset('assets/css/gabung.css')}}">

@section('container')
    <div class="container1">
        <div class="mx-auto">
            <div class="text-center my-4">
                <h3>Masukkan Data Diri</h3>
            </div>
            <form>
                <div class="mb-3">
                    <label for="inputNama" class="form-label">Nama Lengkap</label>
                    <input type="nama" class="form-control" id="inputNama">
                </div>
                <div class="mb-3">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputEmail4">
                </div>
                <div class="mb-3">
                    <label for="inputPerusahaan" class="form-label">Perusahaan</label>
                    <input type="text" class="form-control" id="inputPerusahaan">
                </div>
                <div class="mb-3">
                    <label for="inputJabatan" class="form-label">Jabatan Pekerjaan</label>
                    <input type="text" class="form-control" id="inputJabatan">
                </div>
                <div class="mb-3">
                    <label for="inputTelepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="inputTelepon">
                </div>
                <div class="mb-3">
                    <label for="inputJumKendaraan" class="form-label">Jumlah Kendaraan/Armada</label>
                    <input type="text" class="form-control" id="inputJumKendaraan">
                </div>
                <div class="mb-3">
                    <label for="inputJenis" class="form-label">Jenis Bus</label>
                    <select id="inputJenis" class="form-select">
                      <option selected >Choose...</option>
                      <option>Pariwisata</option>
                      <option>Reguler</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="inputProvinsi" class="form-label">Provinsi</label>
                    <input type="text" class="form-control" id="inputProvinsi">
                </div>
                <div class="mb-3">
                    <label for="floatingTextarea" class="form-label">Alamat</label>
                    <textarea class="form-control" id="floatingTextarea"></textarea>
                </div>
                <button type="submit" class="button-gabung">Bergabung</button>
            </form>
        </div>
    </div>

@endsection
