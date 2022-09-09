<?php
<<<<<<< HEAD
require_once("classes/src/PHPMailer.php");
require_once("classes/src/SMTP.php");
require_once("classes/src/Exception.php");
=======
require_once("../classes/src/PHPMailer.php");
require_once("../classes/src/SMTP.php");
require_once("../classes/src/Exception.php");
>>>>>>> 7d7f8940b0608917a3753f82bef01a098fbc8864

// ** Ativacao das classes para uso **
use PHPMailer\PHPMailer\PHPMailer;  // habilita username da phpmailer
use PHPMailer\PHPMailer\Exception;  // habilita username da Exception
use PHPMailer\PHPMailer\SMTP;       // habilita username da Exception

error_reporting (1);

// capturando dados do formulário
if ( !isset($_POST['destinatario']) ) $_POST['destinatario']='';
$destinatario = $_POST['destinatario'];
$assunto = $_POST['assunto'];
$conteudo = $_POST['conteudo'];
$mail = new PHPMailer(true);                        // instanciamento da classe
$mail->isSMTP();                                    // definimos o protocolo de envio SMTP
$mail->Host = 'smtp.hostinger.com';                 // o SMTP do seu dominio de email deverá ser habilitado na máquina/servidor de envio
$mail->SMTPAuth = true;                             // habilitamos a autenticação
$mail->Username = 'temporario@topsecuritty.com';    // email do servidor valido
$mail->Password = '@#Els2556';                      // senha do email utilizado do servidor
$mail->Port = 465;                                  // porta de autenticação do servidor no caso é do gmail
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;    // Option for Enable implicit TLS encryption
$mail->setFrom ('temporario@topsecuritty.com');     // email do remetente
                                                    // $mail->addReplyTo ($remetente);                  
$mail->addAddress($destinatario, 'Fulano de Tal');  // email do destinatario

<<<<<<< HEAD

=======
//$mail->addAddress('email@email.com.br', 'Contato'’); // mais destinatarios
//$mail->addCC('email@email.com.br', 'Cópia'); // email copiado
//$mail->addBCC('email@email.com.br', 'Cópia Oculta') // email copiado ocultamente
>>>>>>> 7d7f8940b0608917a3753f82bef01a098fbc8864

$mail->isHTML(true); // habilita o uso do HTML
$mail->Subject = $assunto; // assunto do email
$mail->Body = '<strong>'. $conteudo . '</strong>'; // conteúdo da mensagem em html
$mail->AltBody = 'Texto sem HTML ou link'; // No caso da máquina cliente não suportar HTML
<<<<<<< HEAD



// Enviando o Formulário
if ( $_POST['Enviar'] ){
    if ( !$mail->send() )
    {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
    }
    else
    {
    echo "<table align = center>
    <tr> <td style=\"font-family: 'Times New Roman', Times, serif;
    font-size: large; width: 300px; height:10px; background: rgb(176, 194, 71);
    text-align: center;\"> Mensagem de Operação </td></tr><tr>
    <td style=\"font-family: 'Times New Roman', Times, serif;
    font-size: large; width: 300px; height:100px; background: rgb(104, 71, 194);
    text-align: center;\"> Envio bem Sucedido,<br>Parabéns! </td></tr>
    </table>";
    }
=======
// $mail->addAttachment('/tmp/image.jpg', 'nome.jpg'); // Possivel arquivo anexado

// Enviando o Formulário
if ( $_POST['Enviar'] )
{
if ( !$mail->send() )
{
echo 'Não foi possível enviar a mensagem.<br>';
echo 'Erro: ' . $mail->ErrorInfo;
}
else
{
echo "<table align = center>
<tr> <td style=\"font-family: 'Times New Roman', Times, serif;
font-size: large; width: 300px; height:10px; background: rgb(176, 194, 71);
text-align: center;\"> Mensagem de Operação </td></tr><tr>
<td style=\"font-family: 'Times New Roman', Times, serif;
font-size: large; width: 300px; height:100px; background: rgb(104, 71, 194);
text-align: center;\"> Envio bem Sucedido,<br>Parabéns! </td></tr>
</table>";
}
>>>>>>> 7d7f8940b0608917a3753f82bef01a098fbc8864
}