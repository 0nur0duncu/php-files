<?php



      $dosya = "abc.txt";

      if(file_exists($dosya)){
            $file = fopen($dosya,"r+");
            echo "<br>Dosya basariyla acildi.<br>";
      }else{
            echo "<br>Dosya bulunamadi<br>";
      }

      if(is_readable($dosya)){
            echo "<br>Dosya okunabilir.<br>";
      }else{
            echo "<br>Dosya okunamaz.<br>";
      }

      if(is_writable($dosya)){
            echo "<br>Dosya yazilabilir.<br>";
      }else{
            echo "<br>Dosya yazilamaz.<br>";
      }

      if(is_executable($dosya)){
            echo "<br>Dosya calistirilabilir.<br>";
      }else{
            echo "<br>Dosya calistirilamaz.<br>";
      }

      fclose($file);

      $eklentiId = "gd";

      if(extension_loaded($eklentiId)){
            echo '<br>'."Eklenti yüklüdür.".'<br>';
      }else{
            echo '<br>'."Eklenti yüklü degildir.".'<br>';
      }

      /* phpinfo(INFO_MODULES); */

      





?>