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
                <li class="breadcrumb-item active" aria-current="page">{{ $product->name }}s</li>
            </ol>
        </div> <!-- container //  -->
    </section>
    <section class="padding-y">
        <div class="container">

            <div class="row">
                <aside class="col-lg-6">
                    <article class="gallery-wrap">
                        <div class="img-big-wrap img-thumbnail">
                            @if ($product->product_image)
                            <a data-fslightbox="mygalley" data-type="image"
                            href="/storage/{{ $product->featured_image }}">
                            <img height="560" src="{{ $product->product_image->getUrl('preview') }}" style="width: 100%;">
                        </a>
                            @endif

                        </div>
                    </article>
                </aside>
                <main class="col-lg-6">
                    @if (session('message'))
                        <div class="alert alert-success">
                            {{ $message }}
                        </div>
                    @endif
                    <article class="ps-lg-3">
                        <h4 class="title text-dark">{{ $product->name }}</h4>
                        <div class="rating-wrap my-3">

                            <i class="dot"></i>
                            <span class="label-rating text-success">In stock</span>
                        </div>

                        <div class="mb-3">
                            <var class="price h5">RWF {{ number_format($product->price) }}</var>

                        </div>

                        <p>{{ $product->description }}</p>

                        <hr>
                    </article>
                    <h4 class="text-lg-center">Order Now</h4>
                    <form action="{{ route('product.order') }}" method="POST" class="card">
                        @csrf
                        <div class="card-body">
                            <input type="hidden" value="{{ $product->id }}" class="{{ $errors->has('product') ? 'is-invalid' : '' }}" name="product_id" id="product_id">
                            <div class="row">
                                <div class="form-group col-6">
                                    <label>Choose Size</label>
                                    <select class="form-control {{ $errors->has('size') ? 'is-invalid' : '' }}"
                                        name="size" id="size">
                                        <option value disabled {{ old('size', null) === null ? 'selected' : '' }}>
                                            {{ trans('global.pleaseSelect') }}</option>
                                        @foreach (App\Models\Order::SIZE_SELECT as $key => $label)
                                            <option value="{{ $key }}"
                                                {{ old('size', '1') === (string) $key ? 'selected' : '' }}>
                                                {{ $label }}</option>
                                        @endforeach
                                    </select>
                                    @if ($errors->has('size'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('size') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-6">
                                    <label class="required"
                                        for="quantity">{{ trans('cruds.order.fields.quantity') }}</label>
                                    <input class="form-control {{ $errors->has('quantity') ? 'is-invalid' : '' }}"
                                        type="number" name="quantity" id="quantity" value="{{ old('quantity', '') }}"
                                        step="1" required>
                                    @if ($errors->has('quantity'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('quantity') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="required"
                                        for="name">{{ trans('cruds.order.fields.name') }}</label>
                                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                                    @if ($errors->has('name'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('name') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-6">
                                    <label for="email">{{ trans('cruds.order.fields.email') }}</label>
                                    <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        type="email" name="email" id="email" value="{{ old('email') }}">
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('email') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="required"
                                        for="phone_number">{{ trans('cruds.order.fields.phone_number') }}</label>
                                    <input
                                        class="form-control {{ $errors->has('phone_number') ? 'is-invalid' : '' }}"
                                        type="text" name="phone_number" id="phone_number"
                                        value="{{ old('phone_number', '') }}" required>
                                    @if ($errors->has('phone_number'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('phone_number') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="form-group col-6">
                                    <label
                                        for="shipping_address">{{ trans('cruds.order.fields.shipping_address') }}</label>
                                    <input
                                        class="form-control {{ $errors->has('shipping_address') ? 'is-invalid' : '' }}"
                                        type="text" name="shipping_address" id="shipping_address"
                                        value="{{ old('shipping_address', '') }}">
                                    @if ($errors->has('shipping_address'))
                                        <div class="invalid-feedback">
                                            {{ $errors->first('shipping_address') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-primary">Save Order</button>
                        </div>


                    </form>
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
