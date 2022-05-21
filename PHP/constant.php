<?php

// PHP constant--

// constant name sobsomoy capital latter diye define korbo.
// variable er value change kora jay, but constant er value change kora jayna.
// aki namer constant bar bar call define kora jay na. 
// constant er name er age underline use kra jay. like __name, __FILE__

define('NAME', 'value');

echo NAME;


define('STUDENTS', [
    'biplob',
    'bipu',
    'bipul'
]);

echo STUDENTS[0];


## php some default constant
echo __FILE__;


## ai vabe o constant define kora jay.
const STUDENT = ['biplob', 'jabery', 'bipu'];
const __name = 'BIplob Jabery';
const __NAME = 'jabery';

echo __name;
echo __NAME;

foreach(STUDENT as $stu){
    echo $stu . ' ';
}