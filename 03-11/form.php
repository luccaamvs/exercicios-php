<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
    <h2>Media Aritmetica</h2>
    <input type="number" placeholder="Nota 01" value="<?php echo "{$nota}"; ?>">
    <input type="number" placeholder="Nota 02" value="<?php echo "{$nota}"; ?>">
    <input type="submit" value="Calcular">

    <?php echo
    "Media Aritmetica: {$mediaAri} &nbsp; &nbsp; &nbsp; 
     Media Geometrica: {$mediaGeo} ";
    ?>

</body>
</html>