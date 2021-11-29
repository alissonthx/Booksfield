<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/form.css">
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
                <div class="card text-center card-book mt-1" style="width: 18rem;" height="40rem;">
                    <img src="https://ibb.co/CBK64fy" class="card-img-top img-book" alt="Livro 1">
                    <div class="card-body">
                        <h5 class="card-title">Lovecraft</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="process_Emp.php?livro=1" class="btn btn-1">Emprestar</a>
                    </div>
                </div>
                <div class="card text-center card-book mt-1" style="width: 18rem;">
                    <img src="https://ibb.co/VgDkPSm" class="card-img-top img-book" alt=" livro 2">
                    <div class="card-body">
                        <h5 class="card-title">O Corvo</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="process_Emp.php?livro=2" class="btn btn-1">Emprestar</a>
                    </div>
                </div>
                <div class="card text-center card-book mt-1" style="width: 18rem;">
                    <img src="https://ibb.co/gSKMy5n" class="card-img-top img-book" alt="livro 3">
                    <div class="card-body">
                        <h5 class="card-title">O Homem de Giz</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the
                            card's content.</p>
                        <a href="process_Emp.php?livro=3" class="btn btn-1">Emprestar</a>
                    </div>
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