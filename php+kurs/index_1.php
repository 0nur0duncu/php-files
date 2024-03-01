<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <?php 
        
        $var_1 = 14.5; //integer frag increase.

        echo ++$var_1."<br>";
        echo --$var_1."<br>";
        
        $a = array(1 => 2,2 => 3,3 => 4);
        $b = array(4 => 5,5 => 6,6 => 7);
        $c = $a + $b;
        print_r($c);
        echo "<br>";
        $c = ($a + $b);
        print_r($c);
        echo "<br>";
        var_dump($a == $b);

        $fruits_1 = array("fruit1" => "apple","fruit2" => "peanut");
        $fruits_2 = array("fruit2" => "apple","fruit3" => "peanut");
        echo "<br>";
        var_dump($fruits_1 == $fruits_2);

        $fruits_1 = array("fruit1" => "apple","fruit2" => "peanut");
        $fruits_2 = array("fruit1" => "apple","fruit2" => "peanut");
        echo "<br>";
        var_dump($fruits_1 == $fruits_2);

        $fruits_1 = array("apple" , "peanut");
        $fruits_2 = array("apple" , "peanut");
        echo "<br>";
        var_dump($fruits_1 == $fruits_2);

        $fruits_1 = array("apple" , "peanut");
        $fruits_2 = array("orange" , "peanut");
        echo "<br>";
        var_dump($fruits_1 == $fruits_2);

        $fruits_1 = array(0 => "apple" , 1 => "peanut");
        $fruits_2 = array(0 => "orange" , 1 =>  "peanut");
        echo "<br>";
        var_dump($fruits_1 == $fruits_2);

        $fruits_1 = array(0 => "apple" , 1 => "peanut");
        $fruits_2 = array("apple" ,"peanut");
        echo "<br>";
        var_dump($fruits_1 == $fruits_2);
        echo "<br>";
        var_dump($fruits_1 === $fruits_2); //order and content.

        //special operators = . , `(altGr +;+space) \ @ (error operator don't show)
        // new this instanceof (condition)? ():()

        echo "<br>";
        //echo `ping -n 3 "www.google.com.tr"`;
        echo "<br>";

        $d = null ?? "yanlis"; //null control
        echo "<br>";
        echo $d;
        echo "<br>";
        echo 8 <=> 8;
        echo "<br>";
        echo 8 <=> 5;
        echo "<br>";
        echo 5 <=> 8;
        echo "<br>";
    
    
    
    
    
    ?>

</body>
</html>