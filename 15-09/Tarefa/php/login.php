<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="../css/styleLogin.css">
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <form action="../config/php/script.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <h1>LOGIN</h1>
                    <div class="float">
                        <input type="email" name="email" id="em" placeholder=" " autofocus required>
                        <label for="em">Email</label>
                    </div>
                    <div class="float">
                        <input type="password" name="senha" id="sh" placeholder=" " required>
                        <label for="sn">Senha</label>
                    </div>
                    <div id="form-item">
                        <div id="form-checkbox">
                            <input type="checkbox" name="chk" id="chk">
                            <p>Lembrar senha</p>
                        </div>
                        <button type="submit" name="login">LOGIN</button>
                    </div>
                </fieldset>
            </form>
            <p id="txt">Não possui uma conta ? <a href="registro.php">Cadastre-se</a></p>
        </div>
    </body>
</html>