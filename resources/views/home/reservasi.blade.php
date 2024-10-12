<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:wght@400;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{('MPTI/style.css')}}" />

    <style>
        body {
            font-family: 'Be Vietnam Pro', sans-serif;
            background-color: rgb(241, 240, 240);
        }

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


        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 2rem 0;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            font-family: 'Copperplate', serif;
        }

        .footer-content .info {
            flex: 1;
        }

        .footer-content .contact-info {
            flex: 2;
        }

        .footer-content .social-media {
            flex: 1;
        }

        .contact-info p {
            margin: 0;
        }

        .info img {
            border: 1px solid #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(114, 112, 112, 0.5);
        }

        .social-media img {
            margin-right: 1rem;
        }

        .footer hr {
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            margin: 1rem 0;
        }

        .copyright {
            color: #aaa;
        }

        .article {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .article-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .article-meta {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .article-meta img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .article-meta .author-name {
            font-weight: bold;
        }

        .article-meta .read-time {
            color: grey;
        }

        .article-content {
            font-size: 1rem;
            line-height: 1.5;
        }
    </style>

    <title>Web Profile Toko Buku</title>
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
    <!-- End Navbar -->

<!-- Article Section -->
<section class="article container">
    @foreach($artikel as $tulis)
    <div class="article-title">
        {{ $tulis->judul }}
    </div>
    <div class="article-meta">
        <img src="https://cdn-icons-png.flaticon.com/128/747/747376.png" alt="Author">
        <div>
            <div class="author-name">Ruang Melamun</div>
            <div class="read-time">{{ $tulis->tanggal }}</div>
        </div>
    </div>
    <div class="article-content">
        {{ $tulis->isi }}
    </div>
    @endforeach
    <br>
    <!-- Navigasi Pagination HTML -->
    <nav aria-label="..." class="d-flex justify-content-center">
        <ul class="pagination">
            <li class="page-item {{ $artikel->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $artikel->previousPageUrl() }}" tabindex="-1" aria-disabled="true">Previous</a>
            </li>
            @foreach ($artikel->getUrlRange(1, $artikel->lastPage()) as $page => $url)
            <li class="page-item {{ $page === $artikel->currentPage() ? 'active' : '' }}" aria-current="page">
                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
            </li>
            @endforeach
            <li class="page-item {{ $artikel->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $artikel->nextPageUrl() }}">Next</a>
            </li>
        </ul>
    </nav>
</section>
<!-- End Article Section -->



    <!-- Awal Footer -->
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

    <!-- Footer -->
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
                            <a href="https://maps.app.goo.gl/HoVpjW9JZChUojPn8?g_st=ic" target="_blank" class="text-white text-decoration-none">
                                <p class="text-white">
                                    Jl. Hegarmanah VII no 43, RT 05 RW 12 Kelurahan Hegarmanah Kecamatan Cidadap Kota Bandung 40141.
                                </p>
                            </a>
                            <p>Email: <a href="mailto:infotokobuku@gmail.com" class="text-white text-decoration-none">infotokobuku@gmail.com</a></p>
                            <p>WhatsApp: <a href="https://wa.me/6281314779092" class="text-white text-decoration-none">+62 813-1477-9092</a></p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h5>Social Media</h5>
                        <a href="https://x.com/ruang_melamun?s=21&t=Cgdcw_Vb4YnpAYGOIF0NcQ" class="text-white text-decoration-none"><img src="MPTI/img/facebook.png" alt="Facebook"></a>
                        <a href="https://x.com/ruang_melamun?s=21&t=Cgdcw_Vb4YnpAYGOIF0NcQ" class="text-white text-decoration-none"><img src="MPTI/img/twitter.png" alt="Twitter"></a>
                    </div>
                </div>
            </div>
            <hr class="bg-white">
            <div class="text-center">
                <p>&copy; 2024 Toko Buku. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.0.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
</body>

</html>
