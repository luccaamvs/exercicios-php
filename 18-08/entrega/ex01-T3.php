<?php


//Verificacao de envio utilizando funções:


if (isset($_POST['enviar'])) {
    $a = $_POST['a'];
    $b =  $_POST['b'];
    $c = $_POST['c'];

    $valdelta = getDelta($a, $b, $c);
    $analise = analiseDelta($valdelta);

    if ($valdelta >= 0) {
        $x1 = getX1($a, $b, $valdelta);
        $x2 = getX2($a, $b, $valdelta);
    } else {
        $x1 = $x2 = 0;
    }
} else {
    $x1 = $x2 = $valdelta = $analise = "";
}


//Funções:


function getDelta($a, $b, $c)
{
    $del = pow($b, 2) - 4 * $a * $c; //Eleva b a 2 -4*a*c
    return $del; //Vira $valdelta
}

function getX1($a, $b, $valordelta)
{
    $x1 = (-$b + sqrt($valordelta)) / (2 * $a);
    return $x1;
}

function getX2($a, $b, $valordelta)
{
    $x2 = (-$b - sqrt($valordelta)) / (2 * $a);
    return $x2;
}

function analiseDelta($delta)
{
    if ($delta == 0) return "Duas raizes reais iguais!";
    elseif ($delta > 0) return "Duas raizes reais diferentes!";
    else return "Sem solução!";
}
?>

<!-- Formulário -->


<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora Delta</title>
    </head>

    <body>
        <div class="container">
            <form method="post">
                <fieldset>
                    <h1>Calculadora</h1><br>

                    <label for="valA">Valor A</label><br>
                    <input type="number" name="a" id="valA" value="<?php echo $a ?>"><br><br>

                    <label for="valB">Valor B</label><br>
                    <input type="number" name="b" id="valB" value="<?php echo $b ?>"><br><br>

                    <label for="valC">Valor C</label><br>
                    <input type="number" name="c" id="valC" value="<?php echo $c ?>"><br><br>

                    <label for="delta">Delta</label><br>
                    <input type="text" name="delta" id="dt" value="<?php echo $valdelta; ?>" disabled><br><br> <!-- Devolve variavel contendo funcao. -->

                    <label for="aDt">Análise Delta</label><br>
                    <input type="text" name="Analisedelta" id="aDt" value="<?php echo $analise; ?>" disabled><br><br>  <!-- Devolve variavel contendo funcao. -->

                    <label for="x1">Valor X1</label><br>
                    <input type="text" name="x1" id="valX1" value="<?php echo $x1 ?>" disabled><br><br> <!-- Devolve variavel contendo funcao. -->

                    <label for="x2">Valor X2</label><br>
                    <input type="text" name="x2" id="valX2" value="<?php echo $x2; ?>" disabled><br><br>  <!-- Devolve variavel contendo funcao. -->

                    <button type="submit" name="enviar">Enviar</button>
                    <button type="submit" name="apagar">Apagar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>