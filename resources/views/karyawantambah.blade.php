@extends('template')
@section('content')

    <h3>Tambah Karyawan</h3>

    <a href="/karyawan" class="btn btn-info"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/karyawan/store" method="post">
        {{ csrf_field() }}
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Kode Pegawai</label>
            </div>
            <div class="col-6">
                <input type="text" name="kodepegawai" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Nama Lengkap</label>
            </div>
            <div class="col-6">
                <input type="text" name="namalengkap" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Divisi</label>
            </div>
            <div class="col-6">
                <input type="text" name="divisi" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Departemen</label>
            </div>
            <div class="col-6">
                <input type="text" name="departemen" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-primary">
    </form>
@endsection
