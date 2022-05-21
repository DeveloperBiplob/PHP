<?php

$name = isset($_GET['name']) ? $_GET['name'] : 'default name';
$email = isset($_GET['email']) ? $_GET['email'] : 'default@gmail.com';


?>

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