<?php 
    $xml = new SimpleXMLElement("xml_dosyasi1.xml",0,true);
    echo "<pre>";
    print_r($xml);
    echo "</pre>";

    echo $xml -> personel[0] -> adSoyad ."<hr>";

    foreach($xml -> children() as $anne):
        foreach($anne -> children() as $cocuk):
            echo $cocuk ."<br>";
        endforeach;
        echo "<hr>";
    endforeach;


    foreach($xml -> children() as $mama):
        foreach($mama -> children() as $key => $value):
            echo $value ."<br>";
        endforeach;
        echo "<hr>";
    endforeach;

?>