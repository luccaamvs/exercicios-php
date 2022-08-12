<?php

if ( !isset($_POST['nome']) )     {$_POST['nome'] = "";}
if ( !isset($_POST['nota1']) )    {$_POST['nota1'] = 0;}
if ( !isset($_POST['nota2']) )    {$_POST['nota2'] = 0;}
if ( !isset($_POST['oper']) )      {$_POST['oper'] = "";}


$nome   = $_POST["nome"];
$nota1  = (double) $_POST["nota1"];
$nota2  = (double) $_POST["nota2"];
$media  = ($nota1 + $nota2) / 2;


if ( $_POST['oper'] == "limpar") 
{
    $nome = ""; $nota1 = ""; $nota2 = ""; $media = "";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Calculo Média Aritmética</h1>

<form name="form2" method="post" action="script2.php">
    <input type="hidden" name="oper">
    <input type="text" placeholder="Nome" name="nome" value="<?php echo $nome;?>"> <br>
    <input type="text" placeholder="Nota 1" name="nota1" value="<?php echo $nome;?>"> <br>
    <input type="text" placeholder="Nota 2" name="nota2" value="<?php echo $nome;?>"> <br>
    <label for="vlmedia">Valor da Média:<?php echo $media; ?></label> <br><br>
    <input type="button" value="Calcular" onclick = "submit();">
    <input type="button" value="Nova Média" onclick = "form2.oper.value='limpar';submit();">
</form>
</body>
</html>