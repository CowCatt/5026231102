<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas pertemuan 11</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #FFFBDE 100%);
            min-height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 15px;
            overflow: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
            height: 100%;
            border: none;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
            background: rgb(144, 209, 202,0.2);
            color: #096B68;
        }
        .card:hover .icon {
            transform: scale(1.2);
        }

        .icon {
            font-size: 3rem;
            margin-bottom: 1rem;
            background: linear-gradient(to right, #096B68, #90D1CA);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .title {
            font-weight: 600;
            color: var(--dark);
            margin-bottom: 0.5rem;
        }

        .desc {
            color: #666;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <div class="container my-5">
        <div class="text-center pb-5">
            <h1 class="display-3 fw-bold" style="color: #096B68;">Link Tugas</h1>
        </div>
        <div class="row g-4 mt-5">
            <div class="col-md-4">
                <a href="satu" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-code icon"></i>
                        <h3 class="title">Pertemuan 1</h3>
                        <p class="desc">Adaptasi Mahasiswa Baru, ITS Gelar Mentoring Agama Islam</p>
                    </div>
                </a>
            </div>

            <div class="col-md-4">
                <a href="pertemuan3" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-brands fa-bootstrap icon"></i>
                        <h3 class="title">Pertemuan 3</h3>
                        <p class="desc">Bootstrap 4 intro.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="pertemuan4" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-brands fa-bootstrap icon"></i>
                        <h3 class="title">Pertemuan 4</h3>
                        <p class="desc">Makeover landing page with bootstrap 4.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="tugas-linktree" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-tree icon"></i>
                        <h3 class="title">Tugas Linktree</h3>
                        <p class="desc">Get started with our premium resources and kickstart your project.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="pertemuan7-calc" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-brands fa-js icon"></i>
                        <h3 class="title">Pertemuan 7 Kalkulator</h3>
                        <p class="desc">Membuat kalkulator sederhana dengan javascript.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="pertemuan7-valid" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-brands fa-js icon"></i>
                        <h3 class="title">Pertemuan 7 Validasi</h3>
                        <p class="desc">Form validasi sederhana dengan javascript dan sweetalert2.</p>
                    </div>
                </a>
            </div>
            <div class="col-md-4 mx-auto">
                <a href="ets" class="card card p-3 h-100 text-decoration-none">
                    <div class="card-body text-center">
                        <i class="fa-solid fa-window-maximize icon"></i>
                        <h3 class="title">ETS</h3>
                        <p class="desc">Discount beds belfast website makeover.</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
