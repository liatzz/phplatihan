<h5>NAMA : SELIA NUR <br>
    KELAS: XI RPL
<h5>    
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TYPE DATA</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="text-wrap">
        <div class="example">
            <div class="p-3 bg-light mb-3">
                <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                    <a class="nav-link active"   href="new.php">Data Type</a>
                    <a class="nav-link"   href="operator.php">Operator</a>
                    <a class="nav-link"   href="kontrol.php">kontrol program</a>
                    <a class="nav-link"   href="variabel">Variabel</a>
                    <a class="nav-link"   href="form.php">Form</a>
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
                        <h6 class="card-title mb-1">Array</h6>
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php
                                $cars = array("SUPRA", "BMW", "KLX");
                                echo "saya suka motor dan mobil " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
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
                        <h6 class="card-title mb-1">Boolean</h6>
                        <p class="text-muted card-sub-title">boolean adalah tipe data paling sederhana dalam PHP dan juga dalam bahasa pemograman lainnya</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php 
                                $x = true;
                                var_dump($x);
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
                        <h6 class="card-title mb-1">Float</h6>
                        <p class="text-muted card-sub-title">Pengertian Tipe Data Float dalam PHP Tipe data float (disebut juga tipe data floating point, atau real number) adalah tipe data angka yang memiliki bagian desimal di akhir angka, atau memiliki floating point 
                           (floating point adalah istilah dalam bahasa inggris untuk menyebut tanda " titik " yang menandakan bilangan desimal).</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php  
                                $x = 10.365;
                                var_dump($x);
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
                        <h6 class="card-title mb-1">Integer</h6>
                        <p class="text-muted card-sub-title">Integer merupakan salah satu tipe data yang ada pada bahasa pemrograman PHP.
                            Pada umumnya Tipe data integer digunakan untuk angka atau bilangan bulat seperti harga barang atau jumlah stok barang.
                            Integer meliputi angka bulat seperti 2, 50, atau 120.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                                <?php
                                    $x = "Hello world!";
                                    $y = 'Hello world!';

                                    echo $x;
                                    echo "<br>";
                                    echo $y;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="row">
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">Null</h6>
                        <p class="text-muted card-sub-title">Dalam sintak koding, “null” dapat digunakan untuk mengisi kolom atau variabel yang tidak memiliki nilai. 
                        Sebagai contoh, pada PHP, sintak koding untuk mengisi variabel dengan nilai “null” adalah sebagai berikut: $var = null;</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php
                                $a = 0;
                                echo "a is " . is_null($a) . "<br>";

                                $b = null;
                                echo "b is " . is_null($b) . "<br>";

                                $c = "null";
                                echo "c is " . is_null($c) . "<br>";

                                $d = NULL;
                                echo "d is " . is_null($d) . "<br>";
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><div class="row">
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">Object</h6>
                        <p class="text-muted card-sub-title">Tipe data object dibuat dengan tujuan agar para programmer terbiasa dengan OOP.
                            Tipe data object bisa berupa bilangan, variabel atau fungsi.
                            Data ini dapat dimasukkan ke dalam kode program sehingga meringkas beberapa fungsi dan memperkecil ukuran file.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php
                                class Car {
                                    public $color;
                                    public $model;
                                    public function __construct($color, $model) {
                                    $this->color = $color;
                                    $this->model = $model;
                                    }
                                    public function message() {
                                    return "My car is a " . $this->color . " " . $this->model . "!";
                                    }
                                }
                                
                                $myCar = new Car("red", "Volvo");
                                var_dump($myCar);
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div><div class="row">
        <div class="col-lg-140 col-md-12">
            <div class="card custom-card" id="thumb">
                <div class="card-body ht-100p">
                    <div>
                        <h6 class="card-title mb-1">String</h6>
                        <p class="text-muted card-sub-title">String PHP adalah urutan karakter yaitu, digunakan untuk menyimpan dan memanipulasi teks.
                             PHP hanya mendukung set 256 karakter sehingga tidak menawarkan dukungan Unicode asli.</p>
                    </div>
                    <div class="text-wrap">
                        <div class="example">
                            <div class="row">
                            <?php
                                $x = "Hello world!";
                                $y = 'Hello world!';

                                echo $x;
                                echo "<br>";                                          
                                echo $y;
                                echo "<br>";
                                echo "Hello";
                                echo 'Hello';
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