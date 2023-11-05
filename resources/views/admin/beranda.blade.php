@extends('layouts.admin.mainAdmin')

@section('containAdmin')
    {{-- breadcrumbs --}}
    <div class="bread mt-5">
        <div class="container cont-bread">
            <div class="card border-0 shadow card-bread ">
                <div class="card-body">
                    <h5 class="card-text"><a href="/admin" class="text-none text-dark align-middle">Admin</a></h5>
                </div>
          </div>
        </div>
    </div>

    {{-- data beranda --}}
    <div class="dt mt-5">
        <div class="container">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <div class="card-title">
                        <h3>Beranda</h3>
                    </div>
                    {{-- <a class="btn btn-success float-end mb-3" href="#"><i class="fa-solid fa-plus"></i> Tambah</a> --}}
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>
    <script src="{{ asset('assets/js/helper.js') }}"></script>
@endsection
