<?php

// Given the array nums, for each nums[i] find out how many numbers in the array are smaller than it. That is, for each nums[i] you have to count the number of valid j's such that j != i and nums[j] < nums[i].
// Return the answer in an array.

function solution(array $nums) {
    $count = count($nums);
    if ($count < 2 or $count > 500) {
        return false;
    }

    $ans = [];
    foreach ($nums as $num) {
        $count = 0;
        foreach ($nums as $num2) {
            if ($num > $num2) {
                $count++;
            }
        }
        $ans[] = $count;
    }
    return $ans;
}

$tests = [];
$tests[] = ['input' => [8, 1, 2, 2, 3], 'expect' => [4, 0, 1, 1, 3]];
$tests[] = ['input' => [6, 5, 4, 8], 'expect' => [2, 1, 0, 3]];
$tests[] = ['input' => [7, 7, 7, 7], 'expect' => [0, 0, 0, 0]];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
