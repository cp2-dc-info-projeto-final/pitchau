<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
// Restante do seu código

require '../vendor/autoload.php'; 


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../vendor/phpmailer/phpmailer/src/SMTP.php';

function envia_email($para, $assunto, $mensagem){

    //Cria uma instância da classe PHPMailer; o parâmetro true habilita as exceções
    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Habilita a saída de debug (para fase de testes)
        $mail->isSMTP();                                            //Define o envio por meio do SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Define o servidor SMTP utilizado para o envio
        $mail->SMTPAuth   = true;                                   //Habilita a autenticação do SMTP
        $mail->Username   = 'pitchau0@gmail.com';               //usuário SMTP
        $mail->Password   = 'admuser123';                     //senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;       //Habilita a encriptação implícita TLS
        $mail->Port       = 465;                                    //Porta TCP de conexão; use 587 se você tiver configurado SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS
        

        //Remetente e Destinatários
        $mail->setFrom('clinicamanoelgomes@gmail.com', 'Clinica Manoel Gomes');  // Adiciona o remetente
        $mail->addAddress($para);                                       // Adiciona um destinatário
        // $mail->addAddress('ellen@example.com');                      // O nome é opcional
        // $mail->addReplyTo('info@example.com', 'Information');        // Adicona um endereço de resposta
        // $mail->addCC('cc@example.com');                              // Adiciona um e-mail de cópia
        // $mail->addBCC('bcc@example.com');                            // Adicona um e-mail de cópia oculta.

        //Anexos
        // $mail->addAttachment('/var/tmp/file.tar.gz');        //Adiciona um anexo
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');   //O nome é opcional

        //Conteúdo
        $mail->isHTML(true);                                    //Formata o e-mail com HTML
        $mail->Subject = $assunto;                              //Assunto do e-mail
        $mail->Body    = $mensagem;                             // Corpo do e-mail
        // $mail->AltBody = 'Texto sem tags HTML!';             //Opção de texto para provedores de e-mail que não lêem HTML.

        $mail->send();                                          // tenta enviar o e-mail
        return true;                                            // retorna verdadeiro se enviar corretamente.
    } catch (Exception $e) {
        echo "Erro: ".$e;
        return false;                                           // retorna falso se ocorrer uma falha no envio.
    }
}


?>
