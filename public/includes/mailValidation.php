<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$error = [];

if ( array_key_exists( 'email', $_POST ) ){
    date_default_timezone_set( 'America/Phoenix' );

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $motive = $_POST['motive'];

    $apikey = '';
    $mail = new PHPMailer(true);

    //Server settings
    $mail->isSMTP();
    $mail->SMTPDebug  = SMTP::DEBUG_OFF;
    $mail->Host       = 'smtp.sendgrid.net';
    $mail->SMTPAuth   = true;

    // Datos del correo creado en SERVIDOR
    $mail->Username   = "apikey";
    $mail->Password   = $apikey;

    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    //Use a fixed address in your own domain as the from address
    $mail->setFrom('no-reply@xenocell.mx', 'Xenocell');
    //Choose who the message should be sent to
    $mail->addAddress('contacto@xenocell.mx');

    if ($mail->addReplyTo($email, "{$name}")) {
        $mail->Subject = 'Nuevo contacto desde sitio web';
        //Keep it simple - don't use HTML
        $mail->isHTML(true);
        //Build a simple message body
        $mail->Body = "<p>Hay un nuevo contacto desde el sitio de Xenocell</p>
                       <p>Nombre: {$name}</p>
                       <p>Teléfono: {$phone}</p>
                       <p>Correo: {$email}</p>
                       <p>Motivo: {$motive}</p>";
    }

    // Send mail
    if(empty($error)){
        if(!$mail->send()){
            $error[] = $Alert_Error;
        }
    }

    // JSON encode with a response
    echo json_encode([
        "status" => count($error)==0 ? 1 : 0,
        "error" => $error
    ]);
}

?>