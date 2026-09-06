<?php
// submit_order.php - Process order form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $network = $_POST['network'] ?? 'unknown';
    $amount = $_POST['amount'] ?? '';
    $transaction_id = $_POST['transaction_id'] ?? '';
    $email = $_POST['email'] ?? '';
    $wallet_address = $_POST['wallet_address'] ?? '';
    
    // Save to database or send email notification
    // For now, just show a success message
    
    echo "<!doctype html><html><head><title>Order Submitted</title>";
    echo "<link rel='stylesheet' href='https://flasherr.in/user/css/bootstrap.min.css'>";
    echo "<style>body{background:#010314;color:#fff;display:flex;align-items:center;justify-content:center;height:100vh;text-align:center;}</style>";
    echo "</head><body>";
    echo "<div><h2 style='color:#DF86AA;'>✅ Order Submitted!</h2>";
    echo "<p>Network: <strong>$network</strong></p>";
    echo "<p>Amount: <strong>$amount USDT</strong></p>";
    echo "<p>Transaction ID: <strong>$transaction_id</strong></p>";
    echo "<p>We'll verify your payment and send Flash USDT within 10-15 minutes.</p>";
    echo "<a href='category.php' class='btn btn-primary' style='margin-top:20px;'>Back to Categories</a>";
    echo "</div></body></html>";
    exit;
}
?>
