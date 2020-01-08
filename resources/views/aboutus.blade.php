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
                <div class="col-sm-6 col-7">
                    <div class="top_btn d-flex justify-content-end">
                        <a href="#">My Account</a>
                        <a href="#">Donate Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{route('index')}}"><img src="image/logogame1.png" width ="150px" height = "auto" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="{{route('fortnite')}}">Fortnite</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Apex Legends</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">League Of Legends </a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Dota</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">CS-GO</a></li>
                        </ul>
                    </li>
                    <li class="nav-item active"><a class="nav-link" href="{{route('aboutus')}}">About Us</a></li>
                    <!-- <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Event</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="event.html">Event</a></li>
                            <li class="nav-item"><a class="nav-link" href="event-details.html">Event Details</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown active">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="about-us.html">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="donation.html">Donation</a></li>
                            <li class="nav-item"><a class="nav-link" href="gallery.html">Gallery</a></li>
                            <li class="nav-item"><a class="nav-link" href="elements.html">Elements</a></li>
                        </ul>
                    </li>
                    <li class="nav-item submenu dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                        <ul class="dropdown-menu">
                            <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a></li>
                        </ul>
                    </li>  -->

                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
<!--================Header Area =================-->

<!--================Breadcrumb Area =================-->
<section class="breadcrumb_area br_image">
    <div class="container">
        <div class="page-cover text-center">
            <h2 class="page-cover-tittle">About Us</h2>
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active">About</li>
            </ol>
        </div>
    </div>
</section>
<!--================Breadcrumb Area =================-->

<!-- ================About Area =================-->
<section class="about_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2>Welcome to GameHub</h2>
            <p>This website is a website specifically for gamers who want to deepen their ability to play. This website was created because E-sport game players in Indonesia are in the process of developing and have a large market to develop. we try to make a guide in game play in the form of videos from professional players directly. Not just a guide, here we can discuss with each other in forums about the video. there is also new news about the current game. many games that can be followed include fortnite, apex of legend, League of Legends, Dota, CS-go. we also have a target to get new professional players in order to win the name of Indonesia in the international arena. </p>
        </div>
        <!-- <div class="row">
            <div class="col-md-6 d_flex">
                <div class="about_content flex">
                    <h3 class="title_color">Did not find your Package Feel free to ask us. We‘ll make it for you</h3>
                    <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    <a href="#" class="about_btn btn_hover">Read Full Story</a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="image/about.jpg" alt="abou_img">
            </div>
        </div> -->
    </div>
</section>
<!--================About Area =================-->

<!--================Features Area =================-->
<!-- <section class="features_area">
    <div class="row m0">
        <div class="col-md-3 features_item">
            <h3>Spreading Light to world</h3>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
        <div class="col-md-3 features_item">
            <h3>Spreading Light to world</h3>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
        <div class="col-md-3 features_item">
            <h3>Spreading Light to world</h3>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
        <div class="col-md-3 features_item">
            <h3>Spreading Light to world</h3>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence and upturning of the natural.</p>
            <a href="#" class="btn_hover view_btn">View Details</a>
        </div>
    </div>
</section> -->
<!--================Features Area =================-->

<!--================Sermons work Area =================-->
<!-- <section class="sermons_work_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2>Sermons This Week</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from</p>
        </div>
        <div class="sermons_slider owl-carousel">
            <div class="item row">
                <div class="col-lg-8">
                    <div class="sermons_image">
                        <img src="image/sermns.jpg" alt="">
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sermons_content">
                        <h3 class="title_color">Did not find your Package? Feel free to ask us. We‘ll make it for you</h3>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i><span>Categories: </span><a href="#"> Travor James</a></li>
                            <li><i class="lnr lnr-database"></i><span>Sermon Speaker: </span> Prayer</li>
                            <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                        </ul>
                        <a href="#" class="btn_hover">View More Details</a>
                    </div>
                </div>
            </div>
            <div class="item row">
                <div class="col-lg-8">
                    <div class="sermons_image">
                        <img src="image/sermns.jpg" alt="">
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sermons_content">
                        <h3 class="title_color">Did not find your Package? Feel free to ask us. We‘ll make it for you</h3>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i><span>Categories: </span><a href="#"> Travor James</a></li>
                            <li><i class="lnr lnr-database"></i><span>Sermon Speaker: </span> Prayer</li>
                            <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                        </ul>
                        <a href="#" class="btn_hover">View More Details</a>
                    </div>
                </div>
            </div>
            <div class="item row">
                <div class="col-lg-8">
                    <div class="sermons_image">
                        <img src="image/sermns.jpg" alt="">
                        <p>inappropriate behavior is often laughed off as “boys will be boys,” women face higher conduct standards especially in the workplace. That’s why it’s crucial that, as women, our behavior on the job is beyond reproach. inappropriate behavior is often laughed.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sermons_content">
                        <h3 class="title_color">Did not find your Package? Feel free to ask us. We‘ll make it for you</h3>
                        <ul class="list_style sermons_category">
                            <li><i class="lnr lnr-user"></i><span>Categories: </span><a href="#"> Travor James</a></li>
                            <li><i class="lnr lnr-database"></i><span>Sermon Speaker: </span> Prayer</li>
                            <li><i class="lnr lnr-calendar-full"></i><span>Date:</span> 5th may, 2018</li>
                        </ul>
                        <a href="#" class="btn_hover btn_hover_two">View More Details</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--================Sermons work Area=================-->

