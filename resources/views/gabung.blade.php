@extends('layouts.main')

{{-- <link rel="stylesheet" href="{{asset('assets/css/gabung.css')}}"> --}}

@section('container')
    <div class="container-fluid" style="margin-top: 150px; margin-bottom: 150px">
        <div class="container mx-auto">
            <div class="card border-0 shadow border-radius">
                <h2 class="text-center pt-5">Masukkan Data Diri</h2>
                <div class="card-body">
                    <form action="" method="post" class="form-valid">
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputnamaLengkap" class="form-label">Nama Lengkap</label>
                                <input type="text" name="namaLengkap" id="inputnamaLengkap" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputemail" class="form-label">Email</label>
                                <input type="email" name="email" id="inputemail" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputpassword" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="inputpassword" class="form-control" required>
                                    <span class="input-group-text icon" id="id_icon"><i class="fa-regular fa-eye"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-4">
                                <label for="inputPerusahaan" class="form-label">Nama Perusahaan</label>
                                <input type="text" name="perusahaan" id="inputPerusahaan" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputjabatan" class="form-label">Jabatan pekerjaan</label>
                                <input type="text" name="jabatan" id="inputJabatan" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="inputTelephone" class="form-label">Nomor Telephone</label>
                                <input type="number" name="telephone" id="inputTelephone" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-6">
                                <label for="inputJumlahKendaraan" class="form-label">Jumlah Kendaraan</label>
                                <input type="number" name="jumlahKendaraan" id="inputJumlahKendaraan" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="inputJenisBus" class="form-label">Jumlah Kendaraan</label>
                                <select id="inputJenisBus" class="form-select" required>
                                    <option selected >Choose...</option>
                                    <option>Pariwisata</option>
                                    <option>Reguler</option>
                                </select>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <label for="inputProvinsi" class="form-label">Provinsi</label>
                                <input type="text" class="form-control" name="provinsi" id="inputProvinsi" required>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <label for="taAlamat" class="form-label">Alamat</label>
                                <textarea class="form-control" id="taAlamat" name="alamat" required></textarea>
                            </div>
                        </div>
                        <div class="row pt-5">
                            <div class="col-md-12">
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-md text-light" style="background-color: #47a992">Bergabung</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>
    <script src="{{ asset('assets/js/gabung.js') }}"></script>
    <script src="{{ asset('assets/js/showPassGabung.js') }}"></script>
@endsection
