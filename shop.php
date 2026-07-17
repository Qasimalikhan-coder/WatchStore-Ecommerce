<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horology - Curated Boutique</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark-900 sticky-top py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-clock-rotate-left me-2 text-warning fs-3"></i><span class="fw-bold text-uppercase tracking-wider">Horology</span></a>
    </div>
</nav>
<section class="py-5 bg-dark-950 text-center">
    <div class="container py-4 animate__animated animate__fadeIn">
        <h1 class="display-4 fw-extrabold text-uppercase text-white">The Luxury Collection</h1>
        <p class="lead text-muted">Discover masterfully assembled mechanics.</p>
    </div>
</section>
<section class="py-5 bg-dark">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card watch-card border-0 rounded-4 bg-dark-900 overflow-hidden h-100 shadow-lg">
                    <div class="position-relative overflow-hidden">
                        <span class="badge bg-danger position-absolute top-0 start-0 m-3 z-3">Bestseller</span>
                        <img src="https://images.unsplash.com/photo-1524592094714-0f0654e20314?auto=format&fit=crop&q=80&w=600" class="card-img-top watch-img img-fluid" alt="Watch">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="text-white fw-bold">Grand Ocean Chronograph</h4>
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top border-secondary">
                            <span class="text-warning fw-bold fs-4">$2,450.00</span>
                            <button class="btn btn-outline-warning btn-sm rounded-pill px-3" onclick="addToCart(1,'Grand Ocean Chronograph',2450.00)">Add to Bag</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card watch-card border-0 rounded-4 bg-dark-900 overflow-hidden h-100 shadow-lg">
                    <div class="position-relative overflow-hidden">
                        <span class="badge bg-warning text-dark position-absolute top-0 start-0 m-3 z-3">Limited Edition</span>
                        <img src="https://images.unsplash.com/photo-1522312346375-d1a52e2b99b3?auto=format&fit=crop&q=80&w=600" class="card-img-top watch-img img-fluid" alt="Watch">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="text-white fw-bold">Stealth Onyx Skeleton</h4>
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top border-secondary">
                            <span class="text-warning fw-bold fs-4">$4,890.00</span>
                            <button class="btn btn-outline-warning btn-sm rounded-pill px-3" onclick="addToCart(2,'Stealth Onyx Skeleton',4890.00)">Add to Bag</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card watch-card border-0 rounded-4 bg-dark-900 overflow-hidden h-100 shadow-lg">
                    <div class="position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1542496658-e33a6d0d50f6?auto=format&fit=crop&q=80&w=600" class="card-img-top watch-img img-fluid" alt="Watch">
                    </div>
                    <div class="card-body p-4 text-center">
                        <h4 class="text-white fw-bold">Monarch Rose Gold Classic</h4>
                        <div class="d-flex justify-content-between align-items-center mt-4 pt-3 border-top border-secondary">
                            <span class="text-warning fw-bold fs-4">$3,200.00</span>
                            <button class="btn btn-outline-warning btn-sm rounded-pill px-3" onclick="addToCart(3,'Monarch Rose Gold Classic',3200.00)">Add to Bag</button>
                        </div>
                    </div>
                </div>
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