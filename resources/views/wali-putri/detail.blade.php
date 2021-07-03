@extends('../template-admin')
@section('title', 'Detail Wali Putri - '.$waliPutriCollection->nama)
@section('content-admin')
<div class="d-flex flex-column rounded p-5 shadow w-100 min-vh-100 bg-light">
    <h1 class="bg-primary text-white p-3 rounded mb-4">Detail</h1>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="col-12 d-flex flex-column border rounded p-3 mb-4">
                    <label class="text-italic">Nama</label>
                    <span class="fs-1 fw-bold">{{ $waliPutriCollection->nama }}</span>
                </div>
            </div>
            <div class="col-5">
                <div class="col-12 d-flex flex-column border rounded p-3 mb-4">
                    <label class="text-italic">NIK</label>
                    <span class="fs-1 fw-bold">{{ $waliPutriCollection->nik }}</span>
                </div>
            </div>
            <div class="col-3">
                <div class="col-12 d-flex flex-column border rounded p-3 mb-4">
                    <label class="text-italic">Pendidikan</label>
                    <span class="fs-1 fw-bold">{{ $waliPutriCollection->pendidikan }}</span>
                </div>
            </div>
            <div class="col-5">
                <div class="col-12 d-flex flex-column border rounded p-3 mb-4">
                    <label class="text-italic">Pekerjaan</label>
                    <span class="fs-1 fw-bold">{{ $waliPutriCollection->pekerjaan }}</span>
                </div>
            </div>
            <div class="col-5">
                <div class="col-12 d-flex flex-column border rounded p-3 mb-4">
                    <label class="text-italic">Alamat</label>
                    <span class="fs-1 fw-bold">{{ $waliPutriCollection->alamat }}</span>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ url('/wali/putri/') }}" class="btn btn-primary bg-primary border-0 mt-auto ms-auto col-1">Kembali</a>
</div>
@endsection
