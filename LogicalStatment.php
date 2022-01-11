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

    echo "<br>EX1<br>";
    $year = 2013;
    if ($year % 4 === 0) {
        echo "$yaer is a leap year";
    } else {
        echo "$year is a not leap year";
    }


    echo "<br>EX2<br>";

    $temperature = 27;
    if ($temperature < 20) {
        echo "It is winter Time";
    } else {
        echo "It is Summer Time";
    }


    echo "<br>EX3<br>";

    $firstNum = 2;
    $secondNum = 2;
    if ($firstNum === $secondNum) {
        echo ($firstNum + $secondNum) * 3;
    } else {
        echo ($firstNum + $secondNum);
    }
    echo "<br>EX4<br>";

    $firstNum = 28;
    $secondNum = 22;
    if ($firstNum === $secondNum) {
        echo ($firstNum + $secondNum) * 3;
    } else {
        echo "false";
    }


    echo "<br>EX5<br>";
    $num=20;
    if($num<=0){
        echo"false";
    }else
    echo $num*3;


    echo "<br>EX6<br>";
    $Num = 50;
    if ($Num >= 20 && $Num <= 50) {
        echo "True";
    } else {
        echo "False";
    }


    echo "<br>EX7<br>";

    $numbers = [1, 5, 9];
    echo max($numbers);

    echo "<br>EX8<br>";
    $bill = 350;
    if ($bill <= 50) {
        echo $bill * 2.5 . " JOD ";
    } elseif ($bill <= 150) {
        echo (50 * 2.5 + ($bill - 50) * 5) . " JOD ";
    } elseif ($bill <= 250) {
        echo (50 * 2.5 + 100 * 5 + ($bill - 150) * 6.2) . " JOD ";
    } else {
        echo (50 * 2.5 + 100 * 5 + 100 * 6.2 + ($bill - 250) * 7.5) . " JOD ";
    }


    echo "<br>EX9<br>";
    function calc($NumOne, $NumTwo, $operations)
    {
        if ($operations === "addition") {
            echo $NumOne + $NumTwo;
        } elseif ($operations === "subtraction") {
            echo $NumOne - $NumTwo;
        } elseif ($operations === "multiplication") {
            echo $NumTwo * $NumOne;
        } elseif ($operations === "division") {
            echo $NumOne / $NumTwo;
        }
    }
    calc(10, 15, "addition");



    echo "<br>EX10<br>";

    $age = 15;
    if ($age >= 18) {
        echo "You can vote";
    } else {
        echo "Is no Eligible to Vote";
    }

    echo "<br>EX11<br>";

    $number = -60;
    if ($number > 0) {
        echo "Positive";
    } elseif ($number < 0) {
        echo "Negative";
    } else {
        echo "Zero";
    }
    echo "<br>EX12<br>";
    $marks = array(60, 86, 95, 63, 55, 74, 79, 62, 50);
    $sum = 0;
    for ($i = 0; $i < count($marks); $i++) {
        $sum += $marks[$i];
    }
    $avg = $sum / count($marks);
    echo " Your Average $avg and your Score ";
    switch ($avg) {
        case ($avg < 60):
            echo "F";
            break;
        case ($avg < 70):
            echo "D";
            break;
        case ($avg < 80):
            echo "C";
            break;
        case ($avg < 90):
            echo "B";
            break;
        case ($avg < 100):
            echo "A";
            break;
    }


    ?>
</body>

</html>