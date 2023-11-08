@extends('layouts.admin.mainAdmin')

@section('containAdmin')
    <p class="card-text ms-3 mt-5"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/helper" class="text-none align-middle text-dark">Helper</a> <span class="text-secondary">/</span> <a href="/admin/helper/edit" class="text-none align-middle text-dark">Edit</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Update data Helper</h1>
                <h4>Perbaharui data helpermu disini</h4>
            </div>
        </div>
    </div>
    {{-- data helper --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <form action="" method="post" class="form-valid">
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <input type="number" name="idHelper" id="id_helper" value="1" hidden>
                                    <label for="namaHelper" class="form-label">Nama helper:</label>
                                    <input type="text" name="nama" id="namaHelper" value="Kuyhaa" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" name="email" id="email" value="kuyhaa@gmail.com" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nik" class="form-label">NIK</label>
                                    <input type="number" name="nik" id="nik" value="000001" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="foto_profile" class="form-label">Foto profile:</label>
                                    <input type="file" name="foto" id="foto_profile" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tanggalLahir" class="form-label">Tanggal lahir:</label>
                                    <input type="date" name="lahir" id="tanggalLahir" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="id_armada" class="form-label">Armada:</label>
                                    <input type="text" name="namaArmada" id="id_armada" class="form-control" value="VT001" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-md text-light" style="background-color: #47a992">Simpan</button>
                                        <a href="/admin/helper" class="btn text-center btn-outline-danger">Batalkan</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- jquery --}}
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    {{-- jbvalidator --}}
    <script src="https://cdn.jsdelivr.net/npm/@emretulek/jbvalidator"></script>

    {{-- js --}}
    <script src="{{ asset('assets/js/admin/crud/helper/editHelper.js') }}"></script>
@endsection