<?php
// menyambungkan ke php perantara localhost
include 'koneksi.php';

$user = $_POST['user'];
$password = $_POST['password'];

// masukkan data input ke localhost
$sql = "insert into user values('', '$user','$password')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
	// pesan kalau data tersimpan
	echo "<script>alert('Data Berhasil Di Input'); window.location.href='tableUser.php'</script>";
} else {
	// pesan kalau data tidak tersimpan
	echo "<script>alert('Data Eror / Gagal'); window.location.href='tableUser.php'</script>";
}