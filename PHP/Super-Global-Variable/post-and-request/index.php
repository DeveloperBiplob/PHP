<?php

// Super Global $_POST[]; And Super Global $_REQUEST[];
// post diye data pass korte seta url e show kore na.

// Request use korte jeta hoy, Form e method jeta e thakuk tate kichu ase jay na,
// se data tule ase. but kora hosche jodi form e method GET thake ta hole,
// data gulu URL e show korbe and jodi POST thake ta hole data hiden hoye
// tule anbe. 

##Post
$name = isset($_POST['name']) ? $_POST['name'] : 'default name';
$email = isset($_POST['email']) ? $_POST['email'] : 'default@gmail.com';

## Request
// form method e jodi get use kori tahole url e show korbe, 
// form method e jodi post use kori tahole url e show korbe na.
$name = isset($_REQUEST['name']) ? $_REQUEST['name'] : 'default name';
$email = isset($_REQUEST['email']) ? $_REQUEST['email'] : 'default@gmail.com';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Variable GET</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" placeholder="Enter Name" name="name" id=""> <br><br>
        <input type="text" placeholder="Enter Email" name="email" id=""><br><br>
        <input type="submit" value="Submit">
    </form>

    <section>
        <table>
            <tr>
                <th>Name:</th>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <th>Email:</th>
                <td><?= $email; ?></td>
            </tr>
        </table>
    </section>
    
</body>
</html>