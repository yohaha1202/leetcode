<?php

// Determine whether an integer is a palindrome. An integer is a palindrome when it reads the same backward as forward.

function solution(int $x) {
    if (0 > $x) {
        return false;
    }

    $x = str_split($x);
    while (count($x) > 1) {
        if (array_pop($x) != array_shift($x)) {
            return false;
        }
    }
    return true;
}

$tests = [];
$tests[] = ['input' => 121, 'expect' => true];
$tests[] = ['input' => -121, 'expect' => false];
$tests[] = ['input' => 10, 'expect' => false];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
