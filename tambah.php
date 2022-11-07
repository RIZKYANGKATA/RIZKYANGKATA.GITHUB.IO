<?php

$host = 'localhost';
$username = 'root';
$password = '';
$dbname = 'crud';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (isset($_POST["submit"])) {
     $nama_menu = $_POST['nama_menu'];
     $nama_pembeli = $_POST['nama_pembeli'];
     $jumlah_beli = $_POST['jumlah_beli'];

     $add = mysqli_query($conn, "INSERT INTO form (nama_menu, nama_pembeli, jumlah_beli) VALUES('$nama_menu', '$nama_pembeli', '$jumlah_beli')");

     if(mysqli_affected_rows($conn) > 0) {
        echo '<p>Berhasil</p>';
        echo '<a href="index.php">Lihat</a>';
     } else {
        echo '<p>Gagal</p>';
     }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Menu</title>
</head>
<body>
<form method='post'>
  <label for="nama">Nama menu:</label><br>
  <input type="text" id="nama" name="nama_menu"><br>
  <label for="harga">Harga:</label><br>
  <input type="text" id="harga" name="nama_pembeli"><br>
  <label for="img">Jumlah Beli:</label><br>
  <input type="text" id="image" name="jumlah_beli"><br>
  <input type="submit" name="submit">
</form>
        
</body>
</html>