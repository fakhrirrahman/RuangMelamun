<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHMIN - Bootstrap Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('profil/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('profil/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('profil/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('profil/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('profil/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sidebar Start -->
        @include('includes._sidebar')
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{ asset('MPTI/img/lg.jpeg') }}" alt="" style="width: 40px; height: 40px;">
                            @if (Auth::check())
                                <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                            @else
                                <span class="d-none d-lg-inline-flex">Guest</span>
                            @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{route('logout')}}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Chart Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row bg-light rounded align-items-center justify-content-center mx-0">
                    <div class="col-md-6">
                        <canvas id="myChart"></canvas>
                    </div>
                </div>
            </div>
            <!-- Chart End -->
        </div>
        <!-- Content End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('profil/lib/chart/chart.min.js') }}"></script>
    <script src="{{ asset('profil/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('profil/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('profil/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('profil/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('profil/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('profil/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('profil/js/main.js') }}"></script>

    <!-- Chart.js Initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    fetch("{{ route('admin.data') }}")
        .then(response => response.json())
        .then(data => {
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['produk', 'Kegiatan1', 'Kegiatan2', 'Artikel', 'Slide'],
                    datasets: [{
                        label: 'Jumlah',
                        data: [data.buku, data.kegiatan1, data.kegiatan2, data.artikel, data.slide],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});

    </script>
</body>

</html>
