<?php
// 2. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case 'add':
            return $arg1 + $arg2;
        case 'subtract':
            return $arg1 - $arg2;
        case 'multiply':
            return $arg1 * $arg2;
        case 'divide':
            if ($arg2 != 0) {
                return $arg1 / $arg2;
            } else {
                return ("Деление на ноль невозможно.");
            }
        default:
            return ("Неизвестная операция.");
    }
}

echo mathOperation(6, 5, 'add');
echo "\n";
echo mathOperation(6, 5, 'subtract');
echo "\n";
echo mathOperation(6, 5, 'multiply');
echo "\n";
echo mathOperation(6, 5, 'divide');
echo "\n";

// Ошибки при делeнии
echo mathOperation(34, 0, 'divide');
echo "\n ";
echo mathOperation(34, 0, '%');
