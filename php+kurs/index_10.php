<?php 


    $sayi1  =   1;
    $sayi2  =   0;

    try{

        if($sayi2 == 0)
            throw new DivisionByZeroError("Sıfıra bölünme hatası", 1);

        echo $sayi1 / $sayi2;


    }catch(DivisionByZeroError $e){
        echo "Hatanın Sebebi = ".$e -> getMessage()."<br />";
    }finally{
        echo "Başarılı çalıştı.<br />";
    }

    //  C:\xampp\php\php.ini  --> error_reporting ifadesi ile hata kayıtları açılıp kapatılabilir.

    //fatal error değilse @ operatörü ile hata giderilebilir.

    /* @deneme(); */
    /* echo 1/0; */

    //fatal error a @ etki etmez.

    /* @trim(); */




?>