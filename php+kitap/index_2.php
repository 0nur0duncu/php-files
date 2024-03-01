<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="3">
    <title>Document</title>
</head>
<body>

    <?php 
    //single comment line
    #single comment line
    /* 
    multiple comment lines
    1
    2
    3
    4
    */

    $variable1 = "string 50";
    $variable2 = 12;
    $variable3 = 12.5;
    $variable4 = false;
    $variable6 = [1,2,3,'a'];
    $variable7 = array("onur","oduncu","mugla");
    $variable8 = null;
    $variable10 = "50string";
    
    echo $variable1.$variable2."<br>";
    echo "tuttuğum sayı = ".$variable2."<br>";
    echo "tuttuğum sayı = $variable3"."<br>";
    echo 'sayı = $variable4'."<br>";
    echo "sayı1 = ".$variable2."<br>sayı2=".$variable3."<br>";
    $variable9 = "onur";
    $$variable9 = "oduncu";
    echo $variable9.$onur."<br>";
    echo (int)$variable1."<br>";
    echo (int)$variable10."<br>";
    echo (int)$variable3."<br>";
    print($variable1.="<br>");
    print $variable1.="<br>";
    print gettype($variable4);
    echo gettype($variable1)."<br>";
    echo gettype($variable2)."<br>";
    echo gettype($variable3)."<br>";
    echo gettype($variable1)."<br>";

    settype($variable3,"int");
    echo gettype($variable3)."<br>";

    echo gettype($variable8)."<br>";
    unset($variable8);
    #echo gettype($variable8)."<br>"; //undefined error


    define('PI', 3.14159);
    echo PI."<br>";
    #echo pi."<br>"; //error
    echo defined("PI")."<br>";
    echo defined("E")."<br>"; //""

    #const PI = 3.14159;
    const e = 2.71;
    #echo PI."<br>"; //error
    echo e."<br>";

    echo '<pre style ="color:blue">';
    print_r($variable7);
    echo "</pre>";

    define("CITIES",array("Muğla","Antalya","Bursa"));
    echo CITIES[0]."<br>";
    define(
        "NUMBERS",
        array(
            1 => "Bir",
            2 => "İki",
            3 => "Üç",
            4 => "Dört",
            "5" => [6,7,8,9,10]
        )
);
    echo '<pre style ="color:blue;">';
    print_r(NUMBERS);
    echo "</pre>";
    echo NUMBERS[5][2]."<br>";
    ?>


    
</body>
</html>