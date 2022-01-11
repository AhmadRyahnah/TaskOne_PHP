<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    echo "EX1<br>";
    for ($x = 1; $x <= 10; $x++) {
        if ($x < 10) {
            echo "$x-";
        } else {
            echo "$x" . "\n";
        }
    }

    echo "<br>EX2";

    $sum = 0;
    for ($i = 0; $i <= 30; $i++) {
        $sum += $i;
    }
    $number = 30;
    $Total = $number * ($number + 1) * 0.5;
    echo "<h5>Total Number from 1 to 30 = $Total</h5>";
    echo "<h5>Total Number from 1 to 30 = $sum</h5>";


    echo "EX3<br>";
    $letter = "A";
    // echo ++$letter;
    $n = 5;
    for ($i = 0; $i < $n-1; $i++) {
        for ($j = $n; $j > 0; $j--) {
            echo $letter;
        }
        echo "<br>";
    }






    echo "<br>EX4<br>";

    echo "EX5";
    echo "EX6";
    echo "EX7";
    echo "EX8";
    echo "EX9<br>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr><br>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i * $j = " . $i * $j . " ...... </td>";
        }
        echo "</tr>";
    }
    echo "<br>EX10";
    echo "EX11";
    echo "<br>EX11<br>";

    $n = 5;

    $count = 1;
    for ($i = $n; $i > 0; $i--) {
        for ($j = $i; $j < $n + 1; $j++) {
            echo $count . " ";
            $count++;
        }
        echo "<br>";
    }
    echo "<br>EX12<br>";
    $n = 5;
    $string = "";

    for ($i = 1; $i <= $n; $i++) {

        for ($j = $n; $j > $i; $j--) {
            echo " A";
        }

        for ($k = 0; $k < $i * 2 - 1; $k++) {
            echo  " B";
        }
        echo "<br>";
    }

    for ($i = 1; $i <= $n - 1; $i++) {

        for ($j = 0; $j < $i; $j++) {
            echo " ";
        }

        for ($k = ($n - $i) * 2 - 1; $k > 0; $k--) {
            echo  " * ";
        }
        echo "<br>";
    }
    ?>
</body>

</html>