<?php

function inDomain1($x, $y) {
    return ($x**2 + $y**2 <= 25) && ($y >= 0);
}

function inDomain2($x, $y) {
    return abs($x) <= 1.5 && abs($y) <= 1.5;
}

function inDomain3($x, $y) {
    return abs($x) <= 2 && abs($y) <= 2 && ($x * $y >= 0);
}

function inDomain4($x, $y) {
    return ($x >= 0) && ($y >= 0) && ($x**2 + $y**2 <= 25);
}

function inDomain5($x, $y) {
    return ($x >= 0 && $y >= 0 && $x <= 4 && $y <= 5);
}

function inDomain6($x, $y) {
    return $x >= 0 && $y >= 0 && $y <= 5 - $x;
}

function inDomain7($x, $y) {
    return ($y >= 0) && ($y <= 1 - $x) && ($y <= 1 + $x);
}

function inDomain8($x, $y) {
    return ($x**2 + $y**2 <= 25) && ($y <= 0);
}

function inDomain9($x, $y) {
    return ($x >= 0 && $x <= 3) && ($y <= 0 && $y >= -3);
}

function inDomain10($x, $y) {
    return abs($x) <= 4 && abs($y) <= 4 && ($x * $y >= 0);
}

// ---------- ВЫЧИСЛЕНИЯ ФУНКЦИЙ ----------

function y1($x) {
    $part1 = asin(sqrt(abs($x)) / sqrt(abs($x) + 1));
    $part2 = sqrt($x**2 + 1);
    $part3 = log(pow(2, sin(abs($x)**cos($x))), 2);
    return $part1 + $part2 + $part3;
}

function y2($x) {
    $numerator = cos(sqrt(abs($x)));
    $denominator = $numerator**2 + 5;
    $part1 = acos($numerator / $denominator);
    $part2 = log(pow(4, abs(4*$x + 5)), 2);
    return $part1 + $part2;
}

function y3($x) {
    $numerator = cos(sqrt(abs($x)));
    $denominator = $numerator**2 + 7;
    $part1 = asin($numerator / $denominator);
    $part2 = log(5 * (2 + abs(2 * $x))**log10(M_E), 10);
    return $part1 + $part2;
}

function y4($x) {
    $part1 = acos(($x**3) / ($x**3 + 1));
    $part2 = sqrt(sqrt(abs($x)) + log(pow(2, 5 * (abs($x) + 1)), 2));
    return $part1 + $part2;
}

function y5($x) {
    $part1 = acos(cos($x**2) / ($x**2 + 5));
    $part2 = log(pow(3, (3 * $x + 2)), 10);
    return $part1 + $part2;
}

function y6($x) {
    $part1 = asin(sqrt(abs($x)) / sqrt(2 * $x + 3));
    $part2 = log(pow(3, 9 * $x + 4), 10);
    return $part1 + $part2;
}

function y7($x) {
    $numerator = sin(pow(abs($x), 1/3));
    $denominator = $numerator**2 + 7;
    $part1 = asin($numerator / $denominator);
    $part2 = log(pow(3, 2 * sin(2*$x) + 2), 10);
    return $part1 + $part2;
}

function y8($x) {
    $term1 = (5 * sqrt(abs($x))) / (sqrt(abs($x)) + 1);
    $part1 = acos(pow($term1, 9));
    $part2 = log(pow(4, 3*$x) + sqrt(abs(3*$x - 1)) + abs(sin(2 * $x)), 2);
    return $part1 + $part2;
}

function y9($x) {
    $numerator = cos(sqrt(abs($x)));
    $denominator = $numerator**2 + 7;
    $part1 = acos($numerator / $denominator);
    $part2 = log10(pow(2, sin(3 * $x) + 3));
    return $part1 + $part2;
}

function y10($x) {
    $numerator = abs($x)**8;
    $denominator = $x**2 + 3;
    $part1 = asin($numerator / $denominator);
    $cosPart = cos(sqrt(abs($x)) + 1);
    $sinPart = abs(sin(3 * $x));
    $part2 = log(pow(4, 2 * $cosPart + $sinPart), 2);
    return $part1 + $part2;
}

// ---------- ОСНОВНАЯ ЛОГИКА ----------

function compute($func, $domainFunc, $x) {
    $y = $func($x);
    if (!is_finite($y)) {
        echo "Ошибка вычислений (нечисловой результат).\n";
        return;
    }

    if ($domainFunc($x, $y)) {
        echo "x принадлежит области D\n";
        echo "Значение y(x): $y\n";
    } else {
        echo "x НЕ принадлежит области D\n";
    }
}

function menu() {
    echo "Выберите номер функции от 1 до 10:\n";
    echo "1–10: Введите номер задачи\n";
    echo "Ваш выбор: ";

    $handle = fopen("php://stdin", "r");
    $choice = intval(trim(fgets($handle)));

    echo "Введите значение x: ";
    $x = floatval(trim(fgets($handle)));

    switch ($choice) {
        case 1: compute('y1', 'inDomain1', $x); break;
        case 2: compute('y2', 'inDomain2', $x); break;
        case 3: compute('y3', 'inDomain3', $x); break;
        case 4: compute('y4', 'inDomain4', $x); break;
        case 5: compute('y5', 'inDomain5', $x); break;
        case 6: compute('y6', 'inDomain6', $x); break;
        case 7: compute('y7', 'inDomain7', $x); break;
        case 8: compute('y8', 'inDomain8', $x); break;
        case 9: compute('y9', 'inDomain9', $x); break;
        case 10: compute('y10', 'inDomain10', $x); break;
        default: echo "Неверный выбор функции.\n"; break;
    }
}

// Запуск
menu();
