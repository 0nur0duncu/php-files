<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $cities = array("muğla","antalya","mersin","sinop");
        print_r($cities);
        echo "<br>";
        echo $cities[1];
        echo "<br>";

        $cities = array();
        $cities[] = "mugla";
        $cities[] = "antalya";
        $cities[] = "mersin";
        $cities[] = "sinop"; 
        print_r($cities);
        echo "<br>";

        $members = array(
            "a" => "onur",
            "b" => "oduncu",
            "c" => 25
        );
            
        print_r($members);
        echo "<br>";
        
        $members = array();
        $members['a'] = "onur";
        $members['b'] = "oduncu";
        $members['c'] = 25;

        print_r($members);
        echo "<br>";
        echo $members['a'];
        echo "<br>";

        $gradeOfStudents = array();

        $gradeOfStudents[] = array(50,70,90);
        $gradeOfStudents[] = array("veli" => array(30,48,79),"ali" => array(23,78,97));
        $gradeOfStudents[] = array(23,72,78);

        print_r($gradeOfStudents);
        echo "<br>";
        echo $gradeOfStudents[0][1];
        echo "<br>";
        echo $gradeOfStudents[1]["ali"][2];
        echo "<br>";
    
        foreach($gradeOfStudents[0] as $grade):
            echo $grade."<br>";
        endforeach;
        echo "<br>";
        foreach($gradeOfStudents[1] as $name => $grade):
            foreach($grade as $gr):
                echo "$name --- $gr<br>";
            endforeach;
        endforeach;
        echo "<br>";

        unset($gradeOfStudents);

        $fruits = array("apple","orange","peanut","pea","olive");
        echo array_pop($fruits)."<br>";
        echo array_shift($fruits)."<br>";
        array_unshift($fruits,"strawberry","melon");
        array_push($fruits,"watermelon");
        echo "count of array =".count($fruits)."<br>";

        echo "<pre>";
        print_r($fruits);
        echo "</pre>";
        unset($fruits[1]);
        echo "<pre>";
        print_r($fruits);
        echo "</pre>";

        $arr_1 = array("1","2","3","4","3");
        $arr_2 = array("3","4","5","6");
        $arr_3 = array_merge($arr_1,$arr_2);
        echo "<pre>";
        print_r($arr_3);
        echo "</pre>";
        $arr_3 = array_intersect($arr_1,$arr_2);
        echo "<pre>";
        print_r($arr_3);
        echo "</pre>";
        $arr_3 = array_diff($arr_1,$arr_2);
        echo "<pre>";
        print_r($arr_3);
        echo "</pre>";
        $arr_3 = array_diff($arr_2,$arr_1);
        echo "<pre>";
        print_r($arr_3);
        echo "</pre>";
        $arr_3 = array_unique($arr_1);
        echo "<pre>";
        print_r($arr_3);
        echo "</pre>";

        $cities = array(
            "first" => "ankara",
            "second" => "ankara",
            "third" => "istanbul",
            "fourth" => "istanbul",
        );

        $cities = array_unique($cities);
        echo "<pre>";
        print_r($cities);
        echo "</pre>";

        $editted = implode($arr_1);
        echo $editted."<br>";
        $editted = implode('|',$arr_1);
        echo $editted."<br>";

        $selected = array_rand($arr_1);
        echo $arr_1[$selected]."<br>";

        $cities = array(

            "ankara" => 6,
            "istanbul" => 34,
            "denizli" => 20,
            "adana" => 1
        );
        /* $cities = array(

            array(7,3,1),
            array(3,8,1),
            array(2,7,3),
            array(5,4,7)
        ); */
        #asort($cities);
        #arsort($cities);
        #natcasesort($cities);
        #natsort($cities);
        #sort($cities);
        #rsort($cities);
        #shuffle($cities);
        #ksort($cities);
        #krsort($cities);
        #array_multisort($cities,SORT_ASC);
        #array_multisort($cities,SORT_DESC);
        #uasort($cities,function($a){return $a;});
        #uksort($cities,function($a){return $a;});
        #usort($cities,function($a){return $a;});
        $reversedArray = array_reverse($cities);
        echo "<pre>";
        print_r($reversedArray);
        echo "</pre>";

        $fruits = array("apple","pie","peanut","pea");
        echo current($fruits)."<br>";
        echo next($fruits)."<br>";
        echo current($fruits)."<br>";
        echo prev($fruits)."<br>";
        echo current($fruits)."<br>";
        echo pos($fruits)."<br>";
        echo reset($fruits)."<br>";
        next($fruits);
        next($fruits);
        echo current($fruits)."<br>";
        echo end($fruits)."<br>";
        echo current($fruits)."<br>";
        echo "<br>";
        reset($fruits);

        while($write = current($fruits)):
            echo $write."<br>";
            next($fruits);
        endwhile;

        foreach($fruits as $key => $value):
            echo "$key - $value<br>";
        endforeach;

        echo "<br><br>";
        $numbers = [1,4,2,3,6,6,1,4,4];
        echo count($numbers)."<br>";
        echo sizeof($numbers)."<br>";
        echo array_sum($numbers)."<br>";
        echo array_product($numbers)."<br>";
        echo "<pre>";
        print_r(array_count_values($numbers));
        echo "</pre>";

        $key_arr = array_keys($numbers);
        echo "<pre>";
        print_r($key_arr);
        echo "</pre>";

        $values = print_r($numbers,true);
        echo $values."<br>";
        echo array_search(4,$numbers)."<br>";
        var_dump(in_array(1,$numbers));
        echo "<br>";
        var_dump(array_key_exists(10,$numbers));
        echo "<br>";
        echo "<pre>";
        print_r(array_keys($numbers,4));
        echo "</pre>";
        
        $range_numbers = range(1,21,3);
        echo "<pre>";
        print_r($range_numbers);
        echo "</pre>";

        echo "<pre>";
        print_r(array_chunk($numbers,3,true));
        echo "</pre>";

        $a = array("a","b","c","d");
        $b = array("c","d","e","f","g","h");
        echo "<pre>";
        print_r(array_replace($a,$b));
        echo "</pre>";
        echo "<pre>";
        print_r(array_flip($a));
        echo "</pre>";
        

        $textArray = ["oNUr","Ali","vEli","reMzi"];
        function upper($inputText){
            return mb_strtoupper($inputText);
        }

        function lower($inputText){
            return mb_strtolower($inputText);
        }

        echo "<pre>";
        print_r(array_map("upper",$textArray));
        print_r(array_map("lower",$textArray));
        echo "</pre>";

    ?>

</body>
</html>