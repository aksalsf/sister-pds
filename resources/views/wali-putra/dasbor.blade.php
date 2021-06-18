@extends('../template-admin')
    @section('title', 'Dasbor Wali Putra')
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
            <a href="{{ url('/wali/putra/baru') }}" class="btn btn-outline-light">Baru</a>
        </div>
        <table class="table" id="tabelWaliPutra">
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
                @foreach ($waliPutraCollection as $waliPutra)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $waliPutra -> nama }}</td>
                        <td>{{ $waliPutra -> pekerjaan }}</td>
                        <td>{{ $waliPutra -> no_telp }}</td>
                        <td>
                            <a href="{{ url('/wali/putra/detail/'.$waliPutra->id_wali_putra.'') }}" class="badge btn btn-primary text-white">Detail</a>
                            <a href="{{ url('/wali/putra/sunting/'.$waliPutra->id_wali_putra.'') }}" class="badge btn btn-warning text-white">Sunting</a>
                            <form action="{{ url('/wali/putra/proses/hapus') }}" method="post" class="d-inline">
                                @csrf
                                <input type="hidden" name="id_wali_putra" value="{{ $waliPutra->id_wali_putra }}">
                                <button type="submit" class="badge btn btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready( function () {
            $('#tabelWaliPutra').DataTable();
        } );
    </script>
    @endsection