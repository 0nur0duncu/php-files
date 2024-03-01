<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
             
        #touch('new_file.txt');
        chmod('new_file.txt',0700); //permanent
        $file = fopen('new_file.txt','a+');
        fclose($file);

        $file = fopen('new_file.txt','a');
        $writtable_context = "Hello World\n";
        fwrite($file,$writtable_context);
        fclose($file);

        $people = array("ali","veli","remzi","fatma");
        $file = fopen('new_file.txt','wbt');
        foreach($people as $person):
            fwrite($file,$person."\n");
        endforeach;

        $file = fopen('new_file.txt','rb');
        echo fread($file,filesize('new_file.txt'))."<br>";
        fclose($file);

        $file = fopen('new_file.txt','rb');
        while(!feof($file)):
            echo fgets($file)."<br>";
        endwhile;
        fclose($file);

        /* rename('new_file.txt','renew_file.txt');
        rename('renew_file.txt','files/renew_file.txt');

        touch('new_file.txt');
        copy("new_file.txt","files/new_files.txt"); */
        /* if(file_exists("new_file.txt")):
            unlink('new_file.txt');
        else:
            touch('new_file.txt');
        endif; */

        
        $file = $file = fopen('new_file.txt','r');
        fseek($file,0,SEEK_END);
        while(!feof($file)):
            echo fgets($file,filesize('new_file.txt'))."<br>";
        endwhile;
        fclose($file);

        /* $file = fopen('new_file.txt','w');
        fclose($file); */

        @mkdir('files/files2');
        copy("new_file.txt","files/beta.txt");
        if($directory = opendir('files')):
            while(($files = readdir($directory)) !== false)://alphabetic A-Z
                echo $files."<br>";
            endwhile;
        endif;
        closedir($directory);

        echo "<br>";
        $files = scandir('files',1); // second parameter 0 alphabetic or not reverse
        foreach($files as $file):
            if(is_file('files/'.$file)):
                echo $file."<br>";
            endif;
            if(is_dir('files/'.$file)):
                echo $file."<br>";
            endif;
        endforeach;
        @rmdir('files/files2');
    ?>

</body>
</html>