<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
 //$mail->SMTPDebug = SMTP::DEBUG_SERVER; //Enable verbose debug output
 $mail->isSMTP(); //Send using SMTP
 $mail->Host = 'smtp.sapo.pt'; //Set the SMTP server to send through
 $mail->SMTPAuth = true; //Enable SMTP authentication
 $mail->Username = 'email.web.cesae@sapo.pt'; //SMTP username
 $mail->Password = '?X9RryJ?@,j9!mi'; //SMTP password
 $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; //Enable implicit TLS encryption
 $mail->Port = 465; //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('email.web.cesae@sapo.pt', 'REMETENTE');
    $mail->addAddress('email.web.cesae@sapo.pt', 'FORMULÁRIO');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    $nome = $_GET['nome'];
    $email = $_GET['email'];
    $comochegou = $_GET['comochegou'];
    $mensagem = $_GET['mensagem'];


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Enviado por $email";
    $mail->Body    = "Nome: $nome <br><br> E-mail: $email <br><br>  Como chegou até nós: $comochegou <br><br> Mensagem: $mensagem";
    $mail->AltBody = $mensagem;

    $mail->send();
    header('Location: contactos.php?r=ok');
} catch (Exception $e) {
    header('Location: contactos.php?r=erro');
    //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}