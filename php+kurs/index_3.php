<?php 

    $a = 5;

    $GLOBALS["c"] = 10;

    function topla(){
        global $b,$c;
        echo $GLOBALS["a"] + $b + $c;
    }

    $b = 10;

    print(topla());

    echo "<br/>".$_SERVER['PHP_SELF']."<br/>";

    echo "<pre>";
    print_r($_GET);
    echo "</pre>";




?>