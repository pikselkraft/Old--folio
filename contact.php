<?php
/**************************************************************
* envoi d'un mail + copy *				
**************************************************************/

function secInput($data) 
{
            $data = stripslashes($data); 
            $data = strip_tags($data); 
            $data = trim($data); 
            $data = htmlentities($data); 
          
          return $data;
}

$destinataire = secInput($_POST['email']);
$name         = secInput($_POST['name']);
$message      = secInput($_POST['message']);


if($_POST['bot'] != '')
{
	header('Location:index.php?send=2');
}
else 
{

	if($_POST['answer'] != 4)
	{
		header('Location:index.php?send=3');
	}
	else 
	{
		$to      = 'contact@derek-salmon.me';
		$subject = 'Demande de contact '. $name;
		$msg     = $message;
		$headers = 'From: '.$name. ' <'.$destinataire.'>'."\r\n";
		$headers .= 'Bcc: contact <derek.salmon.fr@gmail.com>'."\r\n";
		$headers .= "\r\n";
		mail($to, $subject, $msg, $headers);

		header('Location:index.php?send=1');
	}
}

?>