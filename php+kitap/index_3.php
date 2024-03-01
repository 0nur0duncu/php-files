<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="5">
    <title>Document</title>
</head>
<body>

    <?php 
    
        $variable1 = 10.5;
        $variable2 = 2.1;
        $variable3 = 12;
        $variable4 = 3;

        echo $variable1 + $variable2."<br>";
        echo $variable1 - $variable2."<br>";
        echo $variable1 / $variable2."<br>";
        echo $variable1 * $variable2."<br>";
        echo $variable1 % $variable2."<br>";
        echo $variable3 % $variable4."<br>";

        $variable5 = $variable1 * $variable2;
        echo $variable5."<br>";
        $variable6 = $variable1++;
        echo $variable6."<br>";
        echo $variable1."<br>";

        $variable7 = '3';
        
        var_dump($variable4 == $variable7);
        echo "<br>";
        var_dump($variable4 != $variable7);
        echo "<br>";
        var_dump($variable4 <> $variable7);
        echo "<br>";
        var_dump($variable4 === $variable7);
        echo "<br>";
        var_dump($variable4 !== $variable7);
        echo "<br>";
        var_dump($variable4 < $variable7);
        echo "<br>";
        var_dump($variable4 > $variable7);
        echo "<br>";
        var_dump($variable4 <= $variable7);
        echo "<br>";
        var_dump($variable4 >= $variable7);
        echo "<br>";

        $bool1 = true && true;
        var_dump($bool1);
        echo "<br>";

        $bool2 = (true && true);
        var_dump($bool2);
        echo "<br>";
        $variable8 = 0;
        $result = @($variable4 /$variable8);
        echo $result."<br>";
        
    
    ?>

</body>
</html>