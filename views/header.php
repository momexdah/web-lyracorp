
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from layerdrops.com/opins/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 20 Oct 2023 23:42:25 GMT -->
<head>
    <meta charset="UTF-8" />
    <title>Lyra Corp ™</title>
    <!-- mobile responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script-->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="<?=base_url?>assets/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?=base_url?>assets/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=base_url?>assets/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?=base_url?>assets/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=base_url?>assets/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?=base_url?>assets/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?=base_url?>assets/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?=base_url?>assets/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=base_url?>assets/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?=base_url?>assets/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=base_url?>assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?=base_url?>assets/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=base_url?>assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="<?=base_url?>assets/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?=base_url?>assets/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- main template stylesheet -->
    <link rel="stylesheet" href="<?=base_url?>assets/css/style.css">
    <link rel="stylesheet" href="<?=base_url?>assets/css/registro.css">

    <link rel="stylesheet" href="<?=base_url?>assets/css/responsive.css">

    <!--script src="<?=base_url?>views/landing/js/landing.js" ></script-->
</head>

<body>
<div class="preloader"></div><!-- /.preloader -->
<div class="page-wrapper">
    <header class="site-header header-one">
        <nav class="navbar navbar-expand-lg navbar-light header-navigation stricky">
            <div class="container clearfix">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="logo-box clearfix">
                    <a class="navbar-brand"  href="<?=base_url?>landing/index">
                        <img src="<?=base_url?>assets/images/logo-1-1.png"  alt="Awesome Image" />
                    </a>
                    <button class="menu-toggler" data-target=".header-one .main-navigation">
                        <span class="fa fa-bars"></span>
                    </button>
                </div><!-- /.logo-box -->
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="main-navigation">
                    <ul class="one-page-scroll-menu navigation-box">
                        <li class=" current scrollToLink">
                            <a href="#banner">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index2.html">Home Two</a></li>
                                <li><a href="index.html">Header Versions</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Header One</a></li>
                                        <li><a href="index2.html">Header Two</a></li>
                                    </ul><!-- /.sub-menu -->
                                </li>
                            </ul><!-- /.sub-menu -->
                        </li>
                        <li class="scrollToLink"><a href="<?=base_url?>landing/index">Features</a></li>
                        <li class="scrollToLink"><a href="#features">App Screens</a></li>
                        <li class="scrollToLink"><a href="#pricing">Pricing</a></li>
                        <li class="scrollToLink">
                            <a href="#blog">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog Grid</a></li>
                                <li><a href="blog-details.html">Blog Details</a></li>
                            </ul><!-- /.sub-menu -->
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
                <?php if(!isset($_SESSION['identity'])): ?>
                    <div class="right-side-box">
                        <a href="<?=base_url?>usuarios/login" class="header-btn">Login</a>
                    </div>
                <?php else: ?>
                    <div class="right-side-box">
                        <a href="<?=base_url?>usuarios/logout" class="header-btn">Bienvenid@, <?=$_SESSION['identity']->usuario?></a>
                    </div>
                <?php endif; ?>
                <!-- /.right-side-box -->
            </div>
            <!-- /.container -->
        </nav>
    </header><!-- /.site-header -->
