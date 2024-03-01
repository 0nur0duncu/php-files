<?php



      $xml  =     '<takimlar>
                        <fenerbahce>
                              <kurulusYili>1919</kurulusYili>
                              <oyuncuSayisi>15</oyuncuSayisi>
                              <yedekSayisi>4</yedekSayisi>
                        </fenerbahce>
                        <galatasaray>
                              <kurulusYili>1940</kurulusYili>
                              <oyuncuSayisi>16</oyuncuSayisi>
                              <yedekSayisi>5</yedekSayisi>
                        </galatasaray>
                        <trabzonspor>
                              <kurulusYili>1956</kurulusYili>
                              <oyuncuSayisi>14</oyuncuSayisi>
                              <yedekSayisi>3</yedekSayisi>
                        </trabzonspor>
                        <besiktas>
                              <kurulusYili>1920</kurulusYili>
                              <oyuncuSayisi>15</oyuncuSayisi>
                              <yedekSayisi>4</yedekSayisi>
                        </besiktas>
                        <kaptan>
                              <k1 id="1">ali</k1>
                              <k2 id="2">veli</k2>
                              <k3 id="3">ferhat</k3>
                        </kaptan>
                  </takimlar>';

      $donustur   =     simplexml_load_string($xml);
      $donustur   =     simplexml_load_file("xml1.xml","SimpleXMLElement",LIBXML_NOCDATA);

      echo '<pre>';
      print_r($donustur);
      echo '</pre>';


      echo '<pre>';
      print_r($donustur -> fenerbahce);
      echo '</pre>';

      echo '<br>'.$donustur -> fenerbahce -> kurulusYili.'<br>';

      echo '<br>'.$donustur -> kaptan ->k[0].'<br>';

?>