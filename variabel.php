<h5>NAMA  : SELIA NUR <br>
    KELAS : XI RPL<h5>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VARIABEL</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="text-wrap">
        <div class="example">
            <div class="p-3 bg-blue mb-3">
                <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                    <a class="nav-link"   href="new.php">Data Type</a>
                    <a class="nav-link"   href="operator.php">Operator</a>
                    <a class="nav-link"   href="kontrol.php">kontrol program</a>
                    <a class="nav-link active"   href="variabel.php">Variabel</a>
                    <a class="nav-link"   href="form.php">Form</a>
                    <a class="nav-link"   href="fungsi.php">Fungsi</a>
                    <a class="nav-link"   href="string.php">string</a>
                    <a class="nav-link"   href="array.php">array</a>
                </nav>
            </div>
        </div>
    </div>
    <div >
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">Variabel</h6>
                        <p class="text-muted card-sub-title">variabel adalah suatu lokasi penyimpanan di dalam memori komputer yang berisikan nilai atau informasi yang nilainya tidak diketahui maupun telah diketahui</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php
                                $nama = "selia";
                                $umur = 17;
                                echo $nama;
                                echo "<br/>";
                                echo $umur;
                                echo "<br/>";
                                echo "hai, perkenalkan nama saya ".$nama." dan saya berumur ".$umur;
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