<?php

include_once "conection.php";

//Limpa a variavel e coloca em...

$titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_STRING);
$descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_STRING);

//echo "Titulo: $titulo <br>";
//echo "descricao: $descricao <br>";

$res_book = "INSERT INTO livros (titulo, descricao, created) VALUES('$titulo', '$descricao', NOW())";
$result_book = mysqli_query($ccon, $res_book);