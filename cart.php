<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horology - Your Shopping Bag</title>
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
        <h1 class="display-6 fw-bold mb-5"><i class="fa-solid fa-bag-shopping text-warning me-2"></i> Your Shopping Bag</h1>
        <div class="row g-5">
            <div class="col-lg-8">
                <table class="table table-dark table-hover border-secondary align-middle">
                    <thead>
                        <tr class="text-uppercase text-warning fs-8 tracking-wider border-bottom border-secondary">
                            <th>Timepiece Details</th><th class="text-center">Quantity</th><th class="text-end">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="d-flex align-items-center gap-3"><img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3?auto=format&fit=crop&q=80&w=120" width="70" class="rounded-3 border border-secondary" alt="Watch"><div><h6 class="mb-1 text-white fw-bold">Stealth Onyx Skeleton</h6></div></div></td>
                            <td class="text-center fw-bold">1</td>
                            <td class="text-end text-warning fw-bold">$4,890.00</td>
                        </tr>
                        <tr>
                            <td><div class="d-flex align-items-center gap-3"><img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&q=80&w=120" width="70" class="rounded-3 border border-secondary" alt="Watch"><div><h6 class="mb-1 text-white fw-bold">Grand Ocean Chronograph</h6></div></div></td>
                            <td class="text-center fw-bold">1</td>
                            <td class="text-end text-warning fw-bold">$2,450.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <div class="card bg-dark-900 border border-secondary rounded-4 p-4">
                    <h4 class="text-white fw-bold mb-4">Summary</h4>
                    <div class="d-flex justify-content-between mb-3 text-muted"><span>Subtotal</span><span>$7,340.00</span></div>
                    <hr class="border-secondary my-4">
                    <div class="d-flex justify-content-between mb-4 fs-5 fw-bold"><span>Total Due</span><span class="text-warning">$7,340.00</span></div>
                    <a href="checkout.php" class="btn btn-warning btn-lg w-100 rounded-pill py-3 fw-bold"><i class="fa-solid fa-shield-halved me-2"></i> SECURE CHECKOUT</a>
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