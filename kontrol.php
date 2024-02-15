<h5>NAMA  : SELIA NUR <br>
KELAS : XI RPL<h5>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KONTROL</title>
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
                    <a class="nav-link active"   href="kontrol.php">kontrol program</a>
                    <a class="nav-link"   href="variabel.php">Variabel</a>
                    <a class="nav-link"   href="form.php">form</a>
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
                        <h6 class="card-title mb-1">kondisi</h6>
                        <p class="text-muted card-sub-title">Struktur kontrol adalah fitur inti dari bahasa PHP yang mengizinkan skrip merespons secara berbeda terhadap input atau situasi yang berbeda.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php
                                $age = 50;
                                if ($age > 30)
                                {
                                echo "Your age is greater than 30!";
                                } 
                            ?>   
                            <?php 
                                $ulangi = 10;

                                do {
                                    echo "<p>ini adalah perulangan ke-$ulangi</p>";
                                    $ulangi--;
                                } while ($ulangi > 0);
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">Perulangan</h6>
                        <p class="text-muted card-sub-title">Perulangan dalam PHP adalah suatu perintah yang digunakan untuk mengeksekusi blok kode yang sama berulang kali selama kondisi tertentu terpenuhi. Ide dasar di balik sebuah loop adalah untuk mengotomatiskan tugas yang berulang dalam suatu program, sehingga dapat menghemat waktu dan usaha</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                               <?php

                               echo "<h5>Belajar Pemrograman PHP untuk Pemula</h5>";
                               echo "<h5>Cara Menggunakan Perulangan di PHP</h5>";
                               echo "<h5>Memahami Struktur Kondisi IF di PHP</h5>";
                               echo "<h5>Memahami Perulangan di PHP</h5>";
                               echo "<h5>Prosedur dan Fungsi di PHP</h5>";
                               
                               ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>