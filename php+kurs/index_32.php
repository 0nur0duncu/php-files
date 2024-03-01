<?php
      // alta da yazılabilir.
      require_once "Classes/Onur.php";
      require_once "Classes/Ali.php";
?>
<?php



      class c1{
            private $v1;
            private $v2;

            public function f1($v1){
                  $this -> v1 = $v1;
                  return $this;
            }
            public function f2($v2){
                  $this -> v2 = $v2;
                  return $this;
            }
            public function yazdir(){
                  echo "sayi1 =".$this -> v1."<br>sayi2 =".$this -> v2."<br>";
            }
      }

      $obj1 = new c1;

      $obj1 -> f1(5) -> f2(10) -> yazdir(); // return $this yaparsak bu şekilde yazılabilir. 
      // html kodları da döndürülebilir.

      //namespace sınıflar,metotlar değişkenler için özel sınıf alanları tanımlamayı sağlar.

      use \Yazilimci\AlininSiniflari\c1 as YA; // bu şekilde de kısaltılabilir. alias --> takma ad
      $obj2 = new YA; // bu şekilde tanımlanır aynı isimli sınıflar
      $obj2 -> yazdir();      
      
      echo "<br>";
      $obj3 = new \Yazilimci\OnurunSiniflari\c1; // bu şekilde tanımlanır aynı isimli sınıflar
      $obj3 -> yazdir();

      function OtomatikCalistir(){
            echo '<br>Merhaba Dunya<br>';
            require_once "Classes/Veli.php";
      }

      spl_autoload_register("OtomatikCalistir"); // alttaki hata verince OtomatikCalistir çalışır.

      $obj4 = new c2;
      $obj4 -> yazdir();


?>