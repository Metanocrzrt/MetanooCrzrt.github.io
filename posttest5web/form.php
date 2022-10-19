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
    <form method="POST" action="hasil.php">
        <h2>Welcome To My Store!</h2>
        <table border="15">
            <tr bgcolor='#C0C0C0'>
                <td>Id Sepatu</td>
                <td><input type="number" name="id_sepatu" placeholder="Masukkan id sepatu..." style="width:95%"> </td>
            </tr>
            <tr bgcolor='#808080'>
                <td>Merk Sepatu</td>
                <td><input type="text" name="merk_sepatu" placeholder="Masukkan merk sepatu..." style="width:95%"> </td>
            </tr>
            <tr bgcolor='#C0C0C0'>
                <td>Ukuran Sepatu</td>
                <td><input type="number" name="ukuran_sepatu" placeholder="Masukkan id sepatu..." style="width:95%"> </td>
            </tr>
            <tr bgcolor='#808080'>
                <td>Harga Sepatu</td>
                <td><input type="number" name="harga_sepatu" style="width:95%"> </td>
            </tr>
            <tr bgcolor='#808080'>
                <td>Stok Sepatu</td>
                <td><input type="radio" name="check1" value="Ready">Ready 
                    <input type="radio" name="check1" value="Kosong">Kosong </td>
            </tr>
        
          </table>
            <br>
            <td><button type="submit" name="submit" value="submit">Kirim</button></td>

    </form>
    </center>
    
    
</body>
</html>