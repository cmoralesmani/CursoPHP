<?php

$var2 = 1;

$var = function (){
    echo 'This is a closure';
    echo 'Value: ' . $var2;
};

$var();