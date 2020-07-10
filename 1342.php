<?php

// Given a non-negative integer num, return the number of steps to reduce it to zero. If the current number is even, you have to divide it by 2, otherwise, you have to subtract 1 from it.

function solution(int $num) {
    $step = 0;
    while ($num > 0) {
        if ($num % 2 == 0) {
            $num /= 2;
        } else {
            $num -= 1;
        }
        $step++;
    }
    return $step;
}

$tests = [];
$tests[] = ['input' => 14, 'expect' => 6];
$tests[] = ['input' => 8, 'expect' => 4];
$tests[] = ['input' => 123, 'expect' => 12];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
