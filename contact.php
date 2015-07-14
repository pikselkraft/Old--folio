<?php
/**************************************************************
* envoi d'un mail + copy *
**************************************************************/

/****
recaptcha gestion
*****/

// grab recaptcha library
require_once "recaptchalib.php";

// your secret key
$secret = "6LdEDQcTAAAAAD0nxswITQS7noCaNUGzMr5cyICZ";
// empty response
$response = null;

// check secret key
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse(
        $_SERVER["REMOTE_ADDR"],
        $_POST["g-recaptcha-response"]
    );
}

$captcha=$_POST['g-recaptcha-response'];

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
else if ($response != null && $response->success)
{
  		$to      = 'contact@dereksalmon.me';
  		$subject = 'Demande de contact '. $name;
  		$msg     = $message;
  		$headers = 'From: '.$name. ' <'.$destinataire.'>'."\r\n";
  		$headers .= 'Bcc: contact <derek.salmon.fr@gmail.com>'."\r\n";
  		$headers .= "\r\n";
  		mail($to, $subject, $msg, $headers);

  		header('Location:index.php?send=1');
}
else {
  header('Location:index.php?send=3');
}
?>
