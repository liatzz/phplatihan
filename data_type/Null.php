<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Null</title>
</head>
<body>
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
</body>
</html>