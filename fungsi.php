<h5>NAMA  : SELIA NUR <br>
KELAS : XI RPL<h5>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
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
                    <a class="nav-link active"   href="fungsi.php">Fungsi</a>
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
                        <h6 class="card-title mb-1">fungsi</h6>
                        <p class="text-muted card-sub-title">Function pada PHP adalah sepotong kode yang mengambil satu input lagi dalam bentuk parameter dan melakukan beberapa pemrosesan dan mengembalikan nilai.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
    <?php
        function getMessage() {
            echo "Selamat Belajar PHP!";
        }
        getMessage();
    ?>
    <h5>fungsi argument<h5>
    <?php
        function getSiswa($nama, $umur) {
            echo "Nama $nama, umur $umur <br>";
        }
        getSiswa('Selia', 15);
        getSiswa('Siti', 22);
        getSiswa('Tia', 25);
        getSiswa('Jascia', 18);
        getSiswa('Wulan', 15);
    ?>
    <h5>
</body>
</html>