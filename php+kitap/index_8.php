<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        //cryptology
        $willEncryptText = "Ahmet Oduncu";
        echo "md5 = ".md5($willEncryptText)."<br>";
        echo "sha1= ".sha1($willEncryptText)."<br>";
        echo "sha1(md5)= ".sha1(md5($willEncryptText))."<br>";
        echo "crc32 = ".crc32($willEncryptText)."<br>";
        echo "crypt = ".crypt($willEncryptText,'nc_')."<br>";
        $encryptText = base64_encode($willEncryptText);
        echo $encryptText."<br>";
        echo base64_decode($encryptText)."<br>";
        $crypt =password_hash($willEncryptText,PASSWORD_DEFAULT);
        echo $crypt."<BR>";
        $crypt =password_hash($willEncryptText,PASSWORD_BCRYPT);
        echo $crypt."<BR>";
        var_dump(password_verify($willEncryptText,$crypt));
        echo "<br>";
        var_dump(password_verify('sadfsd',$crypt));
        echo "<br>";
        $trimmed = sha1(base64_encode(md5(base64_encode($willEncryptText))));
        echo $trimmed."<br>";
        echo substr($trimmed,0,32);

    ?>

</body>
</html>