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

    //   *****************EX1*****************
    echo "************Ex1****************<br>";
    $string = "Ahmad Ryahnah";
    echo strtoupper($string) . "<br>" . strtolower($string) . "<br>" . ucfirst($string)  . "<br>" . ucwords($string) . "<hr>";


    //   *****************EX2*****************
    echo "************Ex2****************<br>";
    $str1 = '085119';
    echo substr(chunk_split($str1, 2, ':'), 0, -1) . "<hr>";
    //   *****************EX3*****************
    echo "************Ex3****************<br>";
    $str2 = 'I am a full stack developer at orange coding academy';
    $word = "orange";
    if (strpos($str2, $word)) {
        echo "Word Found" . "<hr>";
    } else {
        echo "Not Found" . "<hr>";
    }

    //   *****************EX4*****************
    echo "************Ex4****************<br>";

    $str5 = 'www.orange.com/index.php';
    $split = explode("/", $str5);
    echo end($split) . "<hr>";

    //   *****************EX5*****************
    echo "************Ex5****************<br>";
    $str6 = 'info@orange.com';
    $split = explode("@", $str6, -1);
    echo end($split) . "<hr>";

    //   *****************EX6*****************
    echo "************Ex6****************<br>";
    $str6 = 'info@orange.com';
    echo substr($str6, -3) . "<hr>";


    //   *****************EX8*****************
    echo "************Ex8****************<br>";
    $str8 = 'That new trainee is so genius.';
    echo preg_replace('/that/i', 'the', $str8) . "<hr>";

    //   *****************EX9*****************
    echo "************Ex9****************<br>";

    $string1 = str_split('dragonball');
    $string2 = str_split('dragonboll');
    for ($i = 0; $i < count($string1); $i++) {
        if ($string1[$i] !== $string2[$i]) {
            echo "First difference between two strings at postion $i : $string1[$i] vs $string2[$i] " . "<hr>";
        }
    }

    //   *****************EX10*****************
    echo "************Ex10****************<br>";
    $str10 = "Twinkle, twinkle, little star";
    var_dump(explode(" ", $str10)) . "<hr>";
    //   *****************EX11*****************
    echo "<hr>" . "************Ex11****************<br>";
    $letter = "a";

    echo ++$letter . "<hr>";
    //   *****************EX12*****************
    echo "************Ex12****************<br>";
    $str12 = "The brown fox";
    $insertWord = "quick ";
    echo substr_replace($str12, $insertWord, 4, 0) . "<hr>";

    //   *****************EX13*****************
    echo "************Ex13****************<br>";
    $str13 = str_split('0000657022.24');
    for ($i = 0; $i < count($str13); $i++) {
        if ($str13[$i] !== '0') {
            echo $str13[$i];
        }
    }
    //   *****************EX14*****************
    echo "<hr>************Ex14****************<br>";
    $str14 = 'the quick brown fox jumps over the lazy dog';

    echo str_replace('fox', '', $str14) . "<hr>";

    //   *****************EX15*****************
    echo "<br>************Ex15****************<br>";
    $str15 = 'The quick brown fox jumps over the lazy dog---';
    echo trim($str15, '-') . "<hr>";

    //   *****************EX16*****************
    echo "************Ex16****************<br>";
    $special = "/*1+2/3*2.2-3/4*3";
    echo str_replace(array("/", "+", "*", "-", "."), " ", $special) . "<hr>";
    //   *****************EX17*****************
    echo "************Ex17****************<br>";

    $str17 = 'The quick brown fox jumps over the lazy dog';
    $arr17 = explode(" ", $str17);
    $arr17 = array_slice($arr17, 0, 5);
    $str17 = implode(" ", $arr17);
    echo $str17 . "<hr>";
    //   *****************EX18*****************
    echo "************Ex18****************<br>";
    $str18 = str_split('2,543.12');
    for ($i = 0; $i < count($str18); $i++) {
        if ($str18[$i] !== ',') {
            echo $str18[$i];
        }
    }
    //   *****************EX19*****************
    echo "<hr>************Ex19****************<br>";
    $letters = 'a';
    echo $letters, " ";
    for ($i = 0; $i < 25; $i++) {

        echo ++$letters . " ";
    }

    ?>
</body>

</html>