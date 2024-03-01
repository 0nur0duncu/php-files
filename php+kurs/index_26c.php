<?php



      $dirname = "Dosyalarım";

      // klasörlere dizin denir.
      mkdir($dirname,0777); // tüm yetkileri vererek klasör oluşturdu.
      // ayarlayamazsa önbellekten okuyor olabilir.

      chmod($dirname,"0555");

      clearstatcache();

      echo '<br>'.fileperms($dirname).'<br>';
      echo '<br>'.substr(sprintf("%o",fileperms($dirname)),-4).'<br>';

      $dirs       =     scandir(".",1); // varsayılan ikinci parametre 0 dır normal sırada 1 ise tersi sırada sıralar.çift sayı 0 tek 1


      echo '<pre>';
      print_r($dirs);
      echo '</pre>';
      
      $dirs1       =     glob("*"); // data gelişmiş dosya gösterir '.' ve '..' içermez.
      $dirs2       =     glob("Dosyalarım/*"); // data gelişmiş dosya gösterir '.' ve '..' içermez.
      $dirs3       =     glob("*",GLOB_MARK); // kalsörlerin sonuna / koyar.
      $dirs4       =     glob("*",GLOB_NOSORT); // dosyalarda sıralama yapmaz.
      $dirs5       =     glob("*",GLOB_NOCHECK); // belirli kalıplara göre sıralamaz.
      $dirs6       =     glob("*",GLOB_ONLYDIR); // sadece klasörleri gösterir.
      $dirs7       =     glob("*.txt",GLOB_BRACE); // gelişletilmiş arama kalıbına göre listeler.
      $dirs7       =     glob("*.{txt,js}",GLOB_BRACE); // birden fazla uzantıda bulur.
      $dirs7       =     glob("i*",GLOB_BRACE); // i ile başlayanları bulur.
      $dirs7       =     glob("*e*",GLOB_BRACE); // ortada e olanları getirir.
      $dirs7       =     glob("*t",GLOB_BRACE); // uzantı da dahil bakar uzantının sonu t ile bitiyorsa bulur
      $dirs8       =     glob("*",GLOB_BRACE); // dizin bozulmuşsa bir şey döndürmez.

      echo '<pre>';
      print_r($dirs1);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs2);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs3);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs4);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs5);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs6);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs7);
      echo '</pre>';
      echo '<pre>';
      print_r($dirs8);
      echo '</pre>';

?>