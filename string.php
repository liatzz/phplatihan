<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>STRING</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="text-wrap">
        <div class="example">
            <div class="p-3 bg-light mb-3">
                <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                    <a class="nav-link"   href="new.php">Data Type</a>
                    <a class="nav-link"   href="operator.php">Operator</a>
                    <a class="nav-link"   href="kontrol.php">kontrol program</a>
                    <a class="nav-link"   href="Variabel.php">Variabel</a>
                    <a class="nav-link"   href="form.php">Form</a>
                    <a class="nav-link"   href="fungsi.php">Fungsi</a>
                    <a class="nav-link active"   href="string.php">string</a>
                    <a class="nav-link"   href="array.php">array</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">string</h6>
                        <p class="text-muted card-sub-title">Fungsi string ini digunakan untuk mengembalikan jumlah karakter dalam string yang ditentukan sebagai angka atau memberi panjang string pada PHP</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
    <h5>strlen()<h5>
    <?php
        $pesan = 'Selamat Belajar!';
        echo 'Jumlah karakter dari string pesan adalah ' . strlen($pesan);
    ?>
    <h5>str_word_count()<h5>
    <!-- Fungsi ini mengembalikan jumlah kata individual dalam string PHP yang ditentukan sebagai angka -->
    <?php 
        $pesan = "Selamat belajar bahasa pemrograman PHP!";
        print_r(str_word_count($pesan, 1)); 
    ?>
    <h5>strrev()<h5>
    <!-- Fungsi string ini digunakan untuk mengembalikan string secara terbalik. 
    Dengan menggunakan fungsi ini pada string “Selamat Belajar!”, Anda akan menerima “!rajaleB tamaleS” -->
    <?php
        $pesan=strrev("Selamat Belajar!");
        echo $pesan;
    ?>
    <h5>strops()<h5>
    <!-- Fungsi ini mencari string pada php untuk pencocokan teks.
    Setelah menemukan kecocokan, ia mengembalikan posisi kejadian pertama sebagai angka -->
    <?php 
        function look($kunci, $pesan){ 
            $text = strpos($pesan, $kunci, 5);   
            if ($text == true){ 
                return "Kata kunci ditemukan " . $text; 
            } 
            else{ 
                return "Kata kunci tidak ditemukan"; 
            } 
        } 

        $pesan = "Selamat Belajar PHP!"; 
        $kunci = "PHP"; 
        echo look($kunci, $pesan); 
    ?>
</body>
</html>