@extends('layout.adminLayout.layoutAdmin')

@section('content')
<nav aria-label="breadcrumb" class="d-none d-md-inline-block">
    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent mb-0">
        <li class="breadcrumb-item">
            <a href="#">
                <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                    </path>
                </svg>
            </a>
        </li>
        <li class="breadcrumb-item active"><a href="#">Dataset</a></li>
    </ol>
</nav>
<div class="py-4">
    <button class="btn btn-gray-800 d-inline-flex align-items-center me-2" id="optionMenuDataset">
        <div class="showFormDataset">
            <i class="bi bi-plus-circle icon icon-xs me-2"></i>
            Buat Dataset Baru
        </div>
        <div class="showTabelDataset d-none">
            <i class="bi bi-grid-3x3 icon icon-xs me-2"></i>
            Tabel Dataset
        </div>
    </button>
</div>

{{-- THIS FORM DATASET --}}
<div class="formDataset d-none">
    <div class="row">
        <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
            <div class="mb-3 mb-lg-0">
                <h1 class="h4">Form Buat Dataset</h1>
                <p class="mb-0">Silahkan membuat Dataset baru diform bawah ini. <span class="fw-bold">Untuk
                        penambahan dan
                        perubahan Dataset harus atas persetujuan administrator.</span></p>
            </div>
        </div>
    </div>
    <div class="card border-0 shadow components-section mb-4 col-lg-12 col-sm-12">
        <div class="card-body">
            <form action="javascript:void(0)" enctype="multipart/form-data" method="POST" id="formAddDataset">
                @csrf
                <input type="hidden" name="pembuat" value="{{ Auth::user()->name }}">
                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-12">
                        <div class="form-group">
                            <label class="form-label">Judul Dataset</label>
                            <input type="text" class="form-control" placeholder="Judul Dataset" name="judulDataset"
                                id="judulDataset" autocomplete="off">
                            <div class="invalid-feedback invalidJudulDataset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label class="my-1 me-2" for="organisasiDataset">Organisasi</label>
                            <select class="form-select" id="organisasiDataset" name="organisasiDataset">
                                <option selected>--- Pilih Organisasi ---</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback invalidOrganisasiDataset">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label class="my-1 me-2" for="sektoralDataset">Sektoral</label>
                            <select class="form-select" id="sektoralDataset" name="sektoralDataset">
                                <option selected>--- Pilih Sektoral ---</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback invalidSektoralDataset">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-12">
                        <div class="form-group">
                            <label class="my-1 me-2" for="tagDataset">Tag</label>
                            <select class="form-select" id="tagDataset" name="tagDataset">
                                <option selected>--- Pilih Tag ---</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <div class="invalid-feedback invalidTagDataset">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-6">
                        <div class="form-group">
                            <label class="form-label">Silahkan Masukkan Data dan Resources</label>
                            <input class="form-control" type="file" id="dataResources" name="dataResources" multiple>
                            <div class="invalid-feedback invalidDataResources">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-lg-12 col-sm-6">
                        <div class="form-group">
                            <div id="alertDataResources"></div>
                        </div>
                    </div>
                </div>
                <div class="row mb-2">
                    <hr>
                </div>
                <div class="informasiTambahan">
                    <div class="row mb-4">
                        <h5>Form Informasi Tambahan</h5>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="my-1 me-2" for="sumberDataset">Sumber Dataset</label>
                                <input class="form-control" type="text" id="sumberDataset" name="sumberDataset"
                                    placeholder="Sumber Dataset" autocomplete="off">
                                <div class="invalid-feedback invalidSumberDataset">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="my-1 me-2" for="pengelolaDataset">Pengelola Dataset</label>
                                <input class="form-control" type="text" id="pengelolaDataset" name="pengelolaDataset"
                                    placeholder="Pengelola Dataset" autocomplete="off">
                                <div class="invalid-feedback invalidPengelolaDataset">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="form-group">
                                <label class="my-1 me-2" for="lisensiDataset">Lisensi Dataset</label>
                                <input class="form-control" type="text" id="lisensiDataset" name="lisensiDataset"
                                    placeholder="Lisensi Dataset" autocomplete="off">
                                <div class="invalid-feedback invalidLisensiDataset">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group">
                        <button class="btn btn-pill btn-outline-primary col-md-12 fs-6" type="submit"
                            id="btnSendDataset"><i class="bi bi-file-plus-fill fs-5"></i> Buat Dataset</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

{{-- THIS FOR TABLE DATASET --}}
<div class="tableDataset">
    <div class="d-flex justify-content-between w-100 flex-wrap mb-3">
        <div class="mb-3 mb-lg-0">
            <h1 class="h4">Daftar Dataset</h1>
            <p class="mb-0">Berikut daftar sektoral. <span class="fw-bold">Untuk penambahan dan
                    perubahan data sektoral
                    harap menunggu persetujuan administrator.</span></p>
        </div>
    </div>
    <div class="card border-0 shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover table-striped table-bordered" id="tableDataset" width="100%"
                    cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Dataset</th>
                            <th>Pembuat</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection