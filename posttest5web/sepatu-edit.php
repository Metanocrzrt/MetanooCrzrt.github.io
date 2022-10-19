<?php
session_start();
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

    <title>Shoes Edit</title>
    <link rel="stylesheet" href="sepatu.css">
</head>
<body>
  
    <div class="container mt-5">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Shoes Edit 
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
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="sepatu_Id" value="<?= $sepatu['Id']; ?>">

                                    <div class="mb-3">
                                        <label>MERK</label>
                                        <input type="text" name="merk" value="<?=$sepatu['merk'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>UKURAN</label>
                                        <input type="number" name="ukuran" value="<?=$sepatu['ukuran'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>HARGA</label>
                                        <input type="number" name="harga" value="<?=$sepatu['harga'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <label>STOK</label>
                                        <input type="number" name="stok" value="<?=$sepatu['stok'];?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_sepatu" class="btn btn-primary">
                                            Update                                         </button>
                                    </div>

                                </form>
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