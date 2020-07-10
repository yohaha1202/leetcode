<?php

// You're given strings J representing the types of stones that are jewels, and S representing the stones you have.  Each character in S is a type of stone you have.  You want to know how many of the stones you have are also jewels.
// The letters in J are guaranteed distinct, and all characters in J and S are letters. Letters are case sensitive, so "a" is considered a different type of stone from "A".

function solution(string $J, string $S) {
    $j = str_split($J);
    $s = str_split($S);
    $count = 0;

    foreach ($j as $value) {
        foreach ($s as $value2) {
            if ($value2 == $value) {
                $count++;
            }
        }
    }
    return $count;
}

$tests = [];
$tests[] = ['input1' => 'aA', 'input2' => 'aAAbbbb', 'expect' => 3];
$tests[] = ['input1' => 'z', 'input2' => 'ZZ', 'expect' => 0];

foreach ($tests as $index => $test) {
    $result = solution($test['input1'], $test['input2']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
