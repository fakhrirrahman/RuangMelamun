<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* Custom CSS for the burger menu */
        .navbar-custom .navbar-toggler {
            border-color: #000000; /* Color of the hamburger icon */
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
            /* Using a custom SVG background image with black color */
        }

        .navbar-custom .nav-link {
            color: #000000; /* Color of the links */
            font-weight: bold; /* Make the text bold */
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #6c757d; /* Hover color of the links */
        }

        .navbar-custom .navbar-brand img {
            max-height: 50px; /* Adjust logo height */
        }
    </style>

    <title>Web Profile Toko Buku</title>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-custom bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('MPTI/img/lg.jpeg') }}" alt="Logo"
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
    <br></br>
    <!-- Kegiatan Section -->
    <section class="kegiatan">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="kegiatan-title">KEGIATAN 1</h1>
                </div>
            </div>
        </div>
    </section>

    @foreach($kegiatan1 as $kegiatan1)
    <section class="kegiatan">
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1 mb-3">
                    <img class="img-fluid" src="{{ asset('foto_kegiatan1/' . $kegiatan1->foto) }}" alt="foto_kegiatan1" width="500" />
                </div>
                <div class="col-md-6 order-md-2">
                    <h3 style="text-align: justify"> {{ $kegiatan1 -> judul}}</h3>
                    <p style="text-align: justify">
                        {{ $kegiatan1 -> isi}}
                    </p>
                    <p class="text-black-50">{{ $kegiatan1 -> tanggal}}</p>
                </div>
            </div>
        </div>
    </section>
    @endforeach
    <!-- End Kegiatan Section -->

    <!-- Footer -->
    <section class="focus text-start bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold text-shadow">Fokus Utama</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <p class="card-text">Meningkatkan Minat Baca</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-4 mt-md-0">
                    <div class="card border-dark shadow-sm">
                        <div class="card-body">
                            <p class="card-text">Memberikan pengetahuan tentang ilmu dan wawasan </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir focus -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <footer class="footer bg-dark text-white text-start">
        <div class="container">
            <div class="footer-content">
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
                            class="text-white text-decoration-none"><img src="MPTI/img/facebook.png"
                                alt="Facebook"></a>
                        <a href="https://x.com/ruang_melamun?s=21&t=Cgdcw_Vb4YnpAYGOIF0NcQ"
                            class="text-white text-decoration-none"><img src="MPTI/img/twitter.png"
                                alt="Twitter"></a>
                    </div>
                </div>
                <hr>
                <p class="text-center copyright">COPYRIGHT</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFyC8MWjQcgR1MAZf6B0a3TZYNt1w6jqApFh/JQIVfKtxX0pPAMbV6H/4/" crossorigin="anonymous">
    </script>
</body>

</html>
