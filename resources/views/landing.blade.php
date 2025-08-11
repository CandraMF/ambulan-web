<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>{{ $setting->nama }} - Transport Medis 24 Jam</title>
    <meta name="description" content="Layanan ambulance Bandung 24 jam untuk transport pasien, jenazah, dan kegawatdaruratan. {{ $setting->nama }} melayani dengan armada lengkap dan tenaga medis berpengalaman. Hubungi {{ $setting->no_hp }}">
    <meta name="keywords" content="ambulance bandung, ambulance transport, layanan ambulance 24 jam, transport pasien bandung, ambulance jenazah, layanan medis darurat, ambulance murah bandung, sewa ambulance, emergency medical service">
    <meta name="author" content="{{ $setting->nama }}">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="7 days">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="{{ $setting->nama }} - Layanan Ambulance Terpercaya di Bandung">
    <meta property="og:description" content="Layanan ambulance profesional 24 jam di Bandung untuk transport pasien, jenazah, dan situasi darurat medis">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset('img/BATIMG/Gambar_WhatsApp_2023-03-22_pukul_12.20.07-removebg-preview.png') }}">
    <meta property="og:site_name" content="{{ $setting->nama }}">
    <meta property="og:locale" content="id_ID">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $setting->nama }} - Layanan Ambulance Bandung">
    <meta name="twitter:description" content="Layanan ambulance profesional 24 jam di Bandung">
    <meta name="twitter:image" content="{{ asset('img/BATIMG/Gambar_WhatsApp_2023-03-22_pukul_12.20.07-removebg-preview.png') }}">

    <!-- Local Business Schema -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "MedicalBusiness",
            "name": "{{ $setting->nama }}",
            "description": "{{ $setting->deskripsi }}",
            "url": "{{ url()->current() }}",
            "telephone": "{{ $setting->no_hp }}",
            "email": "{{ $setting->email }}",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "{{ $setting->alamat }}",
                "addressLocality": "Bandung",
                "addressRegion": "Jawa Barat",
                "addressCountry": "ID"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "-6.9175",
                "longitude": "107.6191"
            },
            "openingHours": "Mo-Su 00:00-23:59",
            "priceRange": "$$",
            "serviceArea": {
                "@type": "City",
                "name": "Bandung"
            },
            "medicalSpecialty": "Emergency Medicine",
            "availableService": [{
                    "@type": "MedicalProcedure",
                    "name": "Ambulance Transport"
                },
                {
                    "@type": "MedicalProcedure",
                    "name": "Emergency Medical Services"
                }
            ]
        }
    </script>

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Preconnect for faster font loading -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Fonts with display=swap for better performance -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">

    <!-- Critical CSS should be inlined, external CSS with media queries -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" media="print" onload="this.media='all'">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('vendor/own-carousel/own-carousel.min.css') }}" media="print" onload="this.media='all'">

    <!-- Preload important scripts -->
    <link rel="preload" href="{{ asset('vendor/own-carousel/own-carousel.min.js') }}" as="script">
</head>

