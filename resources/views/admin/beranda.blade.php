@extends('layouts.admin.mainAdmin')
    {{-- datatable --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
@section('containAdmin')
    {{-- breadcrumbs --}}
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/beranda" class="text-none align-middle text-dark">Beranda</a></p>
    <div class="container">
        <div class="card border-0 shadow card-bread ">
            <div class="card-body ms-3 mb-3 me-3 mt-3" style="color: #47A992;">
                <h1>Selamat Pagi</h1>
                <h4>PO Trans Berkah Armada</h4>
            </div>
        </div>
    </div>

    {{-- data beranda --}}
    <div class="dt mt-3 mb-3">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 md-3 me-3 mt-3" >
                    <div class="card-title">
                        <h3>Beranda</h3>
                    </div>
                    {{-- <a class="btn btn-success float-end mb-3" href="#"><i class="fa-solid fa-plus"></i> Tambah</a> --}}

                    <div class="card-item mt-3">
                        <table id="dataBeranda" class="display table " width="100%">
                            <thead class="table-dark">
                                <tr>
                                    <th>No</th>
                                    <th>Julukan</th>
                                    <th>Kelas</th>
                                    <th>KIR</th>
                                    <th>Driver</th>
                                    <th>Helper</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
                                    <td>1</td>
                                    <td>Red Velvet</td>
                                    <td>Executive</td>
                                    <td>22 Juli 2024</td>
                                    <td>Zilong</td>
                                    <td>Heru</td>
                                    <td>Perpal</td>
                                    <td>
                                        <a type="button" class="btn btn-success" style="background-color: #47A992" href="/admin/armada/detail">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kenzo</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Yanto</td>
                                    <td>Faris</td>
                                    <td>On Trip</td>
                                    <td>
                                        <a type="button" class="btn btn-success" style="background-color: #47A992" href="/admin/armada/detail">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Dream</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Kunto</td>
                                    <td>Kuyhaa</td>
                                    <td>On Trip</td>
                                    <td>
                                        <a type="button" class="btn btn-success" style="background-color: #47A992" href="/admin/armada/detail">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rangers</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Bagas</td>
                                    <td>Lorenzo</td>
                                    <td>On Trip</td>
                                    <td>
                                        <a type="button" class="btn btn-success" style="background-color: #47A992" href="/admin/armada/detail">Detail</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Black Pink</td>
                                    <td>Big Top</td>
                                    <td>22 September 2024</td>
                                    <td>Ronaldo</td>
                                    <td>Bimo</td>
                                    <td>On Trip</td>
                                    <td>
                                        <a type="button" class="btn btn-success" style="background-color: #47A992" href="/admin/armada/detail">Detail</a>
                                    </td>
                                </tr>
                                </tr>
                            </tbody>
                        </table>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-12" >
                                    <div class="canvas mt-3 mx-auto"  style="width: 400px; height: 400px;">
                                        <canvas id="donutChart" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="{{ asset('assets/js/admin/beranda.js') }}"></script>
@endsection
