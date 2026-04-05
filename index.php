<?php
//try {
//    $filename = 'no_such_file.txt';
//    $handle = fopen($filename, 'r'); // вернет false, если файла нет
//
//    if (!$handle) {
//        throw new Exception("Не удалось открыть файл: $filename");
//    }
//
//    fclose($handle);
//} catch (Exception $ex) {
//    echo 'Исключение: ' . $ex->getMessage();
//}
//try {
//    $a = 10;
//    $b = 0;
//
//    if ($b == 0) {
//        throw new Exception('Деление на ноль запрещено');
//    }
//
//    $result = $a / $b;
//    echo "Результат: $result";
//} catch (Exception $ex) {
//    $msg = date('Y-m-d H:i:s') . ' - Ошибка: ' . $ex->getMessage() . PHP_EOL;
//    file_put_contents('log.txt', $msg, FILE_APPEND);
//    echo 'Произошла ошибка, см. log.txt';
//}
$countries = [
    'Spain'  => 'Madrid',
    'Russia' => 'Moscow'
];

try {
    $key = 'Germany';

    if (!array_key_exists($key, $countries)) {
        throw new Exception("Элемент с ключом '$key' не найден в массиве");
    }

    echo $countries[$key];
} catch (Exception $ex) {
    echo 'Исключение: ' . $ex->getMessage();
}
?> 

