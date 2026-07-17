<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horology - Elite Watch Spec</title>
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
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3?auto=format&fit=crop&q=80&w=800" class="img-fluid rounded-4 shadow-2xl border border-secondary" alt="Elite Watch Details">
            </div>
            <div class="col-lg-6">
                <span class="badge bg-warning text-dark fw-bold mb-3 px-3 py-2 text-uppercase">Exclusive Piece</span>
                <h1 class="display-5 fw-bold text-white mb-3">Stealth Onyx Skeleton</h1>
                <h3 class="text-warning fw-bold mb-4">$4,890.00</h3>
                <p class="text-muted fs-6 mb-4">Masterfully engineered watch constructed with micro-blasted pure carbon fiber composites. The face offers a completely skeletonized transparent display of the in-house Caliber-9 manual tourbillon engine system.</p>
                <div class="border-top border-bottom border-secondary py-3 my-4">
                    <div class="row text-center g-2">
                        <div class="col-4"><span class="d-block text-warning fw-bold fs-5">42mm</span>><small class="text-muted">Case Size</small></div>
                        <div class="col-4 border-start border-end border-secondary"><span class="d-block text-warning fw-bold fs-5">100m</span><small class="text-muted">Waterproof</small></div>
                        <div class="col-4"><span class="d-block text-warning fw-bold fs-5">72hr</span><small class="text-muted">Power Reserve</small></div>
                    </div>
                </div>
                <button class="btn btn-warning btn-lg rounded-pill w-100 py-3 fw-bold tracking-wider" onclick="addToCart(2,'Stealth Onyx Skeleton',4890.00)"><i class="fa-solid fa-bag-shopping me-2"></i> ADD TO SHOPPING BAG</button>
            </div>
        </div>
    </div>
</section>
<footer class="bg-dark-900 text-light pt-5 pb-3 text-center border-top border-secondary">
    <p class="text-muted mb-0 fs-8">&copy; 2026 Horology Inc.</p>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="app.js"></script>
</body>
</html>