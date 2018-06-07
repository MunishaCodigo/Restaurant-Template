<?php

//error_reporting(E_ALL);

//ini_set('display_errors', 1);

$name    = $_POST["name"];

$email   = $_POST["email"];

$message = $_POST["message"];

$to      = "you.zerkani@gmail.com";



$message = '

<html>

<head>

  <title>Restaurant Customer Message</title>

</head>

<body>

  <p>This mail has a message from <b>'.$name.'</b></p>

  <p><i>Message: </i>'.$message.'</p>

</body>

</html>

';

$headers[] = 'MIME-Version: 1.0';

$headers[] = 'Content-type: text/html; charset=iso-8859-1';

$headers[] = 'From:'.$name.'<'.$email.'>';
$headers[] = 'Bcc: munisha4947@gmail.com';


mail($to, 'Customer Feedback', $message ,implode("\r\n", $headers));



header('Location: contact.php?success');

?>