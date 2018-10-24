<?php

header("Access-Control-Allow-Origin: * ");
header("Access-Control-Allow-Headers: * ");
$data = json_decode(file_get_contents('php://input'));

// $data = $_POST;
var_dump($data);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// require ($_SERVER["DOCUMENT_ROOT"].'/PHPMailer/src/PHPMailer.php');
// require ($_SERVER["DOCUMENT_ROOT"].'/PHPMailer/src/SMTP.php');

$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPDebug = 2;                                  // Set mailer to use SMTP
$mail->Host = 'mail.traveltokish.ir';                 // Specify main and backup server
$mail->Port = 587;                                    // Set the SMTP port
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'info@traveltokish.ir';                // SMTP username
$mail->Password = 'hamid97716868';                  // SMTP password
// $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

$mail->setFrom('info@traveltokish.ir','Hamid Eslami');
$mail->addAddress('heslami32@gmail.com');  // Add a recipient , Name is Optional

$mail->IsHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->msgHTML('This is the HTML message body <strong>in bold!</strong>');
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
  //  exit;
}

echo 'Message has been sent';