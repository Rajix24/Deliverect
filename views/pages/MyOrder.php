<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Orders - Deliverect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Assit/style.css">
    <style>
        body { background-color: #f4f7f6; }
        .navbar-brand { font-weight: 800; color: #2b3fd4 !important; }
        .order-card {
            border: none;
            border-radius: 15px;
            transition: transform 0.2s;
        }
        .order-card:hover { transform: scale(1.01); }
        .status-badge {
            font-size: 0.75rem;
            padding: 6px 12px;
            border-radius: 20px;
            font-weight: 600;
        }
        .product-img-placeholder {
            width: 60px;
            height: 60px;
            background: #e9ecef;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="home.html">DELIVERECT</a>
            <div class="ms-auto">
                <a href="CreateDomand.php" class="btn btn-primary btn-sm rounded-pill px-3">+ New Order</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row mb-4">
            <div class="col-md-8">
                <h2 class="fw-bold">My Commands</h2>
                <p class="text-muted">Manage and track all your delivery requests.</p>
            </div>
        </div>

        <div class="row g-3">
            
            <div class="col-12">
                <div class="card order-card shadow-sm p-3">
                    <div class="row align-items-center">
                        <div class="col-md-1 col-3">
                            <div class="product-img-placeholder text-primary">
                                <i class="bi bi-box-seam fs-3"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-9">
                            <h6 class="fw-bold mb-1">iPhone 15 Pro Max</h6>
                            <p class="small text-muted mb-0 text-truncate">Special Instructions: "Handle with care, call on arrival."</p>
                            <span class="text-xs text-muted" style="font-size: 0.7rem;">ID: #DLV-9901</span>
                        </div>
                        <div class="col-md-3 col-6 mt-3 mt-md-0">
                            <div class="small fw-bold text-uppercase text-muted" style="font-size: 0.65rem;">Destination</div>
                            <div class="small text-dark">Hay Riad, Rabat</div>
                        </div>
                        <div class="col-md-2 col-6 mt-3 mt-md-0">
                            <div class="small fw-bold text-uppercase text-muted" style="font-size: 0.65rem;">Price</div>
                            <div class="fw-bold text-primary">$15.00</div>
                        </div>
                        <div class="col-md-2 col-12 mt-3 mt-md-0 text-md-end">
                            <span class="status-badge bg-info bg-opacity-10 text-info border border-info">In Transit</span>
                            <a href="order-details.html" class="btn btn-sm btn-light ms-2"><i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12">
                <div class="card order-card shadow-sm p-3">
                    <div class="row align-items-center">
                        <div class="col-md-1 col-3">
                            <div class="product-img-placeholder text-success">
                                <i class="bi bi-file-earmark-text fs-3"></i>
                            </div>
                        </div>
                        <div class="col-md-4 col-9">
                            <h6 class="fw-bold mb-1">Legal Documents</h6>
                            <p class="small text-muted mb-0 text-truncate">Description: Urgent papers for signature.</p>
                            <span class="text-xs text-muted" style="font-size: 0.7rem;">ID: #DLV-8842</span>
                        </div>
                        <div class="col-md-3 col-6 mt-3 mt-md-0">
                            <div class="small fw-bold text-uppercase text-muted" style="font-size: 0.65rem;">Destination</div>
                            <div class="small text-dark">Gueliz, Marrakech</div>
                        </div>
                        <div class="col-md-2 col-6 mt-3 mt-md-0">
                            <div class="small fw-bold text-uppercase text-muted" style="font-size: 0.65rem;">Price</div>
                            <div class="fw-bold text-primary">$8.50</div>
                        </div>
                        <div class="col-md-2 col-12 mt-3 mt-md-0 text-md-end">
                            <span class="status-badge bg-success bg-opacity-10 text-success border border-success">Completed</span>
                            <a href="#" class="btn btn-sm btn-light ms-2"><i class="bi bi-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>