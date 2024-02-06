<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Array</h2>
    <?php
        $cars = array("Volvo", "BMW", "Toyota");
        echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>
    <h2>Integer</h2>
    <?php
        $x = "Hello world!";
        $y = 'Hello world!';

        echo $x;
        echo "<br>";
        echo $y;
    ?>
    <h2>Null</h2>
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
    <h2>Object</h2>
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
    <h2>Boolean</h2>
    <?php 
        $x = true;
        var_dump($x);
    ?>
    <h2>Float</h2>
    <?php  
        $x = 10.365;
        var_dump($x);
    ?>  
    <h2>String</h2>
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
</body>
</html>