<?php
// 1. array_map: ['a','b','c','d','e'] -> ['A','B','C','D','E']
$letters = ['a', 'b', 'c', 'd', 'e'];
$upperLetters = array_map('strtoupper', $letters);
print_r($upperLetters);
echo "</br>";

// 2. count: вывести последний элемент массива
$arr = [10, 20, 30, 40];
$lastIndex = count($arr) - 1;
echo $arr[$lastIndex] ."</br>" ;

// 3. Проверить, есть ли в массиве число 3
$nums = [1, 2, 3, 4, 5];
$pos3 = array_search(3, $nums);
if ($pos3 !== false) {
    echo "Есть 3, индекс: $pos3" . "</br>";
} else {
    echo "3 нет в массиве" . "</br>";
}

// 4. Слить массивы [1,2,3] и ['a','b','c']
$a1 = [1, 2, 3];
$a2 = ['a', 'b', 'c'];
$merged = array_merge($a1, $a2);
print_r($merged);
echo "</br>";
// 5. array_slice: из [1,2,3,4,5] получить [2,3,4]
$src = [1, 2, 3, 4, 5];
$result = array_slice($src, 1, 3);
print_r($result);
echo "</br>";
// 6. array_keys / array_values
$assoc = ['a' => 1, 'b' => 2, 'c' => 3];
$keys = array_keys($assoc);
$values = array_values($assoc);
print_r($keys);
echo "</br>";
print_r($values);
echo "</br>";

// 7. array_combine: ['a','b','c'] и [1,2,3] -> ['a'=>1,'b'=>2,'c'=>3]
$k = ['a', 'b', 'c'];
$v = [1, 2, 3];
$combined = array_combine($k, $v);
print_r($combined);
echo "</br>";
// 8. array_search: позиция первого '-'
$chars = ['a', '-', 'b', '-', 'c', '-', 'd'];
$dashPos = array_search('-', $chars);
echo "Первая '-' на позиции: $dashPos" . "</br>";

// 9. Разные сортировки для массива с ключами
$fruits = ['3' => 'a', '1' => 'c', '2' => 'e', '4' => 'b'];

$asort = $fruits;
asort($asort);
echo "asort: ";
print_r($asort);
echo "</br>";
$ksort = $fruits;
ksort($ksort);
echo "ksort: ";
print_r($ksort);
echo "</br>";

$arsort = $fruits;
arsort($arsort);
echo "arsort: ";
print_r($arsort);
echo "</br>";
// 10. Сумма цифр строки '1234567890' без цикла
$str = '1234567890';
$digits = str_split($str);
$sum = array_sum($digits);
echo "Сумма цифр: $sum" . "</br>";

// 11. Заполнить массив 10-ю буквами 'x'
$xs = array_fill(0, 10, 'x');
print_r($xs);
echo "</br>";
// 12. Общие элементы двух массивов (пересечение)
$a = [1, 2, 3, 4, 5];
$b = [3, 4, 5, 6, 7];
$common = array_intersect($a, $b);
print_r($common);

?>


