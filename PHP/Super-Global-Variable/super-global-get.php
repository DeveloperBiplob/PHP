<?php

// PHP super globla variable;

## $_GET[]
// get url niye kaj kore. ulr diye jodi kono data pass korte chai ta hole get use korbo.
// sadaronto website er ulr mantain ba data update ro delete er jonno get method ta use kora hoy.

// $_GET[] ata akta array.
//like key and value er moto define korte pari.
// $_GET['name'] = 'biplob'


if(isset($_GET['name'])){
    echo $_GET['name'];
}else{
    echo $_GET['name'] = 'Biplob';
}

$name = isset($_GET['email']) ? $_GET['email']: '';

echo $name;



