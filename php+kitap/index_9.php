<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #date{
            background-color: seagreen;
        }
        #time{
            background-color: aliceblue;
        }
    </style>
</head>
<body>

    <?php 
        
        echo '<div id="date">Tarih = '.date("d:m:Y H:i:s").'</div>';
        echo '<div id="time">Now = '.time().' sn</div>';
        echo '<div id="date">Tomorrow = '.(time()+8640).' sn</div>';
        $tomorrow = (time()+86400);
        echo '<div id="time">TomorrowDate = '.date("d:m:Y H:i:s",$tomorrow).'</div>';
        $date = mktime("4","50",25,2,25,"1998");
        echo '<div id="date">Random Date = '.date("d:m:Y H:i:s",$date).'</div>';
        $days = array("Pazartesi","Sali","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
        echo "day = ".$days[date('w')]."<br>";
        setlocale(LC_TIME,"tr-TR");
        echo "TR zaman =".strftime('%d %B %Y,%A')."<br>";
        echo "strt TR zaman =".strftime('%d %B %Y,%A',strtotime("-1 day"))."<br>";
        echo date_default_timezone_get()."<br>";
        date_default_timezone_set("Europe/Istanbul");
        echo date_default_timezone_get()."<br>";
        echo '<div id="date">Tarih = '.date("d:m:Y H:i:s").'</div>';

        $date = new DateTime();
        echo "<pre>";
        print_r($date);
        echo "</pre>";
        $date -> setTimezone(new DateTimeZone('Europe/Berlin'));
        echo $date->format("d:m:Y H:i:s")."<br>";
        echo '<div id="date">Tarih = '.date("d:m:Y H:i:s").'</div>';

        $today = time();
        $birthday = mktime(0,0,0,3,6,1998);
        $find_day = (($today-$birthday)/31536000)%365;
        echo floor($find_day)."<br>";


        function detailed_time($date){
            $convert_second = strtotime($date);
            $current_date = new DateTime('@'.$convert_second);
            $now_date = new DateTime('@'.time());
            #return $current_date ->diff($now_date)->format('%y year %m month %d day %h hour %i minute %s second ago');
            return $current_date ->diff($now_date)->format('%h hour %i minute ago');
        }

        $date = '2023-06-27 14:05:14';
        echo detailed_time($date)."<br>";
    
    
    ?>

</body>
</html>