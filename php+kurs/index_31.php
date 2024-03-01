<?php



      // özellik ve metod grubu için trait kullanılır.

      trait t1{ // const yapısı kullanılamaz.
            public $v1 = 10;
            protected $v2 = 5;
            var $v3 = 0;
            public function f1(){
                  echo '<br>'.($this -> v1+$this -> v2).'<br>';
            }
            public function f2(){
                  echo "<br>Merhaba<br>";
            }
            private function f3(){
                  echo '<br>Yeni<br>';
            }
      }
      trait t2{ // const yapısı kullanılamaz. // özellik ve method grubu olarak kullanılır.
            // yapıcı yıkıcı hepsi yazılabilir.
            public function f1(){
                  echo '<br>20<br>';
            }
            public function f2(){
                  echo "<br>Dünya<br>";
            }
            public abstract function f4();
      }

      class c1{
            // yapıcı olursa t1() şeklinde parametre verilir.
            use t1,t2{
                  t1::f1 insteadOf t2;
                  t2::f2 insteadOf t1;
                  t2::f2 as Dunya;
                  t1::f3 as public;
                  } // private public gibi dönüşümler yapılabilir.
            // farklı traitler içinde aynı fonksiyon ismi varsa hata döner tercih yapılması gerekir.
            public function f4(){
                  echo '<br>Merhaba<br>';
            }
      }

      $obj1 = new c1;

      $obj1 -> f1();
      $obj1 -> f2();
      $obj1 -> f4();
      $obj1 -> f3();
      $obj1 -> Dunya();







?>