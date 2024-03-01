<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Document</title>
</head>
<body>


<form action="form_2.php" method="post">
    Kullanici = <input type="text" name="usr1[]" id="">
    sifre = <input type="password" name="pwd1[]" id="">
    <button type="submit">Send1</button>
</form>
<br><br><br>
<form action="form_2.php" method="post">
    Kullanici = <input type="text" name="usr1[]" id="">
    sifre = <input type="password" name="pwd1[]" id="">
    <button type="submit">Send2</button>
</form>
<br><br><br>
<form action="form_2.php" method="post">
    Kullanici = <input type="text" name="usr1[]" id="">
    sifre = <input type="password" name="pwd1[]" id="">
    <button type="submit" onclick="showAlert()">Send3</button>
</form>


    
</body>
</html>