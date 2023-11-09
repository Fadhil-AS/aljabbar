@extends('layouts.admin.mainAdmin')

@section('containAdmin')
    <p class="card-text ms-3 mt-3"><a href="#" class="text-none align-middle text-dark">Admin</a> <span class="text-secondary">/</span> <a href="/admin/helper" class="text-none align-middle text-dark">Driver</a> <span class="text-secondary">/</span> <a href="/admin/detailHelper" class="text-none align-middle text-dark">Detail Driver</a> </p>
    <div class="container">
        <div class="card mb-3 border-0 shadow" style="max-width: 100%;">
            <div class="row g-0">
                <div class="col-md-2">
                    <img src="https://images.unsplash.com/photo-1488161628813-04466f872be2?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="rounded-circle mt-3 ms-3 mb-3 me-3" style=" width: 175px; height: 175px;">
                </div>
                <div class="col-md-3">
                    <div class="card-body mt-4">
                        <h1 class="nama-driver mt-4">Kunto</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- data Driver --}}
    <div class="dt mb-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body ms-3 mb-3 me-3 mt-3">
                    <div class="card-item">
                        <div class ="profil-driver">
                            <div>
                                <h3 class="mb-5">Profil Driver</h3>
                            </div>
                            <table class="mt-3 mb-5">
                                <tr>
                                    <td><h5 class="me-5 mb-4">Tanggal Lahir</h5></td>
                                    <td><h4 class="me-5 mb-4">4 Januari 1987</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">NIK</h5></td>
                                    <td><h4 class="me-5 mb-4">320000274810927</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">Email</h5></td>
                                    <td><h4 class="me-5 mb-4">kunto@gmail.com</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">Nomor SIM</h5></td>
                                    <td><h4 class="me-5 mb-4">1326-0887-000055</h4></td>
                                </tr>
                                <tr>
                                    <td><h5 class="me-5 mb-4">Armada</h5></td>
                                    <td><h4 class="me-5 mb-4">VT001</h4></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
