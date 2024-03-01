<?php



    $tarih  =   date_create(); //nesne dizisidir.

    echo "<pre>";
    print_r($tarih);
    echo "</pre>";

    foreach($tarih as $key => $value){
        echo $key." = ".$value."<br>";
    }
    //görüldüğü gibi sonuç döndürmüyor.

    echo "<br>";


    $mytarih     =   date_create("2023-12-05"); //yıl-ay-gün

    date_date_set($mytarih,2022,5,28); //data_create yi düzenledi.
    //başa sıfır yazıp yazılmaması sorun yaratabilir.
    //date_date_set($mytarih,2022,5,00); //hata çıkarabilir.

    echo "<pre>";
    print_r($mytarih);
    echo "</pre>";

    $zamanDamgasi       =   date_timestamp_get($mytarih);
    //datetimezone nesnesinin timestamp ını aldı.
    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_timestamp_set($mytarih,time()); // Unix zaman damgası değerini atar.
    //datetimezone nesnesinin timestamp ını aldı.
    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";


    $zamanDamgasi   =   date_create_from_format("j-M-Y","10-Nov-1938");
    //yazacağımız değere uygun format yazılır.
    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    $dtobj      =   date_create("1919-05-19");
    date_time_set($dtobj,5,7,55,25);

    $formatla   =   date_format($dtobj,"j-M-Y");
    //datetime nesnesini istediğimiz formata dönüştürür.

    

    echo "<pre>";
    print_r($formatla);
    echo "</pre>";


    $zamanDamgasi       =   date_create("1998-03-06");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"+3 hour");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"-7 hour");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"+3 day");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"+3 year");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"+3 month"); //minute,second,millisecond

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"+55 millisecond");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_modify($zamanDamgasi,"+3 second");

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    date_add($zamanDamgasi,date_interval_create_from_date_string("+3 hour"));

    echo "<pre>";
    print_r($zamanDamgasi);
    echo "</pre>";

    






?>
