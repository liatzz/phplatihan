<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relasi</title>
</head>
<body>
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
</body>
</html>