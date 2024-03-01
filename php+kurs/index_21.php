<?php
    
    $metin      =   "<span style='color: red;'>Onur Oduncu</span>";
    $aranan     =   "/<\/[^>]+>/";
    $degisen    =   "";
    $sonuc      =   preg_replace($aranan,$degisen,$metin);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    // 0? 0 olsun ya da olmasın \s? boşluk olsun olmasın

    $metin      =   "Merhaba benim numara 0546 954 93 95 dir";
    $desen     =   "/ 0?\s?[0-9]{3}\s?[0-9]{3}\s?[0-9]{2}\s?[0-9]{2}/";

    $sonuc      =   preg_match_all($desen,$metin);

    if($sonuc):
        echo "Girilen metinden telefon numarası alındı.";
    else:
        echo "girilen metinde telefon numarası yok";
    endif;

    $metin      =   "Merhaba benim doğum tarihi 06-04-1947dir";
    $desen     =   "/[0-9]{2}[\.\-\/][0-9]{2}[\.\-\/][0-9]{4}/";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";
    $desen     =   "/\d{1,2}[\.\-\/]\d{1,2}[\.\-\/]\d{1,4}/";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    $metin      =   "araç plakam 26 xxx 578plaka";
    $desen     =   "/\d{1,2}\s[a-z]{1,3}\s\d{1,3}/i";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $desen     =   "/\d{1,2}\s[a-z]{1,3}\s\d{1,3}/i";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";


    $metin      =   "http://www.onuroduncu@gmail.com benim e mail adresimdir.";
    $desen     =   "/(?:http\:\/\/)?([^\/]+)/";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $desen     =   "/(http(s)?:\/\/)?(www\.)?[0-9a-zA-Z\.\:\+\-\#\%\~\@]{2,256}\.[a-z]{2,6}\b[0-9a-zA-Z\.\:\+\-\#\%\~\@]*/";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";

    $metin      =   "benim adresim info@ekstraegitim.com.tr dur.";
    $desen     =   "/(\w+)@([a-z]+)\.([a-z]{2,})(.[a-z]{2}|) /";

    preg_match_all($desen,$metin,$sonuc);

    echo "<pre>";
    print_r($sonuc);
    echo "</pre>";














?>

