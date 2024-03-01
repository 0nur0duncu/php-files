<?php 


    $dict = ["a" => 1,"b" => 2,"c" =>3,4,5,6,7,8,9];

    echo "<pre>";
    print_r(array_slice($dict,2,3));
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($dict,-4,3));
    echo "</pre>";

    echo "<pre>";
    print_r(array_slice($dict,-8,3,true));
    echo "</pre>";

    echo "<pre>";
    print_r($dict);
    echo "</pre>";

    /* echo "<pre>";
    print_r(array_splice($dict,3));
    echo "</pre>"; */
    /* echo "<pre>";
    print_r(array_splice($dict,1,2));
    echo "</pre>"; */

    echo "<pre>";
    print_r(array_splice($dict,1,count($dict),"Onur"));
    echo "</pre>";

    $ekle = ["ibo","ali","remzi"]; 
    echo "<pre>";
    print_r(array_splice($dict,1,count($dict),$ekle));
    echo "</pre>";

    echo "<pre>";
    print_r(array_splice($dict,1,0,"pele"));
    echo "</pre>";

    echo "<pre>";
    print_r($dict);
    echo "</pre>";


    $dict2 = array("a" => array("1"=>1,2,3),"b" => array("1" =>4,5,6),"c" => array(7,8,"1" => 9));

    echo "<pre>";
    print_r(array_chunk($dict,3));
    echo "</pre>";

    echo "<pre>";
    print_r(array_column($dict2,"1","c")); // ilk değer aray içindeki indis, ikincisi ise nereye kadar
    echo "</pre>";


    $meyveler_1 = ["a" => "elma","b" => "armut","c" => "kayısı","d" => "portakal"];
    $meyveler_2 = ["a" => "elma","c" => "kayısı","c" => "erik","d" => "portakal"];

    echo "<pre>";
    print_r(array_intersect($meyveler_1,$meyveler_2));
    echo "</pre>";

    echo "<pre>";
    print_r(array_intersect_key($meyveler_1,$meyveler_2));
    echo "</pre>";

    echo "<pre>";
    print_r(array_intersect_assoc($meyveler_1,$meyveler_2));
    echo "</pre>";
    
    echo "<pre>";
    print_r(array_diff($meyveler_1,$meyveler_2));
    echo "</pre>";

    echo "<pre>";
    print_r(array_diff($meyveler_2,$meyveler_1));
    echo "</pre>";

    echo "<pre>";
    print_r(array_diff_key($meyveler_1,$meyveler_2));
    echo "</pre>";

    echo "<pre>";
    print_r(array_diff_assoc($meyveler_1,$meyveler_2));
    echo "</pre>";

    echo "<pre>";
    print_r(array_replace($meyveler_1,$meyveler_2));
    echo "</pre>";

    $arr_1 = [array(1,2,9),3,4];
    $arr_2 = [5,6];

    echo "<pre>";
    print_r(array_replace($arr_1,$arr_2));
    echo "</pre>";

    $arr_3 = [array(7,8),6];

    echo "<pre>";
    print_r(array_replace($arr_1,$arr_3));
    echo "</pre>";

    $arr_4 = ["a" => array(7,8),"b" =>6];

    echo "<pre>";
    print_r(array_replace($arr_1,$arr_4));
    echo "</pre>";

    $arr5 = ["","","araba","motosiklet"];

    echo "<pre>";
    print_r(array_filter($arr5)); // boş değer silmeye yarar.
    echo "</pre>";

    $arr6 = ["a" => 1,1,1,2,2,3];

    echo "<pre>";
    print_r(array_unique($arr6)); // ilk karşılaştığı değeri benzersiz olarak alır, key i tutar.
    echo "</pre>";


    echo "<pre>";
    print_r(range(0,10,2));
    echo "</pre>";

    $arr6 = array_fill(1,5,"onur");

    echo "<pre>";
    print_r($arr6);
    echo "</pre>";

    $arr7 = array_fill_keys($arr6,"onur"); // arr6 değerlerini anahtar yapar ve içini "onur" ile doldurur.

    echo "<pre>";
    print_r($arr7);
    echo "</pre>";

    $ad = "onur";
    $soyad = "oduncu";

    $bilgiler = array("ad" => "ad","soyad" => "soyad");

    echo "<pre>";
    print_r(compact($bilgiler)); // içeren değişken varsa yerleştirir.
    echo "</pre>";
    
    $bilgiler2 = ["ad"];

    echo "<pre>";
    print_r(compact($bilgiler2,"soyad")); // içeren değişken varsa yerleştirir.
    echo "</pre>";

    $arr8 = [9,8,7,6,5,4];

    echo "<pre>";
    print_r(array_keys($arr8,"5")); //değeri 5 olanlardan byeni bir dizi oluşturur.
    print_r(array_values($arr8));
    echo "</pre>";

    $unq = [1,2,3];
    
    echo "<pre>";
    print_r(array_pad($unq,10,"doldurulacak")); // ilk 3 $unq içinden kalanlar bizim istediğimiz şekilde doldurulacak.
    echo "</pre>";


    echo array_search(3,$unq)."<br />"; // indexi döndürülecek.

    echo var_dump(array_key_exists(0,$unq))."<br />";

    var_dump(in_array(2,$unq)); // değer arar varsa true döner.

?>