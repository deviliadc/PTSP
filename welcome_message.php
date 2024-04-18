
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLASH PTSP | Kankemenag Kota Surabaya</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/Logo_Kemenag_2-removebg-preview.png') ?>">
    <link rel="manifest" href="<?= base_url('assets/welcome/images/favicons/site.webmanifest') ?>">
    <meta name="description" content="Agrikon HTML Template For Agriculture Farm & Farmers">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/swiper.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/odometer.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/jarallax.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/agrikon-icons.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/nouislider.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/nouislider.pips.css">
    <!-- Icon -->
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-MFpdTBnvqTtZ9xjOmEs/au6t09pK1SaZH3brZ5fF/V/yFw4+M2DHZLhaa0jXK2xY" crossorigin="anonymous">
    <!-- template styles -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/welcome/css/main.css">
    <style type="text/css">
        .dua{
            font-size: 20px;
        }
    </style>
</head>

<body>
    <div class="preloader">
        <img class="preloader__image" width="55" src="<?= base_url() ?>assets/Logo_Kemenag_2.jpeg" alt="">
    </div><!-- /.preloader -->
    <div class="page-wrapper">

        <header class="main-header">
            <div class="topbar">
                <div class="container">
                    <div class="topbar__left">
                        <div class="topbar__social">
                            <a href="#" class="fab fa-facebook-square"></a>
                            <a href="#" class="fab fa-twitter"></a>
                            <a href="#" class="fab fa-pinterest-p"></a>
                            <a href="#" class="fab fa-instagram"></a>
                        </div><!-- /.topbar__social -->
                        <p>Selamat Datang Kemenag Surabaya</p>
                    </div><!-- /.topbar__left -->
                    <div class="topbar__right">
                        <a href="#"><i class="agrikon-icon-email"></i>admin@kemenagsurabaya.online</a>
                        <a href="#"><i class="agrikon-icon-clock"></i>
                            <?php 
                            $date = date('H:i:s');
                            ?>
                            Senin - Jumat 08:00 - 15:00, <?= $date; ?> - CLOSED
                        </a>
                    </div><!-- /.topbar__right -->
                </div><!-- /.container -->
            </div><!-- /.topbar -->
            <nav class="main-menu">
                <div class="container">
                    <div class="logo-box">
                        <a aria-label="logo image">
                            <img src="<?= base_url() ?>assets/ptsp.png" width="300" alt=""></a>
                        <span class="fa fa-bars mobile-nav__toggler"></span>
                    </div><!-- /.logo-box -->
                    <ul class="main-menu__list">
                        <li>
                            <a href="#">BERANDA</a>
                        </li>
                        <li class="dropdown">
                            <a href="#">PROFILE</a>
                            <ul>
                                <li>
                                    <a href="#">KANKEMENAG</a>
                                </li>
                                <li><a href="#">BIDANG</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#">SERVICE</a>
                            <ul>
                                <li><a href="#">LAYANAN TERKAIT</a></li>
                                <li><a href="#">CEK LAYANAN</a></li>
                                <li><a href="#">ABSESNSI ASN</a></li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.main-menu__list -->

                    <div class="main-header__info">
                        <a href="#" class="search-toggler main-header__search-btn"><i class="agrikon-icon-magnifying-glass"></i></a>
                        <a class="main-header__cart-btn" href="#"><i ></i></a>
                        <a href="tel:92-666-888-0000" class="main-header__info-phone">
                            <i class="agrikon-icon-phone-call"></i>
                            <span class="main-header__info-phone-content">
                                <span class="main-header__info-phone-text">Contact Center</span>
                                <span class="main-header__info-phone-title">(031) 8285319</span>
                            </span><!-- /.main-header__info-phone-content -->
                        </a><!-- /.main-header__info-phone -->
                    </div><!-- /.main-header__info -->
                </div><!-- /.container -->
            </nav>
            <!-- /.main-menu -->
        </header><!-- /.main-header -->

        <div class="stricky-header stricked-menu main-menu">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <section class="main-slider">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{
        "slidesPerView": 1,
        "loop": true,
        "effect": "fade",
        "autoplay": {
            "delay": 5000
        },
        "navigation": {
            "nextEl": "#main-slider__swiper-button-next",
            "prevEl": "#main-slider__swiper-button-prev"
        }
    }'>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/welcome/images/main-slider/main-slider-1-1.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">Selamat Datang</span>
                                    <h2><span>FLASH PTSP</span> <br>
                                        </h2>
                                    <p>Pelayanan Terpadu Satu Pintu Kemenag Kota Surabaya<br> 
                                    dengan profesional dan cepat.</p>
                                    <a href="<?= site_url('auth') ?>" class=" thm-btn">Login</a>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/welcome/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">FLASH PTSP</span>
                                    <h2><span>FAST</span><br></h2>
                                    <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration in some form.</p>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/welcome/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">FLASH PTSP</span>
                                    <h2><span>LEGAL</span><br>
                                        </h2>
                                    <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration
                                        in some form.</p>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/welcome/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">FLASH PTSP</span>
                                    <h2><span>AFIRMATIF</span><br>
                                        </h2>
                                    <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration
                                        in some form.</p>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/welcome/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">FLASH PTSP</span>
                                    <h2><span>SIMPLE</span><br>
                                        </h2>
                                    <p>There are many of passages of lorem Ipsum, but the majori have <br> suffered alteration
                                        in some form.</p>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/welcome/images/main-slider/main-slider-1-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-7 col-lg-7">
                                    <span class="tagline">FLASH PTSP</span>
                                    <h2><span>HUMBLE</span><br>
                                        </h2>
                                    <p>Kami melayani sepenuh hati dan profesional <br> suffered alteration
                                        in some form.</p>
                                    <!-- /.thm-btn dynamic-radius -->
                                </div><!-- /.col-lg-7 text-right -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </div><!-- /.swiper-slide -->
                </div><!-- /.swiper-wrapper -->

                <!-- If we need navigation buttons -->
                <div class="main-slider__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next"><i class="agrikon-icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev"><i class="agrikon-icon-right-arrow"></i></div>
                </div><!-- /.main-slider__nav -->
            </div><!-- /.swiper-container thm-swiper__slider -->
        </section><!-- /.main-slider -->
        <br/><br/>
        <section class="gray-boxed-wrapper home-one__boxed">
            <img src="assets/welcome/images/icons/home-1-blog-bg.png" alt="" class="home-one__boxed-bg">
            <section class="blog-home-two blog-home-one">
                <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url('assets/typingsubbagtu.jpg') ?>" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <i class="bi bi-laptop"></i>
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="#">
                                <p class='dua'>SUB BAG TU</p>
                                </a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                            <img src="<?= base_url() ?>assets/bimass.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="fa fa-university" aria-hidden="true"></i> -->
                                    <img src="<?= base_url() ?>assets/BIMAS-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3>
                                    <a href="#"><p class='dua'>BIMAS ISLAM</p></a>
                                </h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/haji.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-building-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/HAJIUMROH-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="#"><p class="dua">HAJI & UMROH</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/pendma.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-people-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/PENDMA-ICON.png" style="max-width: 70%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="#"><p class="dua">PENDMA</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/pais.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-buildings-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/PAIS-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">PAIS</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/pontren.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-houses-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/PONTREN-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">PD.PONTREN</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/syariah.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-houses-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/SYARIAH-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">P.SYARIAH</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/kristen.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-houses-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/KRISTEN-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">P.KRISTEN</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/hindu.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-houses-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/HINDU-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">L.HINDU</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/buddha.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-houses-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/BUDHA-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">L.BUDHA</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/katolik.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- <i class="bi bi-houses-fill"></i> -->
                                    <img src="<?= base_url() ?>assets/KATOLIK-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">L.KATOLIK</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3" style="padding-bottom: 40px;">
                        <div class="service-two__card">
                            <div class="service-two__card-image">
                                <img src="<?= base_url() ?>assets/khonghucu.jpg" style="height: 160px;" alt="">
                            </div><!-- /.service-two__card-image -->
                            <div class="service-two__card-content">
                                <div class="service-two__card-icon">
                                    <!-- </i><i class="bi bi-houses-fill"></i> -->
                                    <!-- ganti ke gambar -->
                                    <img src="<?= base_url() ?>assets/KONGHUCU-ICON.png" style="max-width: 60%; height: auto;" alt="">
                                </div><!-- /.service-two__card-icon -->
                                <h3><a href="service-details"><p class="2">L.KHONGHUCU</p></a></h3>
                            </div><!-- /.service-two__card-content -->
                        </div><!-- /.service-two__card -->
                    </div>
                </div>
                    <hr />
                </div><!-- /.container -->
            </section><!-- /.blog-home-two -->
        </section><!-- /.gray-boxed-wrapper -->

        <section class="call-to-action jarallax" data-jarallax data-speed="0.3" data-imgPosition="-80% 50%">
            <img class="call-to-action__bg jarallax-img" src="assets/images/backgrounds/cta-1-bg-1.jpg" alt="parallax-image" />
            <!-- /.call-to-action__bg -->
            <div class="container">
                <div class="call-to-action__content">
                    <i class="fas fa-file fa-2x" style="color: white"></i>
                    &nbsp;&nbsp;
                    <h3>Persyaratan yang dibutuhkan : </h3>
                </div>
            </div><!-- /.container -->
            <br/>
            <div class="row">
                <div style="width: 505px; padding-left: 200px;">
                    <select class='form-control' name="id_seksi" id="id_seksi">
                        <option disabeled="" selected="">Pilih Seksi</option>
                        <?php foreach($tbsie as $tseksi) : ?>
                        <option value="<?php echo $tseksi->id_seksi;?>"> <?php echo $tseksi->nama_seksi; ?></option>
                        <?php endforeach; ?>
                            <!-- <option>-Pilih Seksi-</option>
                            <option>-SUBAG-TU-</option>
                            <option>-BINMAS-</option>
                            <option>-PHU-</option>
                            <option>-PAIS-</option>
                            <option>-PENMA-</option>
                            <option>-P.SYARIAH-</option>
                            <option>-PD.PONTREN-</option>
                            <option>-P.KRISTEN-</option>
                            <option>-P.KHATOLIK-</option>
                            <option>-P.BUDDHA-</option>
                            <option>-P.HINDU-</option>
                            <option>-P.KONGHUCU-</option> -->
                    </select>
                
                </div>
                <div style="width: 560px; padding-left: 80px;">
                    <select class='form-control' name='id_layanan' id='id_layanan'>
                        <option disabeled='' selected=''>Pilih Layanan</option>
                        <!-- <option>-Pilih Layanan-</option>
                        <option>-Layanan Terpadu-</option>
                        <option>-Layanan Mutasi-</option>
                        <option>-Layanan Keuangan-</option>
                        <option>-Layanan Penerangan-</option>
                        <option>-Layanan Hubungan-</option>
                        <option>-Layanan DIKLAT-</option>
                        <option>-Layanan Kesekretariatan-</option>
                        <option>-Layanan Perencanaan-</option>
                        <option>-Layanan Penyusunan Laporan Kerja-</option> -->
                    </select>
                
                </div>

                <div style="width: 80%; padding-left: 180px;">
                    <div class="blog-author">
                        <div class="blog-author__content">
                            <h3 style='color: black;'>Persyaratan Berdasarkan Pilihan</h3>
                            <p><span id="id_psrt"></span></p>
                        </div><!-- /.blog-author__content -->
                    </div>
                </div>
            </div>
        </section><!-- /.call-to-action -->

        <footer class="site-footer">
            <img src="<?= base_url(); ?>assets/welcome/images/icons/footer-bg-icon-1.png" class="site-footer__shape-1" alt="">
            <img src="<?= base_url(); ?>assets/welcome/images/icons/footer-bg-icon-2.png" class="site-footer__shape-2" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-widget">
                            <a href="index" class="footer-widget__Logo">
                                <img src="<?= base_url() ?>assets/Logo_Kemenag_2-removebg-preview.png" width="153" alt="">
                            </a>
                            <form action="#" data-url="YOUR_MAILCHIMP_URL" class="mc-form">
                                <input type="email" name="EMAIL" placeholder="Email Address">
                                <button type="submit"><i class="agrikon-icon-right-arrow"></i></button>
                            </form><!-- /.mc-form -->
                            <div class="mc-form__response"></div><!-- /.mc-form__response -->
                            <div class="footer__social">
                                <a href="#" class="fab fa-facebook-square"></a>
                                <a href="#" class="fab fa-twitter"></a>
                                <a href="#" class="fab fa-pinterest-p"></a>
                                <a href="https://instagram.com/kemenag_surabaya?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
                            </div><!-- /.topbar__social -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-4 -->
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-widget footer-widget__links-widget">
                            <h3 class="footer-widget__title">Links</h3><!-- /.footer-widget__title -->
                            <ul class="list-unstyled footer-widget__links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Profile</a></li>
                                <li><a href="#">Service</a></li>
                            </ul><!-- /.list-unstyled -->
                        </div><!-- /.footer-widget -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-2 -->
                   
                    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-3">
                        <h3 class="footer-widget__title">Contact</h3><!-- /.footer-widget__title -->
                        <ul class="list-unstyled footer-widget__contact">
                            <li>
                                <i class="agrikon-icon-telephone"></i>
                                <a href="tel:+62 ( 031 ) 8285319">+62 ( 031 ) 8285319</a>
                            </li>
                            <li>
                                <i class="agrikon-icon-email"></i>
                                <a href="mailto:kotasurabaya@kemenag.go.id">kotasurabaya@kemenag.go.id</a>
                            </li>
                            <li>
                                <i class="agrikon-icon-pin"></i>
                                <a href="https://maps.app.goo.gl/U3SHLV4uCqF3xStN8" target="_blank">Jl.Masjid Agung Timur No.4, Gayungan Kecamatan Gayungan Kota Surabaya</a>
                            </li>
                        </ul><!-- /.list-unstyled -->
                    </div><!-- /.col-sm-12 col-md-6 col-lg-3 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </footer><!-- /.site-footer -->

        <div class="bottom-footer">
            <div class="container">
                <p>Design by : OyensGroupStudio</p>
                <div class="bottom-footer__links">
                    <a href="#">Terms & Conditions</a>
                    <a href="#">Privacy Policy</a>
                    <a href="">Sitemap</a>
                </div><!-- /.bottom-footer__links -->
            </div><!-- /.container -->
        </div><!-- /.bottom-footer -->

    </div><!-- /.page-wrapper -->


    <div class="mobile-nav__wrapper">
        <div class="mobile-nav__overlay mobile-nav__toggler"></div>
        <!-- /.mobile-nav__overlay -->
        <div class="mobile-nav__content">
            <span class="mobile-nav__close mobile-nav__toggler"><i class="far fa-times"></i></span>

            <div class="logo-box">
                <a href="index" aria-label="logo image"><img src="assets/ptspPutih.png" width="300" alt="" /></a>
            </div>
            <!-- /.logo-box -->
            <div class="mobile-nav__container"></div>
            <!-- /.mobile-nav__container -->

            <ul class="mobile-nav__contact list-unstyled">
                <li>
                    <i class="agrikon-icon-email"></i>
                    <a href="mailto:kotasurabaya@kemenag.go.id">kotasurabaya@kemenag.go.id</a>
                </li>
                <li>
                    <i class="agrikon-icon-telephone"></i>
                    <a href="tel:( 031 ) 8285319">( 031 ) 8285319</a>
                </li>
            </ul><!-- /.mobile-nav__contact -->
            <div class="mobile-nav__top">
                <div class="mobile-nav__language">
                    <img src="assets/welcome/images/resources/flag-1-1.jpg" alt="">
                    <label class="sr-only" for="language-select">select language</label>
                    <!-- /#language-select.sr-only -->
                    <select class="selectpicker" id="language-select">
                        <option value="english">English</option>
                        <option value="arabic">Arabic</option>
                    </select>
                </div><!-- /.mobile-nav__language -->
                <div class="mobile-nav__social">
                    <a href="#" aria-label="twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" aria-label="facebook"><i class="fab fa-facebook-square"></i></a>
                    <a href="#" aria-label="pinterest"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" aria-label="instagram"><i class="fab fa-instagram"></i></a>
                </div><!-- /.mobile-nav__social -->
            </div><!-- /.mobile-nav__top -->



        </div>
        <!-- /.mobile-nav__content -->
    </div>
    <!-- /.mobile-nav__wrapper -->

    <div class="search-popup">
        <div class="search-popup__overlay search-toggler"></div>
        <!-- /.search-popup__overlay -->
        <div class="search-popup__content">
            <form action="#">
                <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="thm-btn">
                    <i class="fa fa-search"></i>
                </button>
            </form>
        </div>
        <!-- /.search-popup__content -->
    </div>
    <!-- /.search-popup -->

    <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


    <script src="<?= base_url() ?>assets/welcome/js/jquery-3.5.1.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/swiper.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/jquery.magnific-popup.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/jquery.validate.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/bootstrap-select.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/wow.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/odometer.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/jquery.appear.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/jarallax.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/circle-progress.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/wNumb.min.js"></script>
    <script src="<?= base_url() ?>assets/welcome/js/nouislider.min.js"></script>
    <!-- template js -->
    <script src="<?= base_url() ?>assets/welcome/js/theme.js"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
            loadlayanan();
			loadsyarat();
        });

        function loadlayanan(){
            
            $("#id_seksi").change(function(){
            var getseksi = $("#id_seksi").val();

                $.ajax({
                    type : "POST",
                    dataType : "JSON",
                    url : "<?= base_url(); ?>welcome/getdatalayanan",
                    data : {seksi : getseksi},
                    success : function(data){
                        console.log(data);

                        var html ="";
                        var i;
                        for (i = 0; i < data.length; i++) 
                            {
                            html += '<option value="'+data[i].id_layanan+'">'+data[i].nama_layanan+'</option>';
                            
                        }

                        $("#id_layanan").html(html);
                        $("#id_layanan").show();

                    }

                });

            });
        }

		function loadsyarat(){
            
            $("#id_layanan").change(function(){
            var getlayanan = $("#id_layanan").val();

                $.ajax({
                    type : "POST",
                    dataType : "JSON",
                    url : "<?= base_url(); ?>welcome/getdatasyarat",
                    data : {layanan : getlayanan},
                    success : function(data){
                        console.log(data);

						var html ="";
                        var i;
                        for (i = 0; i < data.length; i++) 
                            {
                            html += '<li value="'+data[i].id_psrt+'">'+data[i].nama_psrt+'</li>';
                        }
                        $("#id_psrt").html(html);
                        $("#id_psrt").show();
                    }
                });

            });
        }
    </script>

</body>

</html>
