<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=7">
    <title>Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <form action="sig_in.php" method="post" class="form-signin">
        <table>
            <tr>
                <th>
                    Name - Surname(Necessary) :
                </td>
                <td>
                    <input type="text" name="nameSurname">
                </td>
            </tr>
            <tr>
                <th>
                    Password(Necessary) :
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <th>
                    Password(Please again) :
                </td>
                <td>
                    <input type="password" name="password_check">
                </td>
            </tr>
            <tr>
                <th>
                    City :
                </td>
                <td>
                    <?php
                        include "index_13b.php"; 
                        echo '<select name="city">';
                            for($i = 0; $i < count($cities); $i++)
                                echo '<option value="'.$cities[$i].'">'.$cities[$i].'</option>';
                        echo "</select>";
                    ?>
                </td>
            </tr>
            <tr>
                <th>
                    Gender :
                </td>
                <td>
                    <input type="radio" name="gender" value="male" checked=true>Male
                    <input type="radio" name="gender" value="female">Female
                </td>
            </tr>
            <tr>
                <th>
                    Hobbies :
                </td>
                <td>
                    <input type="checkbox" name="hobbies[]" value="book">Reading Book<br>
                    <input type="checkbox" name="hobbies[]" value="swim">Swimming<br>
                    <input type="checkbox" name="hobbies[]" value="bicycle">Riding bicycle<br>
                    <input type="checkbox" name="hobbies[]" value="drive">Driving<br>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Submit" style="float: right;" >
                </td>
        </table>
    </form>  

</body>
</html>