@extends('../template-admin')
@section('title', 'Dasbor Wali Putri')
@section('content-admin')
<div class="rounded p-5 shadow w-100 min-vh-100 bg-light">
    @if (session('notifikasi'))
    <div class="alert alert-dismissible alert-success fade show" role="alert">
        {{ session('notifikasi') }}
        <button type="button" class="btn-close small shadow-none" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="d-flex justify-content-between align-items-center bg-primary text-white p-3 rounded mb-4">
        <h1 class="mb-0">Data Wali</h1>
        <a href="{{ url('/wali/putri/baru') }}" class="btn btn-outline-light">Baru</a>
    </div>
    <table class="table" id="tabelWaliPutri">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col" width="30%">Nama</th>
                <th scope="col" width="20%">Pekerjaan</th>
                <th scope="col" width="20%">Telepon</th>
                <th scope="col">Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($waliPutriCollection as $waliPutri)
            <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $waliPutri -> nama }}</td>
                <td>{{ $waliPutri -> pekerjaan }}</td>
                <td>{{ $waliPutri -> no_telp }}</td>
                <td>
                    <a href="{{ url('/wali/putri/detail/'.$waliPutri->id_wali_putri.'') }}"
                        class="badge btn btn-primary text-white">Detail</a>
                    <a href="{{ url('/wali/putri/sunting/'.$waliPutri->id_wali_putri.'') }}"
                        class="badge btn btn-warning text-white">Sunting</a>
                    <form action="{{ url('/wali/putri/proses/hapus') }}" method="post" class="d-inline">
                        @csrf
                        <input type="hidden" name="id_wali_putri" value="{{ $waliPutri->id_wali_putri }}">
                        <button type="submit" class="badge btn btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script>
    $(document).ready(function () {
        $('#tabelWaliPutri').DataTable();
    });

</script>
@endsection
