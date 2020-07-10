<?php

// Given an array nums. We define a running sum of an array as runningSum[i] = sum(nums[0]…nums[i]).
// Return the running sum of nums.

function solution(array $nums) {
    $ans = [];
    $sum = 0;
    for ($i = 0; $i < count($nums); $i++) {
        $sum += $nums[$i];
        $ans[] = $sum;
    }
    return $ans;
}

$tests = [];
$tests[] = ['input' => [1, 2, 3, 4], 'expect' => [1, 3, 6, 10]];
$tests[] = ['input' => [1, 1, 1, 1, 1], 'expect' => [1, 2, 3, 4, 5]];
$tests[] = ['input' => [3 ,1 ,2 ,10, 1], 'expect' => [3, 4, 6, 16, 17]];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
