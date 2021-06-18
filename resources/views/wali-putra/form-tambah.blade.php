@extends('../template-admin')
    @section('title', 'Tambah Data Baru Wali Putra')
    @section('content-admin')
    <div class="rounded p-5 shadow w-100 min-vh-100 bg-light">
        <h1 class="bg-primary text-white p-3 rounded mb-4">Tambah Data</h1>
        <form action="{{ url('/wali/putra/proses/simpan') }}" class="d-flex flex-column" method="post">
        @csrf
            <div class="mb-3">
                <label for="nama" class="fw-bold mb-2">Nama</label>
                <input type="text" class="form-control shadow-none" name="nama" value="{{ old('nama') }}" required>
                @error('nama')
                    <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="nik" class="fw-bold mb-2">NIK</label>
                <input type="text" class="form-control shadow-none" name="nik" value="{{ old('nik') }}" required>
                @error('nik')
                    <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pendidikan" class="fw-bold mb-2">Pendidikan</label>
                <select class="form-select shadow-none" name="pendidikan" required>
                    <option value="TK">TK</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                    <option value="-">Tidak Sekolah</option>
                </select>
                @error('pendidikan')
                    <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="pekerjaan" class="fw-bold mb-2">Pekerjaan</label>
                <input type="text" class="form-control shadow-none" name="pekerjaan" required>
                @error('pekerjaan')
                    <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="no_telp" class="fw-bold mb-2">Telepon</label>
                <input type="tel" class="form-control shadow-none" name="no_telp" required>
                @error('no_telp')
                    <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3">
                <label for="alamat" class="fw-bold mb-2">Alamat</label>
                <textarea class="form-control shadow-none" name="alamat" required></textarea>
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