<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>
      <?php
      
      
      
            /* $libcurl    =     curl_version();

            echo '<pre>';
            print_r($libcurl);
            echo '</pre>'; */
            /* $phpinf    =     phpinfo();

            echo '<pre>';
            print_r($phpinf);
            echo '</pre>'; */



            $oturum   =     curl_init("https://www.hepsiburada.com");

            curl_exec($oturum);

            curl_close($oturum);

            echo '<pre>';
            print_r(curl_getinfo($oturum));
            echo '</pre>';


            echo '<pre>';
            print_r(curl_error($oturum));
            echo '</pre>';

      
      
      
      
      ?>
</body>
</html>