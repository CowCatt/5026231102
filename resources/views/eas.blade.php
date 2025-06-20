@extends('template')
@section('content')
    <h3>Data Nilai</h3>

    <table class="table table-striped table-bordered table-hover">
        <tr class="table-primary text-center">
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($nilai as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{ $p->nomorinduksiswa }}</td>
                <td>{{ $p->nilaiangka }}</td>
                <td>{{ $p->sks }}</td>
                <td>
                    @if ($p->nilaiangka >= 81) A
                    @elseif ($p->nilaiangka >= 61) B
                    @elseif ($p->nilaiangka >= 41) C
                    @elseif ($p->nilaiangka <= 40) D
                    @endif
                </td>
                <td>{{ $p->sks * $p->nilaiangka }}</td>
            </tr>
        @endforeach
    </table>
    <a href="/eas/tambahdata" class="btn btn-primary">Tambah Data</a>
@endsection
