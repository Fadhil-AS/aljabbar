@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
@section('containAdmin')
    {{-- breadcrumbs --}}
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/armada" class="text-none align-middle text-dark">Armada</a></p>
    <div class="container mt-3">
        <div class="card border-0 shadow card-bread ">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Awasi Armadamu!</h1>
                <h4>Atur manajemen armadamu disini</h4>
            </div>
        </div>
    </div>

    {{-- data Armada --}}
    <div class="dt mt-3 mb-3">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-title">
                        <h3>Daftar Armada</h3>
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
                                    <td>22 Juli 2024</td>
                                    <td>Red Velvet</td>
                                    <td>Perpal</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><button class="dropdown-item detail" href="#"
                                                data-noBody="VT001"
                                                data-nomor="D 7335 VGA"
                                                data-julukan="Red Velvet"
                                                data-kapasitas="32"
                                                data-kelas="Executive"
                                                data-KIR="22 Juli 2024"
                                                data-status="Perpal"
                                                data-driver1="Kunto"
                                                data-driver2="Bagas"
                                                data-helper="Kuyhaa"
                                                data-kotaawal="Bandung"
                                                data-kotatujuan="Denpasar"
                                                data-jamberangkat="09:00"
                                                data-tanggalberangkat="2 November 2023"><i class="fa-regular fa-eye"></i> Lihat</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</button></li>
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
                                    <td>22 September 2024</td>
                                    <td>Kenzo</td>
                                    <td>On Trip</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><button class="dropdown-item detail" href="#"
                                                data-noBody="VT002"
                                                data-nomor="D 6253 PIU"
                                                data-julukan="Kenzo"
                                                data-kapasitas="26"
                                                data-kelas="Big Top"
                                                data-KIR="22 September 2024"
                                                data-status="On Trip"
                                                data-driver1="Ronaldo"
                                                data-driver2="Messi"
                                                data-helper="Lorenzo"
                                                data-kotaawal="Bandung"
                                                data-kotatujuan="Denpasar"
                                                data-jamberangkat="09:00"
                                                data-tanggalberangkat="02 November 2023">
                                                <i class="fa-regular fa-eye"></i> Lihat</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>VT003</td>
                                    <td>D 7735 VGA</td>
                                    <td>26</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Dream</td>
                                    <td>On Trip</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><button class="dropdown-item detail" href="#"
                                                data-noBody="VT003"
                                                data-nomor="D 7735 VGA"
                                                data-julukan="Dream"
                                                data-kapasitas="26"
                                                data-kelas="Big Top"
                                                data-KIR="22 September 2024"
                                                data-status="On Trip"
                                                data-driver1="Zilong"
                                                data-driver2="Yanto"
                                                data-helper="Heru"
                                                data-kotaawal="Bandung"
                                                data-kotatujuan="Denpasar"
                                                data-jamberangkat="09:00"
                                                data-tanggalberangkat="02 November 2023">
                                                <i class="fa-regular fa-eye"></i> Lihat</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>VT004</td>
                                    <td>D 7777 VGA</td>
                                    <td>26</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Rangers</td>
                                    <td>On Trip</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><button class="dropdown-item detail" href="#"
                                                data-noBody="VT004"
                                                data-nomor="D 7777 VGA"
                                                data-julukan="Rangers"
                                                data-kapasitas="26"
                                                data-kelas="Big Top"
                                                data-KIR="22 September 2024"
                                                data-status="On Trip"
                                                data-driver1="Barong"
                                                data-driver2="Padi"
                                                data-helper="Bimo"
                                                data-kotaawal="Bandung"
                                                data-kotatujuan="Denpasar"
                                                data-jamberangkat="09:00"
                                                data-tanggalberangkat="02 November 2023">
                                                <i class="fa-regular fa-eye"></i> Lihat</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</button></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>VT005</td>
                                    <td>D 7562 VGA</td>
                                    <td>26</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Black Pink</td>
                                    <td>On Trip</td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-success dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                              Details
                                            </button>
                                            <ul class="dropdown-menu">
                                              <li><button class="dropdown-item detail" href="#"
                                                data-noBody="VT005"
                                                data-nomor="D 7562 VGA"
                                                data-julukan="Black Pink"
                                                data-kapasitas="26"
                                                data-kelas="Big Top"
                                                data-KIR="22 September 2024"
                                                data-status="On Trip"
                                                data-driver1="Hendra"
                                                data-driver2="Jodie"
                                                data-helper="Faris"
                                                data-kotaawal="Bandung"
                                                data-kotatujuan="Denpasar"
                                                data-jamberangkat="09:00"
                                                data-tanggalberangkat="02 November 2023">
                                                <i class="fa-regular fa-eye"></i> Lihat</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-regular fa-pen-to-square"></i> Edit</button></li>
                                              <li><button class="dropdown-item" href="#"><i class="fa-solid fa-trash"></i> Hapus</button></li>
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
    <script src="{{ asset('assets/js/admin/armada.js') }}"></script>
@endsection
