<?php


// Exceptin Handeler---

# try
# throw
# catch


$value = 30;

try{
    if($value > 50){
        throw new Exception('Invalid Number');
    }else{
        throw new Exception('Valid Number');
    }
}
catch(Exception $err){
    echo "Error is :" . $err->getMessage();
    $errorMessage = $err->getMessage();
}




?>


<p><?php if(isset( $errorMessage )){ echo $errorMessage; } ?></p>