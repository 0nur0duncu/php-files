<!DOCTYPE html>
<html lang="en">

      <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
      </head>

      <body>
            <?php

                  $dosyaAdi         =     "abc.txt";

                  $akis             =     fopen($dosyaAdi,"w");

                  $icerik           =     "Merhaba cesur ve yeni dünya\n"; 

                  $yazildi_mi       =     fwrite($akis,$icerik);

                  if($yazildi_mi):
                        echo '<br>icerik basariyla yazildi<br>';
                  else:
                        echo '<br>icerik yazilamad.i<br>';
                  endif;

                  $silindi_mi       =     ftruncate($akis,7);

                  if($silindi_mi):
                        echo '<br>icerik basariyla silindi<br>';
                  else:
                        echo '<br>icerik silinemedi.i<br>';
                  endif;

                  fclose($akis);

                  $url        =     "https://www.trendyol.com/butik/liste/2/erkek";
                  $arr        =     file($url);

                  $icerik = "";
                  foreach($arr as $anahtar => $deger):
                        $icerik .= $deger;
                  endforeach;

                  $akis       =     fopen("axyz.txt","w");

                  $silindi_mi       =     fwrite($akis,$icerik);

                  if($silindi_mi):
                        echo '<br>icerik basariyla silindi<br>';
                  else:
                        echo '<br>icerik silinemedi.i<br>';
                  endif;
                  fclose($akis);

                  $dosyaAdi         =     "bxyz.txt";
                  $url              =     "https://www.trendyol.com/";
                  $oku              =     file_get_contents($url);      // FILE_APPEND alta ek yaparak yazmya devam eder.

                  //echo $oku;

                  file_put_contents($dosyaAdi,"Hello"); // sonuna ekledi.


                  $dosyaAdi         =     "cxyz.csv";

                  $akis             =     fopen($dosyaAdi,"r");


                  while($cozumle =  fgetcsv($akis)){
                        $oku        =     $cozumle[0];
                        $duzelt     =     iconv("iso-8859-9","utf-8",$oku)."<br>";
                        $dizi       =     explode(";",$oku);
                        echo '<pre>';
                        print_r($dizi);
                        echo '</pre>';
                  }

                  fclose($akis);

                  $icerik           =     "mustafa,kemal,atatürk";      // array olursa explode ye gerek yok.
                  $dosyaAc          =     fopen($dosyaAdi,"a");
                  fputcsv($dosyaAc,explode(",",$icerik));
                  fclose($dosyaAc);




            ?>
      </body>

</html>