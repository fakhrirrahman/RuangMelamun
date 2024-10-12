<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Profile Toko Buku</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="MPTI/css/buku.css">

    <style>
        /* Custom CSS for the burger menu */
        .navbar-custom .navbar-toggler {
            border-color: #000000;
        }
        .navbar-custom .navbar-collapse {
            background-color: #ffffff;
            padding: 15px;
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

        /* Adjustments for responsive navbar */
        @media (max-width: 991.98px) {
            .navbar-expand-md .navbar-nav {
                margin-top: 10px; /* Adjust spacing */
            }
        }
        .buku-isi {
        max-height: 150px; /* Atur tinggi maksimum paragraf */
        overflow-y: auto; /* Tambahkan scroll jika teks melebihi tinggi maksimum */
    }

    .buku .col {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .buku img {
        max-height: 300px;
        width: auto;
    }
        
    </style>

</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-custom bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('MPTI/img/lg.jpeg') }}" alt="Logo" class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
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
    
    <!-- End Navbar -->

    <br><br>
    <section class="buku">
        <div class="container carousel slide bg-warning mb-5 rounded-3" id="carouselExampleControls" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($slide as $index => $book)
                    <div class="carousel-item @if($index == 0) active @endif">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="buku text-center">
                                    <h3>{{ $book->judul }}</h3>
                                    <p class="paragraf">{{ $book->isi }}</p>
                                    <div class="button-container">
                                        <a class="btn btn-primary btn-mustard" href="{{ $book->link }}" role="button">Belanja</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <img src="{{ asset('foto_slide/' . $book->foto) }}" class="styled-image mx-auto d-block" alt="Buku {{ $index + 1 }}" style="max-height: 300px;">
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
        
           

    <section class="product">
        <div class="container">
            <div class="product-container">
                @foreach ($buku as $book)
                    <div class="product-card">
                        <img src="{{ asset('foto_buku/' . $book->foto) }}" alt="Produk 1" style="width: 100%; height: 250px;">
                        <div class="product-info">
                            <h3>{{ $book->nama }}</h3>
                            <p>Rp. {{ number_format($book->harga, 0, ',', '.') }},-</p>
                            <a href="{{ $book->link }}"><i class="fas fa-cart-plus cart-icon-mustard"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Awal Focus -->
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
                            <p class="card-text">Memberikan pengetahuan tentang ilmu dan wawasan jaman dulu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir focus -->

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
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
