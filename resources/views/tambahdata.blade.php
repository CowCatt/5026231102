@extends('template')
@section('content')
    <h3>Tambah Data Nilai</h3>

    <a href="/eas" class="btn btn-primary"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke eas/store untuk dilakukan routing --}}
    <form action="/eas/store" method="post">
        {{ csrf_field() }}
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">NRP:</label>
            </div>
            <div class="col-6">
                <input type="text" name="nomorinduksiswa" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Nilai Angka:</label>
            </div>
            <div class="col-6">
                <input type="number" name="nilaiangka" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">SKS:</label>
            </div>
            <div class="col-6">
                <input type="number" name="sks" required="required" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
