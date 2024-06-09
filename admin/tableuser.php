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

    <center>
        <h2> DATA USER </h2>
    </center>

    <center>
    <table id="customers" border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from user");
        while ($d = mysqli_fetch_array($data))  {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['user']; ?></td>
                <td><?php echo $d['password']; ?></td>
                <td><a href="hapusUser.php?del=<?php echo $d['idUser']; ?>" style="text-decoration: none; color :red">Delete</a></td>
            </tr>
        <?php
        }
        ?>
    </table>
</center>
<br>
<center>
        <form method="post" action="koneksiDataUser.php">
            <div class="form-container">
                <h1> Tambah Data User </h1>

                <div class="txtField">
                    <label for="nimMhs">username</label>
                    <input id="nimMhs" type="text" name="user" placeholder="Masukkan Username Anda" required> 
                </div>

                <div class="txtField">
                    <label for="namaMhs">password</label>
                    <input id="namaMhs" type="text" name="password" placeholder="Masukkan Password Anda" required> 
                </div>

                <div class="btn-group"> 
                    <br>
                    <button class="btn-simpan" type="submit" value="save">TAMBAH</button>
                </div> 
        </form>
</center>
</body>
</html>