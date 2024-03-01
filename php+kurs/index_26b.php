<?php



      $dosyaadi         =     "abc.txt";

      echo '<pre>';
      print_r(fstat(fopen($dosyaadi,"r"))); // aslında 13 değer döner alttakiler aynıdır.
      echo '</pre>';
       

      echo '<pre>';
      print_r(stat($dosyaadi)); // aslında 13 değer döner alttakiler aynıdır.
      echo '</pre>';

      clearstatcache();


      $dosyaadi2        =     "bcd.txt";

      touch($dosyaadi2); // php dosyası ile aynı dizine

      if(touch($dosyaadi2)){

            echo "dosya oluştu<br>";

      }else{
            echo "oluşma sırasında hata oluştu<br>";
      }
      /* if(@unlink("asdas.txt")){
            echo "dosya silindi.<br>";
      }else{
            echo "dosya yok.<br>";
      } */

      copy("abc.txt","bcd.txt"); // taşıma işlemi de yapar.

      rename("bcd.txt","axyz.txt");

      echo '<br>'.fileperms("abc.txt").'<br>'; //belirli bir formatta döndürür.

      echo '<br>'.sprintf("%o",fileperms("abc.txt")).'<br>'; // 8lik tabana çeviririr. son 4 hane alınır.

      echo '<br>'.substr(sprintf("%o",fileperms("abc.txt")),-4).'<br>'; // sunucu için geçerli değerdir.

      chmod("abc.txt",0777);

      echo '<br>'.fileperms("abc.txt").'<br>'; //belirli bir formatta döndürür.

      echo '<br>'.sprintf("%o",fileperms("abc.txt")).'<br>'; // 8lik tabana çeviririr. son 4 hane alınır.

      echo '<br>'.substr(sprintf("%o",fileperms("abc.txt")),-4).'<br>'; // windowsta pek sağlıklı çalışmaz ama her ikisinde de çalışır.

      //ftp sunucu da ayar yapılabilir.

      $modu_degistir          =     chmod("abc.txt",0755);

      if($modu_degistir){

            echo "dosya modu başarıyla değiştirildi.";


      }else{

            echo "dosya modunu değiştirirken hata oluştu.";

      }

  

?>