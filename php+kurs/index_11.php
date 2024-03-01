<?php 

    // while döngüsünde tarayıcıda set timeout olduğu için belli zaman sonra durur ama arka planda sunucuyu yormaya devam eder.

    $sayilar = [9,8,7,6,5,4,3,2,1];
    $sayilar2 = array(array(1,2,3),array(4,5,6),array(7,8,9));
    $sayilar3 = [1,2,3,array(4,5,6),7];

    foreach($sayilar3 as $indis => $deger):
        if(is_array($deger)):
            foreach($deger as $icice):
                echo $icice."<br />";
            endforeach;
        else:
            echo $deger."<br />";
        endif;
    endforeach;



    function _yazdir(){
        echo "Hello World<br />";
    }
    _yazdir();

    $dizi = [
        function () {
          echo "Birinci fonksiyon";
        },
      
        function () {
          echo "İkinci fonksiyon";
        },
      
        function () {
          echo "Üçüncü fonksiyon";
        }
      
      ];
      
      $dizi[1]();

      $__yazdir = function(){
        echo "<br />Merhaba<br />";
      };

      $__yazdir();

      echo "<pre>";
      print_r($dizi);
      echo "</pre>";


      $isim = "onur";

    if($isim == "onur"):
        function yazdir(){
            echo "onur";
        }
    else:
        function yazdir(){
            echo "ali";
        }
    endif;

    yazdir();
    //switch - case yapısı olarakta yazılabilir.

    echo "<br />";

    function birdenCok(){
        echo "Gelen parametre sayısı = ".func_num_args()."<br />";
        echo "İlk girilen parametre = ".func_get_arg(0)."<br />";
        return func_get_args();
    }

    echo "<pre>";
    print_r(birdenCok(1,4,5,7,8));
    echo "</pre>";

    function topla($ilk,$ikinci){
        return ikinci($ilk,$ikinci);
    }
    function ikinci($ilk,$ikinci){
        return $ilk + $ikinci;
    }
    
    echo topla(5,7)."<br />";


    function yerdeğiştir1(&$array,$ilk_indis,$ikinci_indis){ //adres ile değer atandı &  operatörü ile
        $gecici = $array[$ilk_indis];
        $array[$ilk_indis] = $array[$ikinci_indis];
        $array[$ikinci_indis] = $gecici;
    }

    function yerdeğiştir2($array,$ilk_indis,$ikinci_indis){
        $gecici = $array[$ilk_indis];
        $array[$ilk_indis] = $array[$ikinci_indis];
        $array[$ikinci_indis] = $gecici;
    }

    $my_array = [1,2,3];
    yerdeğiştir2($my_array,1,2);
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";
    yerdeğiştir1($my_array,1,2); 
    echo "<pre>";
    print_r($my_array);
    echo "</pre>";

    $dondur = "deneme";

    function deneme(){
        echo "<br />Merhaba Dünya<br />";
    }

    $dondur(); // değişkeni fonksiyona atadım.


    ($calistir = function(){echo "Beyaz zambaklar ülkesinde<br />";})();

    $calistir;

    echo ($tell = function(){echo "12 Kızgın Adam<br />";})();

    echo ($ikiSayi = function($a,$b){echo $a." ".$b."<br />";})(5,7);
    echo ($ucSayi = function($a,$b,$c=2){echo $a." ".$b." ".$c."<br />";})(5,7);


    function besBir(){
        static $sayi= 0;
        if ($sayi == 5)
            return;
        $sayi++;
        return "1 ".besBir();
    }
    echo besBir()."<br />";

    function tumu(){
        $arr = array();
        for($i = 0; $i < 1000; $i++)
            $arr[] = $i;
        
        return $arr;
    }
    tumu();

    $bellek1 = memory_get_usage();
    echo "yer kaplanan alan = ".($bellek1/1000)." kB<br />";

    function tumu2(){
        for($i = 0; $i < 1000; $i++)
            yield $i;
    }
    foreach(tumu2() as $deger){
        echo $deger." ";
    }
    echo "<br />";

    //return ve yield benzer çalışır yield da fonksiyondan dönüş yapılmaz return de yapılır.
    //yield kendine has nesne döndürür foreach ile yazdırmak gerekir.


    function func1(){
        function func2(){
            echo "Atam izindeyiz.";
        }

        return func2();
    }

    $a = func1();

    echo "<br />";
    function fon1(){
        echo "Func1 çalıştı.<br />";
        function fon2(){
            echo "Func2 çalıştı.<br />";
            function fon3(){
                echo "Func3 çalıştı.<br />";
            }
        }
    }

    fon1(); // sırayla çağrıldığında iç içe fonksiyonlar çalışabilir.
    fon2();
    fon3();

    function f1(){
        echo "f1<br />";
        function f2($soyad){
            echo "f2 $soyad<br />";
        }
        function f3(){
            echo "f3<br />";
        }
        function f4(){
            echo "f4<br />";
        }
    }

    f1();
    f2("onur");

    f3();
    f4();







?>