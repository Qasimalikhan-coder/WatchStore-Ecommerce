<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Horology - Contact Concierge</title>
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
<section class="py-5 bg-dark text-white">
    <div class="container py-4">
        <div class="row g-5">
            <div class="col-lg-5 animate__animated animate__fadeInLeft">
                <h1 class="display-5 fw-bold text-white mb-3">Enquire With Our Team</h1>
                <p class="text-muted fs-6 mb-5">Have unique bespoke dial customization requirements? Send a message to our secure internal system.</p>
              </div>
            <div class="col-lg-7 animate__animated animate__fadeInRight">
                <div class="card bg-dark-900 border border-secondary p-5 rounded-4">
                    <form action="messenger_send.php" method="POST">
                        <input type="hidden" name="csrf_token" value="example_csrf_secure_token_abc123">
                        <div class="mb-4">
                            <label class="form-label text-muted fs-7">Your Name</label>
                            <input type="text" name="customer_name" class="form-control bg-dark border-secondary text-white rounded-pill px-3" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label text-muted fs-7">Secure Message</label>
                            <textarea name="message" class="form-control bg-dark border-secondary text-white rounded-4 p-3" rows="4" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning btn-lg rounded-pill px-5 py-3 fw-bold tracking-wide"><i class="fa-solid fa-paper-plane me-2"></i> SUBMIT ENQUIRY</button>
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