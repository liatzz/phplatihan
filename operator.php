<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERATOR</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="text-wrap">
        <div class="example">
            <div class="p-3 bg-light mb-3">
                <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                    <a class="nav-link"   href="new.php">Data Type</a>
                    <a class="nav-link active"   href="operator.php">Operator</a>
                    <a class="nav-link"   href="kontrol.php">kontrol program</a>
                    <a class="nav-link"   href="Variabel.php">Variabel</a>
                    <a class="nav-link"   href="form.php">Form</a>
                    <a class="nav-link"   href="fungsi.php">Fungsi</a>
                    <a class="nav-link"   href="string.php">string</a>
                    <a class="nav-link"   href="array.php">array</a>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">operator</h6>
                        <p class="text-muted card-sub-title"> Operator PHP adalah simbol yang digunakan untuk melakukan operasi pada operan.
                                Dengan kata sederhana, operator digunakan untuk melakukan operasi pada variabel atau nilai.
                                Operator digunakan untuk melakukan operasi pada variabel dan nilai.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
    <h2>Aritmatika</h2>
    <!-- Operator Aritmatika adalah operator matematis yang terdiri dari operator penambahan, pengurangan, perkalian, pembagian, modulus, plus, dan minus.
    Jenis Operator Aritmatika dalam PHP Didalam PHP terdapat 7 jenis operator aritmatika -->
    <?php
        $a = 5;
        $b = 2;

        // penjumlahan
        $c = $a + $b;
        echo "$a + $b = $c";
        echo "<hr>";

        // pengurangan
        $c = $a - $b;
        echo "$a - $b = $c";
        echo "<hr>";

        // Perkalian
        $c = $a * $b;
        echo "$a * $b = $c";
        echo "<hr>";

        // Pembagian
        $c = $a / $b;
        echo "$a / $b = $c";
        echo "<hr>";

        // Sisa bagi
        $c = $a % $b;
        echo "$a % $b = $c";
        echo "<hr>";

        // Pangkat
        $c = $a ** $b;
        echo "$a ** $b = $c";
        echo "<hr>";
        ?>
        <h2>Increment & Decrement</h2>
        <!-- operator increment dan decrement php adalah operator yang digunakan untuk mempersingkat pembuatan kode program dan merupakan penyebutan untuk operasi seperti variabel $a++ atau $a--.
        Di dalam bahasa pemograman, operasi increment dan decrement ini sering digunakan dalam proses perulangan atau looping. -->
        <?php
        $score = 0;

        $score++;
        $score++;
        $score++;

        echo $score;
        ?>
        <h2>Relasi</h2>
        <!-- Relasi dalam database adalah hubungan antara dua tabel yang didefinisikan berdasarkan kunci primer dan kunci asing.
        Melihat relasi tabel sangatlah penting karena dapat membantu kita dalam memahami struktur dan hubungan antara tabel-tabel tersebut.
        Di bawah ini adalah langkah-langkah detail untuk melihat relasi tabel pada PhpMyAdmin: -->
        <?php
        $a = 6;
        $b = 2;
        
        // menggunakan operator relasi lebih besar
        $c = $a > $b;
        echo "$a > $b: $c";
        echo "<hr>";
        
        // menggunakan operator relasi lebih kecil
        $c = $a < $b;
        echo "$a < $b: $c";
        echo "<hr>";
        
        // menggunakan operator relasi lebih sama dengan
        $c = $a == $b;
        echo "$a == $b: $c";
        echo "<hr>";

        // menggunakan operator relasi lebih tidak sama dengan
        $c = $a != $b;
        echo "$a != $b: $c";
        echo "<hr>";

        // menggunakan operator relasi lebih besar sama dengan
        $c = $a >= $b;
        echo "$a >= $b: $c";
        echo "<hr>";

        // menggunakan operator relasi lebih kecil sama dengan
        $c = $a <= $b;
        echo "$a <= $b: $c";
        echo "<hr>";
        ?>
        <?php
        $total_belanja = 150000;

        if($total_belanja > 100000){
            echo "Anda dapat hadiah (percabangan)!";
        }
        ?>
        <h2>Logika</h2>
        <!-- Operator Logika adalah operator yang digunakan untuk membandingkan 2 kondisi logika, yaitu logika benar (TRUE) dan logika salah (FALSE).
        Operator logika sering digunakan untuk kodisi IF, atau untuk keluar dari proses perulangan (looping). -->
        <?php
        $a = true;
        $b = false;

        // variabel $c akan bernilai false
        $c = $a && $b;
        printf("%b && %b = %b", $a,$b,$c);
        echo "<hr>";

        // variabel $c akan bernilai true
        $c = $a || $b;
        printf("%b || %b = %b", $a,$b,$c);
        echo "<hr>";

        // variabel $c akan bernilai false
        $c = !$a;
        printf("!%b = %b", $a, $c);
        echo "<hr>";
        ?>
        <h2>Bitwise</h2>
        <!-- Operator bitwise (Bitwise Operators) adalah operator khusus yang disediakan PHP untuk menangani proses logika untuk bilangan biner. -->
        <?php

        $a = 60;
        $b = 13;

        // bitwise AND
        $c = $a & $b;
        echo "$a & $b = $c";
        echo "<br>";

        // bitwise OR
        $c = $a | $b;
        echo "$a | $b = $c";
        echo "<br>";

        // bitwise XOR
        $c = $a ^ $b;
        echo "$a ^ $b = $c";
        echo "<br>";

        // Shift Left
        $c = $a << $b;
        echo "$a << $b = $c";
        echo "<br>";

        // Shift Right
        $c = $a >> $b;
        echo "$a >> $b = $c";
        echo "<br>";
        ?>
        <h2>Ternary</h2>
        <!-- Ternary operator adalah operator kondisional di PHP yang memungkinkan penulisan kondisi if-else dalam bentuk yang lebih singkat.
        Operator ternary terdiri dari kondisi yang diperiksa, nilai yang akan dikembalikan jika kondisi tersebut benar (true), dan nilai yang akan dikembalikan jika kondisi tersebut salah (false). -->
        <?php
        $suka = true;

        // menggunakan operator ternary
        $jawab = $suka ? "iya": "tidak";

        // menampilkan jawaban
        echo $jawab;
        ?>
        
       </body>
       </html>