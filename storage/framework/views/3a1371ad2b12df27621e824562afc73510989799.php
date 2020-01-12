<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="image/logogame.png" type="image/png">
    <title>Game Hub</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>
<body>
<!--================Header Area =================-->
<header class="header_area">
    <div class="header_top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-5">
                    <ul class="nav social_icon">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-behance"></i></a></li>
                    </ul>
                </div>
                <?php if(auth()->guard()->guest()): ?>
                    <div class="col-sm-6 col-7">
                        <div class="top_btn d-flex justify-content-end">
                            <a href="<?php echo e(route('login')); ?>">Login</a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="col-sm-6 col-7">
                        <div class="top_btn d-flex justify-content-end">
                            <a href="<?php echo e(route('logout')); ?>"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <?php echo e(__('Logout')); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST"
                                  style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="<?php echo e(route('index')); ?>"><img src="image/logogame1.png" width ="150px" height = "auto" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('index')); ?>">Home</a></li>

                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('fortnite')); ?>">Fortnite</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('leagueoflegends')); ?>">League Of Legends </a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('CS')); ?>">CS-GO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">

                        <a href="<?php echo e(route('aboutus')); ?>" class="nav-link dropdown-toggle" role="button">About Us</a>
                    </li>

                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--================Header Area =================-->

<!--================banner Area =================-->
<section class="banner_area d-flex text-center">
    <div class="container align-self-center">
        <div class="row">
            <div class="col-md-12">
                <div class="banner_content">
                    <h1>Everyone Can Be Professional</h1>
                    <p>Reach Higher Level of Playing With Your Favorite Pro Player as Your Tutor</p>
                    <a href="#" class="btn_hover btn_hover_two">Get Started</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================banner Area =================-->

<!--================Event Date Area =================-->

<!--================Event Date Area =================-->

<!--================About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2>Welcome to Game Hub</h2>
        </div>
        <div class="row">
            <div class="col-md-6 d_flex">
                <div class="about_content flex">
                    <h3 class="title_color">Want your Favorite Pro Player be your tutor? We'll make it happen</h3>
                    <p>We provide pro player to be your tutor to increase your gaming level into pro player level. You can choose your favorite Pro Player to teach you how to play and give you some advice to make your gameplay better.</p>
                    <a href="#" class="about_btn btn_hover">Read Full Story</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="image/bugha.jpg" alt="abou_img">
            </div>
        </div>
    </div>
</section>
<!--================About Area =================-->

<!--================Features Area =================-->
<section class="features_area">
    <div class="section_title text-center">
        <h2>Our Pros Tutor</h2>
    </div>
    <div class="row m0">
        <div class="col-md-3 features_item">
            <img src = "image/tutor_mrsavage.jpg" alt = "savage" width = "200px" height= "200px" style = "border-radius:100px">
            <h3 style= "text-align:center">MrSavage</h3>
            <p>Fortnite Pro Player For NRG E-sport. Learn How To Play Fortnite as Good as MrSavage</p>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
        <div class="col-md-3 features_item">
            <img src = "image/tutor_faker.jpg" alt = "savage" width = "200px" height= "200px" style = "border-radius:100px">
            <h3 style= "text-align:center">Faker</h3>
            <p>League Of Legends Pro Player For SKTT1. The Best Mid Laner in The World</p>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
        <div class="col-md-3 features_item">
            <img src = "image/tutor_sumail.jpg" alt = "savage" width = "200px" height= "200px" style = "border-radius:100px">
            <h3  style= "text-align:center">Suma1l</h3>
            <p>Dota2 Pro Player For Evil Geniuses</p> <br>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
        <div class="col-md-3 features_item">
            <img src = "image/tutor_shroud.jpg" alt = "savage" width = "200px" height= "200px" style = "border-radius:100px">
            <h3 style= "text-align:center">Shroud</h3>
            <p>Former CS-GO Pro Player For Cloud9.</p> <br>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>

    </div>
</section>
<!--================Features Area =================-->

<!--================Sermons work Area =================-->
<section class="sermons_work_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2>Our Some Courses</h2>
        </div>
        <div class="sermons_slider owl-carousel">
            <div class="item row">
                <div class="col-lg-8">
                    <div class="sermons_image">
                        <img src="image/buildfortnite.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sermons_content">
                        <h3 class="title_color">Want to learn How To Build in Fortnite ? Let's Join Us and Our Pro's Tutor Will Teach You How To Do It</h3>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i><span>Game: </span><a href="#"> Fortnite</a></li>
                        </ul>
                        <a href="#" class="btn_hover">Start Courses</a>
                    </div>
                </div>
            </div>
            <div class="item row">
                <div class="col-lg-8">
                    <div class="sermons_image">
                        <img src="image/courses_lolchampion.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sermons_content">
                        <h3 class="title_color">Learn How To Play Your Favorite Champion and What The Best Item To Use</h3>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i><span>Game: </span><a href="#"> League Of Legends</a></li>
                        </ul>
                        <a href="#" class="btn_hover">Start Courses</a>
                    </div>
                </div>
            </div>
            <div class="item row">
                <div class="col-lg-8">
                    <div class="sermons_image">
                        <img src="image/courses_csgo.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sermons_content">

                        <h3 class="title_color">Learn How To Aim so You Never Miss Your Shots</h3>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i><span>Game: </span><a href="#">CS-GO</a></li>

                        </ul>
                        <a href="#" class="btn_hover btn_hover_two">Start Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Sermons work Area=================-->
<!--================Donate Area=================-->

<!--================Donate Area=================-->

<!--================Event Blog Area=================-->

<!--================Blog Area=================-->


<!--================ start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Company</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Customer Support</a></li>
                                <li><a href="#">Become a Coach</a></li>
                                <li><a href="#">Become a Partner</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Terms and Condition</a></li>
                            </ul>
                        </div>
                    </div>	                        </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Navigation Links</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6 class="footer_title">Games</h6>
                    <div class="row">
                        <div class="col-4">
                            <ul class="list_style">
                                <li><a href="#">Fortnite</a></li>
                                <li><a href="#">League of Legends</a></li>
                                <li><a href="#">CS-GO</a></li>
                                <li><a href="#">Dota</a></li>
                                <li><a href="#">Apex-Legends</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget instafeed">
                    <ul class="list_style instafeed d-flex flex-wrap">
                        <li><img src="image/logogame.png" width = "300px" height = "200px" alt=""></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="border_line"></div>
        <div class="row footer-bottom d-flex justify-content-between align-items-center">
            <p class="col-lg-8 col-sm-8 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            <div class="col-lg-4 col-sm-4 footer-social">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-dribbble"></i></a>
                <a href="#"><i class="fa fa-behance"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/flipclock/timer.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
<?php /**PATH D:\Laravel Project\GameHub\resources\views/index.blade.php ENDPATH**/ ?>