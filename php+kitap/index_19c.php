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

        if(!isset($_SESSION['timeit'])){
            $_SESSION['timeit'] = time() + 60*60;
            $_SESSION['name'] = "onur";
            $_SESSION['promotion'] = "admin";
        }
        if(time() > $_SESSION['timeit']){
            session_destroy(); // session is finished manually.
        }

        //unset($_SESSION[''])//specific value delete.

        $_SESSION['info'] = array(
            "name" => "onur",
            "surname" => "oduncu",
            "grade" => array(80,90,75)
        );

        echo "<pre>";
        print_r($_SESSION['info']);
        echo "</pre>";
        
    ?>
</body>
</html>