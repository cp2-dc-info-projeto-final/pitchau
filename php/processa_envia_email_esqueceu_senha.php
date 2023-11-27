<?php
namespace foo;
include_once "consultas/flying_bubbles.php";

function nova_senha_criptografada(){
  function random_string($length) {
      $random_pin = random_bytes($length);
      $random_pin = base64_encode($random_pin);
      $random_pin = str_replace(["+", "/", "="], "", $random_pin);
      $random_pin = substr($random_pin, 0, $length);
      return $random_pin;
  }

      $sql = "ALTER TABLE Usuario (senha) VALUES ('$random_pin')";


      // Uso de prepared statement para evitar SQL injection
      $stmt = $conn->prepare("INSERT INTO Usuario(senha) VALUES (?,)");
      $stmt->bind_param("sss", $usuario, $email, password_hash($random_pin, PASSWORD_DEFAULT));

      /*if ($stmt->execute()) {
          header("Location: ../paginas/login.php");
          exit;
      } else {
          echo "Erro ao registrar: " . $stmt->error;
      }*/

      // Fechar a conexão com o banco de dados
      $stmt->close();
      $conn->close();

    return $random_pin;
    };



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Inclui os arquivos da biblioteca PHPMailer necessários para o envio de e-mail
require 'C:/Program Files (x86)/EasyPHP-Devserver-17/eds-www/PHPMailer-master/src/Exception.php';
require 'C:/Program Files (x86)/EasyPHP-Devserver-17/eds-www/PHPMailer-master/src/PHPMailer.php';
require 'C:/Program Files (x86)/EasyPHP-Devserver-17/eds-www/PHPMailer-master/src/SMTP.php';

function envia_email($para, $assunto, $mensagem){

    //Cria uma instância da classe PHPMailer; o parâmetro `true` habilita as exceções
    $mail = new PHPMailer(true);

    try {
        //Configurações do servidor
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                   //Habilita a saída de debug (para fase de testes)
        $mail->isSMTP();                                            //Define o envio por meio do SMTP
        $mail->Host       = 'smtp.gmail.com';                       //Define o servidor SMTP utilizado para o envio
        $mail->SMTPAuth   = true;                                   //Habilita a autenticação do SMTP
        $mail->Username   = 'lp3.turma2023@gmail.com';               //usuário SMTP
        $mail->Password   = 'tpqlektljcpmnfga';                      //senha SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Habilita a encriptação implícita TLS
        $mail->Port       = 587;                                    //Porta TCP de conexão; use 587 se você tiver configurado `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        

        //Remetente e Destinatários
        $mail->setFrom('lp3.turma2023@gmail.com', 'Site do Professor');  // Adiciona o remetente
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



$min = 000000;
$max = 999999;
$cod_altera_senha = rand(int $min, int $max): int;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $para = $_POST["email"];
    //envia_email($para, 'Troca de Senha', '<h1>Não compartilhe essa senha com ninguém!</h1><br><p>Sua senha para alteração de senha é:</p><br> $random_pin<br><a href="../paginas/login.php">Pagina de Login</a>');    
    envia_email($para, 'Troca de Senha', '<p>Solicitação para troca de senha, caso não seja você, favor desconsidere</p><br><p>Seu código para alterar senha é: $cod_altera_senha</p>');
}  


?>
