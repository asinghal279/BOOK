<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 1;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.sg2plcpnl0133.prod.sin2.secureserver.net';  				// Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = "info@mathsirindia.com";                 // SMTP username
    $mail->Password = "This#5515";                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 993;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('info@mathsirindia.com', 'MathSirIndia Info');
    $mail->addAddress('amansharma.28997@gmail.com');     // Add a recipient
   
    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
    $body = '<p><strong>HELLO</strong>This is my first email</p>';
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'This is an image mail';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}