<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SIMONE</title>
    <link rel="icon" type="image/png" href="<?= base_url() ?>assets/img/login/icons/logoPN.ico" />
    <link rel="icon" type="image/png" href="<?= base_url('home') ?>assets/img/login/icons/logoPN.ico" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/home/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/home/home.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/home/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="<?= base_url() ?>assets/img/home/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/home/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- end loader -->
    <div class="wrapper">
        <!-- end loader -->
        <div class="sidebar">
            <!-- Sidebar  -->
            <nav id="sidebar">
                <div id="dismiss">
                    <i class="fa fa-arrow-left"></i>
                </div>
                <ul class="list-unstyled components">
                    <li class="active"> <a href="<?= base_url('home') ?>">Home</a> </li>
                    <li><a href="#about">Tentang Simone</a> </li>
                    <li><a href="#persyaratan">Persyaratan Magang</a> </li>
                    <li><a href="#pendaftaran">Pendaftaran Magang</a> </li>
                    <li><a href="#contact">Contact</a> </li>
                </ul>
            </nav>
        </div>
        <div id="content">
            <!-- header -->
            <header>
                <!-- header inner -->
                <div class="header">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                                <div class="full">
                                    <div class="center-desk">
                                        <div class="logo">
                                            <a href="<?= base_url('home') ?>"><img src="<?= base_url(); ?>assets/img/home/logo-simone.png" alt="#" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                                <ul class="btn">
                                    <li class="down_btn"><a href="<?= base_url('login') ?>"><b>Login</b></a></li>
                                    <li><a href="<?= base_url('profil') ?>"><img src="<?= base_url('assets/') ?>img/home/te1.png" class="rounded-circle" style="width:50px; height:50px;"></a></li>
                                    <li>
                                        <h4 style="color: white; font-weight:500;"></h4>
                                    </li>
                                    <li></li>
                                    <li></li>
                                    <li><button type="button" id="sidebarCollapse">
                                            <img src="<?= base_url(); ?>assets/img/home/menu_icon.png" alt="#" />
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header inner -->
            <!-- end header -->
            <!-- banner -->