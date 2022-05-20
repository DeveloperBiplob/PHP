<?php

// PHP condition -  if, else, elseif

# Dubble == Value check kore
// $name = 'biplob';
// if($name == 'biplob'){
//     echo 'This is true';
// }

# three === value and data type check kore.
// $num = 50;
// if($num === '50'){
//     echo 'This is a Number';
// }else{
//     echo 'This is not a Number';
// }

# >, <, >=, <=, !=, !==

// if($num > 20){
//     echo 'This is a big number';
// }else{
//     echo 'This is a small number';
// }

// if($num < 20){
//     echo true;
// }else{
//     echo false;
// }

// if($num <= 20){
//     echo true;
// }else{
//     echo false;
// }

// if($num >= 20){
//     echo true;
// }else{
//     echo false;
// }

// if($num != 20){
//     echo true;
// }else{
//     echo false;
// }

// if($num !== 20){
//     echo true;
// }else{
//     echo false;
// }

// condition use kore gread ber kora
$mark = 33;

if($mark > 100 || $mark < 0){
    echo 'This mark is Invalid, please Vaild Marks';
}elseif($mark >= 80 && $mark <=100){
    echo 'A+';
}elseif($mark <= 79 && $mark >=70){
    echo 'A';
}elseif($mark <= 69 && $mark >=60){
    echo 'A-';
}elseif($mark <= 59 && $mark >=50){
    echo 'B';
}elseif($mark <= 49 && $mark >=40){
    echo 'C';
}elseif($mark <= 39 && $mark >=33){
    echo 'D';
}else{
    echo "F";
}



?>