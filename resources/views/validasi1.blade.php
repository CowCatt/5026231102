<!DOCTYPE html>
<html>
    <head>
        <title>

        </title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script
            src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>

        <!-- Popper JS -->
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function validasi(){
                var nrp = document.getElementById("nrp").value ;
                var nama = document.getElementById("nama").value ;
                if (nrp.length == 0){
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "NRP tidak boleh kosong",
                    icon: "error"
                    });
                    return false
                }
                if (nama.length == 0){
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "Nama tidak boleh kosong",
                    icon: "error"
                    });
                    return false
                }
                if (nama.length < 2){
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "Nama minimal 2 karakter",
                    icon: "warning"
                    });
                    return false
                }
                if (/\d/.test(nama)){
                    Swal.fire({
                    title: "Kesalahan input",
                    text: "Nama tidak boleh mengandung angka",
                    icon: "warning"
                    });
                    return false
                }
            }
        </script>
    </head>
    <body>
        <div class="container m-5 w-50">
            <form action="https://google.co.id" method="get"
                onsubmit="return validasi();">
                <h3>Form Pendaftaran</h3>
                NRP :
                <input type="text" name="nrp" id="nrp" class="form-control"
                    placeholder="Silahkan isi 10 digit NRP (wajib)">
                <br>
                Nama :
                <input type="text" name="nama" id="nama" class="form-control"
                    placeholder="Isi nama yang valid">

                <input type="submit" class="btn-success btn mt-3"
                    value="Daftar">
            </form>
        </div>
    </body>
</html>