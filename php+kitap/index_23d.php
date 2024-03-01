<?php 

    $connection = mysqli_connect('localhost','root','','world');

    if($connection -> errno > 0) die("ERROR");

    /* $SQL = mysqli_prepare($connection,"insert into `citizens` (name,surname) values (?,?)");

    function addCitizen(string $name,string $surname){
        global $SQL;
        mysqli_stmt_bind_param($SQL,"ss",$name,$surname);
        mysqli_stmt_execute($SQL);
    }
    

    addCitizen("joseph","elms");
    addCitizen("yuuri","mia");

    mysqli_stmt_close($SQL); */

    /* $SQL = $connection -> prepare("insert into `citizens` (name,surname) values (?,?)");

    function addCitizen(string $name,string $surname){
        global $SQL;
        $SQL -> bind_param("ss",$name,$surname);
        $SQL -> execute();
    }
    

    addCitizen("adam","mae");
    addCitizen("george","dogen");

    $SQL -> close(); */

    $QUERY = "select * from `citizens` order by 'name' DESC limit 5";
    $SQL = $connection ->  query($QUERY);

    echo "<hr>";
    while($ROW = $SQL -> fetch_array()){
        echo $ROW['name']." - ";
        echo $ROW['surname'];
        echo "<hr>";
    }

    $QUERY = "select * from `citizens` order by 'name' DESC limit 5";
    $SQL = $connection ->  query($QUERY);
    
    echo "<hr>";
    while($ROW = $SQL -> fetch_assoc()){
        echo $ROW['name']." - ";
        echo $ROW['surname'];
        echo "<hr>";
    }

    $QUERY = "show tables from `world`";
    $SQL = $connection ->  query($QUERY);

    echo "<hr>";
    while($ROW = $SQL -> fetch_row()){
        echo $ROW["0"];
        echo "<hr>";
    }


    $SQL -> free_result();
    $connection -> close();


?>