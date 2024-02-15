<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static</title>
</head>
<body>
<!-- Variabel Static adalah variabel yang akan menyimpan nilai akhirnya, jika pada normalnya sebuah variabel dalam suatu fungsi akan di kembalikan nilainya maka dengan menggunakan variabel static ini tidak return atau tidak kembali ke nilai awal. 
Berikut adalah contoh penulisan variabel static dalam PHP: -->
    <?php
        function myTest() {
        static $x = 0;
        echo $x;
        $x++;
        }

        myTest();
        myTest();
        myTest();
    ?>    
</body>
</html>