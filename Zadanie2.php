<?php

function zadanie1($t) {
    $g = 9.81;
    return ($g * pow($t, 2)) / 8;
}

function zadanie2($V1, $V2, $t1, $t2) {
    $T = ($V1 * $t1 + $V2 * $t2) / ($V1 + $V2);
    $V = $V1 + $V2;
    return "Объем: $V, Температура: $T";
}

function zadanie3($a, $x) {
    return $a * pow($x, $a - 1);
}

function zadanie4($V1, $V2, $a1, $a2, $S) {
    if ($a1 == 0 && $a2 == 0) {
        return $S / ($V1 + $V2);
    } else {
        return "Нужно учитывать ускорение";
    }
}

function zadanie5($N) {
    return strrev((string)$N);
}

function zadanie6($N) {
    return array_sum(str_split($N));
}

function zadanie7($takeoff_h, $takeoff_m, $takeoff_s, $duration_sec) {
    $takeoff = strtotime("$takeoff_h:$takeoff_m:$takeoff_s");
    $landing = $takeoff + $duration_sec;
    return date("H:i:s", $landing);
}

function zadanie8($N) {
    $digits = str_split((string)$N);
    return $digits[4] + $digits[5];
}

function zadanie9($x1, $x2) {
    $b = -($x1 + $x2);
    $c = $x1 * $x2;
    return "x^2 + ($b)x + ($c) = 0";
}

function zadanie10($N) {
    return array_product(str_split($N));
}

// Пример работы — подставьте нужный номер и значения
$zadanie = 2; // измените номер задания

switch ($zadanie) {
    case 1:
        echo "Глубина шахты: " . zadanie1(4) . " м";
        break;
    case 2:
        echo zadanie2(2, 3, 60, 20);
        break;
    case 3:
        echo "Производная: " . zadanie3(3, 2);
        break;
    case 4:
        echo "Время встречи: " . zadanie4(10, 15, 0, 0, 100) . " с";
        break;
    case 5:
        echo "Обратный порядок: " . zadanie5(123);
        break;
    case 6:
        echo "Сумма цифр: " . zadanie6(123);
        break;
    case 7:
        echo "Время приземления: " . zadanie7(10, 15, 0, 9900);
        break;
    case 8:
        echo "Сумма десятков и единиц: " . zadanie8(123456);
        break;
    case 9:
        echo "Уравнение: " . zadanie9(2, 3);
        break;
    case 10:
        echo "Произведение цифр: " . zadanie10(123);
        break;
    default:
        echo "Неверный номер задания.";
}
?>
