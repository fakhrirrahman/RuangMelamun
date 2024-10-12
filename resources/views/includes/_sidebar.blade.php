<!-- resources/views/includes/_sidebar.blade.php -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="{{route('admin')}}" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>Admin</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('MPTI/img/lg.jpeg') }}" alt="" style="width: 40px; height: 40px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">Admin</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('admin') }}" class="nav-item nav-link {{ Request::is('admin') ? 'active' : '' }}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-calendar-alt me-2"></i>Kegiatan</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('kegiatan1.index') }}" class="dropdown-item {{ Request::is('kegiatan1*') ? 'active' : '' }}">Kegiatan 1</a>
                    <a href="{{ route('kegiatan2.index') }}" class="dropdown-item {{ Request::is('kegiatan2*') ? 'active' : '' }}">Kegiatan 2</a>
                </div>
            </div>
            <a href="{{ route('buku.index') }}" class="nav-item nav-link {{ Request::is('buku*') ? 'active' : '' }}"><i class="fa fa-book me-2"></i>Produk</a>
            <a href="{{ route('slide.index') }}" class="nav-item nav-link {{ Request::is('slide*') ? 'active' : '' }}"><i class="fa fa-book me-2"></i>Slide</a>
            <a href="{{ route('artikel.index') }}" class="nav-item nav-link {{ Request::is('artikel*') ? 'active' : '' }}"><i class="fa fa-calendar-check me-2"></i>Artikel</a>
            <a href="{{ route('logout') }}" class="nav-item nav-link"><i class="fa fa-sign-out-alt me-2"></i>Logout</a>
        </div>
    </nav>
</div>
