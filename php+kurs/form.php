<?php
    
    echo $_POST["name"]."<br>";
    echo $_POST["surname"]."<br>";
    $hobb = $_POST["hobbies"];
    
    /* echo ($_POST["shopping"] ?? "off")."<br>";
    echo ($_POST["cinema"] ?? "off")."<br>";
    echo ($_POST["eating"] ?? "off")."<br>";
    echo ($_POST["travelling"] ?? "off")."<br>";
 */

   /*  echo "<pre>";
    print_r($hobb);
    echo "</pre>"; */


    foreach($hobb as $value):
        echo $value."<br>";
    endforeach;

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    /* $file_path = $_FILES['file']['tmp_name'].$_FILES['file']['name'];
    if(move_uploaded_file($_FILES['file']['tmp_name'],$file_path)){
        echo "file is uploaded successfully<br>";
        echo "<img src='{$file_path}'>";
    }else{
        echo "error";
    } */
?>

<?php
    if(!$_GET){
?>
    <p>Get isteği yok</p>
<?php
        }else{
?>
    <p>Get isteği var</p>
<?php
        }
?>


