<?php

session_start();

$_SESSION['name'] = 'Biplob';
$_SESSION['age'] = 20;


echo $_SESSION['name'];
echo $_SESSION['age'];