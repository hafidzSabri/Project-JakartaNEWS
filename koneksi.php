<?php
$koneksi = new mysqli("localhost", "root", "", "jakartanews");

if (mysqli_connect_errno()) {
    echo ("gagal koneksi, pesan kesalahan:" . mysqli_connect_error());
    exit();
}