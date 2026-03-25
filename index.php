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

//mkdir("/var/www/Кокорева.ru/folder");
//if (!rename("mir.txt", "folder/mir.txt"))
//    echo "Ошибка движения файла";
//else echo "Файл перемещен";
   
//if (copy("folder/mir.txt", "folder/world.txt"))
//    echo "Копия файла создана";
//else echo "Ошибка копирования файла";

//$file=filesize("folder/world.txt");
//echo $file. " " . "в байтах" . "</br>";
//echo $file/1024 . " " . "в мегабайтах" . "</br>";
//echo $file/1024/1024 . " " . "в гигабайтах" . "</br>";

//if (unlink("folder/world.txt"))
//    echo "Файл удален";
//else echo "Ошибка при удалении файла";

//$file1 = "folder/world.txt";
//$file2 = "folder/mir.txt";
//if(file_exists($file1)==true)
//{
  //  if(file_exists($file2)==true)
    //{
      //  echo "оба файла существуют";
    //}
    //else 
    //{
      //  echo "world - есть, mir - нет";
    //}
//}
//else
//{
  //  if(file_exists($file2)==true)
   // {
     //   echo "world - нет, mir - есть";
    //}
    //else 
   // {
     //   echo "оба файла отсутствуют";
    //}
//}

//mkdir("/var/www/Кокорева.ru/test");
//
//if (!rename ( "/var/www/Кокорева.ru/test" , "/var/www/Кокорева.ru/www"))
//{
//echo "Ошибка переименования папки";
//}
//else echo "Папка переименован";

//rmdir("/var/www/Кокорева.ru/www");

//mkdir("/var/www/Кокорева.ru/test");

$mainPath = "/var/www/Кокорева.ru/test";
$folders = ["str1", "str2", "str3"];

foreach ($folders as $folder) {
    $path = $mainPath . "/" . $folder;

    if (!is_dir($path)) {
        if (!@mkdir($path, 0777)) {
            echo "Ошибка mkdir " . "<br>";
        } else {
            echo "Создано: $path<br>";
        }
    } else {
        echo "Уже существует: $path<br>";
    }
}

?>
