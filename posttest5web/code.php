<?php
session_start();
require 'dbcon.php';

if(isset($_POST['delete_sepatu']))
{
    $sepatu_Id = mysqli_real_escape_string($con, $_POST['delete_sepatu']);

    $query = "DELETE FROM sepatu WHERE Id='$sepatu_Id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "sepatu Deleted Successfully";
        header("Location: index6.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "sepatu Not Deleted";
        header("Location: index6.php");
        exit(0);
    }
}

if(isset($_POST['update_sepatu']))
{
    $sepatu_Id = mysqli_real_escape_string($con, $_POST['sepatu_Id']);

    $merk = mysqli_real_escape_string($con, $_POST['merk']);
    $ukuran = mysqli_real_escape_string($con, $_POST['ukuran']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $stok = mysqli_real_escape_string($con, $_POST['stok']);

    $query = "UPDATE sepatu SET merk='$merk', ukuran='$ukuran', harga='$harga', stok='$stok' WHERE Id='$sepatu_Id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "sepatu Updated Successfully";
        header("Location: index6.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "sepatu Not Updated";
        header("Location: index6.php");
        exit(0);
    }

}


if(isset($_POST['save_sepatu']))
{
    $merk = mysqli_real_escape_string($con, $_POST['merk']);
    $ukuran = mysqli_real_escape_string($con, $_POST['ukuran']);
    $harga = mysqli_real_escape_string($con, $_POST['harga']);
    $stok = mysqli_real_escape_string($con, $_POST['stok']);

    $query = "INSERT INTO sepatu (merk,ukuran,harga,stok) VALUES ('$merk','$ukuran','$harga','$stok')";

    $query_run = mysqli_query($con, $query);
    if($query_run)
    {
        $_SESSION['message'] = "sepatu Created Successfully";
        header("Location: create1.php");
        exit(0);
    }
    else
    {
        $_SESSION['message'] = "sepatu Not Created";
        header("Location: create1.php");
        exit(0);
    }
}

?>