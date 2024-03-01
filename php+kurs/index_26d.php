<?php



      echo '<br>'.getcwd().'<br>';
      chdir(getcwd()."\Dosyalarım");
      echo '<br>'.getcwd().'<br>';
      chdir(getcwd()."\..");
      echo '<br>'.getcwd().'<br>';

      // önbellekte tutanlar cache gibi

      $dizin            =     "./";
      $dizinAc          =     opendir($dizin);

      echo '<br>'.$dizinAc.'<br>';  //Resource id #3

      $oku              =     readdir($dizinAc);

      echo '<br>'.$oku.'<br>';      // . yazar.

      while(($oku = readdir($dizinAc)) != false)
            if(filetype($oku) == 'dir' && $oku != '.' && $oku !='..')
                  echo $oku.'<br>';
      closedir($dizinAc); // dizini kapatır. yoksa bellek dolar kilitlenir.


      $dosya            =     "abc.txt";
      //$dosya            =     "https://pusula.pau.edu.tr/Login.aspx";

      $dosyaAc          =     fopen($dosya,'r');

      if($dosyaAc){
            echo '<br>'."Dosya başarıyla açıldı.".'<br>';
      }else{
            echo '<br>'."Dosya açılırken hata meydana geldi.".'<br>';
      }


      while(($oku = fgets($dosyaAc,20)) != false) // her stırda 20 karakter okuyarak yazdırır.hepsini
            echo $oku;

      // bütün karakterler 1, türkçe karakterler 2, tırnak 2, enter 1 dir.

      $second           =     fopen("axyz.txt","r");
      while(!feof($second)){
            $oku        =     fgetc($second);
            echo $oku;
      }

      // url olursa tüm html kodlarını okur.

      
      $oku        =     fgetc($second); // getchar sadece ilk karakteri döndürür.
      echo '<br>'.$oku.'<br>';
      fclose($second);

      while(($oku = fgetc($dosyaAc)) != false) // her stırda 20 karakter okuyarak yazdırır.hepsini
            echo $oku;




      $dosyaKapat       =     fclose($dosyaAc);


      if($dosyaKapat){
            echo '<br>'."Dosya başarıyla kapatıldı.".'<br>';
      }else{
            echo '<br>'."Dosya kapatılırken hata meydana geldi.".'<br>';
      }

      // url ye yazılmaz.

      











?>