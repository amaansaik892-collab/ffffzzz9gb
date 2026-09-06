<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Order Submitted - Flasher</title>
    <link rel="stylesheet" href="user/css/bootstrap.min.css">
    <link rel="stylesheet" href="user/css/fontawesome-all.min.css">
    <style>
        body{background:#010314;color:#fff;display:flex;align-items:center;justify-content:center;min-height:100vh;text-align:center;padding:20px;font-family:'Outfit',sans-serif;}
        .success-box{background:#0F101E;border-radius:20px;padding:50px;border:1px solid rgba(255,255,255,0.1);max-width:650px;width:100%;}
        .success-box h2{color:#DF86AA;margin-bottom:20px;font-family:'Plus Jakarta Sans',sans-serif;}
        .success-box .detail{color:#92939E;margin:8px 0;font-size:16px;}
        .success-box .highlight{color:#fff;font-weight:600;}
        .btn-network { display:inline-block;margin-top:25px;background:linear-gradient(93.17deg, #DF86AA -18.55%, #7E2AFD 163.09%);color:#fff;border:0;padding:12px 30px;border-radius:30px;font-weight:600;text-decoration:none;transition:0.3s; }
        .btn-network:hover { opacity:0.9;color:#fff;transform:scale(1.02); }
        .check-icon { font-size:60px;color:#4CAF50;margin-bottom:20px; }
        .order-details { text-align:left; background:#1a1c2e; border-radius:12px; padding:20px; margin:20px 0; }
        .order-details .row-detail { display:flex; justify-content:space-between; padding:8px 0; border-bottom:1px solid rgba(255,255,255,0.05); }
        .order-details .row-detail:last-child { border-bottom:none; }
        .order-details .label { color:#92939E; }
        .order-details .value { color:#fff; word-break:break-all; }
        .order-details .value.flash-amount { color:#DF86AA; font-size:20px; font-weight:700; }
        .order-details .value.total-price { color:#4CAF50; font-size:18px; font-weight:700; }
        .status-badge { display:inline-block; background:rgba(255,193,7,0.15); color:#FFC107; padding:6px 16px; border-radius:30px; font-size:14px; margin-top:10px; }
        @media(max-width:575px){ .success-box{ padding:30px 20px; } }
    </style>
</head>
<body>
    <div class="success-box" id="successBox">
        <div class="check-icon">✅</div>
        <h2>Order Submitted Successfully!</h2>
        <p style="color:#92939E;margin-bottom:20px;">Your order has been received. We'll verify your payment shortly.</p>

        <div class="status-badge">
            <i class="fas fa-clock" style="margin-right:8px;"></i> Awaiting Payment Verification
        </div>

        <div class="order-details" id="orderDetails">
            <!-- Will be filled by JavaScript -->
        </div>

        <div style="background:rgba(223,134,170,0.08);border-radius:10px;padding:15px;margin:15px 0;border:1px solid rgba(223,134,170,0.15);text-align:left;">
            <p style="color:#92939E;font-size:14px;margin:0;">
                <i class="fas fa-clock" style="color:#DF86AA;margin-right:8px;"></i>
                <strong style="color:#fff;">Next Steps:</strong>
            </p>
            <ol style="color:#92939E;font-size:13px;padding-left:20px;margin:8px 0 0;">
                <li style="margin-bottom:4px;">We'll verify your transaction hash</li>
                <li style="margin-bottom:4px;">Once confirmed, Flash USDT will be sent to your wallet</li>
                <li style="margin-bottom:4px;">You'll receive a confirmation email</li>
                <li>Delivery time: <strong style="color:#fff;">10-15 minutes</strong></li>
            </ol>
        </div>

        <p style="color:#92939E;margin-top:15px;font-size:14px;">
            <i class="fas fa-envelope" style="margin-right:8px;"></i>
            A confirmation email has been sent to your address.
        </p>

        <a href="category.html" class="btn-network">
            <i class="fas fa-arrow-left" style="margin-right:8px;"></i> Back to Categories
        </a>
        <br>
        <a href="index.html" style="color:#92939E;font-size:14px;display:inline-block;margin-top:15px;text-decoration:none;">
            <i class="fas fa-home"></i> Go to Home
        </a>
    </div>

    <script>
        // Get data from URL parameters
        const params = new URLSearchParams(window.location.search);

        const network = params.get('network') || 'N/A';
        const flashAmount = params.get('flash_amount') || '0';
        const totalPrice = params.get('total_price') || '0.00';
        const transactionHash = params.get('transaction_hash') || 'N/A';
        const email = params.get('email') || 'N/A';
        const receiveWallet = params.get('receive_wallet') || 'N/A';

        // Network names mapping
        const networkNames = {
            'solana': 'Solana',
            'polygon': 'POL (Polygon)',
            'tron': 'TRON (TRC20)',
            'eth': 'ETH (ERC20)',
            'bep20': 'BINANCE (BEP20)'
        };
        const displayNetwork = networkNames[network] || network;

        // Format number with commas
        function formatNumber(num) {
            return parseInt(num).toLocaleString();
        }

        // Build order details HTML
        const detailsHTML = `
            <div class="row-detail">
                <span class="label">Network</span>
                <span class="value">${displayNetwork}</span>
            </div>
            <div class="row-detail">
                <span class="label">Flash USDT Amount</span>
                <span class="value flash-amount">${formatNumber(flashAmount)} FLASH</span>
            </div>
            <div class="row-detail">
                <span class="label">Total Payment</span>
                <span class="value total-price">$${totalPrice}</span>
            </div>
            <div class="row-detail">
                <span class="label">Transaction Hash</span>
                <span class="value" style="font-family:monospace;font-size:13px;word-break:break-all;">${transactionHash}</span>
            </div>
            <div class="row-detail">
                <span class="label">Email</span>
                <span class="value">${email}</span>
            </div>
            <div class="row-detail">
                <span class="label">Receive Wallet</span>
                <span class="value" style="font-family:monospace;font-size:13px;word-break:break-all;">${receiveWallet}</span>
            </div>
        `;

        document.getElementById('orderDetails').innerHTML = detailsHTML;

        // If no data was passed, show a message
        if (network === 'N/A' || flashAmount === '0') {
            document.querySelector('.order-details').innerHTML = `
                <p style="color:#92939E;text-align:center;margin:0;">No order data received.</p>
                <p style="color:#92939E;text-align:center;font-size:14px;margin-top:10px;">Please submit your order from the payment page.</p>
            `;
            document.querySelector('.status-badge').style.display = 'none';
        }
    </script>
</body>
</html>
