<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="text-wrap">
        <div class="example">
            <div class="p-3 bg-light mb-3">
                <nav class="nav main-nav flex-column flex-md-row justify-content-center">
                    <a class="nav-link active"   href="javascript:void(0);">Data Type</a>
                    <a class="nav-link"   href="javascript:void(0);">About</a>
                    <a class="nav-link"   href="javascript:void(0);">Pages</a>
                    <a class="nav-link"   href="javascript:void(0);">Custom</a>
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
                                $cars = array("Volvo", "BMW", "Toyota");
                                echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
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
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
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
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
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
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
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
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
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
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
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
                        <p class="text-muted card-sub-title">Array adalah struktur data yang digunakan untuk menyimpan kumpulan nilai atau elemen. Dalam PHP, array memungkinkan kita untuk mengelompokkan data menjadi satu variabel, yang memudahkan pengelolaan dan manipulasi data.</p>
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