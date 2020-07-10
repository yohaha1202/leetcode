<?php

// Roman numerals are represented by seven different symbols: I, V, X, L, C, D and M.
// Symbol       Value
// I             1
// V             5
// X             10
// L             50
// C             100
// D             500
// M             1000

function solution(string $x) {
    $roman = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000
    ];
    $ans = 0;
    $nums = str_split($x);
    for ($i = 0; $i < count($nums); $i++) {
        if (!isset($roman[$nums[$i]])) {
            return false;
        }

        if (!isset($nums[$i + 1])) {
            $ans += $roman[$nums[$i]];
            continue;
        }

        if ($roman[$nums[$i]] < $roman[$nums[$i + 1]]) {
            $ans += $roman[$nums[$i + 1]] - $roman[$nums[$i]];
            $i++;
            continue;
        }

        $ans += $roman[$nums[$i]];
    }

    return $ans;
}

$tests = [];
$tests[] = ['input' => 'III', 'expect' => 3];
$tests[] = ['input' => 'IV', 'expect' => 4];
$tests[] = ['input' => 'IX', 'expect' => 9];
$tests[] = ['input' => 'LVIII', 'expect' => 58];
$tests[] = ['input' => 'MCMXCIV', 'expect' => 1994];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
