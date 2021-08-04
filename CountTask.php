<?php
require __DIR__ . '/vendor/autoload.php'; //подключаем симфони дампер. Установка: composer require symfony/var-dumper --dev

$n = 100;
for ($i = 0; $i <= $n; $i++) {
    print_r($arr[$i] = random_int(1, 100) . " ");
}
$count = 0;
for ($i = 0; $i < $n; $i++) {
    if ($arr[$i] === $arr[$i + 1]) {
        $count++;
        echo '<br/>' . 'На позиции';
        dump([$i]);//вывод позиции одинаковых последовательных чисел
        echo 'Пара чисел';
        dump($arr[$i + 1]);//вывод числа которое совпадает
    }
}
print_r('<br/>');
print_r(" Количество последовательных пар одинаковых элементов - " . $count);