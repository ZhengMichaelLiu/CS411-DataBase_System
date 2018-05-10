<?php
$to      = $_GET["email"];
$subject = $_GET["subject"];
$message = $_GET["message"];
$return_email = $_GET["return_email"];
$headers = 'From: '. $return_email . "\r\n" .
    'Reply-To: '. $return_email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
echo $to;
echo $message;
echo '<form method="get" action="../../index_user.html">
         <input type = "submit" name = "return" value = "Return">
        </form>';
?>