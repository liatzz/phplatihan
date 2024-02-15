<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logika</title>
</head>
<body>
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
</body>
</html>