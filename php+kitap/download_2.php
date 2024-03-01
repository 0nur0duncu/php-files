<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        for($i = 0 ; $i < count($_FILES['file']['size']); $i++):
            $ext = getimagesize($_FILES['file']['tmp_name'][$i]);
            echo "<pre>";
            print_r($ext);
            echo "</pre>";
            $extension = explode("/",$ext['mime']);
            $image_name = md5(rand(0,99999));
            $image_name .= ".$extension[1]";
            if(move_uploaded_file($_FILES['file']['tmp_name'][$i],$image_name)){
                echo "$image_name is downloaded successfully.";
            }else{
                echo "$image_name is not downloaded.";
            }


        endfor;
    
    
    ?>
</body>
</html>