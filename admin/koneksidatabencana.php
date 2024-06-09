<?php
// menyambungkan ke php perantara localhost
include 'koneksi.php';

$jnsBencana = $_POST['jnsBencana'];
$tglKejadian = $_POST['tglKejadian'];
$tglSelesai = $_POST['tglSelesai'];
$lokasi = $_POST['lokasi']; 
$jmlKorban = $_POST['jmlKorban'];

// masukkan data input ke localhost
$sql = "insert into bencana values('','$jnsBencana','$tglKejadian','$tglSelesai','$lokasi','$jmlKorban')";
$query = mysqli_query($koneksi, $sql) or die(mysqli_error($koneksi));
if ($query) {
	// pesan kalau data tersimpan
	echo "<script>alert('Data Berhasil Di Input'); window.location.href='tableBencana.php'</script>";
} else {
	// pesan kalau data tidak tersimpan
	echo "<script>alert('Data Eror / Gagal'); window.location.href='tableBencana.php'</script>";
}