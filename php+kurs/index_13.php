<?php 

    echo 5 + "3"."<br>";
    echo "5" + "5"."<br>";
    /* echo 5 + "a3"."<br>"; //hata verir.*/

    $v1 = "10";

    $v1 += "15";

    echo "$v1<br>";
    
    $v1 .= "15";

    echo "$v1<br>";

    $v1 += "3";

    echo "$v1<br>";

    echo 5 - "3"."<br>";
    echo "5" - "5"."<br>";

    $v2 = 15.3;
    $v3 = 12.3;

    printf("Carpimin Sonucu = %.2f<br>",$v2*$v3);

    $v4 = 0.015;

    echo ceil($v4)."<br>";
    echo round($v4,2)."<br>";
    echo floor($v4)."<br>";


    $v5 = 0.45795;

    $formatla1 = number_format($v5,2);
    $formatla2 = number_format($v5,2,",",".");

    echo $formatla1."<br>";
    echo $formatla2."<br>";

    $v6 = array(7,5,1,4,6,3,2);

    echo min(2,4,5,7,8,9)."<br>";
    echo max($v6)."<br>";

    echo lcg_value()."<br>";

    echo rand(0,1)."<br>"; //sınır değerleri dahildir.

    echo getrandmax()."<br>";

    echo mt_rand(0,1)."<br>";

    echo fmod(5,2)."<br>";

    echo intdiv(7,3)."<br>";

    echo hypot(3,4)."<br>";

        
        
    /**
     * deneme
     *
     * @param  mixed $a
     * @param  mixed $b
     * @return float
     */
    function deneme(int $a,string $b):float{
        /* 
        Bu fonksiyon deneme amaçlıdır.
        */
        return 3;
    }

    deneme(5,3);
    
    echo rad2deg(2*pi())."<br>";
    echo rad2deg(pi()/2)."<br>";
    echo deg2rad(180)."<br>";

    echo hexdec("AB12")."<br>";
    echo dechex(10)."<br>";
    echo bindec(1001)."<br>";
    echo decbin(20)."<br>";
    echo octdec(77)."<br>";


    echo base_convert(100,10,2)."<br>";

    echo "<br>";
    echo M_SQRT2."<br>";
    echo M_SQRT3."<br>";
    echo M_SQRTPI."<br>";

    echo "<br>";
    echo M_LN2."<br>";
    echo M_LN10."<br>";
    echo M_LN10."<br>";

    echo "<br>";
    echo M_PI_2."<br>";
    echo M_PI_4."<br>";
    echo M_PI."<br>";

    echo "<br>";
    echo M_E."<br>";
    echo M_EULER."<br>";

    echo "<br>";
    echo M_LN2."<br>";

    echo "<br>";
    echo M_LOG2E."<br>";
    echo M_LOG10E."<br>";

    echo "<br>";
    echo exp(2)."<br>";
    echo expm1(2)."<br>";

    echo "<br>";






?>

