<?php
//$file = fopen("test.txt", 'w') or die("не удалось открыиь файл");
//$string = "Привет мир";
//fputs($file,$string);
//   $str = htmlentities(file_get_contents("test.txt"));
//echo $str;
//
//fclose($file);


//if (!rename("test.txt", "mir.txt"))
//    echo "Ошибка переименования файла";
//else echo "Файл переименован";
//

mkdir("/var/www/Кокорева.ru/folder");
if (!rename("mir.txt", "folder/mir.txt"))
    echo "Ошибка движения файла";
else echo "Файл перемещен";
   

?>
