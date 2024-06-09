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
            <h1 class="h1-article"><a href="https://metro.sindonews.com/read/972817/170/gedung-mahkamah-agung-kebakaran-2-unit-damkar-diterjunkan-1671383569">Gedung Mahkamah Agung Kebakaran, 2 Unit Damkar Diterjunkan</a></h1>   
            <img src="img/kebakaran.jpg" alt="hello" class="img-house">
            <p class="p-article">
                <span class="highlight">JAKARTA</span> - Gedung Mahkamah Agung (MA) kebakaran , Minggu (18/12/2022) malam. Kebakaran tidak meluas setelah dipadamkan menggunakan alat pemadam api ringan (APAR). Kepala Dinas Penanggulangan Kebakaran dan Penyelamatan Satriadi Gunawan saat dikonfirmasi membenarkan adanya kebakaran di Gedung MA. Kebakaran dilaporkan sekitar pukul 21.20 WIB. Pihaknya menurunkan dua unit mobil pemadam kebakaran ke lokasi.
            </p>
            <p class="sumber">
                Berita ini bersumber dari MetroSindoNews.com yang rutin memberikan masyarakat berita terbaru.
            </p>

            <h1 class="h1-article"><a href="https://news.detik.com/berita/d-5276661/kebakaran-tangki-di-spbu-jl-mt-haryono-jaksel-2-mobil-pemadam-meluncur  ">Gedung Mahkamah Agung Kebakaran, 2 Unit Damkar Diterjunkan</a></h1>   
            <img src="img/ilustrasi.jpg" alt="hello" class="img-ilustrasi">
            <p class="p-article">
                <span class="highlight">JAKARTA</span> - Kebakaran tangki terjadi di SPBU (stasiun pengisian bahan bakar umum) Jalan MT Haryono, Jakarta Selatan. Petugas pemadam kebakaran (damkar) bergerak untuk memadamkan api.
"Baru diberangkatkan dua unit mobil pemadam kebakaran dari stasiun terdekat," kata petugas command center Suku Dinas Damkar Jakarta Selatan, Suparno, Selasa (1/12/2020).
            </p>
            <p class="sumber">
                Berita ini bersumber dari NewsDetik.com yang rutin memberikan masyarakat berita terbaru.
            </p>
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