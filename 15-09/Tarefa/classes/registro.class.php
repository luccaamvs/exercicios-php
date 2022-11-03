<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP; 
use PHPMailer\PHPMailer\Exception;

require_once '../../config/vendor/autoload.php';

class Registro { 
    private $login;
    private $email;
    private $tel;
    private $validado;
    private $codigoDeAcesso;
    private $bd;

    public function dbConexao($bd) {
        $this->bd = $bd;
    }
    public function setUsuario($login, $email, $tel) {
        $this->login = $login;
        $this->email = $email;
        $this->tel = $tel;
    }
    public function setRegistrar() { 
        $this->codigoDeAcesso = '';

        for ($i = 0; $i < 6; $i++) { 
            $this->codigoDeAcesso .= rand(0, 9);
        }

        $stmt = $this->bd->prepare("INSERT INTO usuarios (login, email, telefone, codigoDeAcesso) VALUES (:login, :email, :telefone, $this->codigoDeAcesso)");
        $stmt -> bindParam(':login', $this->login);
        $stmt -> bindParam(':email', $this->email);
        $stmt -> bindParam(':telefone', $this->tel);
        echo $stmt -> execute() ?  'INSERIU' : 'NÃO INSERIU';
    
        $mail = new PHPMailer(true);
        try {     
            $mail -> SMTPOptions = array( 
                'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            ));
            $mail -> isSMTP(); 
            $mail -> Host = 'smtp.gmail.com'; 
            $mail -> SMTPAuth = true; 
            $mail -> Username = 'lbordin.design@gmail.com'; 
            $mail -> Password = '123abcteste'; 
            $mail -> SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
            $mail -> Port = 465;

            $mail -> setFrom("$this->email", 'teste'); 
            $mail -> addAddress("$this->email", 'testes2');
            $mail -> isHTML(true); 
            $mail -> Subject = 'Senha de acesso';
            $mail -> Body    = "$this->codigoDeAcesso"; 
            $mail -> AltBody = 'This is the body in plain text for non-HTML mail clients'; 

            $mail -> send();
            
            echo 'Email enviado com sucesso!';
        } catch (Exception $e) {
            echo 'Houve um erro.';
            $e->getMessage($e);
            ($mail -> ErrorInfo);
        }
    }

    public function setValidar() {
        $stmt = $this->bd -> query("SELECT codigoDeAcesso FROM usuarios WHERE codigoDeAcesso = {$_POST['senha']}");
        $stmt -> execute();
        $sen = $stmt -> fetchAll();

        if (empty($sen)) {
            $this->validado = false;
            $stmt = $this->bd -> query("UPDATE usuarios SET validado = $this->validado WHERE codigoDeAcesso = {$_POST['senha']}");
            $stmt -> execute();
            echo 'ERRO/ O CÓDIGO INVÁLIDO';
        } else {
            echo  'AÇÃO BEM SUCEDIDA!';
            $this->validado = true;
            $stmt = $this->bd -> query("UPDATE usuarios SET validado = $this->validado WHERE codigoDeAcesso = {$_POST['senha']}");
            $stmt -> execute();
        }
    }

    public function setLogin ($login, $codigoDeAcesso) {
        $stmt = $this->bd -> query("SELECT email AND codigoDeAcesso FROM usuarios WHERE email = '$login' AND codigoDeAcesso = '$codigoDeAcesso' AND validado = TRUE");
        $stmt -> execute();
        $user = $stmt -> fetchAll();
        echo empty($user) ? 'USUARIO NÃO EXISTENTE OU NÃO FOI VALIDADO' : 'LOGADO COM SUCESSO!';
    }
}