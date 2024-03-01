<?php

      $metin= ["<br>ben","<br>bir<br>","yazilimciyi&m\"sfdsfsd"];
      $metin= ["onur","oduncu"];
      

      /* $donustur  =     json_encode($metin,JSON_HEX_TAG | JSON_HEX_AMP); */
      $donustur  =     json_encode($metin,JSON_FORCE_OBJECT);

      echo '<pre>';
      print_r($donustur);
      echo '</pre>';



      $metin= '["onur","oduncu"]';
      $donustur  =     json_decode($metin);

      echo '<pre>';
      print_r($donustur);
      echo '</pre>';



      $metin= '{"a" => "b","c" => "d"}';
      $donustur  =     json_decode($metin);


      echo '<pre>';
      print_r($donustur);
      echo '</pre>';
      /* echo '<br>'.($donustur -> a).'<br>'; */

      




?>