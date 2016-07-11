
<?php
$to      = 'koushal.ogirala@gmail.com';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: derangtest@gmail.com' . "\r\n" .
    'Reply-To: derangtest@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

