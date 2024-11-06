<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Page | SMK Citra Negara</title>
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}" />
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin />
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&family=Handjet:wght@100..900&family=Mukta+Malar:wght@200;300;400;500;600;700;800&family=Mukta:wght@200;300;400;500;600;700;800&display=swap') }}"
        rel="stylesheet" />
    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css') }}" />
    <link rel="stylesheet" type="text/css"
        href="{{ url('https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css') }}" />

    <!-- AOS -->
    <link href="{{ url('https://unpkg.com/aos@2.3.1/dist/aos.css') }}" rel="stylesheet" />

    <link href="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ url('assets/css/home.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/about-sekolah.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/ekskul.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/fasilitas.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/gallery.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/major.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/news.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/sambutan.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/staff.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/visi-misi.css') }}" />

</head>

<body>

    <nav class="navbar navbar-all navbar-expand-lg">
        <div class="container-fluid container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="assets/img/CN-removebg-preview.png" alt="Bootstrap" width="60" height="50" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-evenly    navbar-collapse" id="navbarNav">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('about') }}" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ url('about') }}">School</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ url('sambutan') }}">Headmaster</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('visi-misi') }}">Vission & Mission</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Academic
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('major') }}">Major</a></li>
                            <li>
                                <a class="dropdown-item" href="{{ url('ekstracurricular') }}">Ekstracurricular</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Gallery
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('gallery') }}">Gallery</a></li>
                            <li><a class="dropdown-item" href="{{ url('fasilitas') }}">Fasilitas</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Directory
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('staff') }}">Staff</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('news') }}">News</a>
                    </li>
                </ul>
            </div>
            <div>
                <span class="navbar-brand mb-0 h1">
                    <img src="assets/img/SMK HEBAT.png" alt="Bootstrap" width="80" height="50" />
                </span>
            </div>
        </div>
    </nav>

    @yield('content')

    <footer class="footer">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3">
                    <div class="footer-img">
                        <img src="assets/img/CN-removebg-preview.png" alt="" />
                        <img src="assets/img/SMK HEBAT.png" alt="" />
                    </div>
                    <h1 class="footer-logo-title">SMK CITRA NEGARA</h1>
                    <p class="footer-address">
                        Jl. Tanah Baru Jl. Kemiri Jaya No.99, Beji, Kecamatan Beji, Kota
                        Depok, Jawa Barat 16421
                    </p>
                </div>
                <div class="col-md-3 contact-info">
                    <h1 class="footer-title text-center">Contact Info</h1>
                    <div class="page-link">
                        <li>smkcitranegara.official@gmail.com</li>
                        <li>021-7720-1052</li>
                        <li>SENIN – JUMAT, 07:00 – 17:00</li>
                        <li>SABTU, 07:00 – 15:00</li>
                    </div>
                </div>
                <div class="col-md-2 explore">
                    <h1 class="footer-title text-center">Explore</h1>
                    <div class="page-link">
                        <a href="">Profil Yayasan</a>
                        <a href="">Profil Sekolah</a>
                        <a href="">Visi & Misi</a>
                        <a href="">Bidang Studi</a>
                        <a href="">Ekstrakurikuler</a>
                        <a href="">News</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h1 class="footer-title text-center">Resources</h1>
                    <div class="page-link">
                        <a href="">Daftar Guru</a>
                        <a href="">Daftar Staff</a>
                        <a href="">Galeri Sekolah</a>
                    </div>
                </div>
                <div class="col-md-2">
                    <h1 class="footer-title text-center">Follow us</h1>
                    <div class="social-link">
                        <a href=""><i class="fa-brands fa-instagram"></i></a>
                        <a href=""><i class="fa-brands fa-tiktok ms-2"></i></a>
                        <a href=""><i class="fa-brands fa-youtube ms-2"></i></a>
                        <a href=""><i class="fa-brands fa-facebook ms-2"></i></a>
                    </div>
                </div>
            </div>
            <hr />
            <span class="copyright text-center">copyright &copy 2024 SMK CITRA NEGARA</span>
        </div>
    </footer>

    <script src="{{ url('https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js') }}"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- jQuery (Slick bergantung pada jQuery) -->
    <script src="{{ url('https://code.jquery.com/jquery-3.6.0.min.js') }}"></script>

    <!-- Slick JS -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>
    <script src="{{ url('https://kit.fontawesome.com/f1fd297175.js') }}" crossorigin="anonymous"></script>

    <!-- AOS -->
    <script src="{{ url('https://unpkg.com/aos@2.3.1/dist/aos.js') }}"></script>

    <script src="{{ url('assets/js/home.js') }}"></script>
</body>

</html>

</body>
