<?php
session_start();
if (!isset($_SESSION['secure_messenger_db'])) {
    $_SESSION['secure_messenger_db'] = [
        ['name'=>'John Carter','msg'=>'Looking to secure Stealth Onyx Skeleton.','time'=>'10:42'],
        ['name'=>'Sophia Vane','msg'=>'Are your Tourbillon Series COSC certified?','time'=>'11:15']
    ];
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['csrf_token'] !== 'example_csrf_secure_token_abc123') { http_response_code(403); die('Blocked'); }
    $name = htmlspecialchars(trim($_POST['customer_name'] ?? 'Guest'), ENT_QUOTES, 'UTF-8');
    $msg = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');
    $_SESSION['secure_messenger_db'][] = ['name'=>$name, 'msg'=>$msg, 'time'=>date('h:i A')];
    echo '<html><head><title>Dispatched - Horology</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"><link rel="stylesheet" href="style.css"></head><body class="bg-dark text-white d-flex align-items-center min-vh-100"><div class="container text-center"><div class="card bg-dark-900 border-success p-5 rounded-4 mx-auto shadow-lg" style="max-width: 450px;"><i class="fa-solid fa-paper-plane text-warning display-2 mb-4"></i><h2 class="text-white fw-bold mb-3">Enquiry Transmitted</h2><p class="text-warning fw-semibold mt-3">Ticket Ref: HR-'. rand(1000,9999) . '</p><a href="index.php" class="btn btn-warning rounded-pill px-4 mt-4">Return Home</a></div></div></body></html>';
    exit();
}
header('Location: index.php');