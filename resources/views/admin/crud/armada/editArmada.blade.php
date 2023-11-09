@extends('layouts.admin.mainAdmin')

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
                        <form action="" method="post" class="form-valid">
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <input type="number" name="nomorArmada" id="id_armada" hidden>
                                    <label for="platNomorInput" class="form-label">Plat nomor:</label>
                                    <input type="text" name="platNomor" id="platNomorInput" value="D 7335 VGA" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="noBodyInput" class="form-label">No Body:</label>
                                    <input type="text" name="noBodyInput" id="noBodyInput" value="VT001" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="fotoArmadaInput" class="form-label">Foto Armada :</label>
                                    <input type="file" name="fotoArmadaInput" id="fotoArmadaInput" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="kelasInput" class="form-label">Kelas :</label>
                                    <input type="text" name="kelasInput" id="kelasInput" value="Executive" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="kapasitasInput" class="form-label">Kapasitas :</label>
                                    <input type="number" name="kapasitasInput" id="kapasitasInput" value="32" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="julukanInput" class="form-label">Julukan/AKA :</label>
                                    <input type="text" name="julukanInput" id="julukanInput" value="Red Velvet" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-4">
                                    <label for="jarakTempuhInput" class="form-label">Jarak Tempuh :</label>
                                    <input type="number" name="jarakTempuhInput" id="jarakTempuhInput" class="form-control" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="kirInput" class="form-label">Tanggal KIR :</label>
                                    <input type="date" name="kirInput" id="kirInput" class="form-control" required>
                                </div>
                            </div>
                            <div class="row pb-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-md text-light" style="background-color: #47a992">Simpan</button>
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
    <script src="{{ asset('assets/js/admin/crud/helper/editHelper.js') }}"></script>
@endsection