<body>
    <!-- Skip to main content for accessibility -->
    <a href="#main" class="sr-only sr-only-focusable d-none">Skip to main content</a>

    <!-- ======= Top Bar ======= -->
    <section id="topbar" class="d-flex align-items-center">
        <div class="container d-flex justify-content-center justify-content-md-between">
            <div class="contact-info d-flex align-items-center ">
                <span class="d-md-block d-none">
                    <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.com">{{ $setting->email }}</a>

                </span>
                <i class="bi bi-phone-fill phone-icon"></i> {{ $setting->no_hp }} / {{ $setting->no_hp_alt }}
            </div>
            <div class="social-links d-none d-md-block">
                <a href="{{ $setting->youtube }}" target='_blank' rel="noopener" class="facebook" title="YouTube {{ $setting->nama }}" aria-label="YouTube">
                    <i class="bi-youtube" aria-hidden="true"></i>
                </a>
                <a href="{{ $setting->instagram }}" target='_blank' rel="noopener" class="instagram" title="Instagram {{ $setting->nama }}" aria-label="Instagram">
                    <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
                <a href="{{ $setting->tiktok }}" target='_blank' rel="noopener" class="linkedin" title="TikTok {{ $setting->nama }}" aria-label="TikTok">
                    <i class="bi-tiktok" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center" role="banner">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <a href="#hero" class="logo" title="{{ $setting->nama }} - Beranda">
                    <img src="{{ asset('img/BATIMG/Gambar_WhatsApp_2023-03-22_pukul_12.20.07-removebg-preview.png') }}"
                        alt="Logo {{ $setting->nama }} - Layanan Ambulance Bandung"
                        class="img-fluid"
                        width="120"
                        height="60">
                </a>
            </div>

            <nav id="navbar" class="navbar" role="navigation" aria-label="Main navigation">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero" title="Beranda">Beranda</a></li>
                    <li><a class="nav-link scrollto" href="#about" title="Profil Perusahaan">Profil</a></li>
                    <li><a class="nav-link scrollto" href="#services" title="Layanan Ambulance">Layanan</a></li>
                    <li><a class="nav-link scrollto" href="#contact" title="Kontak Kami">Kontak</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('login') }}" title="Login Admin">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle" aria-label="Toggle navigation"></i>
            </nav>
        </div>
    </header>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" role="main">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="500">
            <h1>{{ $setting->nama }}</h1>
            <h2>{{ $setting->jargon }}</h2>
            <p class="hero-description" style="color: #fff">Layanan ambulance profesional 24 jam di Bandung untuk transport pasien, jenazah, dan kegawatdaruratan medis.</p>
            <a class="cta-btn" href="https://api.whatsapp.com/send?phone={{preg_replace('/\D+/', '', $setting->no_hp)}}" target="_blank" rel="noopener" class="btn-hero" title="Hubungi Ambulance Sekarang">
                <i class="bi bi-whatsapp" aria-hidden="true"></i> Hubungi Sekarang
            </a>
        </div>
    </section>

    <main id="main">
        <!-- ======= About Section ======= -->
        <section id="about" class="about" aria-labelledby="about-heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
                        <img src="{{ asset('img/about.jpeg') }}"
                            class="img-fluid"
                            alt="Tim {{ $setting->nama }} - Profesional Ambulance Bandung"
                            width="600"
                            height="400">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">
                        <h2 id="about-heading">Tentang {{ $setting->nama }}</h2>
                        <p class="fst-italic">
                        <pre style="white-space: pre-wrap; font-family: 'Raleway', sans-serif; font-size: 16px; line-height: 1.5; margin-bottom: 1em; "
                            class="preformatted">{{ $setting->deskripsi }}</pre>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Services Section ======= -->
        <section id="services" class="services" aria-labelledby="services-heading">
            <div class="container">
                <div class="section-title">
                    <span>Layanan Kami</span>
                    <h2 id="services-heading">Layanan Kami</h2>
                    <p>Berbagai layanan ambulance profesional untuk kebutuhan medis Anda</p>
                </div>

                <div class="row">
                    @foreach ($layanan as $index => $l)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                        <article class="icon-box px-0">
                            <div class="icon overflow-hidden">
                                <img src="{{ 'storage/' . ($l->foto->where('status', 2)->first()->foto ?? $l->foto->first()->foto) }}"
                                    alt="Layanan {{ $l->nama }} - {{ $setting->nama }}"
                                    width="300"
                                    height="200"
                                    loading="lazy">
                            </div>
                            <h3>{{ $l->nama }}</h3>
                            <p>{{ $l->deskripsi }}</p>
                        </article>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- ======= CTA Section ======= -->
        <section id="cta" class="cta" aria-labelledby="cta-heading">
            <div class="container" data-aos="zoom-in">
                <div class="text-center">
                    <h3>{{ $setting->judul_cta }}</h3>
                    <p style="white-space: pre-wrap; font-family: 'Raleway', sans-serif; font-size: 16px; line-height: 1.5; margin-bottom: 1em; "
                        class="preformatted text-white">{{ $setting->deskripsi_cta }}</p>
                    <a class="cta-btn" href="https://api.whatsapp.com/send?phone=6285222551968" target="blank">Hubungi Kami</a>
                </div>
            </div>
        </section>

        <!-- ======= Ambulan Section ======= -->
        <section id="dokumentasi" class="dokumentasi" aria-labelledby="ambulan-heading">
            <div class="container">
                <div class="section-title">
                    <span>Ambulan</span>
                    <h2 id="ambulan-heading">Ambulan</h2>
                    <p>Koleksi ambulance modern dan lengkap untuk berbagai kebutuhan medis</p>
                </div>

                <div class="own-carousel__container">
                    <div class="own-carousel__outer">
                        <div class="own-carousel">
                            @foreach ($ambulan as $a)
                            <div class="own-carousel__item">
                                <article class="card h-100 border-0">
                                    <img src="{{ 'storage/' . ($a->foto->where('status', 2)->first()->foto ?? $a->foto->first()->foto) }}"
                                        class="card-img-top"
                                        alt="Ambulance {{ $a->nama }} - {{ $setting->nama }}"
                                        width="300"
                                        height="200"
                                        loading="lazy">
                                    <div class="card-body px-2 pb-3">
                                        <h3 class="card-title">{{ $a->nama }}</h3>
                                        <p class="card-subtitle mb-2 text-muted">{{ $a->deskripsi }}</p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0 px-2 py-0">
                                        <a href="https://api.whatsapp.com/send?phone={{preg_replace('/\D+/', '', $setting->no_hp)}}"
                                            target="_blank"
                                            rel="noopener"
                                            class="btn rounded-0 text-white"
                                            style="background: #cc1616;"
                                            title="Sewa {{ $a->nama }} via WhatsApp">
                                            <i class="bi bi-whatsapp" aria-hidden="true"></i> Hubungi Kami
                                        </a>
                                    </div>
                                </article>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Testimoni Section ======= -->
        <section id="team" class="team" aria-labelledby="testimoni-heading">
            <div class="container">
                <div class="section-title">
                    <span>Testimoni</span>
                    <h2 id="testimoni-heading">Testimoni</h2>
                    <p>Kepercayaan adalah prioritas utama kami</p>
                </div>

                <div class="child-page-listing">
                    <div class="grid-container">
                        <article class="location-listing">
                            <div class="location-image">
                                <img width="300" height="169"
                                    src="{{ asset('img/Testimoni/23(1).jpg') }}"
                                    alt="Testimoni {{ $setting->nama }} 1"
                                    loading="lazy">
                            </div>
                        </article>

                        <article class="location-listing">
                            <div class="location-image">
                                <img width="300" height="169"
                                    src="{{ asset('img/Testimoni/24(2).jpg') }}"
                                    alt="Testimoni {{ $setting->nama }} 2"
                                    loading="lazy">
                            </div>
                        </article>

                        <article class="location-listing">
                            <div class="location-image">
                                <img width="300" height="169"
                                    src="{{ asset('img/Testimoni/27(3).jpg') }}"
                                    alt="Testimoni {{ $setting->nama }} 3"
                                    loading="lazy">
                            </div>
                        </article>

                        <article class="location-listing">
                            <div class="location-image">
                                <img width="300" height="169"
                                    src="{{ asset('img/Testimoni/28(4).jpg') }}"
                                    alt="Testimoni {{ $setting->nama }} 4"
                                    loading="lazy">
                            </div>
                        </article>

                        <article class="location-listing">
                            <div class="location-image">
                                <img width="300" height="169"
                                    src="{{ asset('img/Testimoni/29(5).jpg') }}"
                                    alt="Testimoni {{ $setting->nama }} 5"
                                    loading="lazy">
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact" aria-labelledby="contact-heading">
            <div class="container">
                <div class="section-title">
                    <span>Kontak</span>
                    <h2 id="contact-heading">Hubungi {{ $setting->nama }}</h2>
                    <p>Siap melayani Anda 24 jam setiap hari untuk kebutuhan ambulance</p>
                </div>

                <div class="row" data-aos="fade-up">
                    <div class="col-lg-6">
                        <div class="info-box px-4 mb-4">
                            <i class="bx bx-map" aria-hidden="true"></i>
                            <h3>Alamat Kami</h3>
                            <address>{{ $setting->alamat }}</address>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box px-4 mb-4">
                            <i class="bx bx-envelope" aria-hidden="true"></i>
                            <h3>Email Kami</h3>
                            <p><a href="mailto:{{ $setting->email }}" title="Email {{ $setting->nama }}">{{ $setting->email }}</a></p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="info-box px-4 mb-4">
                            <i class="bx bx-phone-call" aria-hidden="true"></i>
                            <h3>Nomor Darurat</h3>
                            <p>
                                <a href="tel:{{ $setting->no_hp }}" title="Telepon Darurat">{{ $setting->no_hp }}</a> /
                                <a href="tel:{{ $setting->no_hp_alt }}" title="Telepon Alternatif">{{ $setting->no_hp_alt }}</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row" data-aos="fade-up">
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
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" role="contentinfo">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>{{ $setting->nama }}</h3>
                            <address>
                                {{ $setting->alamat }}<br><br>
                                <strong>Telepon:</strong>
                                <a href="tel:{{ $setting->no_hp }}">{{ $setting->no_hp }}</a> /
                                <a href="tel:{{ $setting->no_hp_alt }}">{{ $setting->no_hp_alt }}</a><br>
                                <strong>Email:</strong>
                                <a href="mailto:{{ $setting->email }}">{{ $setting->email }}</a><br>
                            </address>
                            <div class="social-links mt-3">
                                <a href="{{ $setting->youtube }}" target='_blank' rel="noopener" class="facebook"
                                    title="YouTube {{ $setting->nama }}" aria-label="YouTube">
                                    <i class="bx bxl-youtube" aria-hidden="true"></i>
                                </a>
                                <a href="{{ $setting->instagram }}" target='_blank' rel="noopener" class="instagram"
                                    title="Instagram {{ $setting->nama }}" aria-label="Instagram">
                                    <i class="bx bxl-instagram" aria-hidden="true"></i>
                                </a>
                                <a href="{{ $setting->tiktok }}" target='_blank' rel="noopener" class="linkedin"
                                    title="TikTok {{ $setting->nama }}" aria-label="TikTok">
                                    <i class="bx bxl-tiktok" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Navigasi</h4>
                        <ul>
                            <li><a href="#hero" title="Beranda"><i class="bx bx-chevron-right" aria-hidden="true"></i> Beranda</a></li>
                            <li><a href="#about" title="Profil Perusahaan"><i class="bx bx-chevron-right" aria-hidden="true"></i> Profil</a></li>
                            <li><a href="#services" title="Layanan Ambulance"><i class="bx bx-chevron-right" aria-hidden="true"></i> Layanan</a></li>
                            <li><a href="#contact" title="Kontak Kami"><i class="bx bx-chevron-right" aria-hidden="true"></i> Kontak</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Layanan Darurat 24 Jam</h4>
                        <p>{{ $setting->deskripsi_cta }}</p>
                        <div class="emergency-contact">
                            <a href="https://api.whatsapp.com/send?phone={{ preg_replace('/\D+/', '', $setting->no_hp )}}"
                                target="_blank"
                                rel="noopener"
                                class="btn btn-success"
                                title="WhatsApp Darurat">
                                <i class="bx bxl-whatsapp" aria-hidden="true"></i> WhatsApp Darurat
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; {{ date('Y') }} <strong><span>{{ $setting->nama }}</span></strong>. All Rights Reserved
            </div>
        </div>
    </footer>

    <!-- WhatsApp Floating Button -->
    <a href="https://api.whatsapp.com/send?phone={{preg_replace('/\D+/', '', $setting->no_hp)}}"
        target="_blank"
        rel="noopener"
        style="background: #25D366 !important"
        class="p-4 back-to-top d-flex align-items-center justify-content-center"
        title="Hubungi via WhatsApp"
        aria-label="WhatsApp">
        <i class="bi bi-whatsapp" aria-hidden="true"></i>
    </a>

    <div id="preloader"></div>

    <!-- Vendor JS Files - Deferred loading -->
    <script src="{{ asset('vendor/aos/aos.js') }}" defer></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}" defer></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}" defer></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}" defer></script>

    <!-- Main JS File -->
    <script src="{{ asset('js/main.js') }}" defer></script>

    <!-- Carousel Script -->
    <script src="{{ asset('vendor/own-carousel/own-carousel.min.js') }}" defer></script>
    <script defer>
        document.addEventListener("DOMContentLoaded", () => {
            if (window.ownCarousel) {
                document.querySelector(".own-carousel__container").ownCarousel({
                    itemPerRow: 4,
                    itemWidth: 24,
                    responsive: {
                        1000: [4, 24],
                        800: [3, 33],
                        600: [2, 49],
                        400: [1, 100]
                    },
                    autoplay: 3000,
                });
            }
        });
    </script>

    <!-- FAQ Schema for better SEO -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "FAQPage",
            "mainEntity": [{
                    "@type": "Question",
                    "name": "Apakah layanan ambulance tersedia 24 jam?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, {{ $setting->nama }} melayani 24 jam setiap hari untuk kebutuhan darurat medis dan transport ambulance di Bandung."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Wilayah mana saja yang dilayani oleh ambulance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Kami melayani seluruh wilayah Bandung dan sekitarnya untuk transport pasien, jenazah, dan layanan kegawatdaruratan medis."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Bagaimana cara memesan ambulance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Anda dapat menghubungi kami melalui WhatsApp di {{ $setting->no_hp }} atau telepon langsung untuk pemesanan ambulance darurat."
                    }
                },
                {
                    "@type": "Question",
                    "name": "Apakah tersedia tenaga medis dalam ambulance?",
                    "acceptedAnswer": {
                        "@type": "Answer",
                        "text": "Ya, setiap ambulance kami dilengkapi dengan tenaga medis berpengalaman dan peralatan medis yang lengkap."
                    }
                }
            ]
        }
    </script>

</body>

</html>