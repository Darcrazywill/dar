<?php
$file = fopen("test.txt", 'w') or die("не удалось открыиь файл");
$string = "Привет мир";
fputs($file,$string);
fclose($file);
?>
