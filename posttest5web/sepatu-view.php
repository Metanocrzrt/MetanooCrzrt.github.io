<?php
require 'dbcon.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Shoes View</title>
    <link rel="stylesheet" href="sepatu.css">
</head>
<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Shoes View Details 
                            <a href="index6.php" class="btn btn-danger float-end">BACK</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if(isset($_GET['Id']))
                        {
                            $sepatu_Id = mysqli_real_escape_string($con, $_GET['Id']);
                            $query = "SELECT * FROM sepatu WHERE Id='$sepatu_Id' ";
                            $query_run = mysqli_query($con, $query);

                            if(mysqli_num_rows($query_run) > 0)
                            {
                                $sepatu = mysqli_fetch_array($query_run);
                                ?>
                                
                                    <div class="mb-3">
                                        <label>MERK</label>
                                        <p class="form-control">
                                            <?=$sepatu['merk'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>UKURAN</label>
                                        <p class="form-control">
                                            <?=$sepatu['ukuran'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>HARGA</label>
                                        <p class="form-control">
                                            <?=$sepatu['harga'];?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>STOK</label>
                                        <p class="form-control">
                                            <?=$sepatu['stok'];?>   
                                        </p>
                                    </div>

                                <?php
                            }
                            else
                            {
                                echo "<h4>No Such Id Found</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>