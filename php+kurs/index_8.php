<?php 


    $arr1 = [5,4,6,7,3,2,7,7,1];

    echo "min = ".min($arr1)."<br />max = ".max($arr1)."<br />";

    echo "<pre>";
    print_r(array_count_values($arr1)); // değer kaç kere tekrar etti onu sayar.
    echo "</pre>";

    $arr2 = array("bir" => 1,"iki" => 2, "uc" => 3);

    echo "<pre>";
    print_r(array_flip($arr2)); // anahtar ve değerler yer değiştirir.
    echo "</pre>";

    $arr3 = array("bir" => 1,"iki" => 2, "uc" => 3);

    echo "<pre>";
    print_r(array_change_key_case($arr3,CASE_UPPER));
    echo "</pre>";


    echo "Toplam = ".array_sum($arr3)."<br />";
    echo "Çarpım = ".array_product($arr3)."<br />";


    echo "<br />".array_rand($arr3,1)."<br />";
    echo "<br />".$arr3[array_rand($arr3,1)]."<br />";

    echo "<pre>";
    print_r(array_rand($arr3,2));
    echo "</pre>";

    echo "<pre>";
    print_r(array_reverse($arr3));
    echo "</pre>";

    $arr4 = $arr3;

    array_push($arr4,array(1,3,2));
    shuffle($arr4); // anahtarlar korunmaz 0 dan başlayarak yazılır.
    echo "<pre>";
    print_r($arr4);
    echo "</pre>";


    ksort($arr1); // keyleri sıralar harf ya da sayi artan şekilde atama şeklinde de yazılabilir.
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    krsort($arr1); // keyleri sıralar harf ya da sayi azalan şekilde
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";


    sort($arr1);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    rsort($arr1);
    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    //yukarıdaki sıralama şekillerinde anahtar değer bozuluyordu.


    //aşağıdaki şekilde bozulmaz.
    $arr5 = ["a"=>4,"b"=>1,"c"=>3,"d"=>2];
    asort($arr5);
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";

    arsort($arr5);
    echo "<pre>";
    print_r($arr5);
    echo "</pre>";

    $harfler = ["a","A","aa","Aa","aaa","AAa","AA","aA"];

    $sayilar=[1,5,7,8,9,6,3];

    natsort($harfler); //büyük küçük harf duyarlı sıralar.
    echo "<pre>";
    print_r($harfler);
    echo "</pre>";

    natcasesort($harfler); //büyük küçük harf duyarsız sıralar.
    echo "<pre>";
    print_r($harfler);
    echo "</pre>";

    array_multisort($harfler,SORT_DESC); //farklı modlarda sıralama yapılabilir.
    echo "<pre>";
    print_r($harfler);
    echo "</pre>";

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";







?>