<?php


      namespace onur;

      class Deneme{
            public $ozellik1   =     "onur"; // public yazılmazsa varsayılanı private
            public $ozellik2   =     "oduncu";
            var $standart      =    "123456"; // özellik olarak değilde standart olarak tanımlanması gerekiyorsa var kullanılır.
            // public gibi iş yapar. sabitler ve fonksiyonlar standart olarak tanımlanamaz. hata verir.
            public const ID    =     123;
            public function merhaba_de(){
                  echo "Merhaba";
            }
      }

      $obj        =     new Deneme;
      echo  $obj -> ozellik1."<br>"; // özelliğe $ işareti yazmaya gerek yok
      //echo $obj:ID; // nesnenin değil sınıfın adı ile çağrılır.
      echo Deneme::ID."<br>"; // sabit C ye benzer şekilde çağrılır.
      echo $obj -> merhaba_de()."<br>";
      echo $obj -> standart."<br>";


      namespace faruk;

      use onur\Deneme; // ya bu şekilde farklı namespace deki tanımlanır ya da new \faruk\Deneme şeklinde çağrılır.

      $obj        =     new Deneme;
      $obj2       =     new \onur\Deneme;

      echo '<pre>';
      print_r(__NAMESPACE__);
      echo '</pre>';

      // class içindeki fonksiyonlara method denir.

      class Sinif1{
            public function __construct()
            {
                  echo "Yapici method calisti<br>";
            }
            public function yazdir()
            {
                  echo "Test amacli yazdirildi.<br>";
            }

            public function __destruct()
            {
                  echo "Yikici method calisti<br>";
            }
      }

      $obj        =     new Sinif1; // constructor yoksa bu şekilde tanımlanabilir ya da () bu şekilde tanımlanabilir.
      $obj  ->    yazdir();

      echo "<br><br>";


      class Sinif2{

            private int $a; // değişkenin tipi kısıtlanabilir.
            public $b; // ya da otomatik tanımlamaya bırakılabilir.
            protected $c = 5; // private ve public e dışarıdan erişilemez.

            public function __construct(int $a,int $b)
            {
                  echo "Yapici method calisti<br>";
                  $this-> a = $a;
                  $this-> b = $b;
            }
            public function topla(int $c = 0) // private protected metodlara erişilemez.
            {
                  echo "Classa girilen parametrelerin toplami =".($this -> a+ $this -> b + $c)."<br>";
            }

            public function __destruct() // yıkıcı metotlara parametre verilemez.
            {
                  echo "Yikici method calisti<br>";
            }
      }

      $obj        =     new Sinif2(5,10);
      $obj  ->    topla();
      $obj -> b = 20; // diğer dillerde olduğu gibi bu şekilde de değer atanabilir.
      $obj -> topla(5);

      // önce yapıcı sonra içerideki fonksiyon en sonda yıkıcı method çalışır.

      // sabitler dışarıdan değiştirilemez hata vermez ama değiştirmez ublic olsa da


      trait c1{ // soyut sınıf gibi
            public function f1(){
                  echo "fnc1 calisti";
            }
      }
      class c2{
            use c1;
            protected $a = 5;
            public const PI = 3.14;
            public function f2(){
                  echo "fnc2 calisti sayi=".$this -> a;
            }
      }
      class c3 extends c2{

            public static $sayi = 10;
            public function f3(){
                  echo "fnc3 calisti sayi=".$this -> a."PI =".self::PI; // self:: ile kendi sınıfındaki sabiti çağırabiliriz. 
            }
            
            public function f2(){ // üzerine yazıldı
                  echo "<br>fnc2 calisti sayi=".$this -> a."<br>";
                  parent::f2(); // üst sınıfın fonksiyonunu çalıştırır. f2 fonksiyonu üzerşne yazıldığı için üzerine yazılmasaydı hata verirdi.
                  //return $this -> f2(); // sonsuz dönüye sokar. ram tükenip zaman aşımı gelince durur.
            }
            //parent::f2(); // hata verecektir.
      }
      final class c4 extends c3{ // başına final yazdığım için artık c4 extends edilemez!!!
            final public function f4(){ // alt sınıflarda aynı isimli method oluşturulamaz!!!

                  echo '<pre>';
                  print_r([c2::f2(),c3::f2()]);// birden fazla parent varsa bu şekilde de yazılabilri.
                  echo '</pre>';

            }
      }

      $obj = new c2;

      $obj -> f1();
      $obj2 = new c3;
      $obj2 -> f2();
      echo "<br>";
      $obj2 -> f3();
      c3::$sayi = 20; // static method değiştirilebilir.
      echo '<br>'.c3::$sayi.'<br>'; // çağrılırken bu şekilde çağrılır.
      // public static const $PI = 3.14; şeklinde static ve const yanyana kullanma

      $obj3 = new c4;
      $obj3 -> f4();


      //private ve protected kendi sınıfı içerisinden erişilebilir.
      //protected a ayrıca bu sınıfı miras alan classlardan da erişilebilir.
      //private ye erişilemez.
      // sınıf içinden sabitlere erişmek için self::sabitAdı şeklinde kullanılır.
      // this daima üzerine yazılan değişkeni ve methodu alır.
      // 














?>