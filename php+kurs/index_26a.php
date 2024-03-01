<?php



      $dosyaadi         =     "abc.txt"; //   / kullanılır klasörlerde

      $dosyabul            =     basename($dosyaadi);

      echo '<br>'.$dosyabul.'<br>'; //sadece dosya adini buldu.

      $dizinbul         =     dirname($dosyaadi);

      echo '<br>'.$dizinbul.'<br>';

      $pathinfo         =     pathinfo($dosyaadi);

      echo '<pre>';
      print_r($pathinfo);
      echo '</pre>';

      $realpath         =     realpath($dosyaadi);

      echo '<br>'.$realpath.'<br>';

      $filetype         =     filetype($dosyaadi);

      echo '<br>'.$filetype.'<br>'; // file-dir

      $fileowner        =     fileowner($dosyaadi);

      echo '<br>'.$fileowner.'<br>'; // admin -> 0, group -> sahibinin grubu
      // diğer kullanıcılar web sitesini kullananlar

      $fileinot         =     fileinode($dosyaadi);

      echo '<br>'.$fileinot.'<br>'; // node numarası
      //düğümü yoksa 0 dir.

      $fileperm        =     fileperms($dosyaadi); // dosya erişim izinleri

      echo '<br>'.$fileperm.'<br>';

      $filesize         =     filesize($dosyaadi);

      echo '<br>'.$filesize.'<br>'; // 11 byte

      $filectime        =     filectime($dosyaadi);   //dosya yaratılma tarihi

      echo '<br>'.$filectime.'<br>';

      echo '<br>'.date("d.m.Y H:i:s".$filectime).'<br>';

      $filemtime        =     filemtime($dosyaadi);   //dosya değiştirme tarihi

      echo '<br>'.date("d.m.Y H:i:s".$filemtime).'<br>';
      $fileatime        =     fileatime($dosyaadi);   //dosya son erişim tarihi

      echo '<br>'.date("d.m.Y H:i:s".$fileatime).'<br>';


?>