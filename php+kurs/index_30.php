<?php



      abstract class c1{ // soyut sınıfı extends eden sınıflar soyut metodları oluşturmak zorundadır. nesne oluşturmaz soyuttur.
            public $v1  =     5;
            private $v2 =     7;
            protected $v3 =   12;

            abstract public function f1();
            public function f2(){
                  echo '<br>'."f2 calisti.Degeri= ".$this -> v2.'<br>';
            }
      }
      class c2 extends c1{
            public function f1(){
                  echo '<br>'."f1 calisti.Degeri= ".$this -> v1.'<br>';
                  echo '<br>'."f1 calisti.Degeri= ".$this -> v3.'<br>';
            }
      }
      class c3 extends c1{ // soyut sınıf soyut metodu tanımlamayı zorunlu kılar.
            public function f1(){
                  echo '<br>'."f1 calisti.".'<br>';
            }
      }
      class c4 extends c2{ // soyut sınıf için parentta soyut metod tanımlanmışsa sorun yok.

      }
      interface c5{
            /* public $v4 = 10; // bu şekilde tanımlama olamaz. */
            public function f3();
      }
      
      class c6 implements c5{
            public function f3(){
                  echo '<br>'."f3 calisti.".'<br>';
            }
      }
      class c7 implements c5{ //aynı abstractteki gibi foksiyonlar doldurulmalıdır.
            public function f3(){
                  echo '<br>'."f3 calisti.".'<br>';
            }
      }
      interface c8{
            /* public $v4 = 10; // bu şekilde tanımlama olamaz. */
            public function f3();
      }
      class c9 implements c5, c8{ //aynı abstractteki gibi foksiyonlar doldurulmalıdır.
            public function f3(){
                  echo '<br>'."f3 calisti.".'<br>';
            }
      }

      abstract class c10{
            abstract public function f4();
      }

/*       class c11 extends c1 extends c10 implements c8{ // hata verdi düzelt
            public function f1(){}
            public function f4(){}
            public function f3(){}
      }  */


      $obj1       =     new c2;

      $obj1 -> f1();
      $obj1 -> f2();
      
      $obj2       =     new c5;
      $obj2 -> f3();

      




?>