@extends('layouts.main')

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
						</div>
                        <div class="card-body">
                            <form action="{{ route('inventory.edit', $inventory->id) }}" method="POST" class="row">
                                @csrf
                                <div class="col-md-6 my-5">
                                    <label class="form-label">Kode Kategori</label>
                                    <input type="text" class="form-control" name="kode_kategori" value="{{ $inventory->kode_kategori }}">
                                </div>
                                <div class="col-md-6 my-5">
                                    <label class="form-label">Kode Klasifikasi</label>
                                    <input type="text" class="form-control" name="kode_klasifikasi" value="{{ $inventory->kode_klasifikasi }}">
                                </div>
                                <div class="col-md-6 my-5">
                                    <label class="form-label">Kode Jenis</label>
                                    <input type="text" class="form-control" name="kode_jenis" value="{{ $inventory->kode_jenis }}">
                                </div>
                                <div class="col-md-6 my-5">
                                    <label class="form-label">Tahun Mesin</label>
                                    <input type="text" class="form-control" name="tahun_mesin" value="{{ $inventory->tahun_mesin }}">
                                </div>
                                <div class="my-5 d-flex justify-content-end">
                                    <button class="btn btn-dark">Save</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection