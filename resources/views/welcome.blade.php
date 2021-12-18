<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vehicle Servicing & Mechanic Finder </title>
    <!-- favicons Icons -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/') }}assets/images/favicons/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/') }}assets/images/favicons/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}assets/images/favicons/favicon-16x16.png" />
    <link rel="manifest" href="{{ asset('/') }}assets/images/favicons/site.html" />
    <meta name="description" content="Vehicle Management" />

    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/animate/animate.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/fontawesome/css/all.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/jarallax/jarallax.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/nouislider/nouislider.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/nouislider/nouislider.pips.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/odometer/odometer.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/swiper/swiper.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/crsine-icons/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/tiny-slider/tiny-slider.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendors/jquery-fancybox/jquery.fancybox.min.html">

    <!-- template styles -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/crsine.css" />
</head>

<body>
<div class="preloader">
    <img class="preloader__image" width="120" src="{{ asset('/') }}assets/images/loader.png" alt="" />
</div>
<!-- /.preloader -->
<div class="page-wrapper">
    <header class="main-header main-header-two">
        <div class="topbar">
            <div class="container-fluid">
                <div class="topbar__inner">
                    <ul class="list-unstyled topbar__infos">
                        <li class="topbar__infos-item">
                            <a class="topbar__infos-link" href="#"><i class="far fa-clock"></i> Monday to Saturday 9:00 to
                                6:00</a>
                        </li>
                        <li class="topbar__infos-item">
                            <a class="topbar__infos-link" href="tel:92-666-888-0000"><i class="fa fa-phone-alt"></i>+880 (013) 030 6 2727</a>
                        </li>
                    </ul><!-- /.list-unstyled topbar__infos -->

                    <div class="topbar__social">
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-facebook-square"></a>
                        <a href="#" class="fab fa-pinterest-p"></a>
                        <a href="#" class="fab fa-instagram"></a>
                    </div><!-- /.topbar__social -->
                </div><!-- /.topbar__inner -->
            </div><!-- /.container -->
        </div><!-- /.topbar -->
        <nav class="main-menu main-menu__two">
            <div class="container-fluid">
                <div class="main-menu__inner">

                    <div class="main-menu__logo">
                        <a href="index.html">
                            <img src="{{ asset('/') }}assets/images/logo-dark.png" width="137">
                        </a>
                    </div><!-- /.main-menu__logo -->
                    <ul class="main-menu__list">
                        <li class="dropdown">
                            <a href="index.html">Home</a>

                        </li>
                        <li>
                            <a href="{{ url('/') }}">About</a>
                        </li>
                        <li class="dropdown">
                            <a href="{{ url('/') }}">Services</a>
                            <ul>
                                <li><a href="{{ url('/') }}">All Services</a></li>
                                <li><a href="{{ url('/') }}">Service Details</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="main-menu__right">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>

                        <a href="{{ url('/login') }}" class="thm-btn">
                            Login
                            <i class="far fa-arrow-alt-circle-right"></i>
                        </a><!-- /.thm-btn -->
                    </div><!-- /.main-menu__right -->
                </div><!-- /.main-menu__inner -->
            </div><!-- /.container -->
        </nav>
        <!-- /.main-menu -->
    </header><!-- /.main-header -->

    <div class="stricky-header stricked-menu main-menu main-menu__two">
        <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
    </div><!-- /.stricky-header -->

    <section class="main-slider main-slider-two">
        <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
    "effect": "fade",
    "navigation": {
        "nextEl": "#main-slider__swiper-button-next",
        "prevEl": "#main-slider__swiper-button-prev"
    },
    "autoplay": {
        "delay": 5000
    }}'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-2-1.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <p>Welcome to Vehicle Servicing & Mechanics Finder Web Application </p>
                                <h2>Premium Quality <br>
                                    Vehicle Servicing</h2>
                                <a href="{{ url('/login') }}" class="thm-btn">Login Now <i class="far fa-arrow-alt-circle-right"></i></a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
                <div class="swiper-slide">
                    <div class="image-layer" style="background-image: url(assets/images/backgrounds/main-slider-2-2.jpg);">
                    </div>
                    <!-- /.image-layer -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <p>Welcome to Vehicle Servicing</p>
                                <h2>Premium Quality <br>
                                    Vehicle Servicing</h2>
                                <a href="{{ url('/login') }}" class="thm-btn">Get Service Now <i class="far fa-arrow-alt-circle-right"></i></a>
                                <!-- /.thm-btn dynamic-radius -->
                            </div><!-- /.col-lg-7 text-right -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                </div><!-- /.swiper-slide -->
            </div><!-- /.swiper-wrapper -->
            <!-- If we need navigation buttons -->
            <div class="main-slider__nav-two">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="crsine-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="crsine-right-arrow"></i>
                </div>
            </div><!-- /.main-slider__nav -->
        </div><!-- /.swiper-container thm-swiper__slider -->
    </section><!-- /.main-slider -->

    <section class="about-five">
        <img src="{{ asset('/') }}assets/images/shapes/about-5-shape-1.png" class="image-layer" alt="">
        <div class="container">
            <div class="row flex-xl-row-reverse">
                <div class="col-xl-6">
                    <div class="about-five__images">
                        <img src="{{ asset('/') }}assets/images/resources/about-1-1.jpg" alt="" class="wow fadeInUp img-fluid" data-wow-duration="1500ms">
                        <img src="{{ asset('/') }}assets/images/resources/about-1-2.jpg" alt="" class="wow fadeInUp img-fluid" data-wow-duration="1500ms" data-wow-delay="100ms">
                    </div><!-- /.about-five__images -->
                </div><!-- /.col-xl-6 -->
                <div class="col-xl-6">
                    <div class="about-five__content">
                        <div class="section-title">
                            <span class="section-title__tagline">Get to Know Us</span>
                            <h2 class="section-title__title">Welcome to Vehicle Servicing & Mechanic Finder</h2>
                        </div><!-- /.section-title -->
                        <div class="about-five__summery">
                            We have 30+ years of experiences for give you better quality results.
                        </div><!-- /.about-five__summery -->
                        <div class="about-five__text">
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour, or randomised words which don't look even you are
                            going to use a passage.
                        </div><!-- /.about-five__text -->
                    </div><!-- /.about-five__content -->
                    <div class="about-five__progress-wrap">

                        <div class="about-five__progress">
                            <div class="about-five__progress-box">
                                <div class="circle-progress" data-options='{ "value": 0.9,"thickness": 3,"emptyFill": "#eef3f7","lineCap": "square", "size": 120, "fill": { "color": "#3fbfef" } }'>
                                </div><!-- /.circle-progress -->
                                <span>90%</span>
                            </div><!-- /.about-five__progress-box -->
                            <div class="about-five__progress-content">
                                <h3>Interior
                                    Washing</h3>
                            </div><!-- /.about-five__progress-content -->
                        </div><!-- /.about-five__progress -->
                        <div class="about-five__progress">
                            <div class="about-five__progress-box">
                                <div class="circle-progress" data-options='{ "value": 0.5,"thickness": 3,"emptyFill": "#eef3f7","lineCap": "square", "size": 120, "fill": { "color": "#3fbfef" } }'>
                                </div><!-- /.circle-progress -->
                                <span>50%</span>
                            </div><!-- /.about-five__progress-box -->
                            <div class="about-five__progress-content">
                                <h3>Quality
                                    Cleaning</h3>
                            </div><!-- /.about-five__progress-content -->
                        </div><!-- /.about-five__progress -->
                    </div><!-- /.about-five__progress-wrap -->
                </div><!-- /.col-xl-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-five -->

    <section class="service-home-two">
        <div class="container">
            <div class="section-title text-center">
                <span class="section-title__tagline">What We’re Offering</span>
                <h2 class="section-title__title">Services We’re Provding <br>
                    to Customers</h2>
            </div><!-- /.section-title -->

            <div class="row ">
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="service-card">
                        <div class="service-card__image">
                            <img src="{{ asset('/') }}assets/images/services/service-1-1.jpg" alt="">
                            <a href="{{ asset('/') }}service-details.html"><i class="crsine-plus"></i></a>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <div class="service-card__icon">
                                <i class=" crsine-car-service-1"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title"><a href="service-details.html">
                                    Full Vehicle Servicing
                                </a></h3><!-- /.service-card__title -->
                            <p class="service-card__text">There are not many of passages of lorem ipsum avail isn alteration
                                donationa in form.</p><!-- /.service-card__text -->
                            <a href="service-details.html" class="service-card__more"><i class="crsine-right-arrow"></i></a>
                            <!-- /.service-card__more -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="service-card">
                        <div class="service-card__image">
                            <img src="{{ asset('/') }}assets/images/services/service-1-2.jpg" alt="">
                            <a href="service-details.html"><i class="crsine-plus"></i></a>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <div class="service-card__icon">
                                <i class="crsine-car-service-2"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title"><a href="service-details.html">
                                    Auto Detailing
                                </a></h3><!-- /.service-card__title -->
                            <p class="service-card__text">There are not many of passages of lorem ipsum avail isn alteration
                                donationa in form.</p><!-- /.service-card__text -->
                            <a href="service-details.html" class="service-card__more"><i class="crsine-right-arrow"></i></a>
                            <!-- /.service-card__more -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                <div class="col-sm-12 col-md-12 col-lg-4">
                    <div class="service-card">
                        <div class="service-card__image">
                            <img src="{{ asset('/') }}assets/images/services/service-1-3.jpg" alt="">
                            <a href="service-details.html"><i class="crsine-plus"></i></a>
                        </div><!-- /.service-card__image -->
                        <div class="service-card__content">
                            <div class="service-card__icon">
                                <i class="crsine-car-wash"></i>
                            </div><!-- /.service-card__icon -->
                            <h3 class="service-card__title"><a href="service-details.html">
                                    Fixing Vehicle Problem
                                </a></h3><!-- /.service-card__title -->
                            <p class="service-card__text">There are not many of passages of lorem ipsum avail isn alteration
                                donationa in form.</p><!-- /.service-card__text -->
                            <a href="service-details.html" class="service-card__more"><i class="crsine-right-arrow"></i></a>
                            <!-- /.service-card__more -->
                        </div><!-- /.service-card__content -->
                    </div><!-- /.service-card -->
                </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.service-home -->



    <section class="call-to-action call-to-action__home-two jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <img src="{{ asset('/') }}assets/images/backgrounds/cta-bg-1-1.jpg" alt="" class="jarallax-img">
        <div class="container">
            <h3 class="call-to-action__title">Premium Quality Vehicle Servicing <br>
                 System</h3>

            <div class="call-to-action__btn-wrap">
                <a href="{{ url('/login') }}" class="thm-btn">
                    Get Service
                    <i class="far fa-arrow-alt-circle-right"></i>
                </a><!-- /.thm-btn -->
            </div><!-- /.call-to-action__btn-wrap -->
        </div><!-- /.container -->
    </section><!-- /.call-to-action -->


    <section class="testimonials-one testimonials-one__home-two">
        <div class="testimonials-one__boxed">
            <div class="container">
                <div class="swiper-container testimonials-one__thumb" id="testimonials-one__thumb">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="{{ asset('/') }}assets/images/resources/testi-1-1.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/') }}assets/images/resources/testi-1-2.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <img src="{{ asset('/') }}assets/images/resources/testi-1-3.jpg" alt="">
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container -->
                <div class="swiper-container testimonials-one__carousel" id="testimonials-one__carousel">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <p class="testimonials-one__text">This is due to their excellent service, competitive pricing
                                and customer support. It’s
                                throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                                dolor in
                                reprehenderit in esse nulla pariatur.</p>
                            <div class="testimonials-two__meta">
                                <h3 class="testimonials-one__name">Christine Rose</h3>
                                <span class="testimonials-one__designation">Customer</span>
                            </div><!-- /.testimonials-two__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <p class="testimonials-one__text">This is due to their excellent service, competitive pricing
                                and customer support. It’s
                                throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                                dolor in
                                reprehenderit in esse nulla pariatur.</p>
                            <div class="testimonials-two__meta">
                                <h3 class="testimonials-one__name">Christine Rose</h3>
                                <span class="testimonials-one__designation">Customer</span>
                            </div><!-- /.testimonials-two__meta -->
                        </div><!-- /.swiper-slide -->
                        <div class="swiper-slide">
                            <p class="testimonials-one__text">This is due to their excellent service, competitive pricing
                                and customer support. It’s
                                throughly
                                refresing to get such a personal touch. Duis aute lorem ipsum is simply free text irure
                                dolor in
                                reprehenderit in esse nulla pariatur.</p>
                            <div class="testimonials-two__meta">
                                <h3 class="testimonials-one__name">Christine Rose</h3>
                                <span class="testimonials-one__designation">Customer</span>
                            </div><!-- /.testimonials-two__meta -->
                        </div><!-- /.swiper-slide -->
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.swiper-container -->
            </div><!-- /.container -->
        </div><!-- /.testimonials-one__boxed -->
    </section><!-- /.testimonials-one -->


    <footer class="main-footer">
        <div class="image-layer" style="background-image: url(assets/images/backgrounds/footer-bg-1.png);"></div>
        <!-- /.image-layer -->
        <div class="upper-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-widget footer-widget__about">
                            <a href="index.html" class="footer-widget__logo">
                                <img src="{{ asset('/') }}assets/images/logo-light.png" width="137" alt="">
                            </a>
                            <p class="footer-widget__text">There are many vari of pass of lorem ipsum availab but the
                                majority have suffered in some form by injected humour or words</p>
                            <div class="footer-widget__social">
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </div><!-- /.footer-widget__social -->
                        </div><!-- /.footer-widget footer-widget__about -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-widget footer-widget__links">
                            <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                            <div class="footer-widget__links-wrap">
                                <ul class="list-unstyled">
                                    <li><a href="services.html">
                                            Our Services
                                        </a></li>
                                    <li><a href="about.html">
                                            Best Cleaning
                                        </a></li>
                                    <li><a href="about.html">
                                            Quality Polish

                                        </a></li>
                                    <li><a href="contact.html">
                                            Contact

                                        </a></li>
                                    <li><a href="faqs.html">
                                            Help
                                        </a></li>
                                </ul><!-- /.list-unstyled -->
                                <ul class="list-unstyled">
                                    <li><a href="shop.html">
                                            New Products
                                        </a></li>
                                    <li><a href="about.html">
                                            About Store
                                        </a></li>
                                    <li><a href="about.html">
                                            Support

                                        </a></li>
                                    <li><a href="faqs.html">
                                            FAQs
                                        </a></li>
                                </ul><!-- /.list-unstyled -->
                            </div><!-- /.footer-widget__links-wrap -->
                        </div><!-- /.footer-widget footer-widget__about -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-widget footer-widget__contact">
                            <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                            <p class="footer-widget__text">86 Khagan, Akran , 600
                                Ashulia, Savar, Dhaka</p><!-- /.footer-widget__text -->
                            <ul class="footer-widget__contact-list list-unstyled">
                                <li>
                                    <a href="mailto:needhelp@crsine.com"><i class="fa fa-envelope"></i>needhelp@crsine.com</a>
                                </li>
                                <li>
                                    <a href="tel:92-666-888-000"><i class="fa fa-phone-square-alt"></i>92 666 888
                                        000</a>
                                </li>
                            </ul><!-- /.footer-widget__contact -->
                        </div><!-- /.footer-widget footer-widget__about -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="footer-widget footer-widget__mailchimp">
                            <h3 class="footer-widget__title">Newsletter</h3><!-- /.footer-widget__title -->
                            <p class="footer-widget__text">Subscribe to our newsletter for daily
                                new and updates</p><!-- /.footer-widget__text -->
                            <form action="#" class="footer-widget__mailchimp-form">
                                <input type="text" placeholder="Email Address">
                                <button type="submit" class="thm-btn">
                                    Send
                                    <i class="far fa-arrow-alt-circle-right"></i>
                                </button><!-- /.thm-btn -->
                            </form><!-- /.footer-widget__mailchimp-form -->
                        </div><!-- /.footer-widget footer-widget__about -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </div><!-- /.upper-footer -->
        <div class="bottom-footer">
            <div class="container">
                <div class="bottom-footer__inner">
                    <p class="bottom-footer__text">© Copyrights, 2021 Company.com</p>
                    <p class="bottom-footer__text"><a href="#">Terms & Condition</a>
                        <a href="#">Privacy Policy</a>
                    </p>
                </div><!-- /.bottom-footer__inner -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->
    </footer><!-- /.main-footer -->
