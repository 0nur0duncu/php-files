<?php session_start()
// ayar dosyası içine konulup çalıştığımız her dosyaya bu şekilde dahil edilmelidir. en başa
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php
      
      
      
            // session ların geçerlilik süresi php.ini dosyası içerisinde bulunan session session.gc_maxlifetime içerisinde yazar. varsayılan 1440 saniyedir.

            $_SESSION["adi"] = "onur";
            $_SESSION["soyadi"] = "oduncu";
            $_SESSION["sepetim"] = array("gömlek","kıravat","pantolon");

            // cookie gibi birden fazla değil sadece 1 tane oluşturur.
            // tarayıcı kapatılır kapatılmaz sessionslar kaybolur.
            // session_start() görünce gelirler.
            // xamppp temp içerisnden belirli silinme süresi sonrası silinirler.

            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';


            session_destroy(); // session verilerini yokeder.
            unset($_SESSION["adi"]); // adi isimli session u siler.

            echo '<pre>';
            print_r($_SESSION);
            echo '</pre>';
      
      
      
      
      ?>
</body>
</html>