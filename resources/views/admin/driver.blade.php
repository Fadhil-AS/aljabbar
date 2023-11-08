@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@section('containAdmin')
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/driver" class="text-none align-middle text-dark">Driver</a></p>
    <div class="container mt-3">
        <div class="card border-0 shadow card-bread ">
            <div class="card-body ms-3 mb-3 me-3 mt-3 " style="color: #47A992;">
                <h1>Awasi Drivermu!</h1>
                <h4>Atur manajemen drivermu disini</h4>
            </div>
        </div>
    </div>

    {{-- data Driver --}}
    <div class="dt mt-3 mb-3">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h3>Daftar Driver</h3>
                    </div>
                    <a class="btn btn-success float-end mb-3" href="#"><i class="fa-solid fa-plus"></i> Tambah</a>
                    <div class="card-item">
                        <table id="dataDriver" class="display table" width="100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Nama Driver</th>
                                    <th>NIK</th>
                                    <th>Armada</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Kunto</td>
                                    <td>320000274810927</td>
                                    <td>VT001</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="/admin/driver/detailDriver"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Bagas</td>
                                    <td>320000274810927</td>
                                    <td>VT001</td>
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
                                    <td>3</td>
                                    <td>Ronaldo</td>
                                    <td>320000274810927</td>
                                    <td>VT002</td>
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
                                    <td>4</td>
                                    <td>Messi</td>
                                    <td>320000274810927</td>
                                    <td>VT002</td>
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
                                    <td>5</td>
                                    <td>Zilong</td>
                                    <td>320000274810927</td>
                                    <td>VT003</td>
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
                                    <td>6</td>
                                    <td>Yanto</td>
                                    <td>320000274810927</td>
                                    <td>VT003</td>
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
                                    <td>7</td>
                                    <td>Barong</td>
                                    <td>320000274810927</td>
                                    <td>VT004</td>
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
                                    <td>8</td>
                                    <td>Padi</td>
                                    <td>320000274810927</td>
                                    <td>VT004</td>
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
                                    <td>9</td>
                                    <td>Hendra</td>
                                    <td>3212345678919850</td>
                                    <td>VT005</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><a class="dropdown-item" href="/admin/driver/detailDriver"><i class="fa-regular fa-eye"></i> Lihat</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</a></li>
                                              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Jodie</td>
                                    <td>320000274810927</td>
                                    <td>VT005</td>
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
    <script src="{{ asset('assets/js/admin/driver.js') }}"></script>
@endsection
