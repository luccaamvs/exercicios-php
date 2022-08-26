<?php
    require_once("classes/imc.class.php");
    error_reporting(1);

    if(isset($_POST['calcular'])){
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
    
        $valor_imc = new IMC();
        $imc = $valor_imc->getImc($peso, $altura);
        $stat = $valor_imc->getStatu($imc);
    }


?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <center> 
        <h2> Cálculo IMC </h2>
            <div>
                <form name ='form1' action ='index.php' method ='post'>
                    <div>
                        <label>Peso: </label><br>
                        <input type='number' name ='peso' value="" require><br>
                    </div><br>

                    <div>
                        <label>Altura: </label><br>
                        <input type='number' name ='altura' require><br>
                    </div>

                    <input type="hidden" name="oper">
                    <div>
                        <input type = 'submit' name="calcular" value='Calcular'>
                        <input type = 'button' value='Limpar' onclick="form1.oper.value='limpar'; submit() " >
                    </div>

                </form>

                <div>
                    <label>IMC: <?php echo $imc ;?></label><br>
                </div>

                <img src="<?php echo $stat[1]; ?>" alt=""/>
                <img src="<?php echo $stat[2]; ?>" alt="">


                <div>
                    <label for="status">Status da Situação:<?php  echo $stat[0]; ?></label><br>
                </div>
            </div>

        </center>
</body>
</html>