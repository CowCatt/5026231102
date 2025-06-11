@extends('template')
@section('content')

    <h3>Data Sembako</h3>

    <a href="/sembako" class="btn btn-primary"> Kembali</a>

    <br />
    <br />
    {{-- action mengarah ke pegawai/store untuk dilakukan routing --}}
    <form action="/sembako/store" method="post">
        {{ csrf_field() }}
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Merk</label>
            </div>
            <div class="col-6">
                <input type="text" name="merk" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Harga</label>
            </div>
            <div class="col-6">
                <input type="number" name="harga" required="required" class="form-control">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Ketersediaan</label>
            </div>
            <div class="col-6">
                <input type="checkbox" style="height: 1.5rem; width:1.5rem">
            </div>
        </div>
        <div class="row mb-2">
            <div class="col-2">
                <label class="control-label">Berat</label>
            </div>
            <div class="col-6">
                <input type="number" name="berat" required="required" class="form-control">
            </div>
        </div>
        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
@endsection