</div><!-- /.page-wrapper -->


<div class="mobile-nav__wrapper">
    <div class="mobile-nav__overlay mobile-nav__toggler"></div>
    <!-- /.mobile-nav__overlay -->
    <div class="mobile-nav__content">
        <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

        <div class="logo-box">
            <a href="index.html" aria-label="logo image"><img src="{{ asset('/') }}assets/images/logo-light.png" width="155" alt="" /></a>
        </div>
        <!-- /.logo-box -->
        <div class="mobile-nav__container"></div>
        <!-- /.mobile-nav__container -->

        <ul class="mobile-nav__contact list-unstyled">
            <li>
                <i class="fa fa-envelope"></i>
                <a href="mailto:needhelp@packageName__.com">needhelp@crsine.com</a>
            </li>
            <li>
                <i class="fa fa-phone-alt"></i>
                <a href="tel:666-888-0000">666 888 0000</a>
            </li>
        </ul><!-- /.mobile-nav__contact -->
        <div class="mobile-nav__top">
            <div class="mobile-nav__social">
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-facebook-square"></a>
                <a href="#" class="fab fa-pinterest-p"></a>
                <a href="#" class="fab fa-instagram"></a>
            </div><!-- /.mobile-nav__social -->
        </div><!-- /.mobile-nav__top -->



    </div>
    <!-- /.mobile-nav__content -->
