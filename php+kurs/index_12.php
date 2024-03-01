<?php 
    declare(strict_types=1); //en üste yazılır.
?>

<?php 

    $n1 = array(1,1.2,true);

    echo gettype($n1)."<br />";


    class c1{

        public $n2 = true;

    }

    $o1 = new c1;

    echo gettype($o1)."<br />";

    $n3 = 12.5;

    settype($n3,"integer");

    echo $n3."<br />";

    settype($n3,"boolean");

    echo $n3."<br />";
    var_dump($n3);
    echo "<br />";

    $n4 = "2.14";
    echo gettype($n4)."<br />";

    settype($n4,"float");

    echo $n4."<br />";

    settype($n4,"int");

    echo $n4."<br />";

    settype($n4,"bool");

    echo $n4."<br />";

    unset($n4);

    $n5 = "7";

    echo (string)$n5."<br />";

    $n6 = "*";

    echo (bool)$n6."<br />";

    $n7 = "5";

    intval($n7);

    echo intval($n7)."<br />";
    echo boolval($n7)."<br />";
    echo floatval($n7)."<br />";
    echo doubleval($n7)."<br />";

    $o2 = (object)$n7;

    echo $o2 -> scalar ."<br />";

    intval($n7);

    $n8 = null;

    echo intval($n8)."<br />";
    echo boolval($n8)."<br />";
    echo floatval($n8)."<br />";
    echo doubleval($n8)."<br />";

    $n9 = "18onur";

    echo intval($n9)."<br />";
    echo boolval($n9)."<br />";
    echo floatval($n9)."<br />";
    echo doubleval($n9)."<br />";

    $n10 = "onur18";

    echo intval($n10)."<br />";
    echo boolval($n10)."<br />";
    echo floatval($n10)."<br />";
    echo doubleval($n10)."<br />";


    function f1(int $a,string $b):int{//argümanların bir kopyasını alarak işlem yaptı parametreler
        settype($b,"int");
        return $b;
    }

    $b = "10";
    echo gettype($b)."<br>";
    f1(10,$b);
    echo gettype($b)."<br>";

    $n11 = true;
    $n12 = "12.5";
    $n13 = array(1,2,3);

    class cls1{
        public $a = 5;
        public $b = 10;
    }

    $o1 = new cls1;



    echo "<pre>";
    var_dump($n11);
    echo "<br />";
    var_dump($n12);
    echo "<br />";
    var_dump($n13);
    echo "<br />";
    var_dump($o1);
    echo "</pre>";


    $isimler = array("onur","oduncu","bilgisayar","mühendisliği");

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $v1 = serialize($isimler);

    echo $v1."<br>";

    $v2 = unserialize($v1);

    echo "<pre>";
    print_r($v2);
    echo "</pre>";

    $v3 ='a:5:{i:0;s:4:"onur";i:1;s:6:"oduncu";i:2;s:10:"bilgisayar";i:3;s:14:"mühendisliği";i:4;s:8:"sinifbir";}';

    $v4 = unserialize($v3);

    echo "<pre>";
    print_r($v4);
    echo "</pre>";



    







?>