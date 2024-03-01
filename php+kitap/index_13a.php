<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  
    require_once "index_13b.php"; //one time imported
    require_once "index_13b.php";
    require_once "index_13c.php";
    #include "index_13b.php";
    @include "index/index.php";
    if(file_exists("index/index.php")):
        require "index/index.php";
    endif;

    echo sum_args(1,5,7)."<br>";
    echo sum_args_c(2,4,6);

    echo nl2br("\n");

    echo '<label for="cities">City : </label>';
    echo '<select name="cities" id="city">';
    for($i = 0; $i < count($cities); $i++):
        echo '<option value="'.$cities[$i].'">'.$cities[$i].'</option>';
    endfor;
    echo '</select>'
    
    ?>


</body>
</html>