@extends('layouts.admin.mainAdmin')

{{-- sweet alert --}}
<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.min.css" rel="stylesheet">

@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none align-middle text-dark">Armada</a> <span class="text-secondary">/</span> <a href="/admin/armada/edit" class="text-none align-middle text-dark">Edit</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Update data Armada</h1>
                <h4>Perbaharui data armadamu disini</h4>
            </div>
        </div>
    </div>
    {{-- data helper --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <form action="{{ route('update.trayekarmada', $dataArm->id_armada )}}" method="post" class="form-valid" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="status" class="form-label">Status :</label>
                                    <select name="status" id="status" class="form-control" required>
                                        <option value="" selected disabled>Pilih Status</option>
                                        <option value="Perpal">Perpal</option>
                                        <option value="On Trip">On Trip</option>
                                        <option value="Perbaikan">Perbaikan</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="tempat_awal" class="form-label">Tempat Awal :</label>
                                    <input type="text" name="tempat_awal" id="tempat_awal" value="{{ $dataArm->tempat_awal }}" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="tempat_akhir" class="form-label">Tempat Akhir :</label>
                                    <input type="text" name="tempat_akhir" id="tempat_akhir" value="{{ $dataArm->tempat_akhir }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-6">
                                    <label for="jam_keberangkatan" class="form-label">Jam Keberangkatan :</label>
                                    <input type="time" name="jam_keberangkatan" id="jam_keberangkatan" value="{{ $dataArm->jam_keberangkatan }}" class="form-control" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="tanggal_keberangkatan" class="form-label">Tanggal Keberangkatan:</label>
                                    <input type="date" name="tanggal_keberangkatan" id="tanggal_keberangkatan" value="{{ $dataArm->tanggal_keberangkatan }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="penumpang" class="form-label">Jumlah Penumpang :</label>
                                    <input type="text" name="penumpang" id="penumpang" value="{{ $dataArm->penumpang }}" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-md text-light" onclick="editTrayekArmada()" style="background-color: #47a992">Simpan</button>
                                        <a href="/admin/armada" class="btn text-center btn-outline-danger">Batalkan</a>
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
    <script src="{{ asset('assets/js/admin/crud/armada/editTrayekArmada.js') }}"></script>

    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.0/dist/sweetalert2.all.min.js"></script>
@endsection
