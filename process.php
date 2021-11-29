<?php

include_once "conection.php";

//Limpa a variavel e coloca em...

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
$CPF = filter_input(INPUT_POST, "CPF", FILTER_SANITIZE_STRING);
$date = filter_input(INPUT_POST, "dateNac", FILTER_SANITIZE_NUMBER_INT);
$genero = filter_input(INPUT_POST, "genero", FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, "passwd", FILTER_SANITIZE_STRING);

//echo "Nome: $nome <br>";
//echo "E-mail: $email <br>";
//echo "CPF: $CPF <br>";
//echo "Data de Nasc: $date <br>";
//echo "Gênero: $genero <br>";
//echo "Password: $password <br>";

$res_user = "INSERT INTO usuarios (nome, email, CPF, dateNac, created, passwd) VALUES('$nome', '$email', '$CPF', '$date', DEFAULT, '$password')";
$result_user = mysqli_query($ccon, $res_user);
header("Location:login.php");
