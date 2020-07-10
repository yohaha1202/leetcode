<?php

// Given an integer n and an integer start.
// Define an array nums where nums[i] = start + 2*i (0-indexed) and n == nums.length.
// Return the bitwise XOR of all elements of nums.

function solution(int $n, $start) {
    $ans = 0;
    for ($i = 0; $i < $n; $i++) {
        $ans ^= ($start + 2 * $i);
    }
    return $ans;
}

$tests = [];
$tests[] = ['input1' => 5, 'input2' => 0, 'expect' => 8];
$tests[] = ['input1' => 4, 'input2' => 3, 'expect' => 8];
$tests[] = ['input1' => 1, 'input2' => 7, 'expect' => 7];
$tests[] = ['input1' => 10, 'input2' => 5, 'expect' => 2];

foreach ($tests as $index => $test) {
    $result = solution($test['input1'], $test['input2']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
