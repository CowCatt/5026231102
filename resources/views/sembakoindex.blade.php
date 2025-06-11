@extends('template')
@section('content')

    <h3>Data Sembako</h3>

    <a href="/sembako/tambah" class="btn btn-info"> + Tambah Sembako Baru</a>

	<form action="/sembako/cari" method="GET" class="form-inline">
        <label>Cari Data Sembako :</label>
		<input type="text" name="cari" placeholder="Cari Sembako.." class="form-control">
		<input type="submit" value="CARI" class="btn btn-primary">
	</form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk</th>
            <th>Harga</th>
            <th>Ketersediaan</th>
            <th>Berat(Kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($sembako as $p)
            <tr>
                <td>{{ $p->merksembako }}</td>
                <td>{{ $p->hargasembako }}</td>
                <td>{{ $p->tersedia }}</td>
                <td>{{ $p->berat }}</td>
                <td>
                    <a href="/sembako/edit/{{ $p->idsembako }}" class="btn btn-success">Edit</a>
                    <a href="/sembako/hapus/{{ $p->idsembako }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{$sembako->links()}} <!-- hanya bisa dipake dengan paginate saat get() harus dihapus -->
@endsection
