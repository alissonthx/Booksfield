<?php
session_start();
include_once "conection.php";
$id_session = $_SESSION['id'];
$sql = "SELECT * FROM usuarios WHERE id = $id_session";
$users = mysqli_query($ccon, $sql);
if (!$users) {
    print_r(mysqli_error($ccon));
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="form.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/d24f94013c.js" crossorigin="anonymous">
    </script>
    <title>BooksField - Painel</title>
</head>

<body>
    <div class="flex-container main-dashboard">
        <div class="card-painel">
            <a href="dashboard.php" class=" btn btn-1 mt-n1" role="button">Usuários</a>
            <a href="dashboard_Emp.php" class=" btn btn-1 mt-n1" role="button">Empréstimos</a>
            <a href="dashboard_Books.php" class=" btn btn-1 mt-n1" role="button">Livros</a>
        </div>
        <div class="main-book">
            <div>
                <h1 style="text-align: center;" class="center-dashboard">Painel de Usuário</h1>
            </div>
            <div class="flex-row">
                <div class="mt-1" style="font-size: 35px; color: #77ffc0;">
                    <p>Bem vindo(a),
                        <?php while ($emp = mysqli_fetch_assoc($users)) { ?>
                            <?= $emp["nome"] ?>
                        <?php } ?>
                    </p>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-1 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user-circle fa-lg"></i>
                </button>
                <ul class="user dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="user dropdown-item" href="#">Perfil</a></li>
                    <li><a class="user dropdown-item" href="login.php">Sair</a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>