<?php

$array1 = [
    1 => 'b',
    2 => 'c',
    0 => 'a'
];

$array2 = ['a','b','c'];

$result = $array1 + $array2;

var_dump($array1 === $array2);