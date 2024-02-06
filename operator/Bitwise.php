<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 60;
        $b = 13;

        // bitwise AND
        $c = $a & $b;
        echo "$a & $b = $c";
        echo "<br>";

        // bitwise OR
        $c = $a | $b;
        echo "$a | $b = $c";
        echo "<br>";

        // bitwise XOR
        $c = $a ^ $b;
        echo "$a ^ $b = $c";
        echo "<br>";

        // Shift Left
        $c = $a << $b;
        echo "$a << $b = $c";
        echo "<br>";

        // Shift Right
        $c = $a >> $b;
        echo "$a >> $b = $c";
        echo "<br>";
    ?>
</body>
</html>