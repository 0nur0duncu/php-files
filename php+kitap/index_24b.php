<table>
    <form action="" method="post">
        <?php 

            $pdo = new PDO("mysql:host=localhost;dbname=world","root","");
            $NAMES = $pdo -> query("select id,name from `citizens`") -> fetchAll(PDO::FETCH_ASSOC);

            foreach ($NAMES as $NAME):
            ?>
                
            <input type="checkbox" name="delete[]" value="<?=$NAME['id']?>">
            <?=$NAME['name']?> <br>

            <?php endforeach; ?>

            <button>Delete selected person</button>

    </form>

    <?php 
        if($_POST){
            foreach($_POST['delete'] as $delete){
                $pdo -> query("delete from `citizens` where id=$delete");
            }
        }
    ?>
</table>