<?php


      define("SOYISIM","ONUR");

      const ISIM = "ONUR"; // 2 formda da tanımlı olabilir.

      $isimler = array(1,2,3);


      if(defined("ISIM")){
            echo '<br>'."sabit tanimlidir.".'<br>';
      }else{
            echo '<br>'."sabit tanimli degildir.".'<br>';
      }
      if(isset($isimler[4])){
            echo '<br>'."degisken tanimlidir.".'<br>';
      }else{
            echo '<br>'."degisken tanimli degildir.".'<br>';
      }
      if(empty($isimler[4])){ // key şeklinde de tanımlı olabilir.
            echo '<br>'."Evet boştur.".'<br>';
      }else{
            echo '<br>'."Hayir eleman vardir.".'<br>';
      }

      $v1 = true;
      var_dump(filter_var($v1,FILTER_VALIDATE_BOOLEAN)); // boolean mı diye kontrol eder.
      echo "<br>";

      $v2 = "onur";
      var_dump(filter_var($v2,FILTER_VALIDATE_BOOLEAN));
      echo "<br>";

      $v3 = 12;
      var_dump(filter_var($v3,FILTER_VALIDATE_INT));
      echo "<br>";

      $v4 = "216.58.213.110";
      var_dump(filter_var($v4,FILTER_VALIDATE_IP));
      echo "<br>";
      
      $v5 = "info@extraegitim.com";
      if(filter_var($v5,FILTER_VALIDATE_EMAIL)){
            echo "<br>email adresi gecerlidir.<br>";
      }else{
            echo "<br>email adresi gecerli degildir.<br>";
      }
      echo "<br>";

      $v6 = "https://www.info@extraegitim.com";
      if(filter_var($v6,FILTER_VALIDATE_URL)){
            echo "<br>url adresi gecerlidir.<br>";
      }else{
            echo "<br>url adresi gecerli degildir.<br>";
      }
      echo "<br>";

      $v7 = null;

      var_dump(is_null($v7));
      echo "<br>";

      $v8 = 15;
      var_dump(is_int($v8));
      echo "<br>";

      $v9 = "15";
      var_dump(is_string($v9));
      var_dump(is_string($v8));
      echo "<br>";

      $v10 = 15.153;
      var_dump(is_double($v10));
      echo "<br>";

      $v11 = [1,2,3];
      var_dump(is_array($v11));
      echo "<br>";

      $fop = fopen("abc.txt","r");

      var_dump(is_resource($fop));
      echo "<br>";
      fclose($fop);

      function deneme(){

      }
      var_dump(is_callable("deneme"));
      echo "<br>";
      var_dump(is_callable("deneme2"));
      echo "<br>";

      class a{
            public $isim = "onur";
            public function deneme(){}
      }

      $obj1 = new a;
      var_dump(is_object($obj1));
      echo "<br>";


      var_dump(function_exists("deneme"));
      echo "<br>";


      var_dump(class_exists("a"));
      echo "<br>";


      var_dump(method_exists($obj1,"deneme"));
      echo "<br>";

      var_dump(property_exists($obj1,"isim"));
      echo "<br>";

      trait b{

      }

      class c extends a{

      }

      

      var_dump(trait_exists("b"));
      echo "<br>";

      $obj2 = new a;
      $obj3 = new c;


      var_dump(is_subclass_of($obj3,"a"));
      echo "<br>";
      var_dump(is_subclass_of("c","a")); // bu şekilde de yazılabilir.
      echo "<br>";
      var_dump(is_a($obj2,"a")); // bu şekilde de yazılabilir.
      echo "<br>";




?>