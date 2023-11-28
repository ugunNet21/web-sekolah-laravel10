
<section id="topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <ul class="top-contact">
                        <li><a href="#"><i class="fas fa-phone"></i>07776565656</a></li>
                        {{-- <li><a href="#"><i class="fas fa-envelope"></i>smaalihsancimencrang@sch.id</a></li> --}}
                        <li><a href="#"><i class="fas fa-bullhorn"></i>PPDB 2023</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <div class="sosmed">
                        <li><a href="#" class="fab fa-facebook"></a></li>
                        <li><a href="#" class="fab fa-instagram"></a></li>
                        <li><a href="#" class="fab fa-twitter"></a></li>
                        <li><a href="#" class="fab fa-youtube"></a></li>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="brand">
                        <img src="{{ url('frontend/assets/img/logo-sekolah.png') }}" alt="" width="10%"
                            height="10%">
                        <div class="brand-name">
                            <h1>SMA AL-IHSAN CIMENCRANG</h1>
                            <h3>Sekolah Pencetak Generasi Teladan dan
                                Berprestasi
                            </h3>
                        </div>

                    </div>
                </div>
                <div class="col-md-4 searchbox-wrapper">
                    <div class="searchbox">
                        <form action="" method="get">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari sesuatu">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" id="tombol-cari">Cari</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-navbar">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Profile</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('sejarah') }}" class="dropdown-item">Sejarah</a>
                            <a href="{{ route('visimisi') }}" class="dropdown-item">Visi dan Misi</a>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Sarana & Prasarana</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Sarana Infrastruktur</a>
                            <a href="#" class="dropdown-item">Sarana Pembelajaran</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Ekstrakurikuler</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Prestasi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Berita</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Berita Sekolah</a>
                            <a href="#" class="dropdown-item">Pengumuman</a>
                            <a href="#" class="dropdown-item">Agenda</a>
                            <a href="#" class="dropdown-item">Kalender Akademik</a>
                        </div>
                    </li>
                    <li class=" nav-item dropdown">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Galeri</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('gallery.index') }}" class="dropdown-item">Galeri Foto</a>
                            <a href="#" class="dropdown-item">GAleri Video/Dokumentasi</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Kontak</a>
                    </li>

                </ul>
            </div>
        </div>

    </nav>
    <!-- akhir navbar -->
