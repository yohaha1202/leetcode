<?php

// Given the array candies and the integer extraCandies, where candies[i] represents the number of candies that the ith kid has.
// For each kid check if there is a way to distribute extraCandies among the kids such that he or she can have the greatest number of candies among them. Notice that multiple kids can have the greatest number of candies.

function solution(array $candies, int $extraCandies) {
    $count = count($candies);
    if ($count > 100 or $count < 2) {
        return false;
    }
    if ($extraCandies > 50 or $extraCandies < 1) {
        return false;
    }
    $max = max($candies);
    if ($max > 100) {
        return false;
    }
    $ans = [];
    foreach($candies as $candiy) {
        if ($candiy < 1) {
            return false;
        }
        if (($candiy + $extraCandies) >= $max) {
            $ans[] = true;
            continue;
        }
        $ans[] = false;
    }
    return $ans;
}

$tests = [];
$tests[] = ['input1' => [2, 3, 5, 1, 3], 'input2' => 3, 'expect' => [true, true, true, false, true]];
$tests[] = ['input1' => [4, 2, 1, 1, 2], 'input2' => 1, 'expect' => [true, false, false, false, false]];
$tests[] = ['input1' => [12, 1, 12], 'input2' => 10, 'expect' => [true, false, true]];

foreach ($tests as $index => $test) {
    $result = solution($test['input1'], $test['input2']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
