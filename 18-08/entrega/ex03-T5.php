<?php 
//Questão A:

//Declarar Variaveis:
$base = readline('digite a base:');
$altura = readline('digite a altura:');
$valor_a = calcular($valor_b, $altura);


//Funções:
function calcular($valor_b, $altura) {
    return ($valor_b * $altura) / 2;
}

mostrar($valor_a, $valor_b, $altura); //Deixar antes para declaração. Do contrário não funciona.

function mostrar($valor_a, $valor_b, $altura) {
    echo 'Área:' . $valor_a;
    echo 'Base:' . $valor_b;
    echo 'Altura:' . valor_$altura;
}

//Questão B:

//Declarar Variaveis:

$a = readline('digite o 1º nº:'); 
$b = readline('digite a 2º nº:');
$c = readline('digite a 3º nº:');
$d = readline('digite a 4º nº:');
$mediaGeometrica = calcularMedia($a, $b, $c, $d);

function calcularMedia($a, $b, $c, $d) {
    return pow($a * $b * $c * $d, (0.25)); //0.25 equivalente a raiz quarta;
}

realizar($mediaGeometrica, $a, $b, $c, $d);//Deixar antes para declaração. Do contrário não funciona.

function realizar($mediaGeometrica, $a, $b, $c, $d) {
    echo 'média: ' . $mediaGeometrica . ' ';
    echo 'val: ' . $a . ' ';
    echo 'val: ' . $b . ' ';
    echo 'val: ' . $c . ' ';
    echo 'val: ' . $d . ' ';
}