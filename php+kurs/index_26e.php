<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php

      $url        =     "abc.txt";
      $urlAc      =     fopen($url,"r");

      $konum      =     ftell($urlAc);
      //$oku        =     fpassthru($urlAc); // tek seferde okur.
      echo "Okunmaya hazır olunan konum =".$konum."<br>";
      fseek($urlAc,5);
      $konum      =     ftell($urlAc);
      echo "Okunmaya hazır olunan konum =".$konum."<br>";

      fclose($urlAc);

      $dosyaAdi         =     "abc.txt";
      $url              =     "https://www.n11.com/giris-yap";
/*       header("Content-Description:  File Transfer");
      header("Content-Type:   application/octet-stream");
      header("Content-Disposition:  attachment; filename=".basename($dosyaAdi));
      header("Content-Transfer-Encoding:  binary");
      header("Expires:  0");
      header("Cache-Control:  must-revalidate,  post-check=0,     pre-check=0");
      header("Pragma:   public");
      header("Content-Length: ".filesize($dosyaAdi));
      ob_clean();
      flush();
      readfile($dosyaAdi); */

      



      $arr        =     file($url); // dizi şeklinde döndürür.

      echo '<pre>';
      foreach($arr as $key => $value)
            echo htmlspecialchars($value);
      echo '</pre>';

      $metin            =     readfile($url); // birebir web sitesini getirir.

      echo '<pre>';
      print_r($metin);
      echo '</pre>';


      ?>
</body>
</html>