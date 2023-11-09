@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link rel="stylesheet" href="{{ asset('assets/css/admin/crud/detailArmada.css') }}">
@section('containAdmin')
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none align-middle text-dark">Armada</a> <span class="text-secondary">/</span> <a href="/admin/detailArmada" class="text-none align-middle text-dark">Detail Armada</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="https://images.unsplash.com/photo-1657024574214-c614211d3ff9?auto=format&fit=crop&q=80&w=1887&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-circle mt-3 ms-3 mb-3 me-3" style=" width: 175px; height: 175px;">
                </div>
                <div class="col-md-3">
                    <div class="card-body mt-4">
                        <h1 id="noBodyLabel"></h1>
                        <h5 id="julukanLabel"></h5>
                        <h5 id="platNoLabel"></h5>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card-body mt-4">
                        <div class="d-flex">
                            <i class="fa-solid fa-chair ikon"></i></i><h4 id="kapasitasLabel"></h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-crown ikon"></i></i><h4 id="kelasLabel"></h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-clock-rotate-left ikon"></i></i><h4 id="statusLabel"></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card-body mt-4">
                        <div class="d-flex">
                            <i class="fa-solid fa-user ikon"></i><h4 id="driver1Label"></h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-solid fa-user ikon"></i><h4 id="driver2Label"></h4>
                        </div>
                        <div class="d-flex">
                            <i class="fa-regular fa-user ikon"></i><h4 id="helperLabel"></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- data Armada --}}
    {{-- <div class="dt mt-3"> --}}
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h3>Keberangkatan</h3>
                    </div>
                    <div class="card-item mt-3 ms-4">
                        <div class="d-flex">
                            <h5 class="col-md-2">Bandung</h5>
                            <i class="fa-solid fa-repeat col-md-2"></i>
                            <h5 class="col-md-5">Denpasar</h5>
                            <i class="fa-regular fa-calendar col-md-0"></i>
                            <h5 class="col-md-1">09.00</h5>
                            <h5 class="col-md-2">12/22/2023</h5>
                        </div>
                        <h5 class="mt-3">30 Penumpang</h5>
                    </div>
                    <div class="card-title mt-3">
                        <h3>Live Location</h3>
                    </div>
                    <div class="map ms-4 me-4">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.307499364223!2d107.62910511023743!3d-6.973001668248973!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1697050539864!5m2!1sid!2sid" class="w-100"  height="400" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="card-title mt-3">
                        <h3>Keuangan</h3>
                    </div>
                    <div class="card-item mt-2">
                        <div class="d-flex mt-3 ms-4">
                            <h5>Uang Jalan : </h5>
                            <h5 class="ms-2">Rp5.000.000</h5>
                        </div>
                        <div class="mt-3">
                            <table id="dataKeuanganArmada" class="display table" width="100%">
                                <thead class="table-dark">
                                    <tr>
                                        <th>No</th>
                                        <th>Jenis Pengeluaran</th>
                                        <th>Jumlah</th>
                                        <th>Waktu, Tanggal</th>
                                        <th>Bukti</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Solar</td>
                                        <td>Rp1.000.000</td>
                                        <td>10.00, 02 Nov 2023</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" style="background-color: #47a992" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Bukti
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>E-Toll</td>
                                        <td>Rp1.000.000</td>
                                        <td>10.00, 02 Nov 2023</td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-success dropdown-toggle" style="background-color: #47a992" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                Bukti
                                                </button>
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
    {{-- </div> --}}

    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/js/admin/crud/armada/detailArmada.js') }}"></script>
@endsection
