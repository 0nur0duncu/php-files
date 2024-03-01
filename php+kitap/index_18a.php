<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        setcookie('new');
        var_dump(isset($_COOKIE['new']));
        echo "<br>";
        var_dump(empty($_COOKIE['new']));
        echo "<br>";
        setcookie("name","onur");
        setcookie("password","1234",time()+60*60,'/index_18b.php','.php');
        if(isset($_COOKIE['name'])){
            echo $_COOKIE['name']."<br>";
        }else{
            setcookie("name","onur");
            echo $_COOKIE['name']."<br>";
        }
        if(isset($_COOKIE['password']))
            echo $_COOKIE['password']."<br>";
            setcookie("password","1234",time()-1,'/index_18b.php','.php'); // expired cookie will remove.

    ?>
</body>
</html>