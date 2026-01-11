<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deliverect-Sign-Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .register-container {
            margin-top: 60px;
            margin-bottom: 60px;
            max-width: 450px;
        }
        .card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .brand-logo {
            font-weight: bold;
            color: #0d6efd;
            text-decoration: none;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>

<div class="container d-flex justify-content-center">
    <div class="register-container w-100">
        <div class="text-center mb-4">
            <a href="../../index.html" class="brand-logo">Deliverect</a>
        </div>

        <div class="card p-4">
            <div class="card-body">
                <h3 class="text-center mb-2">Create Account</h3>
                <p class="text-center text-muted mb-4">Join our delivery network today.</p>
                
                <form method="post" action="../views/home.php">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" name="username" class="form-control" id="fullName" placeholder="John Doe" required>
                    </div>
                    <div class="mb-3">
                        <label for="Address" class="form-label">Enter address</label>
                        <input type="text" name="address" class="form-control"  placeholder="Address" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                    </div>
                    <div class="mb-3>
                        <label for="role" class="form-label">Select Role</label>
                        <select id="role" name="role" class="form-select">
                            <option selected disabled>User</option>
                            <option value="2">User</option>
                            <option value="3">livreur</option>
                        </select>
                    </div>
                    <div class="mb-3  my-3 ">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="Create a strong password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg">Create Account</button>
                    </div>
                </form>
                <div class="mt-4 text-center">
                    <p class="mb-0">Already have an account? <a href="login.php" class="fw-bold">Login</a></p>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-3">
            <a href="../public/index.php" class="text-muted small text-decoration-none">← Back to Home</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>