<?php
include 'koneksi.php';

$del = $_GET['del'];

// delete terhubung ke table database
mysqli_query($koneksi, "DELETE FROM bencana WHERE idBencana =$del");

// kembali ke php sebelumnya
header("location:tablebencana.php");