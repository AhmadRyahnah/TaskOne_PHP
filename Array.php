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
    echo "EX2<br>";
    $colors = array("Green", "Red", "White");

    echo "<ul>";
    foreach ($colors as $color) {
        echo "<li>$color</li>";
    }
    echo "</ul>";


    echo "EX3<br>";
    $cities = array("Italy" => "Rome", "france" => "paris", "Germany" => "Berlin", "Greece" => "Athens");
    foreach ($cities as $city => $capital) {
        echo "<h3>The capital of $city is $capital</h3>";
    }


    echo "EX4<br>";
    $colors = array("Green", "Red", "White");

    for ($i = 0; $i < count($colors); $i++) {
        if ($i === 0) {
            echo "<h3>$colors[$i]</h3>";
        }
    }


    echo "EX5<br>";
    $numbers = array(1, 2, 3, 4, 5);
    $entry = "$";
    array_splice($numbers, 3, 0, $entry);
    foreach ($numbers as $number) {
        echo "$number" . " ";
    }




    echo "<br>EX6<br>";

    $fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
    asort($fruits);
    foreach ($fruits as $x => $fruit) {
        echo "<h3> $x = $fruit</h3>";
    }



    echo "EX7<br>";
    $sampleInput = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62,
    65, 64, 68, 73, 75, 79, 73
    ";
    $Array = explode(',', $sampleInput);
    $Total = 0;
    $ArrayLength = count($Array);
    foreach ($Array as $temp) {
        $Total += $temp;
    }
    $avg = $Total / $ArrayLength;
    echo "Average Temperature is : " . $avg . "";
    sort($Array);
    echo " <br>List of five lowest temperatures :";
    for ($i = 0; $i < 5; $i++) {
        echo $Array[$i] . ", ";
    }
    echo "<br>List of five highest temperatures :";
    for ($i = ($ArrayLength - 5); $i < ($ArrayLength); $i++) {
        echo $Array[$i] . ", ";
    }


    echo "EX8<br>";


    echo "EX9<br>";


    echo "EX10<br>";
    echo "EX11<br>";
    echo "EX11<br>";
    echo "EX12<br>";

    ?>
</body>

</html>