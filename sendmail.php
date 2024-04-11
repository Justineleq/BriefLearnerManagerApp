<?php
$to      = 'justineconnor3@gmail.com';
$subject = 'Welcome to the Sign In App';
$message = 'Hello! Please follow the link below to verify your email address! ';
$headers = 'From: justineconnor3@gmail.com' . "\r\n" .
'Reply-To: email@envoi.fr' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

$test = mail($to, $subject, $message, $headers);

if ($test) {
  echo "Go check your emails!";
} else{
  var_dump($test); // reverra la valeur de la fonction mail, probablement false. Aller voir dans ce cas le fichier error.log dans C://wamp/sendmail/
}
?>