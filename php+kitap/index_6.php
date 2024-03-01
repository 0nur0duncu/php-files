<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
    
        function numbers(){
            for($i=1; $i<=10;$i++){
                echo $i."<br>";
            }
        }
        #numbers();

        function isPrime($variable){
            if($variable <=1 ):
                return false;
            endif;
            for($i =($variable-1); $i>1; $i--):
                if($variable % $i == 0):
                    return false;
                endif;
            endfor;
            return true;
        }
        var_dump(isPrime(1));
        echo "<br>";

        function whereAreYou($name,$cities = "Ankara"){
            
            echo $name." is from ".$cities.".<br>";
        }

        whereAreYou("onur");
        whereAreYou("onur","muğla");
    
    
        $statue = true;

        function anyProblem(){

            global $statue;
            $statue = false;
        }
        var_dump($statue);
        echo "<br>";
        anyProblem();
        var_dump($statue);
        echo "<br>";
    
        $statue_2 = true;

        function anyProblemByValue(&$statue){
            $statue = false;
        }

        var_dump($statue_2);
        echo "<br>";
        anyProblemByValue($statue_2);
        var_dump($statue_2);
        echo "<br>";

        function isPrimeRec($number_1,$index=2){
            if($number_1 == $index) return true;
            return $number_1 % $index != 0 and isPrime($number_1,++$index);
        }

        var_dump(isPrimeRec(97));

        echo "<br>";
        function a($number = 1){
            echo $number." ";
            b($number);
        }
        function b($number){
            $number++;
            if ($number >10) return;
            a($number);
        }
        a();

        echo "<br>";

        function c($array_i){
            $total = 0;
            foreach($array_i as $i):
                $total += $i;
            endforeach;
            return $total;
        }
        echo c(array(4,2,3,7,8))."<br>";
        
        function d(){
            echo func_num_args()."<br>";
            echo func_get_arg(0) + func_get_arg(1)."<br>";
            print_r(func_get_args());
            echo "<br>"; 
        }

        d(1,3);


        function generate($start,$end){
            for($i = $start; $i <= $end; $i++):
                $array[] = $i;
            endfor;
            return $array;
        }

        $run = generate(1,100000);
        /* echo "<pre>";
        print_r($run);
        echo "</pre>";

        echo (memory_get_usage()/1024)." KBYTES"; */

        function generateYield($start,$end){
            for($i = $start; $i <= $end; $i++):
                yield $i;
            endfor;
        }

        /* $run = generateYield(1,100000);
        foreach($run as $i):
            echo "$i -";
        endforeach; */

        echo "<br>";
        echo (memory_get_usage()/1024)." KBYTES";
        echo "<br>";
        function staticMethod(){

            static $number = 0;
            echo "$number ";
            $number++;
        }

        staticMethod();
        staticMethod();
        staticMethod();
        echo "<br>";
        var_dump(function_exists("staticMethod"));
        echo "<br>";
        var_dump(function_exists("staticMethod2"));
        echo "<br>";
        
        function total_1(int $num1,int $num2){
            return $num1+$num2;
        }

        echo total_1('5','7')."<br>";

        #declare(strict_types = 1);

        function total_2(int $num1,int $num2):int{
            return $num1+$num2;
        }

        //echo total_2('5','7');
        echo total_2(7.2,6.5);



    ?>

</body>
</html>