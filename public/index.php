<?php
include '../vendor/autoload.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickDeliver - Expert Livraison</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./App/Assit/style.css">
    <style>
        .hero-section {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('https://images.unsplash.com/photo-1586864387917-f579ae5259fb?auto=format&fit=crop&q=80&w=1470&ixlib=rb-4.0.3');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
        }

        .feature-icon {
            font-size: 2.5rem;
            color: #0d6efd;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold text-primary" href="#">Deliverect</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#features">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#how-it-works">How it works</a></li>
                    <li class="nav-item"><a class="btn btn-outline-primary ms-lg-3"
                            href="../view/login.php">Login</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-2" href="../views/signIn.html">Get Started</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <header class="hero-section text-center "> -->
        <div class="bg-img">
            <div class="container ">
                <h1 class="display-3 fw-bold text1 mb-4">Fastest Delivery in Your City</h1>
                <p class="lead mb-5 text1">From groceries to documents, we deliver everything safely and on time.</p>
                <div class="d-flex justify-content-center gap-3">
                    <a href="../view/login.php" class="btn btn-primary btn-lg px-4">Log In</a>
                    <a href="#how-it-works" class="btn btn-light btn-lg px-4">Learn More</a>
                </div>
            </div>
        </div>
    <!-- </header> -->

    <section id="features" class="py-5">
        <div class="container text-center">
            <h2 class="fw-bold mb-5">Why Choose Our Delivery?</h2>
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="p-4 border rounded-3 bg-light h-100">
                        <i class="bi bi-lightning-charge-fill feature-icon"></i>
                        <h4 class="mt-3">Express Speed</h4>
                        <p class="text-muted">We guarantee delivery within 30-45 minutes inside the city center.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded-3 bg-light h-100">
                        <i class="bi bi-shield-check feature-icon"></i>
                        <h4 class="mt-3">Safe & Secure</h4>
                        <p class="text-muted">Real-time tracking and insured packages for your peace of mind.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-4 border rounded-3 bg-light h-100">
                        <i class="bi bi-geo-alt-fill feature-icon"></i>
                        <h4 class="mt-3">Wide Range</h4>
                        <p class="text-muted">Multiple locations covered with a growing fleet of delivery partners.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="how-it-works" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">How It Works</h2>
                    <div class="d-flex mb-4">
                        <div class="bg-primary rounded-circle px-3 py-2 me-3 h-100">1</div>
                        <div>
                            <h5>Place your Order</h5>
                            <p class="text-secondary">Select items or enter pickup details in our app.</p>
                        </div>
                    </div>
                    <div class="d-flex mb-4">
                        <div class="bg-primary rounded-circle px-3 py-2 me-3 h-100">2</div>
                        <div>
                            <h5>Track in Real-time</h5>
                            <p class="text-secondary">Watch our delivery partner on the map as they head to you.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="bg-primary rounded-circle px-3 py-2 me-3 h-100">3</div>
                        <div>
                            <h5>Receive Package</h5>
                            <p class="text-secondary">Enjoy your delivery and rate our service!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mt-5 mt-lg-0 text-center">
                    <div alt="Delivery" class="img" id="img-az"></div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-4 border-top">
        <div class="container text-center">
            <p class="text-muted mb-0">&copy; 2024 QuickLivraison App. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>