<?php
    
    $metin   =  "Merhaba burası benim kursum ve ben özgürüm.";
    $desen  =   "/(d)(ün)(ya)/"; // kendisi ve kelimeleri

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/(b|k)ur/"; // b ,u ,bur ve kur olarak arar.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $metin   =  "Merhaba hakan hazalin ve hazal.";

    $desen  =   "/ha(?:zal)/";  //içinde sadece hazal geçenleri getirir.hazal olarak

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    $metin  =   "11+ 100=111Bir\n";

    $desen  =   "/\+/"; // özel karakterler için \ koyulur.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/[0-9a-zA-Z]/"; // 0 dan 9 a sayı ve a-z ye şeklinde arar.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/[12=]/"; // sırasıyla 1 2 ve = arar

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/[^1A-Z]/"; //  1 ve A-Z olmayan herşey
    //aralıkların dışında
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/[^ \.11A-Bir]/u"; //^sonrası tüm değerler hariç
    //aralıkların dışında
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/./"; // tüm karakterler alt alta gelir.
    // new line operatörü hariç 
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    $desen  =   "/\w/"; // harf rakam alt çizgi ile eşleşenleri yazar.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/\W/"; // \w dışında kalanları yazar.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/\d/"; // sadece rakamları eşler.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/\D/"; // rakamlar dışındakileri eşler.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/\s/"; // sadece boşluk eşler.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/\S/"; // boşluk dışındakileri eşler.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen  =   "/\+\s1/"; // +boşluk1 olanı arar.
    
    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $metin  =   "Onur Oduncu";
    $desen  =   "/(?<isim>Onur) (?<soyisim>Oduncu)/"; // boşluk konulmazsa yazdırmaz.

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";



?>