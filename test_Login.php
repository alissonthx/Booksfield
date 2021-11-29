<?php
session_start();
include_once "conection.php";

// Verifica se há algo no POST
if (empty($_POST["email"]) || empty($_POST["password"])) {
    header("Location:login.php?erro=1");
    die();
}
$email = $_POST["email"];
$password = $_POST["password"];
// print_r($_POST);

$sql = "SELECT * FROM usuarios WHERE email LIKE '$email' AND passwd LIKE '$password'";
$res_sql = mysqli_query($ccon, $sql);

// Obtem numero de registros das linhas: email e senha
$und_register = mysqli_num_rows($res_sql);
// print_r($und_register);

if ($und_register > 0) {
    //trata os dados do banco para ser utilizados
    $row = mysqli_fetch_assoc($res_sql);

    //Guarda id e o nome na session
    $_SESSION["id"] = $row["id"];
    $_SESSION["nome"] = $row["nome"];

    // Direciona para o dashboard
    header("Location:dashboard.php");
} else {
    header("Location:login.php?erro=1");
}
?>