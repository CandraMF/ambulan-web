<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ $setting->nama }}</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/own-carousel/own-carousel.min.css') }}">

    <script src="{{ asset('vendor/own-carousel/own-carousel.min.js') }}"></script>

    <!-- =======================================================
  * Template Name: Day - v4.10.0
  * Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{ $setting->email }}</a>
                <i class="bi bi-phone-fill phone-icon"></i> {{ $setting->no_hp }} / {{ $setting->no_hp_alt }}
            </div>
            <div class="social-links d-none d-md-block">
                <!-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> -->
                <a href="{{ $setting->youtube }}"target='_blank' class="facebook"><i class="bi-youtube"></i></a>
                <a href="{{ $setting->instagram }}"target='_blank' class="instagram"><i
                        class="bi bi-instagram"></i></a>
                <a href="{{ $setting->tiktok }}"target='_blank' class="linkedin"><i class="bi-tiktok"></i></i></a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo">
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="#" class="logo"><img
                        src="{{ asset('img/BATIMG/Gambar_WhatsApp_2023-03-22_pukul_12.20.07-removebg-preview.png') }}"
                        alt="" class="img-fluid"></a>
            </h1>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services">Layanan</a></li>
                    <!-- <li><a class="nav-link scrollto " href="#portfolio">Artikel</a></li> -->
                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('login') }}">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>{{ $setting->nama }}</h1>
            <h2>{{ $setting->jargon }}</h2>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="{{ asset('img/about.jpeg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h1>Tentang Kami</h1>
                        <p class="fst-italic">
                            <pre style="white-space: pre-wrap; font-family: 'Raleway', sans-serif; font-size: 16px; line-height: 1.5; margin-bottom: 1em; "
                                class="preformatted">{{ $setting->deskripsi }}</pre>
                        </p>
                        <!-- <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p> -->
                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Why Us Section ======= -->
        <!-- <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">

          <div class="col-lg-4" data-aos="fade-up">
            <div class="box">
              <span>01</span>
              <h4>Lorem Ipsum</h4>
              <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="150">
            <div class="box">
              <span>02</span>
              <h4>Repellat Nihil</h4>
              <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
            </div>
          </div>

          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <span>03</span>
              <h4> Ad ad velit qui</h4>
              <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
            </div>
          </div>

        </div>

      </div>
    </section>End Why Us Section -->

        <!-- ======= Clients Section ======= -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <span>Layanan</span>
                    <h1>Layanan</h1>
                    <p>Layanan Bandung Ambulance Transport</p>
                </div>

                <div class="row">
                    @foreach ($layanan as $l)
                        <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up">
                            <div class="icon-box px-0">
                                <div class="icon overflow-hidden">
                                    <img src="{{ 'storage/' . ($l->foto->where('status', 2)->first()->foto ?? $l->foto->first()->foto) }}"
                                        class="">
                                </div>
                                <h4>{{ $l->nama }}</h4>
                                <p>{{ $l->deskripsi }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </section>
        <!-- End Services Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>{{ $setting->judul_cta }}</h3>
                    <pre style="white-space: pre-wrap; font-family: 'Raleway', sans-serif; font-size: 16px; line-height: 1.5; margin-bottom: 1em; "
                        class="preformatted text-white">{{ $setting->deskripsi_cta }}</pre>
                    <a class="cta-btn" href="https://api.whatsapp.com/send?phone=6285222551968" target="blank">Hubungi Kami</a>
                </div>
            </div>
        </section>

        <section id="dokumentasi" class="dokumentasi">
            <div class="container">

                <div class="section-title">
                    <span>Ambulan</span>
                    <h2>Ambulan</h2>
                </div>

                <div class="own-carousel__container">
                    <div class="own-carousel__outer">
                        <div class="own-carousel">
                            @foreach ($ambulan as $a)
                                <div class="own-carousel__item">
                                    <div class="card h-100 border-0">
                                        <img src="{{ 'storage/' . ($a->foto->where('status', 2)->first()->foto ?? $a->foto->first()->foto) }}"
                                            class="card-img-top" alt="...">
                                        <div class="card-body px-2 pb-3">
                                            <h5 class="card-title">{{ $a->nama }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{ $a->deskripsi }}</h6>
                                        </div>
                                        <div class="card-footer bg-transparent border-0 px-2 py-0">
                                            <a href="https://api.whatsapp.com/send?phone=6285222551968" target="blank" class="btn rounded-0 text-white" style="background: #cc1616;">Hubungi Kami</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- <div class="row row-cols-1 row-cols-md-3 g-4">

                </div> --}}


            </div>
        </section>



        <!-- ======= Testimoni Section ======= -->
        <section id="team" class="team">
            <div class="container">
                <div class="section-title">
                    <span>Testimoni</span>
                    <h1>Testimoni</h1>
                    <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
                </div>

                <div class="child-page-listing">

                    <div class="grid-container">

                        <article id="3685" class="location-listing">
                            <div class="location-image">
                                <a href="#">
                                    <img width="" height="169" src="{{ asset('img/Testimoni/23(1).jpg') }}"
                                        alt="san francisco">
                                </a>
                            </div>
                        </article>

                        <article id="3688" class="location-listing">
                            <div class="location-image">
                                <a href="#">
                                    <img width="" height="169" src="{{ asset('img/Testimoni/24(2).jpg') }}"
                                        alt="london">
                                </a>
                            </div>
                        </article>

                        <article id="3691" class="location-listing">
                            <div class="location-image">
                                <a href="#">
                                    <img width="" height="169" src="{{ asset('img/Testimoni/27(3).jpg') }}"
                                        alt="new york">
                                </a>
                            </div>
                        </article>

                        <article id="3694" class="location-listing">
                            <div class="location-image">
                                <a href="#">
                                    <img width="" height="169" src="{{ asset('img/Testimoni/28(4).jpg') }}"
                                        alt="cape town">
                                </a>
                            </div>
                        </article>

                        <article id="3697" class="location-listing">
                            <div class="location-image">
                                <a href="#">
                                    <img width="" height="169" src="{{ asset('img/Testimoni/29(5).jpg') }}"
                                        alt="beijing">
                                </a>
                            </div>

                    </div>


                </div>
        </section>
        <!-- End Testimoni Section -->



        <!-- ======= Contact Section ======= -->


        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <span>Kontak</span>
                    <h2>Kontak</h2>
                    <!-- <p>Sit sint consectetur velit quisquam cupiditate impedit suscipit alias</p> -->
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box mb-4">
                            <i class="bx bx-map"></i>
                            <h3>Alamat Kami</h3>
                            <p>{{ $setting->alamat }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-envelope"></i>
                            <h3>Email Kami</h3>
                            <p>{{ $setting->email }}</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box  mb-4">
                            <i class="bx bx-phone-call"></i>
                            <h3>Nomor Layanan</h3>
                            <p>{{ $setting->no_hp }} / {{ $setting->no_hp_alt }}</p>
                        </div>
                    </div>

                </div>

                <div class="row" data-aos="fade-up">

                    <!-- <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div> -->

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                            </div>
                            <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Section

  </main> -->
        <!-- End #main -->

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-4 col-md-6">
                            <div class="footer-info">
                                <h3>{{ $setting->nama }}</h3>
                                <p>{{ $setting->alamat }} <br><br>
                                    <strong>Phone:</strong> {{ $setting->no_hp }} / {{ $setting->no_hp_alt }}<br>
                                    <strong>Email:</strong> {{ $setting->email }}<br>
                                </p>
                                <div class="social-links mt-3">
                                    <!-- <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a> -->
                                    <a href="{{ $setting->youtube }}"target='_blank' class="facebook"><i
                                            class="bx bxl-youtube"></i></a>
                                    <a href="{{ $setting->instagram }}"target='_blank' class="instagram"><i
                                            class="bx bxl-instagram"></i></a>
                                    <!-- <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a> -->
                                    <a href="{{ $setting->tiktok }}"target='_blank' class="linkedin"><i
                                            class="bx bxl-tiktok"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-2 col-md-6 footer-links">
                            <h4>{{ $setting->nama }}</h4>
                            <ul>
                                <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#about">Profil</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#services">Layanan</a></li>
                                <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
                                <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
                            </ul>
                        </div>

                        <!-- <div class="col-lg-2 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pengantar pasien</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

                        <div class="col-lg-4 col-md-6 footer-newsletter">
                            <h4>Artikel Kami</h4>
                            <p>{{ $setting->deskripsi_cta }}</p>
                            <form action="" method="post">
                                <input type="email" name="email"><input type="submit" value="Subscribe">
                            </form>

                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <strong><span>BernasSpot</span></strong>. All Rights Reserved
                </div>
                <div class="credits">

        </footer><!-- End Footer -->

        <a href="https://api.whatsapp.com/send?phone=6285222551968" target="blank" style="background: #25D366 !important" class="p-4 back-to-top d-flex align-items-center justify-content-center">
            <i  class="bi bi-whatsapp"></i>
        </a>
        <div id="preloader"></div>

        <!-- Vendor JS Files -->
        <script src="{{ asset('vendor/aos/aos.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}""></script>
        <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}""></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}""></script>
        <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}""></script>
        <script src="{{ asset('vendor/php-email-form/validate.js') }}""></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('js/main.js') }}"></script>

        <script>
            document.addEventListener("DOMContentLoaded", () => {
                document.querySelector(".own-carousel__container").ownCarousel({
                    itemPerRow:4,
                    itemWidth:24,
                    responsive: {
                        1000: [4, 24],
                        800: [3, 33],
                        600: [2, 49],
                        400: [1, 100]
                    },
                    autoplay: 3000,
                });
                responsive();
            });

        </script>

</body>

</html>
