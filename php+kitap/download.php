<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        echo "<pre>";
        print_r($_FILES);
        echo "</pre>";

        $valid_types = ["png","gif","jpg","jpeg"];
        $max_file_size = 1024*1024*5;
        for($i = 0; $i < count($_FILES['file']['name']);$i++):
            $file = $_FILES['file']['tmp_name'][$i];
            $filename = $_FILES['file']['name'][$i];
            $extension = explode('/',$_FILES['file']['type'][$i])[1];
            if($_FILES['file']['error'][$i] == 0){
                if(in_array($extension,$valid_types)){
                    if($_FILES['file']['size'][$i] <= $max_file_size){
                        if(move_uploaded_file($file,"C:\\Users\\onur\\Downloads\\".$filename)):
                            echo "File downloaded<br>";
                        else:
                            echo "Process failed.<br>";
                        endif;
                    }else{
                        echo "Size of file is overflow 5MB.<br>";
                    }
                }else{
                    echo "Valid extensions : png , gif , jpg , jpeg<br>";
                }
            }else{
                echo "Error occured.<br>";
            }
        endfor;

       

    ?>

</body>
</html>