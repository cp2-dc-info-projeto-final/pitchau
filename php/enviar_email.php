<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Restante do seu código

include_once "../consultas/flying_bubbles.php";

require '../vendor/autoload.php'; 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

// Recupere as informações do banco de dados
$destinatario = "adeiltontoco11@gmail.com"; // Substitua pela lógica para obter o destinatário do banco de dados
$assunto = "Teste do E-mail"; // Substitua pela lógica para obter o assunto do banco de dados
$mensagem = "Teste de envio do E-mail"; // Substitua pela lógica para obter a mensagem do banco de dados

$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'adeiltonfilho80@gmail.com';
    $mail->Password = 'Toco.1665';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    // Destinatário e assunto
    $mail->setFrom($destinatario, 'Adeilton');
    $mail->addAddress($destinatario);
    $mail->Subject = $assunto;

    // Corpo do e-mail
    $mail->Body = $mensagem;

    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar o e-mail: ', $mail->ErrorInfo;
}
?>
