<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

        header("Cache-Control: no-cache,no-store,must-revalidate");
        header("Expires: Sun, 01 Jul 1995 00:00:00 GMT");

        #header("Location: index_2.php");
        #header("Location: https://ibrahimcevruk.com",TRUE,301);
        #header("Location: index_1.php",TRUE,301);
        #header("refresh:3; url=index_5.php");
        header("content-type:text/html; charset=utf-8");
        echo strtoupper("Başımın ağrısı sürekli artıyor.");
        

        /* header("Content-Type: text/plain");
        header("Content-Disposition: attachment; filename= onur.txt");
        readfile("C:\\Users\\onur\\Downloads\\onur.txt") */
        #header('Content-Disposition: form-data; name="<form>"; filename="onur.txt"');
        

    ?>

</body>
</html>