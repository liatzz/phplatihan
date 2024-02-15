<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variabel</title>
</head>
<body>
    <h2>Penulisan Variabel</h2>
    <?php
        $nama;
    ?>
    <h2>Pengisian data/informasi</h2>
    <?php
        $nama = "selia";
        $umur = 17;
    ?>
    <h2>Penggunaan variabel</h2>
    <?php
        $nama = "selia";
        $umur = 17;
        echo $nama;
        echo "<br/>";
        echo $umur;
        echo "<br/>";
        echo "hai, perkenalkan nama saya ".$nama." dan saya berumur ".$umur;
    ?>
    <h2>Mengupdate isi variabel</h2>
    <?php
        $alamat = "Jawabarat";
        $alamat = "subang";
        echo $alamat;
    ?>
</body>
</html>