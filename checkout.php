<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horology - Secure Checkout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark-900 sticky-top py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-clock-rotate-left me-2 text-warning fs-3"></i><span class="fw-bold text-uppercase tracking-wider">Horology</span></a>
    </div>
</nav>
<section class="py-5 bg-dark text-white">
    <div class="container py-4">
        <div class="text-center mb-5">
            <h1 class="fw-bold"><i class="fa-solid fa-shield-halved text-warning me-2"></i> Secure Payment Gateway</h1>
            <p class="text-muted">Encrypted via TLS/SSL 256-bit algorithms for maximum data protection.</p>
        </div>
        <div class="row g-5 justify-content-center">
            <div class="col-lg-7">
                <div class="card bg-dark-900 border border-secondary p-5 rounded-4">
                    <form action="process_checkout.php" method="POST">
                        <input type="hidden" name="csrf_token" value="abc123csrf_token_secured">
                        <h4 class="text-white fw-bold mb-4">1. Shipping Particulars</h4>
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label class="form-label text-muted fs-7">Full Name</label>
                                <input type="text" name="fullName" class="form-control bg-dark border-secondary text-white rounded-pill px-3" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted fs-7">Secure Email</label>
                                <input type="email" name="email" class="form-control bg-dark border-secondary text-white rounded-pill px-3" required>
                            </div>
                        </div>
                        <h4 class="text-white fw-bold mb-4">2. Credit Card details</h4>
                        <div class="row g-3">
                            <div class="col-12">
                                <label class="form-label text-muted fs-7">Card Number</label>
                                <input type="text" class="form-control bg-dark border-secondary text-white rounded-pill px-3" placeholder="• • • • • • • • •" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted fs-7">Expiry Date</label>
                                <input type="text" class="form-control bg-dark border-secondary text-white rounded-pill px-3" placeholder="MM/YY" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label text-muted fs-7">CVV</label>
                                <input type="password" class="form-control bg-dark border-secondary text-white rounded-pill px-3" placeholder="•••" maxlength="4" required>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-warning btn-lg w-100 rounded-pill py-3 fw-bold tracking-wide mt-5"><i class="fa-solid fa-lock me-2"></i> AUTHORIZE SECURE PAYMENT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<footer class="bg-dark-900 text-light pt-5 pb-3 text-center border-top border-secondary">
    <p class="text-muted mb-0 fs-8">&copy; 2026 Horology Inc.</p>
</footer>
</body>
</html>