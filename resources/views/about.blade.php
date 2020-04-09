<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>About</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- themify CSS -->
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <!-- magnific popup CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
    <!--::header part start::-->
    <header class="main_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="/"> <img src="{{asset('img/favicon.png')}}" alt=""> ManTarYudh Hospital</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item justify-content-center"
                            id="navbarSupportedContent">
                            <ul class="navbar-nav align-items-center">
                                <li class="nav-item active">
                                    <a class="nav-link" href="/">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/about">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/doctor">Doctors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                </li>

                                @if (Route::has('login'))
                                        @auth
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('/home') }}">Dr {{ Auth::user()->name }}'s Dashboard</a>
                                        </li>
                                        @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                                        </li>
                                            @if (Route::has('register'))
                                                <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                                                </li>
                                            @endif
                                        @endauth
                                    </div>
                                @endif
                            </ul>
                        </div>
                        <!-- <a class="btn_2 d-none d-lg-block" href="#">HOT LINE- 108</a> -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <!-- breadcrumb start-->
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->

    <!-- about us part start-->
    <section class="about_us single_about_padding">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="{{asset('img/top_service.png')}}" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>About us</h2>
                        <p>ManTarYudh Hospital was established in 1983 by Biology Scientist Dr. ManTarYudh, renowned as the architect of modern healthcare in India.
                             As the nation’s first corporate hospital,
                             ManTarYudh Hospital is acclaimed for pioneering the private healthcare revolution in the country.</p>
                        <a class="btn_2 " href="#">learn more</a>
                        <div class="banner_item">
                            <div class="single_item">
                                <img src="{{asset('img/icon/banner_1.svg')}}" alt="">
                                <h5>Emergency</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{asset('img/icon/banner_2.svg')}}" alt="">
                                <h5>Appointment</h5>
                            </div>
                            <div class="single_item">
                                <img src="{{asset('img/icon/banner_3.svg')}}" alt="">
                                <h5>Qualified</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- our depertment part start-->
    <section class="our_depertment section_padding">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-xl-12">
                    <div class="depertment_content">
                        <div class="row justify-content-center">
                            <div class="col-xl-8">
                                <h2>Our Departments</h2>
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="{{asset('img/icon/feature_2.svg')}}"
                                                    alt=""></span>
                                            <h4>Cardiology</h4>
                                            <p>The field includes medical diagnosis and treatment of congenital heart defects,
                                                 coronary artery disease, heart failure, valvular heart disease and electrophysiology.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="{{asset('img/icon/feature_2.svg')}}"
                                                    alt=""></span>
                                            <h4>Neurology</h4>
                                            <p>Neurology deals with the diagnosis and treatment of all categories of conditions and
                                                 disease involving the central and peripheral nervous systems,
                                                 including their coverings, blood vessels, and all effector tissue, such as muscle.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="{{asset('img/icon/feature_2.svg')}}"
                                                    alt=""></span>
                                            <h4>Oncology</h4>
                                            <p>Oncology is a branch of medicine that deals with the prevention, diagnosis, and treatment of cancer.
                                                 A medical professional who practices oncology is an oncologist.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="single_our_depertment">
                                            <span class="our_depertment_icon"><img src="{{asset('img/icon/feature_2.svg')}}"
                                                    alt=""></span>
                                            <h4>Obstetrics and gynaecology</h4>
                                            <p>Obstetrics and gynaecology is the medical specialty that encompasses the two subspecialties of obstetrics (covering pregnancy, childbirth, and the postpartum period)
                                                 and gynaecology</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our depertment part end-->

    <!-- footer part start-->
    <footer class="footer-area">
        <div class="footer section_padding">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-2 col-md-4 col-sm-6 single-footer-widget">
                        <a href="#" class="footer_logo"><b>ManTarYudh Hospital</b></a>
                        <p>We are here for your care </p>
                        <div class="social_logo">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"> <i class="ti-twitter"></i> </a>
                            <a href="#"><i class="ti-instagram"></i></a>
                            <a href="#"><i class="ti-skype"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-2 col-sm-6 col-md-4 single-footer-widget">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Doctors</a></li>
                            <li><a href="#">Log In</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="copyright_part">
            <div class="container">
                <div class="row align-items-center">
                    <p class="footer-text m-0 col-lg-8 col-md-12">
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
    <a href="#"><i class="ti-facebook"></i></a>
    <a href="#"> <i class="ti-twitter"></i> </a>
    <a href="#"><i class="ti-instagram"></i></a>
    <a href="#"><i class="ti-skype"></i></a>
  </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- footer part end-->

    <!-- jquery plugins here-->

    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- owl carousel js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- contact js -->
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>
