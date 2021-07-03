@extends('../template-admin')
@section('title', 'Detail Siswa - '.$siswa -> nama_lengkap)
@section('content-admin')
<div class="d-flex flex-column rounded p-5 shadow w-100 min-vh-100 bg-light">
    <h1 class="bg-primary text-white p-3 rounded mb-4">Detail</h1>
    <div class="container">
        <div class="row">
            <div class="col-4 rounded p-3">
                <img src="{{ asset('storage/uploads/foto/'.$siswa -> foto) }}" class="w-100">
            </div>
            <div class="col-6">
                <div class="p-5">
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">NISN</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> nisn }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Nama Lengkap</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> nama_lengkap }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">NIK</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> nik }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Nomor KK</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> no_kk }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Tempat, Tanggal Lahir</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> tempat_lahir . ', ' . $siswa -> tanggal_lahir }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Jenis Kelamin</label>
                        <span
                            class="fs-3 fw-bold">{{ ($siswa -> jenis_kelamin == 'LK') ? 'Laki-laki' : 'Perempuan' }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Ayah</label>
                        <span class="fs-3 fw-bold">{{ $ayah -> nama }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Ibu</label>
                        <span class="fs-3 fw-bold">{{ $ibu -> nama }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Wali</label>
                        <span class="fs-3 fw-bold">{{ $wali -> nama }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Agama</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> agama }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Alamat</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> alamat }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Nomor Telepon</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> no_telp }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">surel</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> surel }}</span>
                    </div>
                    <div class="d-flex flex-column mb-3">
                        <label class="text-italic">Sekolah Asal</label>
                        <span class="fs-3 fw-bold">{{ $siswa -> sekolah_asal }}</span>
                    </div>
                </div>
            </div>
            <div class="col-2">
                <a href="{{ url('/siswa/') }}"
                    class="btn btn-primary bg-primary border-0 d-flex justify-content-center">Kembali</a>
            </div>
        </div>
    </div>
    @endsection
