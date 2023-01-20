<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="shortcut icon" href="images/favicon.png" type="">
    <title>Famms - Fashion HTML Template</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <header class="header_section">
            <div class="container">
                <nav class="navbar p-0 fixed-top d-flex flex-row bg-dark navbar-nav-right">
                    <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class=""> </span>
                    </button>
                    <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
                    </div>
                    <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                            <span class="mdi mdi-menu"></span>
                        </button>

                        @if (Route::has('login'))

                        @auth

                        <li>
                            

                            <x-app-layout>

                            </x-app-layout>

                        </li>

                        <!-- <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link">Log out</a>
                            </li> -->

                        @else


                        <a href="{{ route('login') }}" class="nav-link">Log in</a>



                        <a href="{{ route('register') }}" class=" nav-link">Register</a>

                        @endauth

                        @endif



                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!-- end header section -->


        <!-- arrival section -->
        <section class="arrival_section">
            <div class="container">
                <div class="box">
                    <div class="arrival_bg_box">
                        <img src="images/arrival-bg.png" alt="">
                    </div>
                    <div class="row">
                        <div class="col-md-6 ml-auto">
                            <div class="heading_container remove_line_bt">
                                <h2>
                                    #NewArrivals
                                </h2>
                            </div>
                            <p style="margin-top: 20px;margin-bottom: 30px;">
                                Vitae fugiat laboriosam officia perferendis provident aliquid voluptatibus dolorem, fugit ullam sit earum id eaque nisi hic? Tenetur commodi, nisi rem vel, ea eaque ab ipsa, autem similique ex unde!
                            </p>
                            <a href="">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end arrival section -->

        <!-- product section -->
        @include('home.product')
        <!-- end product section -->

        <!-- footer start -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="full">
                            <div class="logo_footer">
                                <a href="#"><img width="210" src="images/logo.png" alt="#" /></a>
                            </div>
                            <div class="information_f">
                                <p><strong>ADDRESS:</strong> 28 White tower, Street Name New York City, USA</p>
                                <p><strong>TELEPHONE:</strong> +91 987 654 3210</p>
                                <p><strong>EMAIL:</strong> yourmain@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer end -->
        <div class="cpy_">
            <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>

                Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>

            </p>
        </div>
        <!-- jQery -->
        <script src="home/js/jquery-3.4.1.min.js"></script>
        <!-- popper js -->
        <script src="home/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="home/js/bootstrap.js"></script>
        <!-- custom js -->
        <script src="home/js/custom.js"></script>
</body>

</html>