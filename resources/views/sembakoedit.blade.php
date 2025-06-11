<!DOCTYPE html>
<html>

<body>

    <h3>Edit Data Sembako</h3>

    <a href="/sembako" class="btn btn-primary"> Kembali</a>

    <br />
    <br />

    @foreach ($sembako as $p)
        <form action="/sembako/update" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $p->idsembako }}"> <br />
            Merk <input type="text" required="required" name="merk" value="{{ $p->merksembako }}"
                class="form-control"> <br />
            Harga <input type="number" required="required" name="harga" value="{{ $p->hargasembako }}"
                class="form-control"> <br />
            Ketersediaan <input type="checkbox" name="tersedia" value="1" {{ $p->tersedia ? 'checked' : '' }}> <br />
            Berat <input type="number" required="required" name="berat" value="{{ $p->berat }}"
                class="form-control"> <br />
            <input type="submit" value="Simpan Data">
        </form>
    @endforeach


</body>

</html>
