<?php

function calculate($task, $x) {
    switch ($task) {
        case 1:
            if ($x < -1) return pow($x, 6) * pow(log10(abs($x - 5)), 6) / $x;
            elseif ($x <= 1) return sin($x) / (1 - 2 * pow($x, 2));
            else return asin($x / (pow($x, 2) + 1));
        case 2:
            if ($x <= 1) return asin($x / (pow($x, 2) + 1));
            elseif ($x < 2) return pow($x, 4) / (1 + log10(abs(2 - pow($x, 4))));
            else return acos(1 - 2 / (4 * $x));
        case 3:
            if ($x < 0.5) return -pow($x, 5) * log10(abs(3 - pow($x, 3))) / ($x + 1);
            elseif ($x < 2) return log10(abs($x)) / log($x + 2);
            else return acos($x / (pow($x, 2) + 1));
        case 4:
            if ($x <= 3) return log10(pow(2 + abs(pow($x, 2) - 4), 4));
            elseif ($x < 5) return log(1 + pow($x, 3));
            else return acos(1 - $x / (1 + pow($x, 2)));
        case 5:
            if ($x <= -3) return atan(sqrt(abs(1 + $x)));
            elseif ($x < 3) return ($x * $x + 2 * $x) / (pow($x, 3) + 3 * pow($x, 2));
            else return NAN;
        case 6:
            if ($x < -2) return log10(pow(7 - abs($x), 3));
            elseif ($x < 2) return log(pow($x, 8) / (1 + pow($x, 2)));
            else return asin($x / (1 + pow($x, 2)));
        case 7:
            if ($x <= 2) return log10(pow($x, 4) + 2 * pow(M_E, abs($x)));
            elseif ($x < 8) return (1 + pow($x, 2)) / (pow($x, 2) + 1);
            else return asin($x / (pow($x, 3) + 1));
        case 8:
            if ($x <= 8) return acos(exp($x)) / (7 + pow($x, 2));
            elseif ($x < 9) return cos(pow($x, 5)) / (7 + 2 * $x);
            else return $x / (pow($x, 2) + 10);
        case 9:
            if ($x <= -2) return acos(pow(M_E, $x));
            elseif ($x < 2) return tan(5 * $x / (4 - pow($x, 2)));
            else return abs($x - 2) + 1;
        case 10:
            if ($x <= -4) return cos(cos($x));
            elseif ($x < 4) return acos($x / sqrt(4 + pow($x, 2)));
            else return pow(log10(pow($x, 2) + pow($x, 2) + 10), 0.25);
        default:
            return NAN;
    }
}

// === Интерактивный CLI ===
echo "Введите номер задания (1–10): ";
$task = (int)trim(fgets(STDIN));

echo "Введите значение x: ";
$x = (float)trim(fgets(STDIN));

$result = calculate($task, $x);
echo "Результат y(x) = " . (is_nan($result) ? "ошибка или недопустимое значение" : $result) . "\n";
