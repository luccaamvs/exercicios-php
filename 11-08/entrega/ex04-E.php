//Inicia funcao
<?php
$valor = $_GET['valor'];
$taxa  = $_GET['taxa'];
$tempo = $_GET['tempo'];
$prestacao = $valor + ($valor * $taxa / 100) * $tempo;
?>
//Inicia HTML
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form  method="get" action="ex04-E.php">
            <label>Valor:</label>
            <input type="number" name="valor">
            <label>Taxa:</label>
            <input type="number" name="taxa">
            <label>Tempo:</label>
            <input type="number" name="tempo">
            <input type="submit" value="calcular">
        </form>
        <br>
        <h1>O valor da prestaçao é igual a: <?= $prestacao ?></h1> //Testar novamente
    </body>
</html>