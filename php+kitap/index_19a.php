<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
</head>
<body>

    <?php
        session_start();

        $_SESSION['name'] = "onur";
        $_SESSION['surname'] = "oduncu";
        $_SESSION['grade'] = array();
        echo $_SESSION['name']." ".$_SESSION['surname']."<br>";
        if(isset($_SESSION['score'])){
            echo $_SESSION['score'];
        }else{
            $_SESSION["score"] = "100";
            echo "Score is created...";
        }
        echo "<br>";
        if(empty($_SESSION['name']) != false){
            echo $_SESSION['name'];
        }else{
            $_SESSION["name"] = "100";
            echo "name is created...";
        }

        unset($_SESSION['name']);
        unset($_SESSION['surname'],$_SESSION['grade']);
        //echo $_SESSION['name']." ".$_SESSION['surname']."<br>";

        //session_destroy();

        echo "<br>";
        session_start();
        echo ini_get("session.gc_maxlifetime");
        session_destroy();

    
    ?>
    
</body>
</html>