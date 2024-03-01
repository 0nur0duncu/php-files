<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
</head>
<body>

    <form action="download_2.php" method="post" enctype="multipart/form-data">
        <!-- <input type="file" name="file"> #single file -->
        <input type="file" name="file[]" multiple="multiple"> <!-- multiple file -->
        <input type="submit" value="Save File">
    </form>


</body>
</html>