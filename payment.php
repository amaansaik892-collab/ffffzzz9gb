<?php
// payment.php - Order form page
$network = isset($_GET['network']) ? htmlspecialchars($_GET['network']) : 'unknown';

// Network-specific wallet addresses
$wallets = [
    'solana' => '8xYvJ3n5xZ...YOUR_SOLANA_WALLET...',
    'polygon' => '0x123...YOUR_POLYGON_WALLET...',
    'tron' => 'TQmZ...YOUR_TRON_WALLET...',
    'eth' => '0x456...YOUR_ETH_WALLET...',
    'bep20' => '0x789...YOUR_BEP20_WALLET...',
];

$wallet_address = isset($wallets[$network]) ? $wallets[$network] : 'Wallet address not configured';
$network_name = ucfirst($network);
?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Complete Order - Flasher</title>
    <link rel="shortcut icon" type="image/x-icon" href="https://flasherr.in/user/img/favicon.png">
    <link rel="stylesheet" href="https://flasherr.in/user/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://flasherr.in/user/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://flasherr.in/user/css/default.css">
    <link rel="stylesheet" href="https://flasherr.in/user/css/style.css">
    <link rel="stylesheet" href="https://flasherr.in/user/css/responsive.css">
    <style>
        .order-card { background:#0F101E; border-radius:20px; padding:40px; border:1px solid rgba(255,255,255,0.1); max-width:700px; margin:40px auto; }
        .order-card .title { color:#fff; font-size:28px; margin-bottom:10px; }
        .order-card .subtitle { color:#92939E; margin-bottom:30px; }
        .wallet-box { background:#1a1c2e; border-radius:12px; padding:20px; margin:20px 0; border:1px dashed #DF86AA; }
        .wallet-box .label { color:#92939E; font-size:14px; }
        .wallet-box .address { color:#fff; font-size:18px; word-break:break-all; font-family:monospace; }
        .copy-btn { background:transparent; border:1px solid #DF86AA; color:#DF86AA; padding:6px 16px; border-radius:20px; cursor:pointer; }
        .copy-btn:hover { background:#DF86AA; color:#fff; }
        .form-control-custom { width:100%; background:rgba(255,255,255,0.07); border:1px solid rgba(255,255,255,0.1); border-radius:12px; padding:14px 18px; color:#fff; margin-bottom:16px; }
        .form-control-custom:focus { border-color:#DF86AA; outline:none; box-shadow:0 0 0 3px rgba(223,134,170,0.2); }
        .form-control-custom::placeholder { color:#6a6a7a; }
        .btn-submit { background:linear-gradient(93.17deg, #DF86AA -18.55%, #7E2AFD 163.09%); color:#fff; border:0; padding:14px 40px; border-radius:30px; font-weight:600; width:100%; }
        .btn-submit:hover { opacity:0.9; color:#fff; }
        .back-link { color:#92939E; text-decoration:none; display:inline-block; margin-bottom:20px; }
        .back-link:hover { color:#DF86AA; }
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
                        <div class="logo"><a href="index.html"><img src="https://flasherr.in/user/img/logo/logo.png" style="height:50px;" alt="Logo"></a></div>
                        <div class="navbar-wrap main-menu d-none d-lg-flex">
                            <ul class="navigation">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="index.html#feature">Feature</a></li>
                                <li><a href="index.html#roadMap">RoadMap</a></li>
                            </ul>
                        </div>
                        <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    </nav>
                </div>
            </div></div>
        </div>
    </div>
</header>

<!-- Order Form -->
<div class="container">
    <div class="order-card">
        <a href="category.php" class="back-link"><i class="fas fa-arrow-left"></i> Back to Networks</a>
        <h2 class="title">Complete Your Order</h2>
        <p class="subtitle">Network: <strong style="color:#DF86AA;"><?php echo $network_name; ?></strong></p>

        <!-- Wallet Address Display -->
        <div class="wallet-box">
            <div class="label">Send USDT to this address:</div>
            <div class="address" id="walletAddress"><?php echo $wallet_address; ?></div>
            <button class="copy-btn mt-2" onclick="copyAddress()"><i class="fas fa-copy"></i> Copy</button>
        </div>

        <!-- Order Form -->
        <form action="submit_order.php" method="POST">
            <input type="hidden" name="network" value="<?php echo $network; ?>">
            <input type="hidden" name="wallet" value="<?php echo $wallet_address; ?>">

            <div class="row">
                <div class="col-md-6">
                    <input type="text" class="form-control-custom" name="amount" placeholder="Amount (USDT)" required>
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control-custom" name="transaction_id" placeholder="Transaction ID" required>
                </div>
                <div class="col-12">
                    <input type="email" class="form-control-custom" name="email" placeholder="Your Email Address" required>
                </div>
                <div class="col-12">
                    <input type="text" class="form-control-custom" name="wallet_address" placeholder="Your Wallet Address (to receive Flash USDT)" required>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn-submit">Submit Order</button>
                </div>
            </div>
        </form>

        <div class="mt-4" style="color:#6a6a7a; font-size:13px;">
            <i class="fas fa-info-circle"></i> After payment, our team will send Flash USDT to your wallet within 10-15 minutes.
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="footer-wrapper footer-layout1 position-relative" style="margin-top:60px;">
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

<script src="https://flasherr.in/user/js/vendor/jquery-3.6.0.min.js"></script>
<script src="https://flasherr.in/user/js/bootstrap.min.js"></script>
<script>
function copyAddress() {
    const addr = document.getElementById('walletAddress').textContent;
    navigator.clipboard.writeText(addr).then(() => {
        const btn = document.querySelector('.copy-btn');
        btn.innerHTML = '<i class="fas fa-check"></i> Copied!';
        setTimeout(() => { btn.innerHTML = '<i class="fas fa-copy"></i> Copy'; }, 2000);
    });
}
</script>
</body>
</html>
