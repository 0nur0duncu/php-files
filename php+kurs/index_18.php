<?php
    

$degerler   =   array(22, 2, 4, 42, 31, 72, "onur", "oduncu");
$desen  =   "/2/";

$sonuc = preg_grep($desen, $degerler);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

$desen2  =   "/o/";

$sonuc2 = preg_grep($desen2, $degerler);

echo "<pre>";
print_r($sonuc2);
echo "</pre>";

$deger  =   "Lorem, ipsum dolor?";
$islem  =   preg_quote($deger, ","); //^ = + - gibi operatorlar vb. için kullanılır. normal / yok ters slash için var.
//ikinic parametrenin ilk değerini alır ve deger içinde onun önüne \ koyar.

echo    $islem  . "<br>";

$metin = "Lorem ipsum dolor sit amet 1 2 3 consectetur adipisicing elit. Vel vero dolore eligendi? Lorem ipsum dolor sit amet.";

$desen = "/lorem/i";

preg_match_all($desen, $metin, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

$desen = "/[a-z]/i";

preg_match_all($desen, $metin, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

$desen = "/[0-9]/";

preg_match_all($desen, $metin, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

$result =   preg_replace(array("/Lorem/i", "/ipsum/i"), array("lrm", "IPSUM"), $metin);

echo $result;


$desen = "/L o r e m/x"; // desenin içerisindeki boşlukları siler. sadece desendeki boşluğu siler.

preg_match_all($desen, $metin, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";


$metin2  =   "on ur";
$desen = "/o n u r/x"; // desenin içerisindeki boşlukları siler. sadece desendeki boşluğu siler.

preg_match_all($desen, $metin2, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";


$metin = "Lorem ipsum dolor sit, amet consectetur adipisicing elit,
    Ducimus hic est, eum voluptatem impedit,
    beatae laborum quaerat aperiam expedita vel!";
$desen = "/.*/"; // desenin içerisindeki boşlukları siler. sadece desendeki boşluğu siler.

preg_match_all($desen, $metin, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

$desen = "/.*/s"; // alt alta yazılı ifadeleri tek satırda gibi gösterir.

preg_match_all($desen, $metin, $sonuc);

echo "<pre>";
print_r($sonuc);
echo "</pre>";

# create form



?>
