<?php

use yazilimci1\araba;

    $isimler = array();

    $isimler[] = "onur";
    $isimler[] = "ali";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";


    echo "<hr />";

    $meyveler["elma"] = "elma"; // normal arrayle aynı şekilde çalışır.
    $meyveler[] = "armut";
    
    echo "<pre>";
    print_r($meyveler);
    echo "</pre>";

    echo "<hr />";


    const cicekler = array("papatya","gul","menekse");

    echo cicekler[0];

    echo "<hr />";

    define("araba",array("toyota","hyundai","mercedes"));
    const kitaplar = array("hayvan çifliği","beyaz zambaklar ulkesinde");

    $degerler = array("araba "=> araba,kitaplar,"cicek" => cicekler,$meyveler);

    echo "<pre>";
    print_r($degerler);
    echo "</pre>";

    echo "<hr />";

    $rastgele = []; //bu şekil kullanım sorun yaratabilir arraya şeklinde kullanmak daha mantıklıdır.
    $rastgele[] = 5;
    $rastgele["yedi"] = 7;

    echo "<hr />";

    $rastgele[0] = 9;

    echo "<pre>";
    print_r($rastgele);
    echo "</pre>";

    $rastgele2 = $rastgele;

    $rastgele[0] = 8;
    $rastgele2[1] = 6;
    echo "<pre>";
    print_r($rastgele2);
    echo "</pre>";

    echo "<hr /><pre>";
    print_r(cicekler + $rastgele2);
    echo "</pre>";


    $seker = array([1,2,3],[4,5,6]);

    echo $seker[0][2]."<br />";


    echo "<br />".count(cicekler)."<br />";

    echo sizeof($seker)."<br />";

    echo sizeof($seker,COUNT_RECURSIVE)."<br />"; // ana diziyi de eleman olarak kabul eder sonuc 6 olması gerek ama 8.

    array_pop($seker);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    array_push($seker,5);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    array_unshift($seker,2,3);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    $islem = array_shift($seker);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    echo "<hr /><pre>";
    print_r($islem); // silinen elemanı döndürür.
    echo "</pre>";

    array_unshift($seker[1],4,7);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    array_push($seker[1],2,-4);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    array_pop($seker[1]);
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    array_shift($seker[1]); // indisler tekrardan düzenlenir.
    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    $model = ["i5" => "huawai"];
    array_unshift($seker,["deneme" => 5]);
     // indisler tekrardan düzenlenir.
    print(key($model)); // dizinin göstericisi konumundaki elemanın anahtarını gösterir.

    echo "<pre>";
    print_r($seker);
    echo "</pre>";

    echo "<pre>";
    print_r(current($seker));
    echo "</pre>";

    echo "<pre>";
    print_r(next($seker));
    echo "</pre>";

    reset($seker);
    prev($seker);

    echo "<br />";
    print(key($seker));
    
    

?>