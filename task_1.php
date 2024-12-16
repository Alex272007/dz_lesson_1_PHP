<?php
//1. Реализовать основные 4 арифметические операции в виде функции с тремя параметрами – два параметра это числа, третий – операция. Обязательно использовать оператор return

function arithmeticOperation($x, $y, $operation)
{
    switch ($operation) {
        case '+':
            return $x + $y;
        case '-':
            return $x - $y;
        case '*':
            return $x * $y;
        case '/':
            if ($y != 0) {
                return $x / $y;
            } else {
                return ("Деление на ноль невозможно.");
            }
        default:
            return ("Неизвестная операция.");
    }
}
// Примеры
echo arithmeticOperation(6, 5, '+');
echo "\n";
echo arithmeticOperation(6, 5, '-');
echo "\n";
echo arithmeticOperation(6, 5, '*');
echo "\n";
echo arithmeticOperation(6, 5, '/');
echo "\n";

// Ошибки при делeнии
echo arithmeticOperation(34, 0, '/');
echo "\n ";
echo arithmeticOperation(34, 0, '%');
