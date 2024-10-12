<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    {{-- <link rel="stylesheet" href="MPTI/css/kegiatan.css" /> --}}

    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Web Profile Toko Buku</title>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <style>
            /* Custom CSS for the navbar and burger menu */
            .navbar-custom {
            background-color: white;
            padding: 0.5rem 1rem;
            height: 4.5rem;
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.8);
        }

        .navbar-brand img {
            height: 70px;
            width: auto;
        }

        .navbar-custom .navbar-collapse {
            background-color: #ffffff;
            padding: 15px;
        }

        .navbar-custom .navbar-brand,
        .navbar-custom .nav-link {
            font-family: 'Be Vietnam Pro', serif;
            font-weight: bold;
            color: black;
        }

        .navbar-custom .navbar-toggler {
            border-color: transparent;
        }

        .navbar-custom .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=utf8,%3Csvg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath stroke='rgba%280, 0, 0, 1%29' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }


    
            body {
                font-family: 'Be Vietnam Pro', sans-serif;
            }
    
            .kegiatan .row {
                margin-bottom: 2rem;
            }
    
            .kegiatan img {
                width: 150%;
                height: auto;
                max-width: 250px;
                border: 2px solid #343a40;
            }
    
            .kegiatan h3 {
                font-size: 1.75rem;
                color: #343a40;
                text-align: center;
            }
    
            .kegiatan p {
                font-size: 1.1rem;
                color: #6c757d;
                text-align: center;
            }
    
            .kegiatan .card-body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }
    
            .kegiatan .card {
                border: 1px solid #343a40;
                border-radius: 0.25rem;
                overflow: hidden;
            }
        </style>
    </head>
    
    <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-custom bg-white">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="MPTI/img/lg.jpeg" alt="Logo" class="img-fluid" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <!-- kegiatan -->
    <section class="kegiatan py-5">
        <div class="container">
            <div class="card mb-4">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 d-flex justify-content-center">
                        <img src="MPTI/img/kegiatan 1.jpg" alt="Kegiatan 1" class="img-fluid" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Kegiatan 1</h3>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat,
                                obcaecati.</p>
                            <a href="{{ route('viewmore') }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 d-flex justify-content-center">
                        <br><img src="MPTI/img/kegiatan 2.jpg" alt="Kegiatan 2" class="img-fluid" />
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">Kegiatan 2</h3>
                            <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat,
                                obcaecati.</p>
                            <a href="{{ route('viewmore2') }}" class="btn btn-primary">View More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir kegiatan -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- mulai focus -->
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

    <!-- Awal Footer -->
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
        <p class="text-center copyright">COPYRIGHT</p>
    </footer>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>

</html>
