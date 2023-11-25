@extends('layouts.main')

@section('before-head-end')
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css"/>
@endsection

@section('content')
    <div class="app-container my-3">
        @include('components.error-message')
    </div>
    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
        <div class="d-flex flex-column flex-column-fluid">
            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                        <h1 class="page-heading d-flex text-gray-900 fw-bold flex-column justify-content-center mb-3">Inventory</h1>
                        <ol class="breadcrumb text-muted fs-6 fw-semibold">
                            <li class="breadcrumb-item text-muted">Inventory</li>
                        </ol>
                    </div>
                </div>
            </div>
            <div id="kt_app_content" class="app-content flex-column-fluid">
                <div id="kt_app_content_container" class="app-container container-xxl">
                    <div class="card">
                        <div class="card-header">
							<h2 class="card-title fw-bold">Data Inventory</h2>
							<div class="card-toolbar">
								<a href="#" class="btn btn-flex btn-dark" data-kt-calendar="add">
								    <i class="ki-duotone ki-plus fs-2"></i>Add New Inventory
                                </a>
							</div>
						</div>
                        <div class="card-body">
                            <table class="table table-striped table-row-bordered gy-5 gs-7">
                                <thead>
                                    <tr class="fw-semibold fs-6 text-gray-800">
                                        <th>No</th>
                                        <th>Kode Kategori</th>
                                        <th>Kode Klasifikasi</th>
                                        <th>Kode Jenis</th>
                                        <th>Tahun Mesin</th>
                                        <th>Ubah</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('before-body-end')
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        const table = $('.table').DataTable({
            "ajax":{
                url: "{{ route('inventory.data') }}",
                type: "GET"
            },
            columnDefs: [
                {
                    "targets": 0,
                    "render": function(data, type, row, meta){
                        return row.no;
                    }
                },
                {
                    "targets": 1,
                    "render": function(data, type, row, meta){
                        return row.kode_kategori;
                    }
                },
                {
                    "targets": 2,
                    "render": function(data, type, row, meta){
                        return row.kode_klasifikasi;
                    }
                },
                {
                    "targets": 3,
                    "render": function(data, type, row, meta){
                        return row.kode_jenis;
                    }
                },
                {
                    "targets": 4,
                    "render": function(data, type, row, meta){
                        return row.tahun_mesin;
                    }
                },
                {
                    "targets": 5,
                    "data": null,
                    "orderable": false,
                    "render": function (data, type, row) {
                        return `
                            <a href="{{ route('inventory.edit', ':id') }}" class="btn btn-dark">Edit</a>
                        `.replace(':id', row.id);
                    },
                },
            ]
        });
    </script>
@endsection