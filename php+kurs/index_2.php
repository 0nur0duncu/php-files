<?php 

    $name = "onur";
    $surname = "oduncu";

    $name_surname = "{$name} {$surname}";
    echo $name_surname;


    $name_cpy = &$name;
    echo "<br/>".$name_cpy;

    $name = "ali";
    echo "<br/>".$name_cpy;

    $$name = "oduncu";

    echo "<br/>".$ali;
    echo "<br/>".$$name;
    echo "<br/>".$name[0].$surname[0];


?>