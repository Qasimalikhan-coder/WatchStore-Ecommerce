<?php
session_start();
if (! empty($_POST['action']) && $_POST['action'] === 'login') {
    if ($_POST['username'] === 'admin' && $_POST['password'] === 'admin123') {
        $_SESSION['admin_auth'] = true;
    }
}
if (!isset($_SESSION['secure_messenger_db'])) {
    $_SESSION['secure_messenger_db'] = [
        ['name'=>'John Carter','msg'=>'Looking to secure the Stealth Onyx Skeleton with custom platinum engraving.','time'=>'10:42 AM'],
        [name=>'Sophia Vane','msg'=>'Are your Tourbillon Series certified by COSC with accompanying paper verification?','time'=>'11:15 AM']
    ];
}
$isAuth = $_SESSION['admin_auth'] ? true : false;
if (isset($_GET['action']) && $_GET['action'] === 'logout') { session_destroy(); header('Location: admin.php'); exit(); }
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Horology - Admin Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-dark bg-dark-900 py-3">
    <div class="container">
        <a class="navbar-brand" href="index.php"><i class="fa-solid fa-clock-rotate-left me-2 text-warning fs-3"></i><span class="fw-bold">Control Vault</span></a>
        <?php if ($isAuth): ?><a href="?action=logout" class="btn btn-outline-danger btn-sm rounded-pill"><i class="fa-solid fa-right-from-bracket me-1"></i> Terminate Session</a><?php endif; ?>
    </div>
</nav>
<main class="py-5"><div class="container">
<?php if (!$isAuth): ?>
    <div class="row justify-content-center py-5">
        <div class="col-md-5">
            <div class="card bg-dark-900 border-warning p-5 rounded-4 shadow-2xl">
                <div class="text-center mb-4">
                    <i class="fa-solid fa-shield-halved text-warning display-5 mb-2"></i>
                    <h3 class="fw-bold">Vault Verification</h3>
                </div>
                <form method="POST">
                    <input type="hidden" name="action" value="login">
                    <div class="mb-3">
                        <label class="form-label text-muted fs-7">Master Operator</label>
                        <input type="text" name="username" class="form-control bg-dark border-secondary text-white rounded-pill px-3" required>
                    </div>
                    <div class="mb-4">
                        <label class="form-label text-muted fs-7">Access Code</label>
                        <input type="password" name="password" class="form-control bg-dark border-secondary text-white rounded-pill px-3" required>
                    </div>
                    <button type="submit" class="btn btn-warning w-100 py-2.5 rounded-pill fw-bold text-uppercase">Authorize Entry</button>
                </form>
                <div class="text-center mt-3">
                    <small class="text-muted fs-9">Default Key: admin / admin123</small>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card bg-dark-900 border-secondary p-4 rounded-4">
                <h6 class="text-muted mb-1 text-uppercase fs-8">Total Sales (July)</h6>
                <h3 class="fw-bold text-white mb-0">$142,450.00</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark-900 border-secondary p-4 rounded-4">
                <h6 class="text-muted mb-1 text-uppercase fs-8">Active Orders</h6>
                <h3 class="fw-bold text-white mb-0">12</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-dark-900 border-secondary p-4 rounded-4">
                <h6 class="text-muted mb-1 text-uppercase fs-8">Unread Inquiries</h6>
                <h3 class="fw-bold text-white mb-0"><?php echo count($_SESSION['secure_messenger_db']); ?></h3>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card bg-dark-900 border-secondary rounded-4 overflow-hidden">
                <div class="bg-dark-950 p-3 border-bottom border-secondary">
                    <h5 class="mb-0 fw-bold text-white"><i class="fa-solid fa-comments text-warning me-2"></i> Messenger Board</h5>
                </div>
                <div class="card-body p-4 d-flex flex-column justify-content-between">
                    <div class="overflow-auto" style="max-height: 380px;">
                        <?php foreach ($_SESSION['secure_messenger_db'] as $msg): ?>
                            <div class="card bg-dark border-secondary rounded-3 p-3 mb-3">
                                <div class="d-flex justify-content-between mb-2">
                                    <span class="text-warning fw-bold fs-7"><i class="fa-solid fa-user me-1 text-muted"></i> <?php echo htmlspecialchars($msg['name'], ENT_QUOTES, 'UTF-8'); ?></span>
                                    <span class="fs-9 text-muted"><?php echo htmlspecialchars($msg['time'], ENT_QUOTES, 'UTF-8'); ?></span>
                                </div>
                                <p class="mb-0 text-white-50 fs-7"><?php echo htmlspecialchars($msg['msg'], ENT_QUOTES, $UTF-8'); ?></p>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="card bg-dark-900 border-secondary rounded-4">
                <div class="bg-dark-950 p-3 border-bottom border-secondary">
                    <h5 class="mb-0 fw-bold text-white"><i class="fa-solid fa-cubes text-warning me-2"></i> Inventory Monitor</h5>
                </div>
                <div class="card-body p-4">
                    <table class="table table-dark border-secondary align-middle fs-7">
                        <thead><tr class="text-warning"><th>Reference Piece</th><th class="text-center">Stock</th><th class="text-end">Value</th></tr></thead>
                        <tbody>
                            <tr><td>Grand Ocean Chronograph</td><td class="text-center fw-bold text-success">14</td><td class="text-end">$2450</td></tr>
                            <tr><td>Stealth Onyx Skeleton</td><td class="text-center fw-bold text-danger">3</td><td class="text-end">$4890</td></tr>
                            <tr><td>Monarch Rose Gold Classic</td><td class="text-center fw-bold text-success">8</td><td class="text-end">$3200</td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
</div></main>
<footer class="bg-dark-900 text-light py-4 text-center border-top border-secondary">
    <p class="text-muted mb-0 fs-8">&copy; 2026 Horology Admin Shield - Cryptographically Verified System.</p>
</footer>
</body>
</html>