<?php 

    $connection = mysqli_connect('localhost','root','','world');

    if($connection -> errno > 0) die("Database Connection Error Code :".$connection -> errno);

    $COLUMN = $connection -> query("show columns from `citizens`");
    if ($COLUMN){
        echo '<table border"2">';
            while($ROW = $COLUMN -> fetch_row()):
                echo "<tr>";
                foreach($ROW as $i):
                    echo "<td>".$i."</td>";
                endforeach;
                echo "</tr>";
            endwhile;
        echo '</table>';
        $connection -> close();
    }
    echo "<hr>";
    $text = "<pre>onur</pre><br><p>oduncu</p>";
    echo htmlspecialchars($text)."<br>";
    echo htmlentities($text);
?>