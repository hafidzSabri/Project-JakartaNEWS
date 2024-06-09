<?php
include 'koneksi.php';

$del = $_GET['del'];

// delete terhubung ke table database
mysqli_query($koneksi, "DELETE FROM user WHERE idUser =$del");

// kembali ke php sebelumnya
header("location:tableuser.php");