<!--================Team Area=================-->
<!-- <section class="team_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2>Sermons This Week</h2>
            <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from</p>
        </div>
        <div class="row mb_30">
            <div class="col-md-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img src="image/team1.jpg" alt="team">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Philip Goodwin</h3>
                        <p>Chief Pastor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img src="image/team2.jpg" alt="team">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Duane Lewis</h3>
                        <p>Chief Pastor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img src="image/team3.jpg" alt="team">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Jose Austin</h3>
                        <p>Chief Pastor</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="team_item">
                    <div class="team_img">
                        <img src="image/team5.jpg" alt="team">
                        <ul class="list_style">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="content">
                        <h3>Leroy Lopez</h3>
                        <p>Chief Pastor</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--================Team Area=================-->

<!--================Donate Area=================-->
<!-- <section class="donate_area">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex align-self-center">
                <div class="donate_content ">
                    <h2>Your donation can save <br>many lives</h2>
                    <p>The French Revolution constituted for the conscience of the dominant aristocratic class a fall from innocence.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="donation_form">
                    <h3>How much would you like to donate?</h3>
                    <div class="form-group">
                        <input type='text' class="form-control" placeholder="$5"/>
                    </div>
                    <div class="form-group">
                        <input type='text' class="form-control" placeholder="$5"/>
                    </div>
                    <div class="form-group">
                        <input type='text' class="form-control" placeholder="$5"/>
                    </div>
                    <div class="form-group">
                        <select class="wide">
                            <option data-display="Any">Any</option>
                            <option value="1">Old</option>
                            <option value="2">Younger</option>
                            <option value="3">Potato</option>
                        </select>
                    </div>
                    <a href="#" class="btn_hover btn_hover_two">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--================Donate Area=================-->

<!--================Event Blog Area=================-->
<!-- <section class="event_blog_area section_gap">
    <div class="container">
        <div class="section_title text-center">
            <h2>Upcoming Events</h2>
            <p>We all live in an age that belongs to the young at heart. Life that is becoming extremely fast</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="event_post">
                    <img src="image/blog1.jpg" alt="">
                    <a href="#"><h2 class="event_title">Spreading Peace to world</h2></a>
                    <ul class="list_style sermons_category">
                        <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                        <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                        <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                    </ul>
                    <a href="#" class="btn_hover">View Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event_post">
                    <img src="image/blog2.jpg" alt="">
                    <a href="#"><h2 class="event_title">Spreading Peace to world</h2></a>
                    <ul class="list_style sermons_category">
                        <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                        <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                        <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                    </ul>
                    <a href="#" class="btn_hover">View Details</a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="event_post">
                    <img src="image/blog3.jpg" alt="">
                    <a href="#"><h2 class="event_title">Spreading Light to world</h2></a>
                    <ul class="list_style sermons_category">
                        <li><i class="lnr lnr-user"></i>Saturday, 5th may, 2018</li>
                        <li><i class="lnr lnr-apartment"></i>Rocky beach Church</li>
                        <li><i class="lnr lnr-location"></i>Santa monica, Los Angeles, USA</li>
                    </ul>
                    <a href="#" class="btn_hover">View Details</a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!--================Blog Area================= -->

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
                                <li><a href="{{route('index')}}">Home</a></li>
                                <li><a href="#">Games</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
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
                                <li><a href="{{route('fortnite')}}">Fortnite</a></li>
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
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/stellar.js"></script>
<script src="js/custom.js"></script>
</body>
</html>
