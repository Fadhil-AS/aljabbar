@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@section('containAdmin')
    {{-- breadcrumbs --}}
    <div class="bread mt-5">
        <div class="container cont-bread">
            <div class="card border-0 shadow card-bread ">
                <div class="card-body">
                    <h5 class="card-text"><a href="#" class="text-none text-dark align-middle">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none text-dark align-middle">Armada</a></h5>
                </div>
            </div>
        </div>
    </div>

    {{-- data Armada --}}
    <div class="dt mt-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Armada</h3>
                    </div>
                    <a class="btn btn-success float-end mb-3" href="#"><i class="fa-solid fa-plus"></i> Tambah</a>
                    <div class="card-item">
                        <table id="dataArmada" class="display table" width="100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>No Body</th>
                                    <th>Plat Nomor</th>
                                    <th>Kursi</th>
                                    <th>Kelas</th>
                                    <th>KIR</th>
                                    <th>Julukan</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>VT001</td>
                                    <td>D 7335 VGA</td>
                                    <td>32</td>
                                    <td>Executive</td>
                                    <td>22-Jul-2024</td>
                                    <td>Red Velvet</td>
                                    <td>Perpal</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>VT002</td>
                                    <td>D 6253 PIU</td>
                                    <td>26</td>
                                    <td>Big Top</td>
                                    <td>22-Sep-2024</td>
                                    <td>Kenzo</td>
                                    <td>On Trip</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/js/armada.js') }}"></script>
@endsection
