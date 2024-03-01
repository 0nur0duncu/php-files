<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        session_start();
        echo $_SESSION['name']." - ";
        echo $_SESSION['surname']."<br>";
/*         ini_set("session.gc_maxlifetime",200);
        echo ini_get("session.gc_maxlifetime"); */
    
    ?>

</body>
</html>