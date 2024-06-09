<!DOCTYPE html>
<html lang="en">
<!-- untuk menghubungkan ke css style -->
<link href="admin.css" type="text/css" rel="stylesheet">
<link rel="icon" type="image/x-icon" href="/img/icon.png">
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
        <h2> DATA BENCANA </h2>
    </center>

    <!-- agar atribut di tengah -->
    <center>
    <table id="customers" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NO</th>
            <th>Jenis Bencana</th>
            <th>Tanggal Kejadian</th>
            <th>Tanggal Selesai</th>
            <th>Lokasi</th>
            <th>Jumlah Korban</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        // memilih data dari localhost
        $data = mysqli_query($koneksi, "select * from bencana");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['jnsBencana']; ?></td>
                <td><?php echo $d['tglKejadian']; ?></td>
                <td><?php echo $d['tglSelesai']; ?></td>
                <td><?php echo $d['lokasi']; ?></td>
                <td><?php echo $d['jmlKorban']; ?></td>
                <td><a href="hapusbencana.php?del=<?php echo $d['idBencana']; ?>" style="text-decoration: none; color :red">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>

    <!-- agar atribut di tengah -->
    </center>
    <br>
    <center>      
    <!-- untuk menghubungkan ke box tambah -->
    <form method="post" action="koneksidatabencana.php">
            <div class="form-container">
                <h1> Tambah Data Bencana </h1>

                <div class="txtField">
                    <label for="nimMhs">Jenis Bencana</label>
                    <input id="nimMhs" type="text" name="jnsBencana" placeholder="Masukkan Jenis Bencana" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">Tanggal Kejadian</label>
                    <input id="namaMhs" type="text" name="tglKejadian" placeholder="Masukkan Tanggal Kejadian (dd/mm/yyyy)" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">Tanggal Selesai</label>
                    <input id="namaMhs" type="text" name="tglSelesai" placeholder="Masukkan Tanggal Selesai (dd/mm/yyyy)" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">Lokasi</label>
                    <input id="namaMhs" type="text" name="lokasi" placeholder="Masukkan Lokasi Kejadian" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">Jumlah Korban</label>
                    <input id="namaMhs" type="text" name="jmlKorban" placeholder="Masukkan Jumlah Korban" required> 
                </div>

                <div class="btn-group"> 
                    <br>
                    <button class="btn-simpan" type="submit" value="save">TAMBAH</button>
                </div> 
        </form>
    </center>
</body>
</html>