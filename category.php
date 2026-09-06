<?php
// category.php - Currency selection page
$page_title = "Choose Your USDT Network";
include 'user/inc/header.php'; // if you have a header include
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Choose USDT Network - Flasher</title>
    <link rel="shortcut icon" type="image/x-icon" href="user/img/favicon.png">
    <link rel="stylesheet" href="user/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="user/css/slick.css">
    <link rel="stylesheet" href="user/css/default.css">
    <link rel="stylesheet" href="user/css/style.css">
    <link rel="stylesheet" href="user/css/responsive.css">
    <style>
        .invest-card { text-align:center; background:#0F101E; border-radius:15px; padding:40px 20px; border:1px solid rgba(255,255,255,0.12); height:100%; transition:0.3s; }
        .invest-card:hover { transform:translateY(-8px); background:#1a1c2e; }
        .invest-card-icon { width:99px; height:99px; margin:0 auto 20px; }
        .invest-card-icon img { width:99px; height:99px; border-radius:50%; background:#1a1c2e; object-fit:cover; }
        .btn-network { background:linear-gradient(93.17deg, #DF86AA -18.55%, #7E2AFD 163.09%); color:#fff; border:0; padding:12px 30px; border-radius:30px; font-weight:600; display:inline-block; }
        .btn-network:hover { color:#fff; opacity:0.9; transform:scale(1.02); }
        .hero-2 { padding:80px 0 40px; position:relative; overflow:hidden; }
        .hero-2 .hero-title { font-size:4rem; font-weight:700; }
        @media(max-width:767px){ .hero-2 .hero-title { font-size:2.5rem; } }
        .section-hidden { display:none; }
    </style>
</head>
<body class="home-purple-gradient">

<!-- Header -->
<header id="header" class="header-layout1">
    <div id="sticky-header" class="menu-area transparent-header">
        <div class="container custom-container">
            <div class="row"><div class="col-12">
                <div class="menu-wrap">
                    <nav class="menu-nav">
                        <div class="logo"><a href="index.html"><img src="user/img/logo/logo.png" style="height:50px;" alt="Logo"></a></div>
                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                            <ul class="navigation">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index.html#feature">Feature</a></li>
                                <li><a href="index.html#roadMap">RoadMap</a></li>
                                <li><a href="resale.html">Resale</a></li>
                                <li><a href="operative.html">Operator</a></li>
                            </ul>
                        </div>
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    </nav>
                </div>
            </div></div>
        </div>
    </div>
</header>

<!-- Category Hero -->
<div class="hero-wrapper hero-2">
    <div class="hero-bg-gradient1"></div>
    <div class="hero-bg-gradient2"></div>
    <div class="container">
        <div class="hero-style2">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-md-8">
                        <h4 class="hero-subtitle" style="font-size:1.5rem;">Choose Your</h4>
                        <h1 class="hero-title">USDT Network</h1>
                        <p style="color:#92939E; font-size:1.1rem;">Select your preferred blockchain network to continue</p>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="hero-thumb alltuchtopdown">
                            <img class="img-fluid rounded" src="user/img/update/hero/hero-1-1.jpg" alt="Crypto">
                        </div>
                    </div>
                </div>
                <!-- Network Grid -->
                <div class="pt-5">
                    <div class="row gy-4">
                        <!-- Solana -->
                        <div class="col-lg-3 col-md-6">
                            <div class="invest-card">
                                <div class="invest-card-icon">
                                    <img src="user/img/categories/17800479801712556856.png" alt="Solana">
                                </div>
                                <h5 style="color:#fff; margin-bottom:20px;">Solana</h5>
                                <a href="payment.php?network=solana" class="btn-network">Buy Now</a>
                            </div>
                        </div>
                        <!-- POL (Polygon) -->
                        <div class="col-lg-3 col-md-6">
                            <div class="invest-card">
                                <div class="invest-card-icon">
                                    <img src="user/img/categories/17438918691118013155.png" alt="POL">
                                </div>
                                <h5 style="color:#fff; margin-bottom:20px;">POL (Polygon)</h5>
                                <a href="payment.php?network=polygon" class="btn-network">Buy Now</a>
                            </div>
                        </div>
                        <!-- TRON -->
                        <div class="col-lg-3 col-md-6">
                            <div class="invest-card">
                                <div class="invest-card-icon">
                                    <img src="user/img/categories/17438921711378386741.png" alt="TRON">
                                </div>
                                <h5 style="color:#fff; margin-bottom:20px;">TRON (TRC20)</h5>
                                <a href="payment.php?network=tron" class="btn-network">Buy Now</a>
                            </div>
                        </div>
                        <!-- ETH -->
                        <div class="col-lg-3 col-md-6">
                            <div class="invest-card">
                                <div class="invest-card-icon">
                                    <img src="user/img/categories/17397835451268888151.png" alt="ETH">
                                </div>
                                <h5 style="color:#fff; margin-bottom:20px;">ETH (ERC20)</h5>
                                <a href="payment.php?network=eth" class="btn-network">Buy Now</a>
                            </div>
                        </div>
                        <!-- BINANCE -->
                        <div class="col-lg-3 col-md-6">
                            <div class="invest-card">
                                <div class="invest-card-icon">
                                    <img src="user/img/categories/1743892289833619663.webp" alt="BEP20">
                                </div>
                                <h5 style="color:#fff; margin-bottom:20px;">BINANCE (BEP20)</h5>
                                <a href="payment.php?network=bep20" class="btn-network">Buy Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer-wrapper footer-layout1 position-relative">
    <div class="container">
        <div class="footer-menu-area">
            <div class="row gy-4 justify-content-between align-items-center">
                <div class="col-xl-5 col-lg-4">
                    <div class="social-btn">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8 text-lg-end">
                    <ul class="footer-menu-list">
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="#">OUR PROJECTS</a></li>
                        <li><a href="#">OUR TEAM</a></li>
                        <li><a href="#">NEWS FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-wrap">
        <div class="container">
            <div class="row gy-3 justify-content-between">
                <div class="col-lg-6">
                    <p class="copyright-text">Copyright © 2024 <a href="index.html">Flasher.</a> All rights reserved.</p>
                </div>
                <div class="col-lg-6 text-lg-end">
                    <ul class="footer-links">
                        <li><a href="#">Terms and Condition</a></li>
                        <li><a href="#">Help Center</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="user/js/vendor/jquery-3.6.0.min.js"></script>
<script src="user/js/bootstrap.min.js"></script>
<script src="user/js/slick.min.js"></script>
<script src="user/js/main.js"></script>
</body>
</html>
