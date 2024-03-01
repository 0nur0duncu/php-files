<?php 
    session_start();

    $pre_defined_user = "admin";
    $pre_defined_password = "admin";

    if(trim($_POST['username']) == "" || trim($_POST['password']) == "" || trim($_POST['auth']) == ""){
        echo "Do not leave empty space<br>";
        echo "<a href='index_19d.php'>[Back]</a>";
    }else if(($_POST['username'] != $pre_defined_user) and ($_POST['password'] != $pre_defined_password)){
        echo "Username or Password is not true.<br>";
        echo "<a href='index_19d.php'>[Back]</a>";
    }else if(($_POST['auth'] != $_SESSION['result'])){
        echo "Auth result is not true.<br>";
        echo "<a href='index_19d.php'>[Back]</a>";
    }else{
        $_SESSION['log_in'] = "ok";
        $_SESSION['user'] = $_POST['username'];

        if(isset($_POST['remember_me'])){
            setcookie("rememberCookie",$_POST['username'],time()+60*60);
        }
        header("Location:index_19d.php");
    }
?>