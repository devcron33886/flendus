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


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/ui.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <a href="{{ route('welcome') }}" class="logo me-auto"><img src="{{ asset('images/Flendus-logo.png') }}"
                    alt="" style="height: 120px !important; width: 160px;"></a>

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Home</a></li>
                    <li><a class="nav-link scrollto" id="about" href="{{ route('welcome') }}">About</a></li>
                    <li><a class="nav-link scrollto active" href="{{ route('products') }}">Products</a></li>
                    <li><a class="nav-link scrollto " href="{{ route('welcome') }}">Classes</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Team</a></li>
                    <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

            <a href="#about" class="get-started-btn scrollto">Get Started</a>
        </div>
    </header>

    <section class="bg-dark mt-5 pt-5">
        <div class="container">
            <h2 class="text-white">Products</h2>
            <ol class="breadcrumb ondark mb-0">
                <li class="breadcrumb-item"><a href="{{ route('welcome') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">All products</li>
            </ol>
        </div> <!-- container //  -->
    </section>
    <section class="pt-5 mt-5">
        <div class="container">

            <div class="row">
                <aside class="col-lg-3">

                    <button class="btn btn-outline-secondary mb-3 w-100  d-lg-none" data-bs-toggle="collapse"
                        data-bs-target="#aside_filter">Show filter
                    </button>

                    <div id="aside_filter" class="collapse card d-lg-block mb-5">


                        <article class="filter-group">
                            <header class="card-header">
                                <a href="#" class="title" data-bs-toggle="collapse"
                                    data-bs-target="#collapse_aside_brands">
                                    <i class="icon-control fa fa-chevron-down"></i> Brands
                                </a>
                            </header>
                            <div class="collapse show" id="collapse_aside_brands">
                                <div class="card-body">
                                    @foreach ($categories as $category)
                                        <label class="form-check mb-2">
                                            <input class="form-check-input" type="checkbox" value="" checked="">
                                            <span class="form-check-label"> {{ $category->title }} </span>
                                        </label>
                                    @endforeach
                                </div>
                            </div>
                        </article>

                    </div>
                </aside>
                <main class="col-lg-9">

                    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                        <strong class="d-block py-2">{{ $products->count() }} Product (s) Found </strong>
                    </header>
                    <div class="row">
                        @foreach ($products as $product)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <figure class="card card-product-grid">
                                    <div class="img-wrap">
                                        @if ($product->product_image)
                                            <a href="{{ route('product', $product->slug) }}"> <img
                                                    src="{{ $product->product_image->getUrl('preview') }}"
                                                    style="width: 100%;"></a>
                                        @endif
                                    </div>
                                    <figcaption class="info-wrap border-top">
                                        <div class="price-wrap">
                                            <strong class="price">RWF
                                                {{ number_format($product->price) }}</strong>

                                        </div>
                                        <p class="title mb-2">{{ $product->name }}</p>

                                    </figcaption>
                                </figure>
                            </div>
                        @endforeach
                    </div>
                    <hr>
                    <footer class="d-flex mt-4">
                        <div>
                            <a href="{{ route('welcome') }}" class="btn btn-light"> « Go back</a>
                        </div>
                        <nav class="ms-3">
                            <ul class="pagination">
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">2</span>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </footer>
                </main>
            </div>
        </div>
    </section>


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
    </footer>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>


    <script src="{{ asset('js/main.js') }}"></script>


</body>

</html>
