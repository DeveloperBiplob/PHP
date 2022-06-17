<?php

// PHP Mail Functin---

// 1st parameter To
// 2nd parameter Subject
// 3rd parameter Message
// 4th parameter Headers 
// mail('biplob@gmail.com', 'Subject', 'Message');


$from = 'blogwebsite@gmail.com';
$to = 'biplob@gmail.com';
$subject = 'Test Email';
$message = 'This mail is defalut mail';

mail($to, $subject, $message, $from);



//Send an email with extra headers-----------------//

$to = "somebody@example.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: webmaster@example.com" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);




// Send an HTML email------------------//

$to = "somebody@example.com, somebodyelse@example.com";
$subject = "HTML email";

$message = "
<html>
<head>
<title>HTML email</title>
</head>
<body>
<p>This email contains HTML Tags!</p>
<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
</tr>
<tr>
<td>John</td>
<td>Doe</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@example.com>' . "\r\n";
$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$message,$headers);