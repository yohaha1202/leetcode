<?php

// Given the array nums consisting of 2n elements in the form [x1,x2,...,xn,y1,y2,...,yn].
// Return the array in the form [x1,y1,x2,y2,...,xn,yn].

function solution(array $nums, int $n) {
     $ans = [];
     for ($i = 0; $i < $n; $i++) {
         $ans[] = $nums[$i];
         $ans[] = $nums[$i + $n];
    }
    return $ans;
}

$tests = [];
$tests[] = ['input1' => [2, 5, 1, 3, 4, 7], 'input2' => 3, 'expect' => [2, 3, 5, 4, 1, 7]];
$tests[] = ['input1' => [1, 2, 3, 4, 4, 3, 2, 1], 'input2' => 4, 'expect' => [1, 4, 2, 3, 3, 2, 4, 1]];
$tests[] = ['input1' => [1, 1, 2, 2], 'input2' => 2, 'expect' => [1, 2, 1, 2]];

foreach ($tests as $index => $test) {
    $result = solution($test['input1'], $test['input2']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
