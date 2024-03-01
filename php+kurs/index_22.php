<?php
    


    $zaman      =   date_default_timezone_get();

    echo "Zaman dilimi =".$zaman;

    $zaman_dilimleri    =   timezone_identifiers_list();

    echo "<pre>";
    #print_r($zaman_dilimleri);
    echo "</pre>";

    $yeni_zaman_dilimi      =   date_default_timezone_set("Europe/Istanbul"); //1= değişti
    date_default_timezone_set("Europe/Istanbul");

    #setlocale(LC_ALL,"tr_TR","tr","turkish"); //strftime da çalışır.
    $zaman      =   date_default_timezone_get();

    echo "Zaman dilimi =".$zaman;

    $suan       =   date("d.m.Y H:i:s");

    echo "<br><br>Şu an = ".$suan."<br>";

    $zaman      =   date("U"); // Unix zaman değeri

    echo $zaman."<br>";


    $unixden        =   date("d.m.Y H:i:s",$zaman);

    echo "<br>".$unixden."<br>"; //GMT+2 UTC+3 tr saati

    var_dump(checkdate(13,12,2030)); // miladi takvime göre geçerli midir?
    echo "<br>";

    $simdi      =   getdate(); //dizi olarak döndürür.

    echo "<pre>";
    print_r($simdi);
    echo "</pre>";

    echo "<br>".$simdi["yday"]."<br>";

    $simdilokal     =   localtime();

    echo "<pre>";
    print_r($simdilokal);
    echo "</pre>";

    $ekstra     =   localtime($zaman,true); //manual olarakta belirtilebilir.

    echo "<pre>";
    print_r($ekstra);
    echo "</pre>";

    
    $ekstra70     =   localtime(true); //başlangıç zamanının bilgilerini verir.1 Ocak 1970

    echo "<pre>";
    print_r($ekstra70);
    echo "</pre>";

    var_dump(date("U") == time());

    echo "<br>";

    $mkt    =   mktime(13,15,45,7,3,2023); // değer girilmezse anlık zaman

    echo $mkt."<br>";

    $mktden        =   date("d.m.Y H:i:s",$mkt);

    echo $mktden."<br>";

    $micros     =   microtime();

    echo    $micros."<br>"; //mikrosaniye olarak gösterir.

    echo "Tarih bilgisi = ".date("d.m.Y H:i:s",explode(" ",$micros)[1])."<br>micros = ".explode(" ",$micros)[0];

    $deger      =   gettimeofday();

    echo "<pre>";
    print_r($deger);
    echo "</pre>";

    /* 
    Array
    (
        [sec] => 1691158316 //zaman damgası
        [usec] => 780416 //mikro saniye
        [minuteswest] => -180   //greenwich batısı
        [dsttime] => 0  //yaz saati uygulaması
    )
    */

    $deger      =   gettimeofday(true); //zaman damgasını döndürür.

    echo "<pre>";
    print_r($deger);
    echo "</pre>";

    echo date("d.m.Y H:i:s",$deger);


?>  