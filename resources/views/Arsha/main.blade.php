<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Arsha Consultant</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="Arsha/assets/img/favicon.png" rel="icon">
    <link href="Arsha/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('Arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('Arsha/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.10.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="index.html">Arsha Production</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{-- <a href="index.html" class="logo me-auto"><img src="Arsha/assets/img/logo.png" alt="" class="img-fluid"></a> --}}

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Services</a></li>
                    <li><a class="nav-link   scrollto" href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#team">Team</a></li>
                    <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
                        <ul>
                            <li><a href="#">Drop Down 1</a></li>
                            <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i
                                        class="bi bi-chevron-right"></i></a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Drop Down 2</a></li>
                            <li><a href="#">Drop Down 3</a></li>
                            <li><a href="#">Drop Down 4</a></li>
                        </ul>
                    </li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1>Better Solutions For Your Business</h1>
                    {{-- <h2>We are team of talented designers making websites with Bootstrap</h2> --}}
                    <h2>Kita adalah tim yang bertalenta, akan membantu memenuhi kebutuhan bisnis anda</h2>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <a href="#about" class="btn-get-started scrollto">Get Started</a>
                        <a href="https://youtu.be/dy90tA3TT1c" class="glightbox btn-watch-video"><i
                                class="bi bi-play-circle"></i><span>Watch Video</span></a>
                    </div>
                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('Arsha/assets/img/hero-img.png" class="img-fluid animated') }}" alt="">
                </div>
            </div>
        </div>

    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Clients Section ======= -->
        <section id="clients" class="clients section-bg">
            <div class="container">

                <div class="row" data-aos="zoom-in">

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/client-1.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/client-2.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/client-3.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/client-4.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/client-5.png') }}" class="img-fluid"
                            alt="">
                    </div>

                    <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
                        <img src="{{ asset('Arsha/assets/img/clients/client-6.png') }}" class="img-fluid"
                            alt="">
                    </div>

                </div>

            </div>
        </section><!-- End Cliens Section -->

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>About Us</h2>
                </div>

                <div class="row content">
                    <div class="col-lg-6">
                        <p>
                            Layanan Pembuatan Website dan Aplikasi Terbaik di Indonesia. Solusi jasa pembuatan
                            webiste dan Aplikasi untuk anda
                        </p>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Developer yang berpengalaman</li>
                            <li><i class="ri-check-double-line"></i> Harga yang terjangkau</li>
                            <li><i class="ri-check-double-line"></i> Kualitas terbaik yang akan anda dapatkan</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>PERLU WEBSITE ATAU APLIKASI? </p>
                        <p>
                            Tidak perlu ribet dengan proses pembuatannya.
                            Kami menyediakan jasa web developer, jasa app developer dan lainnya, dan
                            dapatkan harga termurah serta GRATIS domain dan hosting!
                        </p>
                        <a href="#" class="btn-learn-more">Learn More</a>
                    </div>
                </div>

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us section-bg">
            <div class="container-fluid" data-aos="fade-up">

                <div class="row">

                    <div
                        class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

                        <div class="content">
                            <h3>Benefit yang akan kalian dapatkan <strong>ketika bermitra dengan kami</strong></h3>
                            <p>
                                Kami berusaha menjadi penyedia layanan Terbaik untuk kebutuhan website bisnis anda.
                            </p>
                        </div>

                        <div class="accordion-list">
                            <ul>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-1"
                                        class="collapsed"><span>01</span> Beutiful design
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-1" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Desain yang elegan dan profesional, menjawab kebutuhan Anda yang ingin
                                            mempunyai nilai lebih & menarik di mata pengunjung.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2"
                                        class="collapsed"><span>02</span> SEO Friendly
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Website dan aplikasi yang kami buat sudah sangat SEO friendly, sehingga
                                            bisnis Anda dapat lebih mudah ditemukan di Google.
                                        </p>
                                    </div>
                                </li>

                                <li>
                                    <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3"
                                        class="collapsed"><span>03</span> Friendly Support
                                        <i class="bx bx-chevron-down icon-show"></i><i
                                            class="bx bx-chevron-up icon-close"></i></a>
                                    <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                                        <p>
                                            Konsultasikan permasalahan Anda dengan tim ahli kami melalu kontak yang
                                            telah di sediakan.
                                        </p>
                                    </div>
                                </li>

                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img"
                        style='background-image: url("{{ asset('Arsha/assets/img/why-us.png') }}");'
                        data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
                </div>

            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills">
            <div class="container" data-aos="fade-up">

                <div class="row">
                    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right" data-aos-delay="100">
                        <img src="{{ asset('Arsha/assets/img/skills.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Kita Saat ini berada</h3>
                        <p class="fst-italic">
                            Di era revolusi industri 4.0,Kebutuhan atas IT promotion merupakan suatu hal yang primer
                            bagi setiap perusahaan.
                            Seluruh aspek diperindustrian saat ini tidak akan bisa lepas dari teknologi
                        </p>
                        <p class="fst-italic">
                            Survey kebutuhan berbasis IT
                        </p>

                        <div class="skills-content">

                            <div class="progress">
                                <span class="skill">Pemerintahan <i class="val">100%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="100"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">BUMN <i class="val">90%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="90"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">Perusahaan Swasta <i class="val">75%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="75"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                            <div class="progress">
                                <span class="skill">UMKM <i class="val">55%</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="55"
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End Skills Section -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Services</h2>
                    <p>Kami menyediakan berbagai macam servis demi memenuhi kebutuhan anda, kami melayani mulai dari
                        pembuatan design hingga fullstack developer</p>
                    <p><strong> dengan standar pelayanan kami</strong></p>
                </div>

                <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch" data-aos="zoom-in"
                        data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bxl-dribbble"></i></div>
                            <h4><a href="">fungsional</a></h4>
                            <p>Jaminan hasil yang aplikatif dan tepat guna, sesuai kebutuhan anda</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in"
                        data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-file"></i></div>
                            <h4><a href="">Terenkripsi</a></h4>
                            <p>Setiap pesanan anda akan terjaga keamanan dan keasliannya </p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-tachometer"></i></div>
                            <h4><a href="">Responsive</a></h4>
                            <p>Custumer service yang reseponsive, akan selalu sedia melayani anda</p>
                        </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0" data-aos="zoom-in"
                        data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bx bx-layer"></i></div>
                            <h4><a href="">Terdata</a></h4>
                            <p>Setiap hasil disertai dengan hak cipta yang telah terdaftar</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">

                <div class="row">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3>Call To Action</h3>
                        <p> Apakah Anda bosan dengan kehadiran online di bawah standar? Biarkan tim ahli kami merevolusi
                            pengembangan web dan aplikasi Anda dengan solusi khusus kami. Ucapkan selamat tinggal pada
                            desain “cookie-cutter” dan halo ke situs web dan aplikasi yang benar-benar mewakili bisnis
                            Anda. Hubungi kami hari ini untuk melihat perbedaan yang dapat dibuat oleh layanan kami.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#pricing">Call To Action</a>
                    </div>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Portfolio</h2>
                    <p>Portofolio kami adalah representasi dari kepercayaan yang diberikan klien kami kepada kami untuk
                        memberikan hasil. Jelajahi sekarang dan bayangkan apa yang bisa kami lakukan untuk Anda.</p>
                </div>

                <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up"
                    data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-card">Card</li>
                    <li data-filter=".filter-web">Web</li>
                </ul>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="{{ url('/portofolio') }}" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-4.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-5.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-6.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-7.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-8.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-img"><img
                                src="{{ asset('Arsha/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ asset('Arsha/assets/img/portfolio/portfolio-9.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team" class="team section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Team</h2>
                    <p>Dari pengembang hingga desainer, tim kami terdiri dari para ahli yang berdedikasi untuk
                        memberikan layanan pengembangan web dan aplikasi terbaik. Temui individu-individu berbakat yang
                        akan bekerja dengan Anda untuk mewujudkan visi online Anda.</p>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="100">
                            <div class="pic"><img src="{{ asset('Arsha/assets/img/team/team-1.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>Ahmad Naufal</h4>
                                <span>Professional Web Developer</span>
                                <p>Ready to expand the online world</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="200">
                            <div class="pic"><img src="{{ asset('Arsha/assets/img/team/team-2.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>ENGGA TAU 1</h4>
                                <span>Professional UI/UX Designer</span>
                                <p>-</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="300">
                            <div class="pic"><img src="{{ asset('Arsha/assets/img/team/team-3.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>ENGGA TAU 2</h4>
                                <span>Professional App Developer</span>
                                <p>-</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start" data-aos="zoom-in" data-aos-delay="400">
                            <div class="pic"><img src="{{ asset('Arsha/assets/img/team/team-4.jpg') }}"
                                    class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4>ENGGA TAU 3</h4>
                                <span>Professional System Analist</span>
                                <p>-</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Pricing</h2>
                    <p>Kami menawarkan harga yang kompetitif tanpa mengorbankan kualitas. Lihat opsi harga kami dan
                        lihat bagaimana kami dapat membantu Anda mencapai tujuan online Anda.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="box ">
                            <h3>UI/UX Design</h3>
                            <h4><sup>$</sup>9<span>per project</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> User Friendly</li>
                                <li><i class="bx bx-check"></i> Berkualitas dan Premium</li>
                                <li><i class="bx bx-check"></i> Gratis Konsultasi Design</li>
                                <li><i class="bx bx-check"></i> Designer selalu ada setiap saat</li>
                                <li><i class="bx bx-check"></i> Free revisi sebanyak 2x</li>

                                </span></li>
                            </ul>
                            <a href="#contact" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box ">
                            <h3>Developer Plan</h3>
                            <h4><sup>$</sup>99<span>per project</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Fullstack Development</li>
                                <li><i class="bx bx-check"></i> Gratis Hosting</li>
                                <li><i class="bx bx-check"></i> Gratis Konsultasi Project</li>
                                <li><i class="bx bx-check"></i> Developer selalu ada setiap saat</li>
                                <li><i class="bx bx-check"></i> Free revisi sebanyak 3x</li>
                            </ul>
                            <a href="#contact" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                    <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
                        <div class="box ">
                            <h3>Business Plan</h3>
                            <h4><sup>$</sup>149<span>per project</span></h4>
                            <ul>
                                <li><i class="bx bx-check"></i> Konsultan Profesional</li>
                                <li><i class="bx bx-check"></i> Gratis Hosting</li>
                                <li><i class="bx bx-check"></i> Gratis Konsultasi Project</li>
                                <li><i class="bx bx-check"></i> Developer selalu ada setiap saat</li>
                                <li><i class="bx bx-check"></i> Free revisi sebanyak 5x</li>
                            </ul>
                            <a href="#contact" class="buy-btn">Get Started</a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                    <p>Beberapa pertanyaan yang sering diajukan kami ada di sini untuk memberikan jawaban cepat atas
                        pertanyaan umum tentang layanan pengembangan web dan aplikasi kami.</p>
                </div>

                <div class="faq-list">
                    <ul>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-1" class="collapsed">Layanan apa yang Anda tawarkan untuk pengembangan web dan
                                aplikasi <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Kami menawarkan berbagai layanan pengembangan web dan aplikasi termasuk desain situs
                                    web, pengembangan dan pemeliharaan, solusi e-commerce, pengembangan aplikasi
                                    seluler, dan banyak lagi. Kami bekerja dengan klien untuk menciptakan solusi khusus
                                    yang memenuhi kebutuhan dan tujuan spesifik mereka.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Bagaimana struktur harga Anda untuk
                                layanan pengembangan web dan aplikasi? <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Struktur harga kami bervariasi tergantung pada layanan spesifik dan persyaratan
                                    proyek. Kami menawarkan opsi harga yang fleksibel dan dapat bekerja dengan klien
                                    untuk membuat paket yang sesuai dengan anggaran mereka.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Bagaimana Anda mendekati proses desain
                                dan pengembangan untuk situs web atau aplikasi? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Kami mengikuti proses desain yang berpusat pada pengguna, di mana kami bekerja sama
                                    dengan klien kami untuk memahami kebutuhan, tujuan, dan audiens target mereka. Kami
                                    kemudian menggunakan informasi ini untuk membuat solusi khusus yang tidak hanya
                                    menarik secara visual tetapi juga ramah pengguna dan efisien. Kami juga menggunakan
                                    metodologi pengembangan tangkas untuk memastikan pengiriman tepat waktu dan
                                    kemampuan untuk melakukan penyesuaian selama proses pengembangan."
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Apakah Anda menawarkan pemeliharaan dan
                                dukungan berkelanjutan untuk proyek pengembangan web dan aplikasi? <i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Ya, kami menawarkan layanan pemeliharaan dan dukungan untuk memastikan bahwa situs
                                    web atau aplikasi Anda selalu up-to-date dan berjalan lancar. Kami juga menawarkan
                                    berbagai tingkat dukungan, mulai dari pembaruan dasar hingga paket pemeliharaan dan
                                    dukungan berkelanjutan yang komprehensif.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Dari desain situs web hingga pengembangan aplikasi, kami di sini untuk membantu. Hubungi kami
                        hari ini untuk membantu Anda lebih banyak tentang layanan kami dan bagaimana kami dapat membantu
                        Anda sukses secara online.</p>
                </div>

                <div class="row">

                    <div class="col-lg-5 d-flex align-items-stretch">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Synapse Academy
                                    Komplek Rajawali Village, Jl. Rajawali No.1228, Palembang</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>office@sydemy.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p> +62 896-3379-8626</p>
                            </div>

                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4524162058615!2d104.76167461467315!3d-2.9718795978355694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b75fb21469d1f%3A0x941c3b4f42a53340!2sSynapse%20Academy%20Tempat%20Pelatihan%20IT%20Palembang%20Belajar%20Programming%20Berkualitas%20Sertifikasi%20Nasional!5e0!3m2!1sid!2sid!4v1674628895627!5m2!1sid!2sid"
                                width="390" height="450"
                                style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></>"
                                width="390" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>

                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="name"
                                        required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="name">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Plan</label>
                                {{-- <input type="text" class="form-control" name="subject" id="subject" required> --}}
                                <select class="form-control" required name="plan" id="">
                                    <option value="">Choose your plan</option>
                                    <option value="UI/UX">UI/UX Design</option>
                                    <option value="Front-end">Front-end Design</option>
                                    <option value="Fullstack">Fullstack Development</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Your Project Idea</label>
                                <textarea class="form-control" name="message" rows="10" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Request</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <h4>Join Our Newsletter</h4>
                        <p>Daftar email kalian untuk mendapatkan info dan promo menarik dari kita!</p>
                        <form action="" method="post">
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>Arsha</h3>
                        <p>
                            Synapse Academy
                            Komplek Rajawali Village, Jl. Rajawali No.1228<br>
                            Palembang<br>
                            Indonesia <br><br>
                            <strong>Phone:</strong> 0896-3379-8626<br>
                            <strong>Email:</strong> office@sydemy.com<br>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Our Social Networks</h4>
                        <p>Follow us for new update!</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container footer-bottom clearfix">
            <div class="copyright">
                &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
                Designed by <a href="https://bootstrapmade.com/">Ahmad Naufal Muzakki</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('Arsha/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('Arsha/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('Arsha/assets/js/main.js') }}"></script>

</body>

</html>
