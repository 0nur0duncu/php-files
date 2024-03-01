<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>
                    Username :
                </td>
                <td>
                    <input type="text" name="username">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="checkbox" name="remind" checked=true> Remember me
                </td>
            </tr>
            <tr>
                <td>

                </td>
                <td>
                    <input type="submit" value="Sign in" style="width: 100%;">
                </td>
            </tr>
        </table>
    </form>

    <?php 
        if($_POST){
            if(isset($_POST['remind'])){
                setcookie("user['username']",$_POST['username'],time()+60*60);
                setcookie("user['password']",$_POST['password'],time()+60*60);
            }else{
                echo "there is no cookie information.";
            }
            if (isset($_COOKIE["user"])){
                echo "<pre>";
                print_r($_COOKIE['user']);
                echo "</pre>";
            }
        }
        
    
    ?>

</body>
</html>