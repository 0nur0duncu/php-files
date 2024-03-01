<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        $number_1 = rand(1,6);
        $number_2 = rand(1,6);

        echo '<img src="die'.$number_1.'.jpg">';
        echo '<img src="die'.$number_2.'.jpg">';

        echo "<br>";
        echo abs(-467)."<br>";
        echo sqrt(65)."<br>";
        echo pow(3.14,2)."<br>";
        echo abs(-467)."<br>";
        echo fmod(10,3)."<br>";
        echo log(10)."<br>";
        echo log10(5)."<br>";
        echo log1p(10)."<br>";
        echo log(10,3)."<br>";
        echo exp(5)."<br>";
        echo hypot(3,4)."<br>";
        echo pi()."<br>";
        $numbers = array(1,7,5,6,7);
        echo min($numbers)."<br>";
        echo max($numbers)."<br>";
        echo sin(45)."<br>";
        echo cos(45)."<br>";
        echo tan(45)."<br>";
        echo acos(45)."<br>";
        echo asin(45)."<br>";
        echo atan(45)."<br>";


        echo base_convert(83,10,16)."<br>";
        echo bindec(110)."<br>";
        echo decbin(45)."<br>";
        echo hexdec('ee')."<br>";
        echo dechex(45)."<br>";
        echo octdec('77')."<br>";
        echo decoct('647')."<br>";
        echo deg2rad('77')."<br>";
        echo rad2deg(2*pi())."<br>";
        echo rad2deg(M_PI)."<br>";
        echo rad2deg(2*M_PI)."<br>";

        echo round(3.55,1,PHP_ROUND_HALF_ODD)."<br>";
        echo round(3.55,1,PHP_ROUND_HALF_UP)."<br>";
        echo round(3.55,1,PHP_ROUND_HALF_DOWN)."<br>";
        echo round(3.55,1,PHP_ROUND_HALF_EVEN)."<br>";

        echo ceil(M_PI)."<br>";
        echo floor(M_PI)."<br>";

        echo rand()."<br>";
        echo rand(1,5)."<br>";
        echo mt_rand()."<br>";
        echo mt_rand(1,5)."<br>";
        echo random_int(1,10)."<br>";
        echo getrandmax()."<br>";
        echo mt_getrandmax()."<br>";

    
    ?>
    

</body>
</html>