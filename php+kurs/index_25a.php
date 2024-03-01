<?php



      /* 
      include()         //önceden eklenip eklenmediği kontrol edilmez.Hata kodu dönse bile anasayfa çalışmaya devam eder.

      include_once()         //önceden eklenip eklenmediği kontrol edilir.Hata kodu dönse bile anasayfa çalışmaya devam eder.

      require()         //önceden eklenip eklenmediği kontrol edilmez.Hata kodu dönerse anasayfa hata verir.

      require_once()         //önceden eklenip eklenmediği kontrol edilir.Hata kodu dönerse anasayfa hata verir.
      */

      include "index_25b.php";//parantez şart değil
      echo $isim." Oduncu<br>";

      include "index_25b.php";//birden fazla kullanmak prof. değil.
      include_once "index_25b.php";//eklendiği için yazdırmadı.

      include "abc.php";
      echo "<br>";

      include "index_25b.php";

      require "abc.php"; // hata verir altı çalışmaz.
      echo "<br>";

      include "index_25b.php";





      




?>