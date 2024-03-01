<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #sel{
            background-color: gray;
        }


    </style>
</head>
<body>

    <?php 
    
        $var1 = 10;
        $var2 = 5;
        $var3 = 1;

        while($var2++ <= $var1):
            echo "$var2 <br>";
        endwhile;
        
        while($var3 <= $var1){
            echo $var3."<br>";
            $var3++;
        }
    
        for($var4 = 1; $var4 <=5; $var4++):
            echo $var4." ";
        endfor;
        echo "<br>";
        for($var4 = 5; $var4 >=1; $var4--){
            echo $var4." ";
        }

        echo "<br>";

        for($i = 0; $i < 5;$i++):
            for($k = 0; $k < $i;$k++):
                echo " ";
            endfor;
            for($j = 0; $j < 5 - $i;$j++):
                echo "*";
            endfor;
            echo "<br>";
        endfor;

        $var5 = 2;

        for($i =1; $i <= 10; $i++){
            echo $var5." X ".$i." = ".$var5*$i."<br>";
        }


        /* for($a = 1; $a <= 10; $a++){
            echo '<div style="float:left;margin:5px">';
            for($b = 1; $b <= 10; $b++){
                echo $a." X ".$b." = ".$a*$b."<br>";
            }
            echo '</div>';
        } */


        $array = array("a","b","c","d");
        foreach($array as $i):
            echo "$i ";
        endforeach;
        for($i=0; $i< count($array); $i++):
            echo $array[$i]."<br>";
        endfor;

        $cities =["","Adana","Adıyaman", "Afyon", "Ağrı", "Amasya", "Ankara", "Antalya", "Artvin",
            "Aydın", "Balıkesir","Bilecik", "Bingöl", "Bitlis", "Bolu", "Burdur", "Bursa", "Çanakkale",
            "Çankırı", "Çorum","Denizli","Diyarbakır", "Edirne", "Elazığ", "Erzincan", "Erzurum ", "Eskişehir",
            "Gaziantep", "Giresun","Gümüşhane", "Hakkari", "Hatay", "Isparta", "Mersin", "İstanbul", "İzmir",
            "Kars", "Kastamonu", "Kayseri","Kırklareli", "Kırşehir", "Kocaeli", "Konya", "Kütahya ", "Malatya",
            "Manisa", "Kahramanmaraş", "Mardin", "Muğla", "Muş", "Nevşehir", "Niğde", "Ordu", "Rize", "Sakarya",
            "Samsun", "Siirt", "Sinop", "Sivas", "Tekirdağ", "Tokat", "Trabzon  ", "Tunceli", "Şanlıurfa", "Uşak",
            "Van", "Yozgat", "Zonguldak", "Aksaray", "Bayburt ", "Karaman", "Kırıkkale", "Batman", "Şırnak",
            "Bartın", "Ardahan", "Iğdır", "Yalova", "Karabük ", "Kilis", "Osmaniye ", "Düzce"];

        echo '<select name="cities" id="sel">';
        for($a=1; $a < count($cities);$a++){
            echo '<option value="'.$a.'">'.$a.' - '.$cities[$a].'</option>';
        }
        echo '</select>';

        foreach($cities as $ct):
            echo $ct.",";
        endforeach;

        $infos['Name'] = "onur";
        $infos['Surname'] = "oduncu";
        $infos['Number'] = 12;
        echo "<br><br><br>";
        foreach($infos as $key =>  $value):
            echo $key." - ".$value."<br>";
        endforeach;


        $i = 1;

        do{
            echo $i." ";
            if ($i == 5):
                break;
            endif;
            $i++;
        }while($i<5);


    ?>

</body>
</html>