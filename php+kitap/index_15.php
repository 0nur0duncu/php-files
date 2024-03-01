<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
        <div>
            <form action="" method="GET">
                Username : <input type="text" name="username">
                Password : <input type="password" name="password" >
                <input type="submit" value="Send">
            </form>
        </div>

    <?php 
        const variable1 = 10;
        $variable3 = 10;
        $total = fn(int $variable2) => $variable2 + variable1 + $GLOBALS['variable3'];
        echo $total("10")."<br>";

        /* echo "<pre>";
        print_r($_SERVER);
        echo "</pre>"; */
        echo $_SERVER['HTTP_USER_AGENT']."<br>";

        echo $_GET['username']."<br>";
        echo $_GET['password']."<br>";
        setcookie('adSoyad','onur oduncu',time() + (24*60*60));
        echo $_COOKIE['adSoyad']."<br>";
        echo "<pre>";
        print_r($_COOKIE);
        echo "</pre>";

        session_start();

        if(!isset($_SESSION['adSoyad'])){
            $_SESSION['adSoyad'] = "onur oduncu";
        }

        echo $_SESSION['adSoyad'];
        
        echo "<pre>";
        print_r($_SESSION);
        echo "</pre>";

        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        echo $_REQUEST['username']."<br>";

    
    ?>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload Image">

</form>

</body>
</html>