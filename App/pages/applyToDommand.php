<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livreur Dashboard - Deliverect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f0f2f5; }
        .navbar-brand { font-weight: 800; color: #2b3fd4 !important; }
        .command-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
        }
        .command-card:hover {
            box-shadow: 0 8px 25px rgba(0,0,0,0.1) !important;
        }
        .payout-badge {
            background-color: #198754;
            color: white;
            font-size: 1.2rem;
            font-weight: 700;
            padding: 10px 15px;
            border-radius: 10px;
        }
        .description-text {
            background-color: #fff9db;
            border-left: 4px solid #fcc419;
            padding: 10px;
            font-size: 0.9rem;
            border-radius: 5px;
        }
        .route-line {
            position: relative;
            padding-left: 30px;
        }
        .route-line::before {
            content: '';
            position: absolute;
            left: 10px;
            top: 5px;
            bottom: 5px;
            width: 2px;
            border-left: 2px dashed #adb5bd;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand text-white" href="#">DELIVERECT <span class="badge bg-success small" style="font-size: 0.6rem;">LIVREUR</span></a>
            <div class="d-flex align-items-center">
                <div class="form-check form-switch text-white me-3">
                    <input class="form-check-input" type="checkbox" id="onlineStatus" checked>
                    <label class="form-check-label small" for="onlineStatus">Online</label>
                </div>
                <img src="https://ui-avatars.com/api/?name=Driver&background=198754&color=fff" class="rounded-circle" width="35">
            </div>
        </div>
    </nav>

    <div class="container py-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Available Commands (3)</h4>
            <button class="btn btn-outline-dark btn-sm"><i class="bi bi-filter"></i> Nearby</button>
        </div>

        <div class="row g-4">
            
            <div class="col-12">
                <div class="card command-card shadow-sm">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="route-line">
                                    <div class="mb-3">
                                        <i class="bi bi-circle-fill text-success position-absolute" style="left: 6px; font-size: 10px;"></i>
                                        <span class="text-muted small d-block">PICKUP</span>
                                        <h6 class="mb-0 fw-bold">Store #402, Casablanca Mall</h6>
                                    </div>
                                    <div>
                                        <i class="bi bi-geo-alt-fill text-danger position-absolute" style="left: 4px;"></i>
                                        <span class="text-muted small d-block">DROP-OFF (4.2 km away)</span>
                                        <h6 class="mb-0 fw-bold">Apartment 12, Rue 77, Maarif</h6>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 mt-3 mt-lg-0">
                                <span class="label-small fw-bold text-muted small uppercase">CLIENT DESCRIPTION:</span>
                                <div class="description-text mt-1">
                                    <i class="bi bi-info-circle-fill me-1"></i>
                                    "I am sending a large box of groceries. Please handle carefully, there are glass jars inside. Pickup code is 5566."
                                </div>
                            </div>

                            <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <span class="text-muted small d-block">YOUR EARNING</span>
                                    <span class="payout-badge">$12.00</span>
                                </div>
                                <button class="btn btn-primary w-100 py-2 fw-bold shadow" onclick="this.innerHTML='Accepted!'; this.className='btn btn-success w-100 py-2';">
                                    Apply to Command
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card command-card shadow-sm">
                    <div class="card-body p-4">
                        <div class="row align-items-center">
                            <div class="col-lg-5">
                                <div class="route-line">
                                    <div class="mb-3">
                                        <i class="bi bi-circle-fill text-success position-absolute" style="left: 6px; font-size: 10px;"></i>
                                        <span class="text-muted small d-block">PICKUP</span>
                                        <h6 class="mb-0 fw-bold">Office Tower A, Level 4</h6>
                                    </div>
                                    <div>
                                        <i class="bi bi-geo-alt-fill text-danger position-absolute" style="left: 4px;"></i>
                                        <span class="text-muted small d-block">DROP-OFF (1.5 km away)</span>
                                        <h6 class="mb-0 fw-bold">Bmce Bank Agency, Gauthier</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 mt-3 mt-lg-0">
                                <span class="label-small fw-bold text-muted small uppercase">CLIENT DESCRIPTION:</span>
                                <div class="description-text mt-1">
                                    <i class="bi bi-file-earmark-lock-fill me-1"></i>
                                    "Urgent legal documents. Keep them flat in a waterproof bag. Deliver to the receptionist."
                                </div>
                            </div>
                            <div class="col-lg-3 text-lg-end mt-3 mt-lg-0">
                                <div class="mb-3">
                                    <span class="text-muted small d-block">YOUR EARNING</span>
                                    <span class="payout-badge">$6.50</span>
                                </div>
                                <button class="btn btn-primary w-100 py-2 fw-bold shadow">
                                    Apply to Command
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>