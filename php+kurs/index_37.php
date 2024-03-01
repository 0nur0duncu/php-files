<?php



      echo '<pre>';
      print_r(php_ini_loaded_file()); // .ini dosyasının dizinini gösterir.
      echo '</pre>';

      echo '<pre>';
      print_r(ini_get_all("mysqli",false)); // eklentileri yazamaz.
      echo '</pre>';

      echo '<pre>';
      print_r(ini_get("mysqli.allow_local_infile")); // array içindekileri alır.
      echo '</pre>';

      //ini_set("mysqli.allow_local_infile",1) bu şekilde ayarlanabilir. // bazı yapılandırma ayarları değiştirilebilir.
      //ini_restore("mysqli.allow_local_infile");

      echo '<pre>';
      print_r(parse_ini_file("onur.ini",true)); // true detaylı yazar. // kendi ini file için
      echo '</pre>';




?>