<?php

// Given an array of integers, return indices of the two numbers such that they add up to a specific target.
// You may assume that each input would have exactly one solution, and you may not use the same element twice.

function solution(array $nums, int $target) {
    $temp = [];

    foreach ($nums as $key => $value) {
        if (isset($temp[$target - $value]) and $temp[$target - $value] != $key) {
            return [$temp[$target - $value], $key];
        }
        $temp[$value] = $key;
    }
}

$tests = [];
$tests[] = ['input1' => [2, 7, 11, 15], 'input2' => 9, 'expect' => [0, 1, 2]];

foreach ($tests as $index => $test) {
    $result = solution($test['input1'], $test['input2']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
