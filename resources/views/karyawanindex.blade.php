@extends('template')
@section('content')


    <h3 class="text-center">Data karyawan</h3>

    <br />

    <table class="table table-striped table-bordered table-hover">
        <tr class="table-primary text-center">
            <th>Kode Pegawai</th>
            <th>Nama Lengkap</th>
            <th>Divisi</th>
            <th>Departemen</th>
            <th>Action</th>
        </tr>
        @foreach ($karyawan as $p)
            <tr>
                <td>{{ $p->kodepegawai }}</td>
                <td>{{ strtoupper($p->namalengkap) }}</td>
                <td>{{ $p->divisi }}</td>
                <td>{{ strtolower($p->departemen) }}</td>
                <td class="text-center">
                    <a href="/karyawan/hapus/{{ $p->kodepegawai }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    <div class="d-flex justify-content-between my-5"> <!-- Added mb-5 for bottom gap -->
            <a href="/karyawan/tambah" class="btn btn-info">+ Tambah Karyawan</a>
                {{ $karyawan->links() }}
    </div>

@endsection
