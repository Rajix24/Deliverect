<?php
require_once '../vendor/autoload.php';
use App\Controller\HandleLogIn;
$check = new HandleLogIn();
$check->checkUser();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliverect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../Assit/style.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .login-container {
            margin-top: 100px;
            max-width: 400px;
        }

        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="text-center mb-4">
                    <a class="navbar-brand fw-bold text-primary" href="#">Deliverect</a>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="login-container w-100">
            <div class="card p-4">
                <div class="card-body">
                    <h3 class="text-center mb-4">Login</h3>
                    <form action="./login.php" method="post" >
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your Email" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password"
                                required>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" border for="remember">Remember me</label>
                        </div>

                        <div class="d-grid">
                            <button type="submit" name="submit" class="btn btn-primary">Log In</button>
                        </div>
                    </form>

                    <div class="mt-3 text-center">
                        <p class="small">Don't have an account? <a href="./signIn.php">Register here</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.min.js"></script>
</body>

</html>