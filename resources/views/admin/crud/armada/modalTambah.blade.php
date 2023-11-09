<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModal">Tambah Data Armada</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <form action="" method="post" class="form-valid">
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <input type="number" name="nomorArmada" id="id_armada" hidden>
                                <label for="platNomorInput" class="form-label">Plat nomor:</label>
                                <input type="text" name="platNomor" id="platNomorInput" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="noBodyInput" class="form-label">No Body:</label>
                                <input type="text" name="noBodyInput" id="noBodyInput" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="fotoArmadaInput" class="form-label">Foto Armada :</label>
                                <input type="file" name="fotoArmadaInput" id="fotoArmadaInput" class="form-control" required>
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label for="kelasInput" class="form-label">Kelas :</label>
                                <input type="text" name="kelasInput" id="kelasInput" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="kapasitasInput" class="form-label">Kapasitas :</label>
                                <input type="number" name="kapasitasInput" id="kapasitasInput" class="form-control" required>
                            </div>
                            <div class="col-md-4">
                                <label for="julukanInput" class="form-label">Julukan/AKA :</label>
                                <input type="text" name="julukanInput" id="julukanInput" class="form-control" required>
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
                        <div class="col-md-12">
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-md text-light" style="background-color: #47a992">Simpan</button>
                                <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Batalkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
