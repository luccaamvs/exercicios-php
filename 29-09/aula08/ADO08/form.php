<?php
require_once "classes/MediaAri.class.php";
require_once "classes/MediaGeo.class.php";

if(isset($_POST['btn_calcularGeo'])){
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $geometrica = new MediaGeo($nome, $nota1, $nota2);
    $notaGeo = $geometrica -> mediaGeo();
}
if(isset($_POST['btn_calcularAri'])){
    $nome = $_POST['nome'];
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];

    $aritmetica = new MediaAri($nome, $nota1, $nota2);
    $notaAri = $aritmetica -> mediaAri();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <form method="post">
        <div>
            <label>Aluno:   </label>
            <input type="text" name="nome" value="<?php $nome ?>">
        </div>
        <br>
        <div>
            <label>Nota 01: </label>
            <input type="text" name="nota1" value="<?php $nota1 ?>">
        </div>
        <br>
        <div>
            <label>Nota 02: </label>
            <input type="text" name="nota2" value="<?php $nota2 ?>">
        </div>
        <br>
        <input type="submit" name="btn_calcularGeo" value="Media Geometrica">
        <input type="submit" name="btn_calcularAri" value="Media Aritmetica">
    </form>
</body>
</html>