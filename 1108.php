<?php

// Given a valid (IPv4) IP address, return a defanged version of that IP address.
// A defanged IP address replaces every period "." with "[.]".

function solution(string $address) {
    return preg_replace('/\./', '[.]', $address);
}

$tests = [];
$tests[] = ['input' => '1.1.1.1', 'expect' => '1[.]1[.]1[.]1'];
$tests[] = ['input' => '255.100.50.0', 'expect' => '255[.]100[.]50[.]0'];

foreach ($tests as $index => $test) {
    $result = solution($test['input']);
    if ($test['expect'] != $result) {
        echo 'Test fail at test' . ($index + 1) . PHP_EOL;
        exit;
    }
}

echo 'Test good!' . PHP_EOL;
