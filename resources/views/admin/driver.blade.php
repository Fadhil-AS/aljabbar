@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@section('containAdmin')
    {{-- breadcrumbs --}}
    <div class="bread mt-5">
        <div class="container cont-bread">
            <div class="card border-0 shadow card-bread ">
                <div class="card-body">
                    <h5 class="card-text"><a href="#" class="text-none text-dark align-middle">Admin</a> <span class="text-secondary">/</span> <a href="/admin/helper" class="text-none text-dark align-middle">Driver</a></h5>
                </div>
            </div>
        </div>
    </div>

    {{-- data Driver --}}
    <div class="dt mt-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Driver</h3>
                    </div>
                    <a class="btn btn-success float-end mb-3" href="#"><i class="fa-solid fa-plus"></i> Tambah</a>
                    <div class="card-item">
                        <table id="dataDriver" class="display table" width="100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Driver</th>
                                    <th>Tanggal Lahir</th>
                                    <th>NIK</th>
                                    <th>Nomor SIM</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Zilong</td>
                                    <td>9 Januari 1980</td>
                                    <td>3212345678919850</td>
                                    <td>1457-6869-000054</td>
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
                                    <td>Yanto</td>
                                    <td>1 Januari 1980</td>
                                    <td>320000274810927</td>
                                    <td>1234-5678-000019</td>
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
    <script src="{{ asset('assets/js/driver.js') }}"></script>
@endsection
