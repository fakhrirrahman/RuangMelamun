<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="MPTI/css/index.css" />
    <link rel="stylesheet" href="MPTI/css/buku.css" />

    <style>
        /* Custom CSS for the burger menu */
        .navbar-custom .navbar-toggler {
            border-color: #000000;
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        .navbar-custom .nav-link {
            color: #000000;
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #6c757d;
        }

        .navbar-custom .navbar-brand img {
            max-height: 50px;
        }

        .navbar-custom .navbar-collapse {
            background-color: #ffffff;
            padding: 15px;
        }

        .navbar-custom .navbar-nav .nav-item {
            margin-left: 15px;
        }

        .jumbotron {
            padding: 5rem 1rem;
            background-color: #f8f9fa;
            text-align: center;
        }

        .jumbotron h1 {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-weight: 700;
            font-size: 3rem;
        }

        .img-shadow {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .img-border {
            border: 2px solid #dee2e6;
            border-radius: 10px;
        }

        .tentang-title {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-weight: 700;
            font-size: 2.5rem;
        }

        .waktu-title {
            font-family: 'Roboto', sans-serif;
            font-size: 1.25rem;
            color: #6c757d;
        }

        .gallery-item {
            border-radius: 10px;
        }

        .product-card {
            background: #fff;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }

        .product-info {
            padding: 1rem;
            text-align: center;
        }

        .cart-icon-mustard {
            color: #ffcc00;
            font-size: 1.5rem;
        }

        .focus .card {
            border-radius: 15px;
        }

        .focus .card-body {
            padding: 2rem;
            text-align: center;
        }

        .footer {
            padding: 2rem 0;
            background-color: #343a40;
        }

        .footer h5 {
            font-family: 'Be Vietnam Pro', sans-serif;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .footer p,
        .footer a {
            color: #adb5bd;
            font-size: 0.9rem;
        }

        .footer a:hover {
            color: #fff;
            text-decoration: underline;
        }

        .footer img {
            max-width: 100%;
            height: auto;
            margin-bottom: 1rem;
        }

        .copyright {
            font-size: 0.9rem;
            color: #adb5bd;
        }

        .custom-img {
            width: 100%;
            height: auto;
        }

        .vertical-stack {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .vertical-stack img {
            width: 100%;
            height: auto;
        }
        .tentang {
            padding: 3rem 0;
            background-color: #f8f9fa;
        }
        .custom-img {
            width: 100%;
            height: auto;
        }
        .img-border {
            border: 2px solid #ddd;
            margin-bottom: 1rem;
        }
        .vertical-stack {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
    </style>
    <title>Web Profile Toko Buku</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="MPTI/img/lg.jpeg" alt="Logo"
                    class="img-fluid" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">BERANDA</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('kegiatan') }}">KEGIATAN</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('book') }}">PRODUK</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('booking') }}">ARTIKEL</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Jumbotron -->
    <section class="jumbotron">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <h1 style="color:#6c757d">Ruang</h1>
                    <h1>Melamun</h1>
                </div>
                <div class="col-md-6">
                    <img src="MPTI/img/index.jpeg" class="img-fluid img-shadow" alt="Ruang Melamun">
                </div>
            </div>
        </div>
    </section>
    <!-- End Jumbotron -->

    <!-- Tentang -->
  
<section class="tentang py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="vertical-stack">
                    <img src="MPTI/img/2.jpeg" class="custom-img img-border" alt="Image 2">
                    <img src="MPTI/img/4.jpeg" class="custom-img img-border" alt="Image 4">
                </div>
            </div>
            <div class="col-md-3">
                <img src="MPTI/img/1.jpeg" class="custom-img img-border" alt="Image 1">
            </div>
            <div class="col-md-6">
                <h2 class="display-4">Tentang</h2>
                <p>Ruang Melamun, berfokus pada perniagaan dan pengarsipan produk arsip dan kepustakaan secara mandiri. Berangkat dari kebiasaan mengumpulkan buku dan majalah terbitan "lama" untuk koleksi pribadi, "ruang" ini kemudian berkembang menjadi badan niaga yang juga bergerak pada bidang pengarsipan mandiri dan kegiatan literasi dan arsip, juga kegiatan di bidang lain, seperti seni visual, musik dan pertunjukan, serta berbagai diskusi formal maupun non formal. Ruang Melamun terbuka untuk kerjasama dan kolaborasi kegiatan di ruang lingkup literasi, kesenian, maupun displin ilmu lainnya untuk mengembangkan ruang-ruang diskusi yang kritis dan kontekstual dengan asas kebersamaan.</p>
                <a href="#" class="btn btn-primary">Read More →</a>
            </div>
        </div>
    </div>
</section>
    <!-- End Tentang -->

    <!-- Gallery -->
    <section id="gallery" class="py-5">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Gallery</h2>
                </div>
            </div>
            <div class="row gy-4 row-cols-1 row-cols-md-3">
                @php
                    $kegiatanToShow = $kegiatan2->take(3);
                @endphp
                @foreach($kegiatanToShow as $kegiatan)
                <div class="col" data-aos="flip-left" data-aos-duration="1500">
                    <img src="{{ asset('foto_kegiatan2/' . $kegiatan->foto) }}" class="gallery-item img-fluid" alt="foto_kegiatan2" style="height: 280px; width: 100%;" />
                    <h5>{{ $kegiatan->isi }}</h5>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Gallery -->

    <!-- Produk -->
    <section class="product py-5">
        <div class="container">
            <h2 class="text-center mb-4">Produk</h2>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($buku as $book)
                <div class="col">
                    <div class="product-card">
                        <img src="{{ asset('foto_buku/' . $book->foto) }}" alt="Produk 1" class="img-fluid" style="height: 250px;">
                        <div class="product-info">
                            <h3>{{ $book->nama }}</h3>
                            <p>Rp. {{ number_format($book->harga, 0, ',', '.') }},-</p>
                            <a href="{{ $book->link }}"><i class="fas fa-cart-plus cart-icon-mustard"></i></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Produk -->

    <!-- Focus -->
    <section class="focus bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Fokus Utama</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <p class="card-text">Meningkatkan Minat Baca</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <p class="card-text">Memberikan pengetahuan tentang ilmu dan wawasan zaman dulu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Focus -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <img src="MPTI/img/lg.jpeg" width="140" height="100" alt="Logo">
                </div>
                <div class="col-md-3">
                    <h5>Informasi</h5>
                    <ul class="list-unstyled">
                        <li><a href="#" class="text-white text-decoration-none">BERANDA</a></li>
                        <li>KEGIATAN</li>
                        <li>PORTOFOLIO</li>
                        <li>ARSIP</li>
                        <li>KONTAK</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h5>KONTAK</h5>
                    <div>
                        <a href="https://maps.app.goo.gl/HoVpjW9JZChUojPn8?g_st=ic" target="_blank"
                            class="text-white text-decoration-none">
                            <img src="MPTI/img/loc.png" alt="Location">
                            <p>Jl. Karangkajen MG III No. 885 RT. 43 RW. 11, Brontokusuman, Mergangsan, Yogyakarta
                                55281</p>
                        </a>
                    </div>
                    <div>
                        <img src="MPTI/img/telp.png" alt="Telephone">
                        <p>0897-6108-223</p>
                    </div>
                    <div>
                        <img src="MPTI/img/email.png" alt="Email">
                        <p>RuangMelamun@gmail.com</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <h5>Social Media</h5>
                    <a href="https://x.com/ruang_melamun?s=21&t=Cgdcw_Vb4YnpAYGOIF0NcQ"
                        class="text-white text-decoration-none"><img src="MPTI/img/facebook.png" alt="Facebook"></a>
                    <a href="https://x.com/ruang_melamun?s=21&t=Cgdcw_Vb4YnpAYGOIF0NcQ"
                        class="text-white text-decoration-none"><img src="MPTI/img/twitter.png" alt="Facebook"></a>
                    <a href="https://x.com/ruang_melamun?s=21&t=Cgdcw_Vb4YnpAYGOIF0NcQ"
                        class="text-white text-decoration-none"><img src="MPTI/img/igg.jpg" width="30px" alt="Twitter"></a>

                </div>
            </div>
            <hr>
            <p class="text-center copyright">COPYRIGHT &copy; 2024 Ruang Melamun</p>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
