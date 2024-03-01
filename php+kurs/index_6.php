<?php 

    $var1 = "hello new world";

    $arr = explode(" ",$var1);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $var1 = "hello-new-world";
    $arr = explode("-",$var1,2); //limitten sonraki - ye dokunmadı.

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $arr = explode(" ",$var1,4);

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $var1 = "hello-new-world";
    $arr = explode("-",$var1,-1); //son elemanı sildi.

    echo "<pre>";
    print_r($arr);
    echo "</pre>";
    

    $var1 = "hello-new-world";
    $arr = explode("-",$var1,-2); //son iki elemanı sildi.

    echo "<pre>";
    print_r($arr);
    echo "</pre>";

    $var2 = ["merhaba","cesur","yeni","dünya"];

    echo implode("-",$var2)."<br />";
    echo implode($var2)."<br />";


    $var3 = ["merhaba",array(1,2,3)];
    list($deger1,$deger2) = $var3;

    echo $deger1."<br />";
    echo "<pre>";
    print_r($var3);
    echo "</pre>";

    $var3 = ["merhaba",array(1,2,3)];
    list($deger1,list($deger2)) = $var3;

    echo $deger1."<br />";
    echo $deger2."<br />";

    $var4 = ["merhaba",array(1,array(4),3)];
    list($deger1,list($deger2,list($deger3))) = $var4;

    echo $deger1."<br />";
    echo $deger3."<br />";

    $dizi1 = [ 0 =>1,2,3,4,5];
    $dizi2 = array(0 =>6,7,8,9,array(0,1,2,3,4));
    //sayısal indislerde indisler yaniden oluşturulur.

    echo "<pre>";
    print_r(array_merge($dizi1,$dizi2));
    print_r(array_merge_recursive($dizi1,$dizi2));
    echo "</pre>";

    $dizi1 = [ "a" =>1,2,3,4,5];
    $dizi2 = array("a" =>6,7,8,9,array(0,1,2,3,4));
    $dizi3 = ["a" => 5];

    echo "<pre>";
    print_r(array_merge($dizi1,$dizi2)); //aynı alfanumeric indise sahip değerlerden 2.dizideki değer kullanılır.
    print_r(array_merge_recursive($dizi1,$dizi2,$dizi3));//aynı alfanumeric indise sahip değerlerden yeni dizi oluşturulur. yeniden indislenir.
    echo "</pre>";

    $anahtar = [1,2,3];
    $deger = [4,5,6];

    $dict = array_combine($anahtar,$deger);

    echo "<pre>";
    print_r($dict);
    echo "</pre>";

    $anahtar = ["a" => 1,2,3];
    $deger = ["a" => 4,5,6];

    $dict = array_combine($anahtar,$deger);//anahtarın sadece değerlerine degerinde sadece değerlerine bakar diğer kısımlarla ilgilenmez.

    echo "<pre>";
    print_r($dict);
    echo "</pre>";

    $anahtar = [[0,1],2,3];
    $deger = [[3,4],5,6];

    $dict = array_combine($anahtar,$deger);

    echo "<pre>";
    print_r($dict);
    echo "</pre>";

    

?>