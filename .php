<?php
// Создаем замыкание для сложения двух чисел
$sum = function($a, $b) {
    return $a + $b;
};

// Вызываем замыкание с разными парами чисел
echo $sum(5, 3); // Выведет 8
echo $sum(10, 15); // Выведет 25
?>