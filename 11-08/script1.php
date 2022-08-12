<?php
if (!isset($_GET['Nome'] ) ) {$_GET['Nome'] = "";}
if (!isset($_GET['cpf'] ) ) {$_GET['cpf'] = "";}
$nome = $_GET["Nome"];
$cpf = $_GET["cpf"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Meu Script PHP</title>
</head>
<body>

    <h2 class="form-titulo">Envio de dados usando método GET - Variáveis visiveis na URL</h2>

    <form  class="form-corpo" action="script1.php" method="get">  

    <label for="nome">Nome:</label>
    <input type="text" name="Nome" value="<?php echo "{$nome}"; ?>">

    <label for="cpf">CPF:</label>
    <input type="text" name="cpf" placeholder="123456789-99" value="<?php echo "{$cpf}"; ?>">
    
    <input type="submit" value="Enviar">
    <br><br><br>

    <?php echo
    "Nome:{$nome} &nbsp; &nbsp; &nbsp; 
    CPF:{$cpf}";
    ?>
    </form>
</body>
</html>