<?php
    //Condicional Inicial de Envio.
if (isset($_POST['enviar'])){
    $perimetro = $_POST['perimetro'];     
    $diametro = $perimetro / pi();      
    $raio = $diametro / 2;          
    $area = pi() * pow($raio, 2); 
} else {
    $perimetro = $diametro = $raio = $area = "";
}
?>


<!-- Formulario -->

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora</title>
    </head>
    <body>
        <div class="container">
            <form action="#" method="post">
                <fieldset>
                    <div><h1>Calculadora</h1></div> 
                    <label for="p">Insira Perímetro</label><br>
                    <input type="number" name="perimetro" id="p"><br><br>

                    <div><h3>Resultados</h3></div> 

                    <label for="d">Diâmetro:</label><br>
                    <input type="number" name="diametro" id="d" value="<?php echo $diametro?>" disabled><br><br> <!-- Não precisa exibir -->

                    <label for="r">Raio:</label><br>
                    <input type="number" name="raio" id="r" value="<?php echo $raio ?>" disabled><br><br> <!-- Exibe ao envio. -->

                    <label for="a">Área:</label><br>
                    <input type="number" name="area" id="a" value="<?php echo $area ?>" disabled><br><br> <!-- Exibe ao envio. -->

                    <button type="submit" name="enviar">Enviar</button>
                    <button type="submit" name="apagar">Apagar</button>
                </fieldset>
            </form>
        </div>
    </body>
</html>