<?php
session_start();
include_once "conection.php";
$sql =
    "SELECT emprestimos.id as id_emp, emprestimos.*, usuarios.*, livros.* FROM emprestimos, usuarios, livros WHERE emprestimos.id_livro = livros.id AND emprestimos.id_user = usuarios.id";
$emprestimos = mysqli_query($ccon, $sql);
if (!$emprestimos) {
    print_r(mysqli_error($ccon));
}

// $emprestimos = mysqli_fetch_all($emprestimos);
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
                <h1 style="text-align: center;" class="center-dashboard">Livros</h1>
            </div>
            <div class="flex-row">
                <div class="mt-1">
                    <table class="table table-dark table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                                <th>Usuário</th>
                                <th>Data de Empréstimo</th>
                                <th>Data de Devolução</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while (
                                $emp = mysqli_fetch_assoc($emprestimos)
                            ) { ?>
                                <tr>
                                    <td><?= $emp["id_emp"] ?></td>
                                    <td><?= $emp["titulo"] ?></td>
                                    <td><?= $emp["nome"] ?></td>
                                    <td><?= date(
                                        "d/m/Y",
                                        strtotime($emp["date_start"])
                                    ) ?></td>
                                    <td><?= date(
                                        "d/m/Y",
                                        strtotime($emp["date_end"])
                                    ) ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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