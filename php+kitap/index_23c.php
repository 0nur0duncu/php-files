<?php 
    $connection = mysqli_connect("localhost","onur","1234","world");

    if($connection -> errno > 0){
        die("It is failed to start database engine.<br>ERROR NO:$connection -> errno");
    }

    $SQL = "select * from `citizens` LIMIT 3";
    $ROWS = $connection -> query($SQL);
    
    echo "<pre>";
    print_r($ROWS -> fetch_row());
    echo "</pre>";
    echo "<pre>";
    print_r($ROWS -> fetch_row());
    echo "</pre>";
    echo "<pre>";
    print_r($ROWS -> fetch_row());
    echo "</pre>";

    $ROWS = $connection -> query($SQL);
    echo "Affected Rows:".$connection -> affected_rows."<br>"; 

    while($i = $ROWS -> fetch_assoc()):
        echo "<pre>";
        print_r($i);
        echo "</pre>";
    endwhile;

    $ROWS = $connection -> query($SQL);
    while($i = $ROWS -> fetch_array(MYSQLI_BOTH)){
        echo "<pre>";
        print_r($i);
        echo "</pre>";
    }
    $ROWS = $connection -> query($SQL);
    while($i = $ROWS -> fetch_array(MYSQLI_NUM)){
        echo "<pre>";
        print_r($i);
        echo "</pre>";
    }

    $ROWS = $connection -> query($SQL);
    while($i = $ROWS -> fetch_array(MYSQLI_ASSOC)){
        echo "<pre>";
        print_r($i);
        echo "</pre>";
    }


    $ROWS -> free_result();
    $connection -> close();



?>