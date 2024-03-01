<?php 

    $connection = mysqli_connect('localhost','onur',"1234",'world');
    
    $connection -> set_charset("UTF8");
    /* 
    #First alternative
    mysqli_set_charset($connection,'UTF');

    if (mysqli_connect_errno()>0){

        die("Connection Error".mysqli_connect_errno());
    }
    mysqli_close($connection);
    */

    if($connection ->connect_errno){
        die("Connection Error".$connection->connect_errno);
    }

    //include 'index_23b.php';

    /* $SQL = "INSERT INTO `citizens` SET name='ahmet',surname='oduncu'"; */
    //$QUERY = mysqli_query($connection,$SQL);
    
    /* $SQL = "INSERT INTO `citizens` (name,surname) values ('daniel','rusky');";
    $SQL .= "INSERT INTO `citizens` (name,surname) values ('hazel','rose');";
    $SQL .= "INSERT INTO `citizens` (name,surname) values ('roselyn','alter');";
    $QUERY = mysqli_multi_query($connection,$SQL); 
    //$connection -> multi_query($connection,$SQL);
    */

    //$SQL = "update `citizens` set surname='rosevelt' where surname='rusky';";

    $SQL = "delete from `citizens` where id=15;";

    $QUERY = mysqli_query($connection,$SQL);
    

    /* if($QUERY){
        echo "succesfully<br>";
        echo "Number of Affected rows :".mysqli_affected_rows($connection);
        //echo "Number of Affected rows :".$connection -> affected_rows;
        echo "last insert id :".mysqli_insert_id($connection)."<br>";
        echo "last insert id :".$connection -> insert_id."<br>";

    }else{
        echo "failed";
    } */

    if($QUERY){
        echo $connection -> affected_rows." row affected."; 
    }else{
        echo "error"; 
    }
    
    $connection -> close();



?>