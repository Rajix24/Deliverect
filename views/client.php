<?php
    require_once '../vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Deliverect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../Assit/style.css">
    <style>

    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">DELIVERECT</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#homeNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="homeNav">
                <div class="mx-auto my-2 my-lg-0 w-50">
                    <div class="input-group search-bar border">
                        <span class="input-group-text bg-transparent border-0"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control border-0" placeholder="Track a package or search services...">
                    </div>
                </div>
                
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link position-relative" href="#">
                            <i class="bi bi-bell fs-5"></i>
                            <span class="position-absolute top-1 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="userDrop" data-bs-toggle="dropdown">
                            <img src="https://ui-avatars.com/api/?name=User&background=2b3fd4&color=fff" class="rounded-circle me-2" width="35" alt="Profile">
                            <span>My Account</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end shadow border-0">
                            <li><a class="dropdown-item" href="#"><i class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="#"><i class="bi bi-gear me-2"></i>Settings</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item text-danger" href="../../index.html"><i class="bi bi-box-arrow-right me-2"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="container py-4">
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="fw-bold">Welcome back, User! 👋</h2>
                <p class="text-muted">Here is what's happening with your deliveries today.</p>
            </div>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="card stat-card shadow-sm p-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-box-seam text-primary fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Active Orders</h6>
                            <h3 class="fw-bold mb-0">04</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card shadow-sm p-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-success bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-check-circle text-success fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Completed</h6>
                            <h3 class="fw-bold mb-0">128</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card stat-card shadow-sm p-3">
                    <div class="d-flex align-items-center">
                        <div class="bg-warning bg-opacity-10 p-3 rounded-3 me-3">
                            <i class="bi bi-wallet2 text-warning fs-3"></i>
                        </div>
                        <div>
                            <h6 class="text-muted mb-0">Balance</h6>
                            <h3 class="fw-bold mb-0">$42.50</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8">
                <div class="card border-0 shadow-sm rounded-4">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h5 class="fw-bold mb-0">Recent Deliveries</h5>
                            <button class="btn btn-sm btn-outline-primary">View All</button>
                        </div>
                        <div class="table-responsive">
                            <table class="table align-middle">
                                <thead class="text-muted small uppercase">
                                    <tr>
                                        <th>Order ID</th>
                                        <th>Destination</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><strong>#DLV-8821</strong></td>
                                        <td>Rue de Paris, Casablanca</td>
                                        <td>Dec 28, 2023</td>
                                        <td><span class="bg-info bg-opacity-10 text-info order-status fw-bold"><a href="MyOrder.php">View</a></span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#DLV-8740</strong></td>
                                        <td>Hay Riad, Rabat</td>
                                        <td>Dec 27, 2023</td>
                                        <td><span class="bg-success bg-opacity-10 text-success order-status fw-bold">Delivered</span></td>
                                    </tr>
                                    <tr>
                                        <td><strong>#DLV-8611</strong></td>
                                        <td>Gueliz, Marrakech</td>
                                        <td>Dec 26, 2023</td>
                                        <td><span class="bg-danger bg-opacity-10 text-danger order-status fw-bold">Cancelled</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="card border-0 shadow-sm rounded-4 bg-primary text-white p-2">
                    <div class="card-body">
                        <h5>Need a delivery?</h5>
                        <p class="small opacity-75">Send documents, packages, or food anywhere in the city instantly.</p>
                        <a href="./CreateDomand.php" class="btn btn-light w-100 fw-bold py-2 mt-2">
                            <i class="bi bi-plus-circle me-2"></i>New Delivery
                        </a>
                    </div>
                </div>
                
                <div class="card border-0 shadow-sm rounded-4 mt-4 p-2">
                    <div class="card-body">
                        <h6 class="fw-bold">Support</h6>
                        <p class="small text-muted">Need help with an order?</p>
                        <a href="#" class="btn btn-outline-secondary btn-sm w-100">Contact Support</a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>