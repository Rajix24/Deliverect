<?php
    require_once '../vendor/autoload.php';
    use App\Service\CrudUser;
    use App\Controller\HandleCommand;
    session_start();

    if (!empty($_POST)) {
        $get_id = new CrudUser();
        $dataUser = $get_id->findOne($_SESSION['email']);
        $_SESSION['id'] = $dataUser->id;
        $command = new HandleCommand();
        $command->insterCommand();
        header("location: ./client.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Command - Deliverect</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        body { background-color: #f4f7f6; }
        .navbar-brand { font-weight: 800; color: #2b3fd4 !important; }
        .card { border: none; border-radius: 15px; }
        .input-group-text { background-color: #f8f9fa; border: none; }
        .form-control, .form-select { 
            border: none; 
            background-color: #f8f9fa;  
            padding: 12px;
        }
        .form-control:focus {
            background-color: #fff;
            box-shadow: 0 0 0 3px rgba(43, 63, 212, 0.1);
        }
        .section-title {
            font-size: 0.9rem;
            font-weight: 700;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-light bg-white border-bottom sticky-top">
        <div class="container">
            <a class="navbar-brand" href="home.php">DELIVERECT</a>
        </div>
    </nav>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                
                <form action="./CreateDommand.php" method="post">
                    <div class="card shadow-sm mb-4">
                        <div class="card-body p-4">
                            <h6 class="section-title"><i class="bi bi-box-seam me-2"></i>Product Information</h6>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label fw-bold">Item Name</label>
                                    <input type="text" name="name" class="form-control" placeholder="What are you sending? (e.g. Laptop, Flowers)" required>
                                </div>
                                
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Vehicule</label>
                                    <select name="vehicules" class="form-select">
                                        <option selected value="1">Car</option>
                                        <option value="2">Vans</option>
                                        <option value="3">trucks</option>
                                        <option value="4">bicycles</option>
                                        <option value="5" >Motorcycle</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Price</label>
                                    <div class="input-group">
                                        <input type="number" name="price" class="form-control" placeholder="0.5">
                                        <span class="input-group-text">DH</span>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label fw-bold">Detailed Product Description</label>
                                    <textarea name="description" class="form-control" rows="4" placeholder="Mention size, color, or special handling (e.g. 'The box is 30x30cm, please do not flip it upside down')"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow-sm mb-4 bg-warning bg-opacity-10 border-warning border-opacity-25">
                        <div class="card-body p-3 d-flex align-items-center">
                            <i class="bi bi-exclamation-triangle-fill text-warning fs-3 me-3"></i>
                            <div>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="fragileSwitch">
                                    <label class="form-check-label fw-bold" for="fragileSwitch">Mark this item as Fragile</label>
                                </div>
                                <small class="text-muted">The courier will take extra care during transportation.</small>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <a href="<?php
                            // session_start(); 
                            // var_dump($_SESSION);
                            if ($_SESSION['role'] == 2) {
                                echo './client.php';
                            }elseif ($_SESSION['role'] == 3) {
                                echo './livreur.php';
                            }       
                            if ($_SESSION['role'] == 1) {
                                echo './admin/php';
                            }
                            ?>" 
                        class="text-decoration-none text-muted fw-bold">Back</a>
                        <button type="submit" class="btn btn-primary btn-lg px-5 rounded-pill shadow">
                            Confirm and Send <i class="bi bi-arrow-right ms-2"></i>
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>