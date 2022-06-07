<?php

// gloal use kore je kono varialbe ke amara globali use korte pari,

$x= 10;
$y = 20;

function sum(){
    global $x, $y;
    $result = $x + $y;

    return $result;
}

echo sum();


function test (){
    global $name;
    $name = 'biplob';
}

test();

echo $name;

// Directly $GLOBALS['name'] use kore o kaj ta kora jay

$a = 10;
$b = 30;

function sub(){

    $result = $GLOBALS['a'] - $GLOBALS['B'];

    return $result;
}

echo sub();