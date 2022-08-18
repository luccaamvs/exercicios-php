//Inicia funcao
<?php
$altura = $_GET['altura'];
$comprimento = $_GET['comprimento'];
$largura = $_GET['largura'];
$volume = $comprimento * $largura * $altura;
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
    <form method="get" action="ex05-H.php">
        <label for="altura">Altura em M:</label>
        <input type="number" name="altura" min="1">
        <br>
        <label for="comprimento">Comprimento em M:</label>
        <input type="number" name="comprimento" min="1">
        <br>
        <label for="largura">Largura em M:</label>
        <input type="number" name="largura" min="1">
        <br>
        <input type="submit" value="Calcular">
    </form>
    <h1>O volume é de: <?= $volume; ?> M Cubicos</h1>
</body>
</html>