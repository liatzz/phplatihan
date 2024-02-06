<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERATOR</title>
</head>
<body>
    <h2>Aritmatika</h2>
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
        <h2>Penugasan</h2>
        <?php
        $speed = 83;

        // ini opertor aritmatika
        $speed = $speed + 10;
        
        // maka nilai speed akan samadengan 83 + 10 = 93
        
        // ini operator penugasan
        $speed += 10;
        
        // sekarang nilai speed akan menjadi 93 + 10 = 103
        ?>
        <h2>Increment & Decrement</h2>
        <?php
        $score = 0;

        $score++;
        $score++;
        $score++;

        echo $score;
        ?>
        <h2>Relasi</h2>
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
        <?php
        $suka = true;

        // menggunakan operator ternary
        $jawab = $suka ? "iya": "tidak";

        // menampilkan jawaban
        echo $jawab;
        ?>
        
       </body>
       </html>