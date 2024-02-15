<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global</title>
</head>
<body>
<!-- Variabel global adalah variabel yang di deklarasikan di luar sebuah fungsi dan ketika ingin menggunakan di dalam fungsi kita tinggal mendeklarasikan didalam fungsi yang kita buat dan jangan lupa tambahkan kata "global" didepan variabel saat di deklarasikan.
berikut adalah contoh penggunaan variabel global : -->
    <?php
        $x = 10;
        $y = 20;

        function myTest() {
        $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }

        myTest();
        echo $y; // outputs 30
    ?>    
</body>
</html>