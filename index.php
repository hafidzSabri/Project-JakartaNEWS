<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allerta&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JakartaNEWS</title>
    <link rel="icon" type="image/x-icon" href="/img/icon.png">
</head>
<body>
    <header>
        <div class="logo">
            <?php
            $hasil = mysqli_query($koneksi, "SELECT * FROM header");
            while ($header = $hasil->fetch_object()) {
            ?>
                <img src="img/<?= $header->logo; ?>">
                <a><?= $header->namaHeader; ?></a>
                <br>
                <span><?= $header->slogan; ?></span>
            <?php } ?>
        </div>
    </header>

    <div class="filling">
        <nav class="filling-navbar">    
            <ul>
                <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM navbar");
                while ($menu = $hasil->fetch_object()) {
                ?>
                <li><a href="<?= $menu->link; ?>">
                            <span class="link_name"><?= $menu->menu; ?></span>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </nav>

        <article class="filling-article">
            <h1 class="h1-article">Kalian pasti mempertanyakan mengapa saya memilih tema bencana sosial.</h1>   
            <img src="img/hello.png" alt="hello" class="img-hello">
            <p class="p-article">Semua berawalkan karena begitu saya mengetahui bahwa Indonesia adalah negara tropis dan berada di garis khatulistiwa dimana matahari terus bersinar sepanjang tahun yang menyebabkan banyak resiko terjadi bencana alam di Indonesia.
            </p>
            <p class="p-article">
                Saat musim hujan menyebabkan banyak daerah yang terendam banjir dikarenakan volume hujan yang tinggi serta masalah pembuangan sampah yang intoleran dari masyarakatnya sendiri.
            </p>
            <p class="p-article">
                Musim hujan kebanjiran dan musim panas kebakaran, ini adalah realita pahit yang harus dirasakan masyarakat Indonesia karena kondisi geografisnya sendiri.
            </p>
            <p class="p-article">
                Inilah yang mendorong saya untuk membuat informasi mengenai bencana sosial dengan detail data kejadian, presentase bansos, jenis bansos hingga korban pun kami informasikan.
            </p>
            <p class="p-article">
                Percuma kalau ditransparasikan oleh pemerintah jika masih berbentuk data, disinilah saya <a style="color: rgb(183, 182, 182);" href="http://127.0.0.1:5500/img/awww.png">Hafidz Sabri Nurrahman</a>  mahasiswa Sistem Informasi Universitas Pembangunan Jaya ingin mentransformasikan data menjadi informasi agar mudah dicerna oleh masyarakat umum.
            </p>
            <h1 class="h1-article">Table Data Bencana DKI Jakarta</h1>
            <p class="p-article">Dibawah ini adalah informasi dari data bencana DKI Jakarta pada bulan Juli tahun 2021</p>
            <div style="overflow-x:auto;" class="table-wrapper">
            <table class="fl-table">
                <thead>
                <tr>
                  <th>no</th>
                  <th>Jenis Bencana</th>
                  <th>Tanggal Kejadian</th>
                  <th>Tanggal Selesai</th>
                  <th>Lokasi Bencana</th>
                  <th>Jumlah Korban</th>
                </tr>
            </thead>
            
            <tbody>
            <?php
            include 'koneksi.php';
            $no = 1;
            // memilih data dari localhost
            $data = mysqli_query($koneksi, "select * from bencana");
            while ($d = mysqli_fetch_array($data)) {
            ?>
                <tr>
                <th><?php echo $no++; ?></th>
                <th><?php echo $d['jnsBencana']; ?></th>
                <th><?php echo $d['tglKejadian']; ?></th>
                <th><?php echo $d['tglSelesai']; ?></th>
                <th><?php echo $d['lokasi']; ?></th>
                <th><?php echo $d['jmlKorban']; ?></th>
                </tr>
                <?php
        }
        ?>
            </tbody>
              </table>
            </div>
        </article>
        
        <aside class="filling-aside">
            <h1 class="h1-aside">
                VIDEO SEPUTAR BENCANA
            </h1>

            <h2 class="h2-aside">
                <a href="https://www.youtube.com/watch?v=atbeX2bQtj4">Penanganan Prabencana</a>
            </h2>

            <iframe class="yt-video" src="https://www.youtube.com/embed/atbeX2bQtj4?autoplay=1&mute=1">
            </iframe>    
            
            <h3 class="h3-aside">
                *Diatas ini ada video mengenai animasi yang menggambarkan penanganan "sebelum " terjadinya bencana atau masa "siap siaga" bencana secara umum dan singkat.
            </h3>

            <h2 class="h2-aside">
                <a href="https://www.youtube.com/watch?v=UGbChN56mjU">Mitigasi Bencana</a>
            </h2>

            <iframe class="yt-video" src="https://www.youtube.com/embed/UGbChN56mjU?autoplay=1&mute=1">
            </iframe> 

            <h3 class="h3-aside">
                *Diatas ini ada video mengenai mitigasi bencana yang merupakan serangkaian upaya untuk mengurangi risiko bencana, baik melalui pembangunan fisik maupun penyadaran dan peningkatan kemampuan menghadapi ancaman bencana
            </h3>

            <br><br>

        </aside>
    </div>
    <footer>
        <?php
                $hasil = mysqli_query($koneksi, "SELECT * FROM footer");
                while ($footer = $hasil->fetch_object()) {
                ?>
                    <h4 class="sosmed-footer"><?= $footer->twitter; ?></h4>
                    <h2><?= $footer->copyright; ?></h2>
                    <h3><?= $footer->namaWeb; ?></h3>
                <?php } ?>
    </footer>
</body>
</html>