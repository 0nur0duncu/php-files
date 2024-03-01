<?php 

    try{
        $pdo = new PDO("mysql:host=localhost;dbname=world","root","");
        try{
            /* $SQL = "insert into `citizens` set name='marry',surname='survly'";
            $pdo -> query($SQL); */

            /* $SQL = $pdo -> prepare("insert into `citizens` set name=?,surname=?");
            $SQL -> execute(array("tolga","cenk"));
             */

            $SQL = $pdo -> prepare("insert into `citizens` set name=:name,surname=:surname");
            /* $SQL -> execute(array("surname" => "köse",
                                  "name" => "semih"));
            $SQL -> execute(array("surname" => "yerk",
                                  "name" => "barışcan")); */

            /* $SQL -> execute(array("surname" => "yücedağ",
                                  "name" => "cafer")); */

            /* $pdo -> beginTransaction();
                
            $QUE = $pdo -> prepare("update `citizens` set name=:name,surname=:surname where id=30");

            $SQl = $QUE -> execute(array("name"=>"caner","surname" => "aykara")); */

            /* $QUE1 = $pdo -> prepare("insert into `citizens` if not exists set name=:name,surname=:surname");
            $QUE2 = $pdo -> query("delete from `citizens` where id=35");

            $SQL1 = $QUE1 -> execute(array("name"=>"caner","surname" => "aykara"));

            if($SQL1 and $QUE2){
                $pdo -> commit();
                echo "Successfully<br>";
            }else{
                $pdo -> rollBack();
                echo "Failed<br>";
            } */

            /* $SQL1 = $pdo -> query("select * from `citizens` where id=1") -> fetchAll(PDO::FETCH_CLASS);

            echo "<pre>".print_r($SQL1[0] -> name)."</pre>";
            echo "<pre>".print_r($SQL1)."</pre>";

            if($SQL){
                echo "Successfully";
            } */

            $SQL2 = $pdo -> query("select * from `citizens`");

            if($SQL2 -> rowCount() > 0):
                $ROWS = $SQL2 -> fetchAll(PDO::FETCH_ASSOC);
                foreach($ROWS as $ROW):
                    echo $ROW["name"]."<br>";
                endforeach;
            else:
                echo "There is no listing data";
            endif;

            $pdo = null;

            


        }catch(PDOException $b){}
    }catch(PDOException $a){
        die("Connection Error<br>Error Message : ".$a -> getMessage());
    }

?>