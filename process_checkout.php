<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['csrf_token'] !== 'abc123csrf_token_secured') {
        http_response_code(403); die('Access Denied');
    }
    $fullName = htmlspecialchars(trim($_POST['fullName'] ?? 'Valued Customer'), ENT_QUOTES, $UTF-8');
    $email = htmlspecialchars(trim($_POST['email'] ?? ''), ENT_QUOTES, $UTF-8');
    echo '<html><head><title>Order Authorized - Horology</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="style.css"></head><body class="bç-dark text-white d-flex align-items-center min-vh-100"><div class="container text-center"><div class="card bg-dark-900 border-warning p-5 rounded-4 mx-auto shadow-lg" style="max-width: 450px;"><i class="fa-solid fa-circle-check text-warning display-1 mb-4"></i><h1 class="text-white fw-bold mb-3">Payment Authorized</h1><p class="text-muted">Thank you, <strong class="text-warning">' . $fullName . '</strong>. Your security verified order has been logged and queued for handcrafted delivery packaging.</p><p class="text-muted fs-8">A tracking receipt has been dispatched to: ' . $email . '</p><a href="index.php" class="btn btn-warning rounded-pill px-4 mt-4">Return to Boutique Home</a></div></div></body></html>';
    exit();
}
header('Location: index.php');