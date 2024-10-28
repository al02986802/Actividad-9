<?php
require '../libs/PHPMailer/PHPMailer.php';
require '../libs/PHPMailer/SMTP.php';
require '../libs/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendEmail($to, $subject, $body) {
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';  // Servidor SMTP (usa el tuyo si es diferente)
        $mail->SMTPAuth = true;
        $mail->Username = 'tu_correo@gmail.com';  // Tu correo
        $mail->Password = 'tu_contraseña';  // Tu contraseña
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('tu_correo@gmail.com', 'Actividad 9');
        $mail->addAddress($to);

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $body;

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
}
?>
