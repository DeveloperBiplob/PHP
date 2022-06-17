<?php 


// PHP Shitch case------//

$value = 5;

switch($value){
    case 1:
        echo 'This value is one';
        break;
    case 2:
        echo "This value is two";
        break;
    case 3: 
        echo "This value is three";
        break;
    case 4:
        echo "This value is four";
        break;
    case 5: 
        echo "This value is five";
        break;
    default:
        echo 'Value not found this progroum';
        break;
}


switch( $value % 2 ){
    case 1:
        echo "This Number is Odd";
        break;
    case 0:
        echo 'This Number is Even';
        break;
    default:
        echo "Please Enter a Valid value";
}