</div>
<!-- /.mobile-nav__wrapper -->


<div class="mini-cart">
    <div class="mini-cart__overlay mini-cart__toggler"></div>
    <div class="mini-cart__content">
        <div class="mini-cart__top">
            <h3 class="mini-cart__title">Shopping Cart</h3>
            <span class="mini-cart__close mini-cart__toggler"><i class="organik-icon-close"></i></span>
        </div><!-- /.mini-cart__top -->
        <div class="mini-cart__item">
            <img src="{{ asset('/') }}assets/images/products/product-s-1.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Tire with Wheel </a></h3>
                    <p>$3.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="1" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <div class="mini-cart__item">
            <img src="{{ asset('/') }}assets/images/products/product-s-2.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Car Breaks </a></h3>
                    <p>$120.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="2" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <div class="mini-cart__item">
            <img src="{{ asset('/') }}assets/images/products/product-s-3.jpg" alt="">
            <div class="mini-cart__item-content">
                <div class="mini-cart__item-top">
                    <h3><a href="product-details.html">Oil Filters </a></h3>
                    <p>$9.99</p>
                </div><!-- /.mini-cart__item-top -->
                <div class="quantity-box">
                    <button type="button" class="sub">-</button>
                    <input type="number" id="3" value="1" />
                    <button type="button" class="add">+</button>
                </div>
            </div><!-- /.mini-cart__item-content -->
        </div><!-- /.mini-cart__item -->
        <a href="checkout.html" class="thm-btn mini-cart__checkout">Proceed To Checkout <i class="far fa-arrow-alt-circle-right"></i></a>
    </div><!-- /.mini-cart__content -->
