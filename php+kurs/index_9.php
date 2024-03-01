<?php 

    $saat = 15;

    switch ($saat) {
        case ($saat > 0) and ($saat <= 6):
            echo "3.çeyrekte<br />";
            
            switch ($saat) {
                case 0:
                echo "saat ".$saat."<br />";
                break;
                
                case 1:
                echo "saat ".$saat."<br />";
                break;

                case 3:
                echo "saat ".$saat."<br />";
                break;

                case 4:
                echo "saat ".$saat."<br />";
                break;

                case 5:
                echo "saat ".$saat."<br />";
                break;

                case 6:
                echo "saat ".$saat."<br />";
                break;
            }

        break;

        case ($saat > 6) and ($saat <= 12):
            echo "2.çeyrekte<br />";

            switch ($saat) {
                case 7:
                echo "saat ".$saat."<br />";
                break;
                
                case 8:
                echo "saat ".$saat."<br />";
                break;

                case 9:
                echo "saat ".$saat."<br />";
                break;

                case 10:
                echo "saat ".$saat."<br />";
                break;

                case 11:
                echo "saat ".$saat."<br />";
                break;

                case 12:
                echo "saat ".$saat."<br />";
                break;
            }
        break;

        case ($saat > 12) and ($saat <= 18):
            echo "3.çeyrekte<br />";

            switch ($saat) {
                case 13:
                echo "saat ".$saat."<br />";
                break;
                
                case 14:
                echo "saat ".$saat."<br />";
                break;

                case 15:
                echo "saat ".$saat."<br />";
                break;

                case 16:
                echo "saat ".$saat."<br />";
                break;

                case 17:
                echo "saat ".$saat."<br />";
                break;

                case 18:
                echo "saat ".$saat."<br />";
                break;
            }
        break;

        case ($saat > 18) and ($saat <= 24):
            echo "4.çeyrekte<br />";

            switch ($saat) {
                case 19:
                echo "saat ".$saat."<br />";
                break;
                
                case 20:
                echo "saat ".$saat."<br />";
                break;

                case 21:
                echo "saat ".$saat."<br />";
                break;

                case 22:
                echo "saat ".$saat."<br />";
                break;

                case 23:
                echo "saat ".$saat."<br />";
                break;

                case 24:
                echo "saat ".$saat."<br />";
                break;
            }
        break;

        default:
        print("Saat 0-24 arasında olmalıdır.");
        break;
    }

    echo "<br />";

    switch ($saat) {
        case $saat == 15:
            print($saat);
        
        case $saat >=15:
        print("evet");
        break;
    }

    echo "<br />";

    $sayi = 1;

    $sayi1 = "1";
    $sayi2 = "2";

    $durum = ($sayi == 1) ?  $sayi1 : (($sayi == 2) ? $sayi2 : "3");

    echo $durum."<br /><hr>";

    

?>

<form action="" method="get">

    kullanıcı adı : <input type="text" name="user">
    sifre : <input type="password" name="pwd">
    <button type="submit">Gönder</button>

</form>

<?php 

    echo $_GET['user'] ?? "Kullanıcı Adını boş bıraktınız.";
    echo "<br />";
    echo $_REQUEST['pwd'] ?? "Sifreyi boş bıraktınız.";
    echo "<br />";

    echo "Hello<br />";
    goto step;

    $name = "onur";
    echo "World<br />";

    step:
    echo "Friends<br />";
    /* goto $name; */
    /* echo  $name. "Friends<br />"; */

    deneme: // goto yoksa her türlü çalışır.
        echo "Hello World";

?>