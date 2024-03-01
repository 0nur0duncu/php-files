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
        $number1 = rand(0,9);
        $number2 = rand(0,9);
        $result = "$number1 + $number2 = ?";
        $_SESSION['result'] = $number1 + $number2;
        if(!isset($_SESSION['log_in'])){
    ?>
    <form action="index_19e.php" method="post">
            <table>
                <tr>
                    <td>username : </td>
                    <td><input type="text" name="username" value="<?=@$_COOKIE['rememberCookie']?>"></td>
                </tr>
                <tr>
                    <td>password :</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><?=$result?></td>
                    <td><input type="text" name="auth"></td>
                </tr>
                <tr>
                    <td>Remember me</td>
                    <td><input type="checkbox" name="remember_me"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" style="width:100%" value="log_in"></td>
                </tr>
            </table>
        <?php 
            }else{
                echo "Welcome (<a href='index_19f.php'>sig out</a>)";
            }
        ?>
    </form>
</body>
</html>