</div><!-- /.cart-toggler -->


<div class="search-popup">
    <div class="search-popup__overlay search-toggler"></div>
    <!-- /.search-popup__overlay -->
    <div class="search-popup__content">
        <form action="#">
            <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
            <input type="text" id="search" placeholder="Search Here..." />
            <button type="submit" aria-label="search submit" class="thm-btn">
                <i class="crsine-magnifying-glass"></i>
            </button>
        </form>
    </div>
    <!-- /.search-popup__content -->
</div>
<!-- /.search-popup -->

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


<script src="{{ asset('/') }}assets/vendors/jquery/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/jarallax/jarallax.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/jquery-appear/jquery.appear.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/jquery-validate/jquery.validate.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/nouislider/nouislider.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/odometer/odometer.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/swiper/swiper.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/tiny-slider/tiny-slider.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/wnumb/wNumb.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/wow/wow.js"></script>
<script src="{{ asset('/') }}assets/vendors/isotope/isotope.js"></script>
<script src="{{ asset('/') }}assets/vendors/countdown/countdown.min.js"></script>
<script src="{{ asset('/') }}assets/vendors/jquery-fancybox/jquery.fancybox.min-2.html"></script>
<!-- template js -->
<script src="{{ asset('/') }}assets/js/crsine.js"></script>
</body>


</html>
