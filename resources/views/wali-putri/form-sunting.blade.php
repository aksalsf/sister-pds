@extends('../template-admin')
@section('title', 'Sunting Data '.$waliPutriCollection->nama)
@section('content-admin')
<div class="rounded p-5 shadow w-100 min-vh-100 bg-light">
    <h1 class="bg-primary text-white p-3 rounded mb-4">Sunting Data</h1>
    <form action="{{ url('/wali/putri/proses/simpan') }}" class="d-flex flex-column" method="post">
        @csrf
        <input type="hidden" name="id_wali_putri" value="{{ $waliPutriCollection->id_wali_putri }}">
        <div class="mb-3">
            <label for="nama" class="fw-bold mb-2">Nama</label>
            <input type="text" class="form-control shadow-none" name="nama"
                value="{{ $waliPutriCollection->nama ? $waliPutriCollection->nama : old('nama') }}" required>
            @error('nama')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nik" class="fw-bold mb-2">NIK</label>
            <input type="text" class="form-control shadow-none" name="nik"
                value="{{ $waliPutriCollection->nik ? $waliPutriCollection->nik : old('nik') }}" required>
            @error('nik')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pendidikan" class="fw-bold mb-2">Pendidikan</label>
            <select class="form-select shadow-none" name="pendidikan" required>
                <option value="TK" {{ $waliPutriCollection->pendidikan == 'TK' ? 'selected' : '' }}>TK</option>
                <option value="SD" {{ $waliPutriCollection->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
                <option value="SMP" {{ $waliPutriCollection->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
                <option value="SMA" {{ $waliPutriCollection->pendidikan == 'SMA' ? 'selected' : '' }}>SMA</option>
                <option value="S1" {{ $waliPutriCollection->pendidikan == 'S1' ? 'selected' : '' }}>S1</option>
                <option value="S2" {{ $waliPutriCollection->pendidikan == 'S2' ? 'selected' : '' }}>S2</option>
                <option value="S3" {{ $waliPutriCollection->pendidikan == 'S3' ? 'selected' : '' }}>S3</option>
                <option value="-" {{ $waliPutriCollection->pendidikan == '-' ? 'selected' : '' }}>Tidak Sekolah</option>
            </select>
            @error('pendidikan')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="pekerjaan" class="fw-bold mb-2">Pekerjaan</label>
            <input type="text" class="form-control shadow-none" name="pekerjaan"
                value="{{ $waliPutriCollection->pekerjaan ? $waliPutriCollection->pekerjaan : old('pekerjaan') }}"
                required>
            @error('pekerjaan')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="no_telp" class="fw-bold mb-2">Telepon</label>
            <input type="tel" class="form-control shadow-none" name="no_telp"
                value="{{ $waliPutriCollection->no_telp ? $waliPutriCollection->no_telp : old('no_telp') }}" required>
            @error('no_telp')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="alamat" class="fw-bold mb-2">Alamat</label>
            <textarea class="form-control shadow-none" name="alamat"
                required>{{ $waliPutriCollection->alamat ? $waliPutriCollection->alamat : old('alamat') }}</textarea>
            @error('alamat')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <button type="submit" name="data" class="col-1 ms-auto btn btn-primary bg-primary border-0">
            Simpan
        </button>
    </form>
</div>
@endsection
