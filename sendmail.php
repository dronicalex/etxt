<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
$mail = new PHPMailer(true);
$mail ->CharSet = 'UTF-8';
$mail ->setLanguage('ru','phpmailer/language/');
$mail ->IsHTML(true);
$mail->addAdres('fcbteam2016@gmail.com');
$body.='<p><strong>имя:</strong> ' .$post['name'].'</p>';

$mail->Boby = $body;

?>