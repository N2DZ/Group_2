<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title> ข้าวหมากไทย</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{asset('js/app.js')}}">
    <link rel="stylesheet" href="{{asset('js/main.js')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>

<body>
    <header id="header" class=" fixed-top">
        <nav class="navbar navbar-expand-lg navbar-dark bg-green " aria-label="Main navigation">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">ข้าวหมากโบราณ</a>



                <div class="navbar-collapse offcanvas-collapse">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                        <li class="">
                            <a class="nav-link " href="/">
                                <h4>หน้าแรก</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/knowledge">
                                <h4>ประโยชน์</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/product">
                                <h4>สินค้า</h4>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">
                                <h4>ติดต่อ</h4>
                            </a>
                        </li>

                    </ul>
                    </li>
                    </ul>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            เข้าสู่ระบบ
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <li><a href="{{route('login')}}">login </a></li>
                            <li><a>register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    @yield('content')
    <section id="footer" class="contact">
        <div class="container">


            <div class="row">


                <div class="info">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7747.907114020091!2d100.4772569815819!3d13.841826362147865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2d5fb927e6125fcb!2z4LiV4Lil4Liy4LiU4LmA4LiK4LmJ4Liy4LiX4Li44LiB4Lin4Lix4LiZ!5e0!3m2!1sth!2sth!4v1629918178859!5m2!1sth!2sth"
                        frameborder="0" style="border:0; " allowfullscreen></iframe>

                    <div class="col-lg-12">
                        <h2>ติดต่อเรา</h2>
                        <p>ถนน บางกรวยไทรน้อย ต.บางกร่าง
                            ณ เช้าตลาดวัดพุทธ</p>
                        <hr size="10"><br>

                    </div>

                    <div class="row">
                        <div class="">

                            <h4>Email: ThaiSweetRice@gmail.com</h4><br>
                            <h4>facebook: ThaiSweetRiceThailand</h4><br>
                            <h4>Line: ThaiSweetTH</h4><br>
                            <h4>Instagram: ThaiSweetRice</h4><br>



                        </div>



                    </div>




                </div>



            </div>

        </div>
    </section><!-- End Contact Section -->

    </main><!-- End #main -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
    <script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Template Main JS File -->
    <script src="{{asset('js/main.js')}}"></script>
</body>

</html>