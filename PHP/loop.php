<?php

// PHP Loop----//

## for loop
for($i = 0; $i <= 10; $i++){
    echo $i;
    echo "<br/>";
}

for($i = 0; $i <=10; $i = $i+2){
    echo $i;
    echo "<br/>";
}

for ($i = 10; $i >= 0; $i--){
    echo $i;
    echo "<br/>";
}


for($i = 1; $i <=100; $i++){
    if($i % 2 == 0){
        echo $i . " ";
    }

}


## while loop
$i = 1;
while($i <= 10){

    echo $i . " ";
    $i++;

}


$i = 2;
while($i <= 100){
    if($i % 2 == 0){
        echo $i . " ";
    }

    $i ++;
}


## do whilel
// while condition check korar agei akbar print kore ney.
// second time condition check kore.
// karon se age declear kora vaiabl er value ta print korbe, ta por condition chek korbe.
$i = 1;
do{
    echo $i . " ";
    $i++;
}while($i <=20);


## foreach loop
$data = ['laptop', 'computer','phone', 'mobile', 'televison'];

foreach($data as $dat){
    echo $dat . '<br/>';
}

// with key
foreach($data as $key => $dat){
    echo $key . ' : ' . $dat . '<br/>';
}