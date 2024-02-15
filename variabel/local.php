<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Local</title>
</head>
<body>
<!-- Variabel local adalah variabel yang di definisikan di dalam sebuah fungsi, dan juga hanya dapat di gunakan di dalam fungsi tersebut.
berikut merupakan contoh penggunaan variabel local : -->
    <?php
        function myTest() {
        $x = 5; // Lingkup lokal
        echo "<p>Variable x inside function is: $x</p>";
        }
        myTest();

        // Menggunakan X di luar fungsi akan menghasilkan kesalahan
        echo "<p>Variable x outside function is: $x</p>";
    ?>    
</body>
</html>