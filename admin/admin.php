<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- untuk menghubungkan ke css style -->
    <link href="admin.css" type="text/css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="/img/icon.png">
</head>

<body>
    <ul>
        <li><a href="admin.php">Home</a></li>
        <li><a href="tablebencana.php">Tabel Bencana</a></li>
        <li><a href="tableUser.php">Tabel User</a></li>
        <!-- float right berguna agar menu bar mengambang di kanan  -->
        <li style="float: right;"><a href="login.php">logout</a></li>
        <li style="float: right;"><a href="roles.php">roles : admin</a></li>
    </ul>

    <!-- agar atribut di tengah -->
    <center>
    <h2> Tentang Pembuat </h2>
    </center>

    <!-- agar atribut di tengah -->
    <center><img src="img/apis.jpeg" alt=""> <br>
        <strong>
            <!-- menggunakan font aferd -->
            <p style="font-family:aferd, sans-serif;"> Hafidz Sabri Nurrahman</p>
            <p style="font-family:aferd, sans-serif;"> Mahasiswa Sistem Informasi</p>
            <p style="font-family:aferd, sans-serif;"> Universitas pembangunan jaya</p>
        </strong>
    </center>
</body>
</html>