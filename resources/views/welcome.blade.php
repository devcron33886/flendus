<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}-</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vollkorn:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <a href="{{ route('welcome') }}" class="logo me-auto"><img src="{{ asset('images/Flendus-logo.png') }}" alt=""
                                                                   style="height: 120px !important; width: 160px;"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">About</a></li>
                <li><a class="nav-link scrollto" href="{{ route('products') }}">Products</a></li>
                <li class="dropdown"><a href="#"><span>Classes</span> <i class="bi bi-chevron-down"></i></a>
                    <ul>
                      <li><a href="{{ route('aerobics') }}">Aerobics</a></li>

                      <li><a href="{{ route('zumba') }}">Zumba</a></li>
                    </ul>
                </li>

                <li><a class="nav-link scrollto" href="#team">Team</a></li>
                <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header>
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
        <div class="row">
            <div class="col-xl-6">
                <h1>We are for Sport</h1>
                <h2>Men and Women Quality Sports Wear in Rwanda</h2>
                <a href="#about" class="btn-get-started scrollto">Get Started</a>
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<main id="main">


    <section id="clients" class="clients">
        <div class="container">
            <h2>ALL COMBINED TO MAKE PEOPLE HEALTHY AND COMFORTABLE</h2>

            <p> Flendus strives to create for you a better place where you can find all you need for work out.
                We design world-class quality sportswear and offer them at a reasonable price. In addition, we
                work with experienced trainers with skin in the game who knows what it takes to help you stay
                fit</p>

        </div>
    </section>

    <section id="about" class="about section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">
                <div class="content col-xl-5 d-flex align-items-stretch">
                    <div class="content">
                        <h3>About Us</h3>
                        <p>
                            Flendus strives to create for you a better place where you can find all you need to work
                            out. We design and produce world class quality sportswear at an affordable price. In
                            addition, we work with experienced trainers with skin in the industry who knows what it
                            takes to help you stay fit.
                        </p>
                    </div>
                </div>
                <div class="col-xl-7 d-flex align-items-stretch">
                    <div class="d-flex flex-column justify-content-center">

                        <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                            <img src="{{ asset('images/Flendus-Workout-Shirt-4000Rwf.jpeg') }}"
                                 style="height: 400px; border-radius:4px;">
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="products" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Our Products</h2>

            </div>

            <div class="row">
                @foreach($products as $product)
                    <div class="col-md-4">
                        <img src="/storage/{{ $product->featured_image }}" class="card-img-top"
                             alt="{{ $product->name }}" data-aos="fade-up" data-aos-delay="100" style="width: 100%;">
                        <div class="card-body">
                            <h4><a href="#">{{$product->name}}</a></h4>
                            <p>{{ $product->description }}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Join our Classes</h2>
                <p>We have several classes including Aerobics, Zumba Among others happening at different scheduled
                    time. Join the Class today. Send us a message to learn more about our classes.</p>
            </div>


            <div class="row portfolio-container justify-content-center" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Aerobics</h4>
                            <p style="text-transform: capitalize;">FLENDUS brought you Aerobic exercises that are a
                                perfect remedy for weight loss. They
                                not only reduce your fat, but also help increase your muscular endurance.
                                Additionally, your body requires an increased flow of oxygen to lose weight.</p>
                            <div class="portfolio-links">
                                <a href="img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox"><i class="bx bx-plus"></i></a>
                                <a href="{{ route('aerobics') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                    <div class="portfolio-wrap">
                        <img src="img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>Zumba</h4>
                            <p style="text-transform: capitalize;">FLENDUS offers this fitness program that combines
                                Latin and international music with
                                dance moves as routines that incorporate interval training, alternating fast and
                                slow rhythms to help improve cardiovascular fitness.</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                                   class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                <a href="{{ route('zumba') }}" title="More Details"><i
                                        class="bx bx-link"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="team" class="team">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>MEET OUR TEAM</h2>

            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="{{ asset('images/Leah-300x278.jpg') }}" class="img-fluid" alt=""
                                 style="width: 100%;">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Lea NDERERIMANA</h4>
                            <span>PHYSICAL EDUCATOR, PERSONAL TRAINER, FITNESS COACH,ZUMBA & AEROBICS INSTRUCTOR</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="{{ asset('images/Alexendar.jpg') }}" class="img-fluid" alt=""
                                 style="width: 100%;">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Alexandre DUSHIMIMANA</h4>
                            <span>PHYSICAL EDUCATOR, FITNESS COACH, AEROBICS INSTRUCTOR</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member" data-aos="fade-up" data-aos-delay="400">
                        <div class="member-img">
                            <img src="{{ asset('images/Jules-at-flendus-251x300.jpg') }}" class="img-fluid" alt=""
                                 style="width: 100%;">
                            <div class="social">
                                <a href=""><i class="bi bi-twitter"></i></a>
                                <a href=""><i class="bi bi-facebook"></i></a>
                                <a href=""><i class="bi bi-instagram"></i></a>
                                <a href=""><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info">
                            <h4>Jules IRADUKUNDA</h4>
                            <span>ARCHITECT, DESIGNER, FITNESS MODEL,FLENDUS CREATIVE DIRECTOR </span>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Contact</h2>
                <p>Wea are here to help you. Drop us a message we will return to you as soon as possible </p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="info-box">
                                <i class="bx bx-map"></i>
                                <h3>Our Address</h3>
                                <p>Karuruma near Akagera Motors</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mt-4">
                                <i class="bx bx-envelope"></i>
                                <h3>Email Us</h3>
                                <p>info@flendus.com</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mt-4">
                                <i class="bx bx-phone-call"></i>
                                <h3>Call Us</h3>
                                <p>+250 722 733 611</p>
                                +250 782 733 611<br>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="info-box mt-4">
                                <i class="bx bxl-whatsapp"></i>
                                <h3>Chat with us</h3>
                                <a href="https://wa.link/os08ue" target="_blank">+250 782 733 611</a>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="col-lg-6">
                    <div class="my-3">
                        @if(session('message'))
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                        @endif
                    </div>
                    <form action="{{ route('contact.store') }}" method="POST" role="form" class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="col form-group">
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                       id="name" value="{{ old('name') }}"
                                       placeholder="Your Name">
                                @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col form-group">
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" id="email"
                                       value="{{ old('email') }}" placeholder="Your Email">
                                @error('subject')
                                <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                   name="subject"
                                   id="subject"
                                   placeholder="Subject" value="{{ old('subject') }}">
                            @error('subject')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message"
                                      rows="5"
                                      placeholder="Message"
                            >
                                {{ old('message') }}
                            </textarea>
                            @error('message')
                            <span class="invalid-feedback">
                                 {{ $message }}
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Send message</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>{{ config('app.name') }}<span>.</span></h3>
                    <p>
                        Karuruma near AKAGERA MOTORS <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@flendus.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Dashboard</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#products">Products</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Products</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>

                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>{{ config('app.name') }}</span></strong>. All Rights Reserved
            </div>
        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="vendor/aos/aos.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/glightbox/js/glightbox.min.js"></script>
<script src="vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="vendor/swiper/swiper-bundle.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>
