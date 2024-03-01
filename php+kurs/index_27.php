<?php



      $cookie_key       =     "isim";
      $cookie_value     =     "onur";
      setcookie($cookie_key,urlencode($cookie_value),date("U")+60000); // milisaniye olarak
      setcookie("soyad","oduncu",time()+3600); // saniye olarak

      echo '<pre>';
      print_r($_COOKIE);
      echo '</pre>';

      var_dump(isset($_COOKIE[$cookie_key]));

      setcookie($cookie_key,urlencode($cookie_value),time()-1); //bu şekilde silinebilir. süresi bitmiş gösterilir.

      var_dump(isset($_COOKIE[$cookie_key]));

      // geçerlilik süresi 0 olunca oluşur gösterir silinir.

      setcookie("user[name]","onur");
      setcookie("user[surname]","oduncu");
      setcookie("user[id]","1");

      echo '<br><br>';
      echo $_COOKIE["user"]["name"]."<br>";
      echo $_COOKIE["user"]["surname"]."<br>";
      echo $_COOKIE["user"]["id"]."<br>";

      echo '<pre>';
      print_r($_COOKIE);
      echo '</pre>';



?>