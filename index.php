<?php
try {
    $filename = 'no_such_file.txt';
    $handle = fopen($filename, 'r'); // вернет false, если файла нет

    if (!$handle) {
        throw new Exception("Не удалось открыть файл: $filename");
    }

    fclose($handle);
} catch (Exception $ex) {
    echo 'Исключение: ' . $ex->getMessage();
}
?> 

