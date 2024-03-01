<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=7">
</head>
<body>
    
    <?php 
        $products = array(
            1 => array("Book",100,"Alice in wonderlands"),
            2 => array("laptop",40000,"Lenovo k282"),
            3 => array("DVD",50,"The grudge"),
            4 => array("Pencil",200,"Rotring"),
            5 => array("notebook",45,"soft")
        );

        if(isset($_COOKIE['cart'])){
            $amount = count($_COOKIE['cart']);
            echo '<div style="padding:10px; margin:5px; border:1px solid #ddd; background:#eee">';
            echo 'There is <strong>'.$amount.'</strong> product in your cart.<br>';
            echo '<a href="?mycart=true">[Show my cart]</a> - ';
            echo '<a href="?empty=true">[Empty cart]</a> ';
            echo '</div>';
        }else{
            echo '<div style="padding:10px;margin:5px;border:1px solid #ddd;background:#eee">';
            echo 'There is no product in your cart.';
            echo '</div>';
        }

        if(isset($_GET['mycart'])){
            if(isset($_COOKIE['cart'])){
                $total = 0;
                foreach($_COOKIE['cart'] as $product){
                    echo '<div style="border:1px solid #ddd; padding: 10px;margin: 5px">';
                    echo '<strong> Product Name : </strong>'.$products[$product][0].'<br>';
                    echo '<strong> Product Price : </strong>'.$products[$product][1].'<br>';
                    echo '<strong> Product Type : </strong>'.$products[$product][2].'<br>';
                    echo '<a href="?drop='.$product.'">[Drop]</a>';
                    echo '</div>';
                    $total += $products[$product][1];
                }
                echo '<div style="border:1px solid #ddd;padding:10px;margin:5px">';
                echo '<strong> TOTAL PRICE : </strong>'.$total.' TL</div>';
                echo '</div>';
            }
        }else{

            foreach($products as $key => $product){
                echo '<div style="border:1px solid #ddd; padding: 10px;margin: 5px">';
                echo '<strong> Product Name : </strong>'.$product[0].'<br>';
                echo '<strong> Product Price : </strong>'.$product[1].'<br>';
                echo '<strong> Product Type : </strong>'.$product[2].'<br>';
                if(!isset($_COOKIE['cart'][$key])){
                    echo '<a href="?add='.$key.'">[Add Cart]</a>';
                }else{
                    echo '<a href="?drop='.$key.'">[Drop]</a>';
                }
                echo '</div>';
            }
        }

        if(isset($_GET['add'])){
            $id = $_GET['add'];
            setcookie('cart['.$id.']',$id,time()+86400);
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }

        if(isset($_GET['drop'])){
            setcookie('cart['.$_GET['drop'].']',$_GET['drop'],time()-8600);
            header('Location:'.$_SERVER['HTTP_REFERER']);
        }

        if(isset($_GET['empty'])){
            foreach ($_COOKIE['cart'] as $key => $value) {
                setcookie('cart['.$key.']',$key,time()-8600);
            }
            header('Location:'.$_SERVER['HTTP_REFERER']);

        }
    ?>
    
</body>
</html>