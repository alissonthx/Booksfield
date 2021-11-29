<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>BooksField - Login</title>
</head>

<body>

    <form method="POST" action="test_Login.php">
        <div class="main-login">
            <div class="left-login">
                <h1>Cadastre-se<br>Na<br>BooksField</h1>
            </div>
            <div class="right-login">
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">E-mail</label>
                        <input class="form-control" type="text" name="email" placeholder="Digite seu E-mail">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input class="form-control" type="password" name="password" placeholder="Digite sua Senha">
                    </div>
                    <?php if (isset($_GET["erro"])) {
                        echo '<span style="color: rgb(252, 67, 67);" /><center>Nome de usuário e senha incorretos!</center></span>';
                    } ?>
                    <div>
                        <a href="cadastro.php" class="btn btn-success mt-3" role="button">Cadastre-se</a>
                        <button class="btn btn-secondary mt-3" role="button">Entrar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>