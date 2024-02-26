<?php

require "./libraries/PHPMailer/Exception.php";
//require "./libraries/PHPMailer/OAuth.php";
require "./libraries/PHPMailer/PHPMailer.php";
require "./libraries/PHPMailer/POP3.php";
require "./libraries/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$to = "aethersad@gmail.com"; //destinatário

$assunto = utf8_decode("EMAILS ENVIADOS NO FORMULÁRIO DE CONTATO"); //

$nome = $_POST['nome'];

$email = $_POST['email']; //remetente

$mensagem = $_POST['mensagem'];


//$status = mail($to, $assunto, $mensagem);

//if ($status == false) {
//print "Mensagem não foi enviada com Sucesso!";
//}

//4pIddyFDGw5G7

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'testandoemail3274@gmail.com';                 // SMTP username
    $mail->Password = 'mnwc kmwp ipxy giaj';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, $email . ' - ' . $nome);
    $mail->addAddress('testandoemail3274@gmail.com');     // Add a recipient            // Name is optional
    $mail->addReplyTo($email, 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $assunto;
    $mail->Body    = '<strong>Assunto:' . $assunto . '</strong><br/>' . $mensagem . '<br/> <strong>Nome: </strong>' . $nome . '<br/> <strong>E-mail: </strong> ' . $email;
    $mail->AltBody = 'Assunto: ' . $assunto . '-' . $mensagem;

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
}
