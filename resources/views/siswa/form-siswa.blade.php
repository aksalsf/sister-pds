@extends('../template-admin')
@section('title', 'Tambah Data Baru Siswa')
@section('content-admin')
<div class="rounded p-5 shadow w-100 min-vh-100 bg-light">
    <h1 class="bg-primary text-white p-3 rounded mb-4">
        {{ request() -> is('siswa/sunting/*') ? $siswa -> nama_lengkap : 'Tambah Data' }}
    </h1>
    <form enctype="multipart/form-data" action="{{ url('/siswa/proses/simpan') }}" class="d-flex flex-column"
        method="post">
        @csrf
        @if(request() -> is('siswa/sunting/*'))
        <input type="hidden" name="id_siswa" value="{{$siswa -> id_siswa}}">
        @endif
        <div class="mb-3">
            <label for="nama_lengkap" class="fw-bold mb-2">Nama</label>
            <input type="text" class="form-control shadow-none" name="nama_lengkap"
                value="{{ ($siswa -> nama_lengkap) ? $siswa -> nama_lengkap : old('nama_lengkap') }}" required>
            @error('nama_lengkap')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div class="col-3">
                <label for="nisn" class="fw-bold mb-2">NISN</label>
                <input type="text" class="form-control shadow-none" name="nisn"
                    value="{{ ($siswa -> nisn) ? $siswa -> nisn : old('nisn') }}" required>
                @error('nisn')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-4">
                <label for="nik" class="fw-bold mb-2">NIK</label>
                <input type="text" class="form-control shadow-none" name="nik"
                    value="{{ ($siswa -> nik) ? $siswa -> nik : old('nik') }}" required>
                @error('nik')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-4">
                <label for="no_kk" class="fw-bold mb-2">Nomor KK</label>
                <input type="text" class="form-control shadow-none" name="no_kk"
                    value="{{ ($siswa -> no_kk) ? $siswa -> no_kk : old('no_kk') }}" required>
                @error('no_kk')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div class="col-2">
                <label for="jenis_kelamin" class="fw-bold mb-2">Jenis Kelamin</label>
                <select class="form-select shadow-none" name="jenis_kelamin" required>
                    <option value="LK">Laki-laki</option>
                    <option value="PR">Perempuan</option>
                </select>
                @error('jenis_kelamin')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-3">
                <label for="tempat_lahir" class="fw-bold mb-2">Tempat Lahir</label>
                <input type="text" class="form-control shadow-none" name="tempat_lahir"
                    value="{{ ($siswa -> tempat_lahir) ? $siswa -> tempat_lahir : old('tempat_lahir') }}" required>
                @error('tempat_lahir')
                <small class=" text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-3">
                <label for="tanggal_lahir" class="fw-bold mb-2">Tanggal Lahir</label>
                <input type="date" class="form-control shadow-none" name="tanggal_lahir" required
                    value="{{ ($siswa -> tanggal_lahir) ? $siswa -> tanggal_lahir : old('tanggal_lahir') }}">
                @error('tanggal_lahir')
                <small class=" text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-3">
                <label for="agama" class="fw-bold mb-2">Agama</label>
                <select class="form-select shadow-none" name="agama" required>
                    <option value="Islam" {{ ($siswa -> agama == 'Islam') ? 'selected' : '' }}>
                        Islam
                    </option>
                    <option value="Protestan" {{ ($siswa -> agama == 'Protestan') ? 'selected' : '' }}>
                        Protestan
                    </option>
                    <option value="Katolik" {{ ($siswa -> agama == 'Katolik') ? 'selected' : '' }}>
                        Katolik
                    </option>
                    <option value="Hindu" {{ ($siswa -> agama == 'Hindu') ? 'selected' : '' }}>
                        Hindu
                    </option>
                    <option value="Buddha" {{ ($siswa -> agama == 'Buddha') ? 'selected' : '' }}>
                        Buddha
                    </option>
                    <option value="Khonghucu" {{ ($siswa -> agama == 'Khonghucu') ? 'selected' : '' }}>
                        Khonghucu
                    </option>
                </select>
                @error('agama')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div class="col-3">
                <label for="id_ayah" class="fw-bold mb-2">Nama Ayah</label>
                <select class="form-select shadow-none" name="id_ayah" required>
                    @foreach ($waliPutraCollection as $waliPutra)
                    <option value="{{ $waliPutra -> id_wali_putra }}"
                        {{ ($siswa -> id_ayah == $waliPutra -> id_wali_putra) ? 'selected' : '' }}>
                        {{ $waliPutra -> nama }}
                    </option>
                    @endforeach
                </select>
                @error('id_ayah')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-4">
                <label for="id_ibu" class="fw-bold mb-2">Nama Ibu</label>
                <select class="form-select shadow-none" name="id_ibu" required>
                    @foreach ($waliPutriCollection as $waliPutri)
                    <option value="{{ $waliPutri -> id_wali_putri }}"
                        {{ ($siswa -> id_ibu == $waliPutri -> id_wali_putri) ? 'selected' : '' }}>
                        {{ $waliPutri -> nama }}
                    </option>
                    @endforeach
                </select>
                @error('id_ibu')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-4">
                <label for="id_wali" class="fw-bold mb-2">Nama Wali</label>
                <select class="form-select shadow-none" name="id_wali" required>
                    @foreach ($waliPutraCollection as $waliPutra)
                    <option value="{{ $waliPutra -> id_wali_putra }}"
                        {{ ($siswa -> id_wali == $waliPutra -> id_wali_putra) ? 'selected' : '' }}>
                        {{ $waliPutra -> nama }}
                    </option>
                    @endforeach
                    @foreach ($waliPutriCollection as $waliPutri)
                    <option value="{{ $waliPutri -> id_wali_putri }}"
                        {{ ($siswa -> id_wali == $waliPutri -> id_wali_putri) ? 'selected' : '' }}>
                        {{ $waliPutri -> nama }}
                    </option>
                    @endforeach
                </select>
                @error('id_wali')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div class="col-5">
                <label for="anak_ke" class="fw-bold mb-2">Anak Ke</label>
                <input type="number" class="form-control shadow-none" name="anak_ke" maxlength="2" required
                    value="{{ ($siswa -> anak_ke) ? $siswa -> anak_ke : old('anak_ke') }}">
                @error('anak_ke')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-6">
                <label for="jumlah_saudara" class="fw-bold mb-2">Jumlah Saudara</label>
                <input type="number" class="form-control shadow-none" name="jumlah_saudara" maxlength="2" required
                    value="{{ ($siswa -> jumlah_saudara) ? $siswa -> jumlah_saudara : old('jumlah_saudara') }}">
                @error('jumlah_saudara')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="d-flex justify-content-between mb-3">
            <div class="col-3">
                <label for="surel" class="fw-bold mb-2">Surel</label>
                <input type="email" class="form-control shadow-none" name="surel" required
                    value="{{ ($siswa -> surel) ? $siswa -> surel : old('surel') }}">
                @error('surel')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-3">
                <label for="no_telp" class="fw-bold mb-2">Telepon</label>
                <input type="tel" class="form-control shadow-none" name="no_telp"
                    value="{{ ($siswa -> no_telp) ? $siswa -> no_telp : old('no_telp') }}" required>
                @error('no_telp')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
            <div class="col-5">
                <label for="alamat" class="fw-bold mb-2">Alamat</label>
                <textarea class="form-control shadow-none" name="alamat"
                    required>{{ ($siswa -> alamat) ? $siswa -> alamat : old('alamat') }}</textarea>
                @error('alamat')
                <small class="text-danger form-text">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label for="sekolah_asal" class="fw-bold mb-2">Asal Sekolah</label>
            <input type="text" class="form-control shadow-none" name="sekolah_asal"
                value="{{ ($siswa -> sekolah_asal) ? $siswa -> sekolah_asal : old('sekolah_asal') }}" required>
            @error('sekolah_asal')
            <small class="text-danger form-text">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-3">
            <label for="foto" class="form-label fw-bold">Foto Siswa</label>
            <input class="form-control" type="file" name="foto" accept="image/*"
                {{ request() -> is('siswa/sunting/*') ? '' : 'required' }}>
            @if(request() -> is('siswa/sunting/*'))
            <input type="hidden" name="foto_lama" value="{{$siswa -> foto}}">
            @endif
        </div>
        <button type="submit" name="data" class="col-1 ms-auto btn btn-primary bg-primary border-0">
            Simpan
        </button>
    </form>
</div>
@endsection
