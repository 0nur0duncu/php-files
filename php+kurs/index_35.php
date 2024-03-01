<?php



      $isim = "onur";
      $soyisim = "oduncu";

      unset($isim,$soyisim); // araya virgül koyarak birden fazla eleman silinebilir.

      //echo '<br>'.$isim.'<br>'; // tanımsız değişken hatası verir.

      $hayvanlar = array("kedi","köpek","kuş","balık");

      unset($hayvanlar[0],$hayvanlar[2]);

      //echo "<br>".$hayvanlar[2]."<br>"; // tanımsız değişken hatası verir.

      $_SESSION["isim"] = "onur";
      unset($_SESSION["isim"]);


      $isim = "onur";

      var_export($isim); // çözümlenebilir gösterir özellikle api ler için önemlidir.

      $numara = 123456;
      echo "<br>";
      var_export($numara);
      echo "<br>";

      $departman = array("IT","HR");

      echo "<pre>";
      var_export($departman); // bu şekilde de yazılabilir.
      echo "</pre>";



      class c1{
            public $v1 = 10;
            public $v2 = "onur";
            public function f1(){}
      }

      $obj1 = new c1;

      echo '<pre>';
      var_export($obj1);
      echo '</pre>';


      echo sprintf("onur oduncu");
      $isim = "onur";
      $soyisim = "oduncu";

      echo sprintf("<br>%s %s<br>",$isim,$soyisim);

      printf("<br>%s %s<br>",$isim,$soyisim);

      $format = "Benim adım=%s,soyadım=%s";
      printf($format,$isim,$soyisim);
      echo "<br>";

      echo sprintf("%c",65); // ALT + sayı => ascii karakter
      echo "<br>";
      echo sprintf("%c%c%c",65,70,75); // ALT + sayı => ascii karakter
      echo "<br>";
      echo sprintf("%.2e",300000000);
      echo "<br>";

      $metin = "PHP";

      echo sprintf("%-5s",$metin);
      echo "<br>";
      echo sprintf("%5s",$metin);

      echo "<br>";
      $i = 1;
      while($i <= 10000):
            printf("%05d<br>",$i);
            $i .= 0;
      endwhile;

      echo '<pre>';
      print_r(getenv()); // farklı işletim sistemlerinde farklı sonuçlar verir
      echo '</pre>';

      //putenv("ISIM=onur");

      echo getenv("ISIM");


?>