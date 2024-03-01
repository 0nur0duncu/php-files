<?php
    

    $metin = "Lorem ipsum dolor şit amet, consectetur adipisicing elit. Esse, perferendis.Lorem, ipsum dolor.";

    $desen1 = "/Lorem/";
    
    $arr1 = preg_split($desen1,$metin);

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";

    $desen2 = "/ /";
    
    $arr2 = preg_split($desen2,$metin);

    echo "<pre>";
    print_r($arr2);
    echo "</pre>";

    $desen3 = "//";
    
    $arr3 = preg_split($desen3,$metin);

    echo "<pre>";
    print_r($arr3);
    echo "</pre>";

    $desen4 = "//u"; //sonuna u ekleyerek ş ğ gibi türkçe harfleri görüntüleyebiliriz.
    
    $arr4 = preg_split($desen4,$metin);

    echo "<pre>";
    print_r($arr4);
    echo "</pre>";



?>