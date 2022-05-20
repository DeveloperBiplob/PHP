<?php

// PHP Functin

function returnName(){
    echo 'My name is Biplob';
}

returnName();

function getName(){
    return 'My name is Jabery';
}

echo getName();
echo "<br/>";


// function with parameter
function student($name, $age){
    return 'My name is ' . $name . '. My age is ' . $age;
}

echo student('Biplob', 20);
?>