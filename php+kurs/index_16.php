<?php
    

    $metin = "_Merhaba ben Onur oduncu ve ben bir 9bilgisayar mühendisiyim.";

    $desen = "/sen/";
    preg_match($desen,$metin,$sonuc1); // ilk eşlesmede durur.
    preg_match_all($desen,$metin,$sonuc2);

    echo "<pre>";
    print_r($sonuc1);
    echo "</pre>";

    if($sonuc1):
        echo "<pre>";
        print_r($sonuc2);
        echo "</pre>";
    else:
        echo  "Eşleşme bulunamadı...";
    endif;

    $desen = "/\w\w/";
    preg_match($desen,$metin,$sonuc1);
    preg_match_all($desen,$metin,$sonuc2);

    echo "<pre>";
    print_r($sonuc2);
    echo "</pre>";

    $metin  =   "Lorem ipsum dolor sit, amet consectetur adipisicing elit: Ipsum tenetur rerum eveniet, optio odit sapiente ipsa error enim dignissimos reprehenderit? Lorem ipsum dolor sit amet.";

    $desen = array("/Lorem/","/dolor/","/\./","/:/");
    $degistir = array("Lrm","dolar",",",";"); //boş gördüğü kısımları siler.
    $sonuc = preg_filter($desen,$degistir,$metin);
    echo $sonuc."<br>";
    $sonuc = preg_replace($desen,$degistir,$metin); //replace kullanımı daha çok tavsiye edilir.
    echo $sonuc."<br>";

    $metin = array("Lorem","ipsum","dolor");
    $sonuc = preg_filter($desen,$degistir,$metin);
    echo "<pre>";
    print_r($sonuc); //metin ne ise sonuçta öyle döner.
    echo "</pre>";





?>