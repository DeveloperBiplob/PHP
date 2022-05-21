<?php

// PHP associative array

$studentDetails = [
    'name' => 'Biplob',
    'age' => 20,
    'class' => 10,
    'address' => 'North Badda'
];

echo 'Student Name is: ' . $studentDetails["name"];
echo "<br/>";
echo 'Student Age is: ' . $studentDetails["age"];
echo "<br/>";
echo 'Student Class is: ' . $studentDetails["class"];
echo "<br/>";
echo 'Student Address is: ' . $studentDetails["address"];

echo "<br/><br/>";
// gettype, print_r, var_dump

// gettype() - data type pirnt kore.
echo gettype($studentDetails);

// print_r() -  array vlue guluke shundor kore print kore.
echo '<pre>';
print_r($studentDetails);
echo '<pre/>';

// var-dump() - array vlue guluke shundor kore print kore.
// but akta object er modde.

var_dump($studentDetails);


// video - 13

?>