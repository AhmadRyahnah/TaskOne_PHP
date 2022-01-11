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

    $alpha = range('A', 'Z');
    $k = 4;
    for ($i = 0; $i <= 4; $i++) {
        for ($j = $i; $j > 0; $j--)
            echo $alpha[$j];
        for ($k = 0; $k <= 4 - $i; $k++)
            echo $alpha[$k];
        echo "<br>";
    }



    echo "<br>EX4<br>";

    echo "<br>EX5<br>";
    echo "<br>EX6<br>";

    function factorial($n)
    {
        $factorial = 1;
        for ($i = $n; $i >= 1; $i--) {
            $factorial *= $i;
        }
        return $factorial;
    }
    echo factorial(5);

    
    echo "<br>EX7<br>";
    $S1 = 0;
    $S2 = 1;
    $n = 15;
    echo $S1 . " , ";
    echo $S2 . " , ";
    for ($i = 2; $i < $n; $i++) {
        $Sn = $S1 + $S2;
        $S1 = $S2;
        $S2 = $Sn;
        echo $Sn . " , ";
    }

    echo "<br>EX8<br>";
    echo "<br>EX9<br>";
    echo "<table border=1>";
    for ($i = 1; $i <= 6; $i++) {
        echo "<tr><br>";
        for ($j = 1; $j <= 5; $j++) {
            echo "<td>$i * $j = " . $i * $j . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>EX10<br>";
    echo "<br>EX11<br>";
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
    echo "<h3>";
    $alpha = range('A', 'Z');
    $k = 0;
    for ($i = 0; $i <= 4; $i++) {
        for ($j = 4; $j > $i; $j--)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        for ($k = 0; $k <= $i; $k++)
            echo "&nbsp; " . $alpha[$k] . "&nbsp;&nbsp;&nbsp; ";
        echo "<br>";
    }
    for ($i = 0; $i <= 3; $i++) {
        for ($j = 0; $j < $i; $j++)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        for ($k = 3; $k >= $i; $k--)
            echo "&nbsp; &nbsp;" . $alpha[3 - $k] . "&nbsp;&nbsp;&nbsp;&nbsp;";

        echo "<br>";
    }
    echo "</h3>";

    ?>
</body>

</html>