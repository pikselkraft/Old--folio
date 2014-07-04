<?php
/**************************************************************
* envoi d'un mail + copy *				
**************************************************************/
$destinataire = $_POST['email'];
$name  = $_POST['name'];
$message  = $_POST['message'];


$to = 'contact@derek-salmon.me';
$subject = 'Demande de contact '. $name;
$msg = $message;
$headers = 'From: '.$name. ' <'.$destinataire.'>'."\r\n";
$headers .= 'Bcc: contact <derek.salmon.fr@gmail.com>'."\r\n";
$headers .= "\r\n";
mail($to, $subject, $msg, $headers);

header('Location:index.php?send=1');
?>