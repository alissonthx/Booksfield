<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>BooksField - Cadastro</title>
</head>

<body>

    <form method="POST" action="process.php">
        <div class="main-cadastro">

            <div class="card-cadastro">
                <h1 class="center-cadastro">Cadastro de Usuário</h1>
                <div class="textfield">
                    <label>Nome: </label>
                    <input type="text" name="nome" placeholder="Digite seu nome "><br><br>
                </div>
                <div class="textfield">
                    <label for="email">E-mail: </label>
                    <input type="email" name="email" placeholder="Digite seu e-mail"><br><br>
                </div>
                <div class="textfield">
                    <label>Password: </label>
                    <input type="password" name="passwd" minlength="8" required placeholder="Digite sua senha"><br><br>
                </div>
                <div class="textfield">
                    <label>CPF: </label>
                    <input type="text" name="CPF" placeholder="Digite seu CPF"><br><br>
                </div>
                <div class="textfield">
                    <label>Data de Nasc: </label>
                    <input type="date" name="dateNac"><br><br>
                </div>
                <div class="textfield">
                    <label> Gênero: </label>
                    <select name="genero">
                        <option>Masculino</option>
                        <option>Feminino</option>
                        <option>Outros</option>
                    </select><br><br>
                </div>
                <div>
                    <button class="btn btn-success mt-3 mb-1" role="button">Cadastrar</button>
                    <a href="login.php" class="btn btn-secondary mt-3 mb-1" role="button">Voltar</a>
                </div>
            </div>
        </div>
    </form>
</body>

</html>