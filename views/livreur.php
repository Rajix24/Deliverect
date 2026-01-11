<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Livreur Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Livreur Dashboard</span>
        <div class="text-white">
            <span class="me-3">👤 Livreur</span>
            <a href="./../public/index.php" class="btn btn-danger btn-sm">Logout</a>
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 bg-light vh-100 p-3">
            <ul class="nav flex-column">
                <li class="nav-item mb-2">
                    <a class="nav-link active" href="#">🏠 Dashboard</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">📦 My Orders</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">✅ Delivered</a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="#">👤 Profile</a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="col-md-10 p-4">

            <h3 class="mb-4">Welcome, Livreur 👋</h3>

            <!-- Stats -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Orders</h5>
                            <p class="card-text fs-3">25</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Delivered</h5>
                            <p class="card-text fs-3">18</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card text-bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Pending</h5>
                            <p class="card-text fs-3">7</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Orders Table -->
            <div class="card">
                <div class="card-header">
                    My Orders
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Client</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ahmed</td>
                                <td>Casablanca</td>
                                <td><span class="badge bg-warning">Pending</span></td>
                                <td>
                                    <button class="btn btn-success btn-sm">Mark Delivered</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Yassine</td>
                                <td>Rabat</td>
                                <td><span class="badge bg-success">Delivered</span></td>
                                <td>-</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
