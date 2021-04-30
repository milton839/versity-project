<?php
    session_start();
    require_once("includes/db.php");
    require_once("includes/functions.php");
?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Kufa - Personal Portfolio HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/frontend_assets/img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/frontend_assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/slick.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/aos.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/default.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/style.css">
    <link rel="stylesheet" href="assets/frontend_assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a href="index.php" class="navbar-brand logo-sticky-none"><img
                                        src="assets/frontend_assets/img/logo/logo.png" alt="Logo"></a>
                                <a href="index.php" class="navbar-brand s-logo-none"><img
                                        src="assets/frontend_assets/img/logo/s_logo.png" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index.php">
                    <img src="assets/frontend_assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?=falcon_setting("office_address")?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?=falcon_setting("office_phone")?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?=falcon_setting("office_email")?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a target = "_blank" href="<?=falcon_setting("twitter_link")?>"><i class="fab fa-twitter"></i></a>
                <a target = "_blank" href="<?=falcon_setting("facebook_link")?>"><i class="fab fa-facebook-f"></i></a>
                <a target = "_blank" href="<?=falcon_setting("google_link")?>"><i class="fab fa-google-plus-g"></i></a>
                <a target = "_blank" href="<?=falcon_setting("instagram_link")?>"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>

        <!-- banner-area -->
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">HELLO!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s">I am <?=falcon_setting("owner_name")?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?=falcon_setting("owner_about")?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <ul>
                                    <li><a target="_blank" href="<?=falcon_setting("facebook_link")?>"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a target="_blank" href="<?=falcon_setting("twitter_link")?>"><i class="fab fa-twitter"></i></a></li>
                                    <li><a target="_blank" href="<?=falcon_setting("instagram_link")?>"><i class="fab fa-instagram"></i></a></li>
                                    <li><a target="_blank" href="<?=falcon_setting("pinterest_link")?>"><i class="fab fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="<?=falcon_setting_image('banner_image')?>" alt="banner-image">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="assets/frontend_assets/img/shape/dot_circle.png" class="rotateme"
                    alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="<?=falcon_setting_image('about_image')?>" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?=falcon_setting("about_me")?></p>
                            <h3>Skills:</h3>
                        </div>
                        <?php
                            $skill_data = "SELECT * FROM skills WHERE status=2 LIMIT 6";
                            $skill_query = mysqli_query($db_connect, $skill_data);
                            foreach($skill_query as $skill):
                        ?>
                        <!-- Education Item -->
                        <div class="education">
                            <div class="year"><?=$skill['skill_name']?></div>
                            <div class="line"></div>
                            <div class="location">
                                <span><?=substr($skill['skill_description'], 0, 30)?><span class="font-weight-bold text-success"><?=$skill['skill_percentage']?>%</span></span>
                                <div class="progressWrapper">
                                    <div class="progress">
                                        <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s"
                                            data-wow-duration="2s" role="progressbar" style="width: <?=$skill['skill_percentage']?>%;"
                                            aria-valuenow="<?=$skill['skill_percentage']?>" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Education Item -->
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                        $select_data = "SELECT * FROM services WHERE status=2 ORDER BY id DESC LIMIT 6";
                        $select_query = mysqli_query($db_connect, $select_data);
                        foreach($select_query as $service):
                    ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                            <i class="<?=$service['service_icon']?>"></i>
                            <h3><?=$service['service_title']?></h3>
                            <p><?=substr($service['service_description'], 0, 100)?></p>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/1.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Design</span>
                                <h4><a href="portfolio-single.html">Hamble Triangle</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/2.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Video</span>
                                <h4><a href="portfolio-single.html">Dark Beauty</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/3.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Audio</span>
                                <h4><a href="portfolio-single.html">Gilroy Limbo.</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/4.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Design</span>
                                <h4><a href="portfolio-single.html">Ipsum which</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/5.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>Creative</span>
                                <h4><a href="portfolio-single.html">Eiusmod tempor</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 pitem">
                        <div class="speaker-box">
                            <div class="speaker-thumb">
                                <img src="assets/frontend_assets/img/images/6.jpg" alt="img">
                            </div>
                            <div class="speaker-overlay">
                                <span>UX/UI</span>
                                <h4><a href="portfolio-single.html">again there</a></h4>
                                <a href="portfolio-single.html" class="arrow-btn">More information <span></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolis-area-end -->


        <!-- fact-area -->
        <section class="fact-area">
            <div class="container">
                <div class="fact-wrap">
                    <div class="row justify-content-between">
                    <?php
                        $award_data = "SELECT * FROM awards WHERE status=2 LIMIT 4";
                        $award_query = mysqli_query($db_connect, $award_data);
                        foreach($award_query as $award):
                    ?>
                        <div class="col-xl-2 col-lg-3 col-sm-6">
                            <div class="fact-box text-center mb-50">
                                <div class="fact-icon">
                                    <i class="<?=$award['award_icon']?>"></i>
                                </div>
                                <div class="fact-content">
                                    <h2><span class="count"><?=$award['award_count']?></span></h2>
                                    <span><?=substr($award['award_title'], 0, 20)?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>    
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area primary-bg pt-115 pb-115">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>testimonial</span>
                            <h2>happy customer quotes</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <div class="testimonial-active">
                            <?php
                            $testimonial_select_query = "SELECT * FROM testimonials WHERE status = 2";
                            $select_from_db = mysqli_query($db_connect,$testimonial_select_query);
                            ?>

                            <?php foreach($select_from_db as $testimonial):?>
                            
                            <div class="single-testimonial text-center">
                                <div class="testi-avatar">
                                    <img src="uploads/testimonial/<?=$testimonial['testimonial_photo']?>" alt="<?=$testimonial['testimonial_photo']?>">
                                </div>
                                <div class="testi-content">
                                    <h4><span>“</span> <?=$testimonial['testimonial_text']?> <span>”</span></h4>
                                    <div class="testi-avatar-info">
                                        <h5><?=$testimonial['testimonial_name']?></h5>
                                        <span><?=$testimonial['testimonial_designation']?></span>

                                        <?php for($start = 1;$start <= $testimonial['testimonial_star'];$start++):?>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <?php endfor;?>

                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div class="row brand-active">
                    <?php
                        $brand_data = "SELECT * FROM brands WHERE status=2 ORDER BY id DESC";
                        $brand_query = mysqli_query($db_connect, $brand_data);
                        foreach($brand_query as $brand):
                    ?>
                    <div class="col-xl-2">
                        <div class="single-brand">
                            <img src="uploads/brands/<?=$brand['brand_logo']?>" alt="<?=$brand['brand_logo']?>">
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        <div class="contact-content">
                            <p>Event definition is - somthing that happens occurre How evesnt sentence. Synonym when an
                                unknown printer took a galley.</p>
                            <h5>OFFICE IN <span><?=falcon_setting("office_name")?></span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span><?=falcon_setting("office_address")?></li>
                                    <li><i class="fas fa-phone"></i><span>Phone :</span><?=falcon_setting("office_phone")?></li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?=falcon_setting("office_email")?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">

                            <?php if(isset($_SESSION['send_message_successfully'])): ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?php 
                                        echo $_SESSION['send_message_successfully'];
                                        unset($_SESSION['send_message_successfully']);
                                    ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <form action="contact_post.php" method="POST">
                                <?php if(isset($_SESSION['empty_name'])): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php 
                                            echo $_SESSION['empty_name'];
                                            unset($_SESSION['empty_name']);
                                        ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <input name="guest_name" type="text" placeholder="your name *">
                                <?php if(isset($_SESSION['empty_email'])): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php 
                                            echo $_SESSION['empty_email'];
                                            unset($_SESSION['empty_email']);
                                        ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <input name="guest_email" type="email" placeholder="your email *">
                                <?php if(isset($_SESSION['empty_message'])): ?>
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <?php 
                                            echo $_SESSION['empty_message'];
                                            unset($_SESSION['empty_message']);
                                        ?>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <?php endif; ?>
                                <textarea name="guest_message" id="message"
                                    placeholder="your message *"></textarea>
                                <button class="btn" type="submit">SEND MESSAGE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span>Kufa</span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->

    <!-- JS here -->
    <script src="assets/frontend_assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/frontend_assets/js/popper.min.js"></script>
    <script src="assets/frontend_assets/js/bootstrap.min.js"></script>
    <script src="assets/frontend_assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/frontend_assets/js/one-page-nav-min.js"></script>
    <script src="assets/frontend_assets/js/slick.min.js"></script>
    <script src="assets/frontend_assets/js/ajax-form.js"></script>
    <script src="assets/frontend_assets/js/wow.min.js"></script>
    <script src="assets/frontend_assets/js/aos.js"></script>
    <script src="assets/frontend_assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/frontend_assets/js/jquery.counterup.min.js"></script>
    <script src="assets/frontend_assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/frontend_assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/frontend_assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/frontend_assets/js/plugins.js"></script>
    <script src="assets/frontend_assets/js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>