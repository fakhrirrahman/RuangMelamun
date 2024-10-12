<?php 
// session_start();
	
	include "../setap/koneksi.php";
	$username=$_SESSION['user_admin'];
	
	$comot_admin=mysqli_query($koneksi, "select nama from tbl_admin where user_admin='$username'");   
	$ngisi_admin=mysqli_fetch_array($comot_admin);
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="home.php">Admin Page</a>
    </div>
    <!-- /.navbar-header -->
    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $ngisi_admin['nama']; ?>
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li class="divider"></li>
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>

        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="side-menu">
                <li><a href="home.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a></li>
                <li><a href="cekTransaksi.php"><i class="fa fa-book fa-fw"></i> Validasi</a>
                
                <li class="dropdown-header">Setup Konten</li>
                <!-- <li><a href="setupBeranda.php"><i class="fa fa-home fa-fw"></i> Setup Beranda</a> -->
                <li><a href="setupSlider.php"><i class="fa fa-thumb-tack fa-fw"></i> Setup Kegiatan</a>
                <li>
                <li><a href="setupBuku.php"><i class="fa fa-thumb-tack fa-fw"></i> Setup Buku</a>
                <!-- <li>
                    <a href="#"><i class="fa fa-laptop fa-fw"></i> Setup About Us<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="setupNinaProfil.php">Profil</a></li>
                        <li><a href="setupNinaSyarat.php">Syarat &amp; Ketentuan</a></li>
                        <li><a href="setupNinaReservasi.php">Cara Reservasi</a></li>
                        <li><a href="setupNinaPembayaran.php">Cara Pembayaran</a></li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="#"><i class="fa fa-laptop fa-fw"></i> Setup About Kerinci<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="setupSumbarProfil.php">Profil</a></li>
                        <li><a href="setupSumbarSejarah.php">Sejarah</a></li>
                        <li><a href="setupSumbarWisata.php">Pariwisata</a></li>
                        <li><a href="setupSumbarKuliner.php">Kuliner Khas</a></li>
                        <li><a href="setupSumbarBudaya.php">Seni &amp; Budaya</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="setupContact.php"><i class="fa fa-phone-square fa-fw"></i> Setup Kontak</a> -->
                
                <!-- <li class="dropdown-header">Menu Setup</li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Setup Paket<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="setupKategori.php">Setup Kategori</a></li>
                        <li><a href="setupPaket.php">Setup Paket</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#"><i class="fa fa-edit fa-fw"></i> Setup Penginapan<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li><a href="setupDaerah.php">Setup Daerah</a></li>
                        <li><a href="setupHotel.php">Setup Penginapan</a></li>
                    </ul>
                </li> -->
                
                <!-- <li class="dropdown-header">Menu Administrator</li>
                <li><a href="setupAdmin.php"><i class="fa fa-user-md fa-fw"></i> Setup Admin</a>
                <li><a href="setupMember.php"><i class="fa fa-users fa-fw"></i> Setup Member</a> -->
            </ul>
            <!-- /#side-menu -->
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>