<?php

// PHP file system

// echo __FILE__;

// file name show kore.
echo basename('https://www.google.com/home');  // outpot is = home
echo basename(__FILE__);

// file name bad diye baki tuku show korbe.
echo dirname('https://www.google.com/home/'); //outpot is = https://www.google.com
echo dirname(__FILE__);


// New File create kore
# 1st peramite FileName.
# 2nd peramiter Data.
# 3rd peramiter File Action | means ki korbe or ki gotbe.
    // like - FILE_APPEND | means data gulu ai file er modde insurt kore dibe.

// file_put_contents('fileName.extention', 'data', "file Action");


# Example
// create a new test.html file, and include this data.
file_put_contents('test.html', 'Create a new html file', FILE_APPEND);


// go to online and see all php file system function
https://www.w3schools.com/php/php_ref_filesystem.asp