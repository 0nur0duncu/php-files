<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    
    <?php 
        function to_uppercase_tr($string){
            return mb_strtoupper($string);
        }
        function to_uppercase($string){
            return strtoupper($string);
        }

        echo "ağaç<br>";
        echo to_uppercase_tr("ağaç<br>");
        echo to_uppercase("ağaç<br>");


        $name = "          onur               ";
        $surname = "?????????oduncu???????????";

        echo trim($name)."<br>";
        echo rtrim($name)."<br>";
        echo ltrim($name)."<br>";
        echo trim($surname,'?')."<br>";
        echo rtrim($surname,'?')."<br>";
        echo ltrim($surname,'?')."<br>";

        echo strlen("ağaç")."<br>";
        echo mb_strlen("ağaç")."<br>";
        echo substr_count("ağaç canlidir.","a")."<br>";
        echo substr_count("ağaç canlidir.","ğ")."<br>";
        echo strrev("ağaç canlidir.")."<br>";
        echo mb_substr("ağaçlar bizim için değerlidir.",5);
        echo mb_substr("ağaçlar bizim için değerlidir.",5,strlen("ağaçlar bizim için değerlidir."))."<br>";
        echo mb_substr("ağaçlar bizim için değerlidir.",5,5)."<br>";

        $name_surname =  "onur oduncu";
        echo mb_strtoupper($name_surname)."<br>";
        echo strtolower($name_surname)."<br>";
        echo ucfirst($name_surname)."<br>";
        echo lcfirst($name_surname)."<br>";
        echo ucwords($name_surname)."<br>";

        $name_surname = array();
        $name_surname[] = "onur";
        $name_surname[] = "oduncu";
        echo implode("||",$name_surname);
        $to_array = explode("|","onur | oduncu");
        print_r($to_array);
        echo "<br>";
        echo mb_convert_case("ağaç",MB_CASE_UPPER,"utf-8")."<br>";
        echo mb_convert_case("ağaç",MB_CASE_LOWER,"utf-8")."<br>";
        echo mb_convert_case("ağaç",MB_CASE_TITLE,"utf-8")."<br>";

        $text = "hello|new|world";
        $split = str_split($text,3);
        print_r($split);
        echo "<br>";
        echo str_replace("hello","merhaba",$text)."<br>";
        echo str_replace(["hello","|"],"merhaba",$text)."<br>";
        echo str_replace(["hello","|"],["merhaba"," "],$text)."<br>";
        echo str_replace(array("hello","|"),array("merhaba"," "),$text)."<br>";

        $text = "<strong>Hello</strong> <mark>World</mark><br>";
        echo $text;
        echo strip_tags($text,["strong"])."<br>";
        echo strip_tags($text,"<mark><br>")."<br>";
        echo htmlentities($text)."<br>";
        $text = "<a href='https://www.ibrahimcevruk.com'>İbrahim ÇEVRÜK</a>";
        echo htmlspecialchars($text,ENT_QUOTES)."<br>";
        echo strip_tags($text)."<br>";
        echo htmlspecialchars($text,ENT_NOQUOTES)."<br>";

        $text = "Ankara'nın taşına bak.";
        $new_text = addslashes($text)."<br>";
        echo "$new_text<br>";
        echo stripcslashes($new_text)."<br>";
    
        $text = "onur\noduncu\n";
        echo $text."<br>";
        echo nl2br($text);
        $text = "onur
        oduncu";
        echo $text."<br>";
        echo nl2br($text)."<br>";

        echo mb_strpos($text,'onu')."<br>";
        var_dump(mb_strpos($text,'ONU'));
        echo "<br>";
        echo mb_stripos($text,'ONU')."<br>";

        $text = "Here %0.4s, next place %s";
        printf($text,"Muğla","Antalya");
        echo "<br>";
        $price = "Ticket is %4.2f";
        printf($price,100);
        echo "<br>";

        $text = '2 adet %3$s %1$d TL den %2$d TL yapmaktadır.';
        printf($text,10,20,"çikolata");
        echo "<br>";
        $text = '2 adet %3$s %1$d TL den %2$d TL yapmaktadır.';
        echo sprintf($text,10,20,"çikolata")."<br>";

        $ones = array("sıfır","bir","iki","üç","dört","beş","altı","yedi","sekiz","dokuz");
        $tens = ["on","yirmi","otuz","kırk","elli","altmış","yetmiş","seksen","doksan"];
        $number = 76;
        $splitted_array = str_split($number);
        $digit = strlen($number);
        if($digit == 2):
            $new_number = $tens[$splitted_array[0]-1]." ".$ones[$splitted_array[1]];
        endif;
        echo $new_number."<br>";

    ?>

</body>
</html>