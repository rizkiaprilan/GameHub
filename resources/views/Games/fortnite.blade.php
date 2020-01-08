<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="image/logogame.png" type="image/png">
    <title>Game Hub</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bbootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Navbar -->
    <div class="header_area">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                {{--                <a class="navbar-brand logo_h" href="/"><img src="image/logogame.png" width="150px" height="60px" alt=""></a>--}}
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="{{route('index')}}">Home</a></li>

                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false">Games</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item active"><a class="nav-link" href="{{route('aboutus')}}">Fortnite</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Apex Legends</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">League Of Legends </a></li>
                                <li class="nav-item"><a class="nav-link" href="#">Dota</a></li>
                                <li class="nav-item"><a class="nav-link" href="#">CS-GO</a></li>
                            </ul>
                        </li>
                        <li class="nav-item submenu dropdown">

                            <a href="{{route('aboutus')}}" class="nav-link dropdown-toggle" role="button">About Us</a>
                        </li>

                        <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item"><a href="#" class="search"><i class="lnr lnr-magnifier"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/" class="brand-link">
            <img src="image/logogame.png" alt="image" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Game Hub</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div>
                    <a href="#" class="d-block">User</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->

                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-copy"></i>
                            <p>
                                Select Game
                                <i class="fas fa-angle-left right"></i>
                                <span class="badge badge-info right">5</span>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Fortnite</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>League of Legends</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>CS:GO</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Apex Legends</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dota</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-chart-pie"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>

                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-tree"></i>
                            <p>
                                Courses
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-edit"></i>
                            <p>
                                Coaching
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                    </li>
                    <li class="nav-item has-treeview">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Meta
                            </p>
                        </a>

                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        {{--                        <h1 class="m-0 text-dark"><img src="image/logogame.png" width="150px" height="50px" alt=""></h1>--}}
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>

                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="features_area">
            <div class="section_title text-center">
                <h2>Fortnite Courses</h2>
            </div>
            <div class="row m0">
                <div class="col-md-3 features_item">
                    <img src="image/courses_building.jpg" alt="savage" width="150px" height="150px"
                         style="text-align:center">
                    <h3 style="text-align:center">Build Courses</h3>
                    <p>Learn How To Build in Fortnite</p> <br>
                    <a href="#" class="btn_hover view_btn">Courses</a>
                </div>
                <div class="col-md-3 features_item">
                    <img src="image/courses_weapon.jpg" alt="savage" width="150px" height="150px">
                    <h3 style="text-align:center">Weapon</h3>
                    <p>Learn About The Best Combo Weapon</p> <br> <br>
                    <a href="#" class="btn_hover view_btn">Courses</a>
                </div>
                <div class="col-md-3 features_item">
                    <img src="image/edit_courses.jpg" alt="savage" width="150px" height="150px">
                    <h3 style="text-align:center">Edit Courses</h3>
                    <p>Fast Editing Courses</p> <br> <br>
                    <a href="#" class="btn_hover view_btn">Courses</a>
                </div>
                <div class="col-md-3 features_item">
                    <img src="image/Wallpaper.jpg" alt="savage" width="150px" height="150px">
                    <h3 style="text-align:center">Shot On Target</h3>
                    <p>Learn How To Aim in Fortnite</p> <br>
                    <a href="#" class="btn_hover view_btn">Courses</a>
                </div>

            </div>
        </section>


        <section class="sermons_work_area section_gap">
            <div class="container">
                <div class="section_title text-center">
                    <h2>Other Courses</h2>
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
                                <h3 class="title_color">Want to learn How To Build in Fortnite ? Let's Join Us and Our
                                    Pro's Tutor Will Teach You How To Do It</h3>
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
                                <h3 class="title_color">Learn How To Play Your Favorite Champion and What The Best Item
                                    To Use</h3>
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


        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->

    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
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
