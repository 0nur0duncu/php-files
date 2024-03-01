<?php

    $zaman1      =   date_create("2023-08-05"); //yıl - ay -gün
    $zaman2      =   date_create("1998-06-03"); //yıl - ay -gün

    $islem       =   date_diff($zaman1,$zaman2);

    echo '<pre>';
    print_r($islem);
    echo '</pre>';

    $formatla   =   $islem -> format("%Y yıl<br>%m ay<br>%d gün");

    echo $formatla."<br>";
    

    $formatla_gun       =   $islem -> format("%d");
    $formatla_ay       =   $islem -> format("%m");
    $formatla_yil       =   $islem -> format("%Y");

    echo $formatla_gun."--".$formatla_ay."--".$formatla_yil."<br>";

    
    setlocale(LC_ALL, 'tr_TR.UTF-8');
    $zaman1     =    strftime("%e %B %Y %A\n", mktime(0, 0, 0, 12, 22, 1978));

    $islem  = iconv("LATIN5","UTF-8",$zaman1);

    echo '<br>'.$islem.'<br>';

    $zaman      =   date("Y-m-d");

    $yeni_tarih =   strtotime(strftime($zaman));
    echo '<br>'.$zaman.'<br>';
    echo '<br>'.$yeni_tarih.'<br>';

    $islem      =   strtotime("-1 year -3 month -5 day -3 hour");
    $duzenle    =   date("d.m.Y H.i.a",$islem);

    echo '<br>'.$islem.'<br>';
    echo '<br>'.$duzenle.'<br>';
    

    $zaman_damgasi      =   strtotime("1980-12-08");

    echo $zaman_damgasi;

    $sor        =       date_sun_info(date("U"),36.659697, 29.155629);
    //google map enlem boylam bilgisi ben neredeyim.
    echo '<pre>';
    print_r($sor);
    echo '</pre>';

    echo '<br>'.date("H.i.a",$sor["sunrise"]).'<br>';
    echo '<br>'.date("H.i.a",$sor["sunset"]).'<br>';

    foreach($sor as $key => $value):
        echo    $key."===>>".$value."<br>";
    endforeach;

    $sun_rise       =   date_sunrise(date("U"),SUNFUNCS_RET_TIMESTAMP,36.659697, 29.155629);

    echo '<br>'.date("H:i:s",$sun_rise).'<br>';

    $sunset     =   date_sunset(date("U"),SUNFUNCS_RET_TIMESTAMP,36.659697, 29.155629);

    echo '<br>'.date("H:i.s",$sunset).'<br>';


?>