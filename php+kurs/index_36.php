<?php



      echo '<pre>';
      print_r(get_defined_vars());
      echo '</pre>';
/* 
      echo '<pre>';
      print_r(get_defined_constants());
      echo '</pre>'; */

/*       echo '<pre>';
      print_r(get_defined_functions());
      echo '</pre>'; */

      echo '<pre>';
      print_r(get_declared_traits());
      echo '</pre>';

/*       echo '<pre>';
      print_r(get_declared_classes());
      echo '</pre>'; */

      class c1{
            public $v1 = 10;
            public $v2 = "onur";
            public function f1(){}
            static function f2(){}
      }
      $obj1 = new c1; 
      echo '<pre>';
      print_r(get_object_vars($obj1));
      echo '</pre>';

      echo '<pre>';
      print_r(get_class_methods($obj1));
      echo '</pre>';

      $arr1 = [1,2,3];

      echo '<pre>';
      print_r(get_defined_vars());
      echo '</pre>';

      require "Classes/Ali.php";
      include "Classes/Onur.php";

      echo '<pre>';
      print_r(get_included_files());
      echo '</pre>';

      echo '<pre>';
      print_r(get_required_files());
      echo '</pre>';


?>