<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <center>
    <h2>Enjoyy guyss!</h2>
    <table border="15" style="width:40%">
        <tr bgcolor='#808080'>
            <td>Id Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['id_sepatu']; ?></td>
        <tr bgcolor='#C0C0C0'>
            <td>Merk Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['merk_sepatu']; ?></td>
        </tr>
        <tr bgcolor='#808080'>
            <td>Ukuran Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['ukuran_sepatu']; ?></td>
        </tr>
        <tr bgcolor='#C0C0C0'>
            <td>Harga Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['harga_sepatu']; ?></td>
        </tr>
        <tr bgcolor='#C0C0C0'>
            <td>Stok Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['check1']; ?></td>
        </tr>
        
        </table>
        <br>
        <button>
        <a href="form.php" class="btn btn-primary">Kembali</a>
        </button>
    </center>
    <!-- <h2>Enjoyy guyss!</h2>
    <table border="1">
        <tr>
            <td>Merk Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['merk_sepatu']; ?></td>
        </tr>
        <tr>
            <td>Ukuran Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['ukuran_sepatu']; ?></td>
        </tr>
        <tr>
            <td>Harga Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['harga_sepatu']; ?></td>
        </tr>
        <tr>
            <td>Stok Sepatu</td>
            <td>:</td>
            <td><?php  echo $_POST['check1']; ?></td>
        </tr>
        <tr>
            <td>Foto Sepatu</td>
            <td>:</td>
            <td><img src="<?php echo $_POST['foto'];?>" alt="" width="150px" height="150px"></td>
        </tr>
        </table>
        <br>
        <button>
        <a href="form.php" class="btn btn-primary">Kembali</a>
        </button>
         -->

    
</body>
</html>