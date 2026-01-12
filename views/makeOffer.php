<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Command Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <span class="navbar-brand">
            <i class="bi bi-truck"></i> Command Details
        </span>
    </div>
</nav>

<div class="container my-5">

    <div class="row g-4">

        <!-- LEFT: Command Information -->
        <div class="col-lg-7">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-primary text-white rounded-top-4">
                    <h5 class="mb-0">
                        <i class="bi bi-info-circle"></i> Command Information
                    </h5>
                </div>

                <div class="card-body">

                    <h4 class="fw-bold">Deliver Restaurant Order</h4>
                    <p class="text-muted mb-3">
                        Pick up food from the restaurant and deliver it to the customer safely.
                    </p>

                    <div class="row mb-3">
                        <div class="col-md-6">
                            <strong>Price:</strong> <span class="text-success fw-bold">120 DH</span>
                        </div>
                        <div class="col-md-6">
                            <strong>Status:</strong>
                            <span class="badge bg-warning text-dark">Hold</span>
                        </div>
                    </div>

                    <hr>

                    <h6 class="fw-semibold">Pickup Information</h6>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt"></i> Restaurant XYZ, Agadir</li>
                        <li><i class="bi bi-clock"></i> Pickup Time: 14:00</li>
                    </ul>

                    <h6 class="fw-semibold mt-3">Delivery Information</h6>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-house-door"></i> Client Address: Hay Salam</li>
                        <li><i class="bi bi-telephone"></i> Client Phone: 06xxxxxxxx</li>
                    </ul>

                    <h6 class="fw-semibold mt-3">Additional Notes</h6>
                    <p class="text-muted">
                        Handle with care. Call client before arrival.
                    </p>

                </div>
            </div>
        </div>

        <!-- RIGHT: Apply to Command -->
        <div class="col-lg-5">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header bg-success text-white rounded-top-4">
                    <h5 class="mb-0">
                        <i class="bi bi-check2-circle"></i> Apply to This Command
                    </h5>
                </div>

                <div class="card-body">

                    <form action="apply_command.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Price</label>
                        </div>
                            <input type="number" name="price" class="form-control" placeholder="Enter price Good to you">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Your Message (optional)</label>
                            <textarea name="message" name="description" class="form-control"
                                      rows="3"
                                      placeholder="Write a message to the client..."></textarea>
                        </div>  
                        <div class="d-grid">
                            <button type="submit" class="btn btn-success btn-lg">
                                <i class="bi bi-truck"></i> Apply Now
                            </button>
                        </div>

                    </form>

                </div>
            </div>

            <div class="alert alert-info mt-3">
                <i class="bi bi-info-circle"></i>
                After applying, the client will review your request.
            </div>
        </div>

    </div>
</div>

</body>
</html>
