<?php
$file = fopen("test.txt", 'w') or die("не удалось открыиь файл");
$string = "Привет мир";
fputs($file,$string);
   $str = htmlentities(file_get_contents("test.txt"));
echo $str;

fclose($file);
?>
