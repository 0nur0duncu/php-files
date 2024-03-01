<?php 
    namespace yazilimci1; //ne üstte olmak zorundadır.
?>
<?php 
    echo "içinde bulunduğum satır numarası = ".__LINE__."<br/>";
    echo __DIR__."<br/>";
    echo __FILE__."<br/>";

    function fonksiyon(){
        return __FUNCTION__;
    }

    echo fonksiyon()."<br/>";


    class araba{
        function CLASS() {
            return __CLASS__."<br/>";
        }
        function METHOD() {
            return __METHOD__."<br/>";
        }
    }

    $nesne1 = new araba();
    $nesne2 = new araba;
    echo $nesne1 -> CLASS();
    echo $nesne2 -> METHOD();

    trait Ozellik1{
        function yazdir1(){
            return __TRAIT__."<br />";
        }
    }

    trait Ozellik2{
        function yazdir2(){
            return __TRAIT__."<br />";
        }
    }

    class OZELLIKLER{
        use Ozellik1;
        use Ozellik2;
    }

    $ozellik = new OZELLIKLER();
    echo $ozellik -> yazdir1();
    echo $ozellik -> yazdir2();


    

    class Uye{

    }

    echo __NAMESPACE__."<br />";

    namespace yazilimci2;

    class Uye{

    }

    echo __NAMESPACE__."<br />";
    
?>