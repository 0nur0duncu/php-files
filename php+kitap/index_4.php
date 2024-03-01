<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="POST">

    Username:<br>
    <input type="text" name="kullanici">
    Password:<br>
    <input type="password" name="sifre">
    <button>Login!</button>
    </form>

    <?php 
        
        $var1 = 10;
        $var2 = '10';

        if($var1 == $var2){
            echo "equal <br>";
        }

        if($var1 === $var2):
            echo "equal";
        endif;
        

        if($var1 > 10 or $var2 < 10){
            echo "$var1";
        }elseif($var1 < 10 or $var2 > 10){
            echo "$var2";
        }else{
            echo "no";
        }
        echo "<br>";

        if($var1 > 10 or $var2 < 10):
            echo "$var1";
        elseif($var1 < 10 or $var2 > 10):
            echo "$var2";
        else:
            echo "no";
        endif;
        echo "<br>";

        $statue = ($var1 === $var2) ? true : false;
        var_dump($statue);
        echo "<br>";

        $var3 = 3;

        switch($var3){

            case 1:echo "Bir <br>";break;
            case 2:echo "İki <br>";break;
            case 3:echo "Üç <br>";break;
            default:echo "overload";break;
        }

        $var4 = 5;

        switch($var4):

            case 1:echo "Bir <br>";break;
            case 2:echo "İki <br>";break;
            case 3:echo "Üç <br>";break;
            case 4:
            case 5:
            case 6:
                echo "Overload <br>";break;
            default:break;

        endswitch;

        if($_POST){
            $u_name = "onur";
            $u_pass = "123";
            $form_name = $_POST["kullanici"];
            $form_pass = $_POST["sifre"];
            if($u_name != $form_name){
                echo "wrong username";
            }elseif($form_pass != $u_pass){
                echo "wrong password";
            }else{
                echo "Welcome...";
            }
        }

    ?>

</body>
</html>