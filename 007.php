<?php

// Given a 32-bit signed integer, reverse digits of an integer.

function solution(int $x) {
    $ans = 0;
    $num = abs($x);

    while ($num > 0) {
        $ans = ($ans * 10) + ($num % 10);
        $num = (int)($num / 10);
    }

    if ($x < 0) {
        $ans *= -1;
    }

    if ($ans >= pow(2, 31) - 1 or $ans <= pow(2, 31) * -1) {
        return 0;
    }
    return $ans;
}

$tests = [];
$tests[] = ['input' => 123, 'expect' => 321];
$tests[] = ['input' => -123, 'expect' => -321];
$tests[] = ['input' => 120, 'expect' => 21];
$tests[] = ['input' => 1534236469, 'expect' => 0];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
