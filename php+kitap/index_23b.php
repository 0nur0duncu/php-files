<?php 
    
    $connection = mysqli_connect('localhost','onur','1234','world');

    if($connection -> errno >0){
        die("Connection error ERROR CODE".$connection -> errno);
    }
    
    /* $connection -> autocommit(false);

    $SQL1 = "insert into `citizens` set name='yuuri',surname='slovensky';";
    $Q1 =$connection -> query($SQL1);

    $SQL2 = "insert into `citizens` set name='maave',surname='trust';";
    $Q2 =$connection -> query($SQL2);

    if($Q1 and $Q2){
        $connection -> commit();
        echo "inserted";
    }else{
        $connection -> rollback();
        echo "Error happened";
    } */

    echo "<br>";
    $SQL = "select * from `citizens` LIMIT 5";
    $Q1 = $connection -> query($SQL);

    $ROW = mysqli_fetch_row($Q1);

    foreach($ROW as $i ):
        echo "$i<br>";
    endforeach;

    while($ROW = mysqli_fetch_assoc($Q1)){
        echo "<pre>";
        print_r($ROW);
        echo "</pre>";
    }

    mysqli_free_result($Q1);

    echo "<br>";
    $SQL2 = "select * from `citizens` LIMIT 5";
    $Q2 = $connection -> query($SQL2);

    while($OBJ = $Q2 -> fetch_object()){
        echo $OBJ -> id."<br>";
        echo $OBJ -> name."<br>";
        echo $OBJ -> surname."<br>";
    }


    

    mysqli_free_result($Q2);
    $connection -> close();

?>