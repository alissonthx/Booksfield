<?php
session_start();

include_once "conection.php";

$_SESSION["id"];

$idLivro = $_GET["livro"];
$idUser = $_SESSION["id"];

$res_emp = "INSERT INTO emprestimos (id_livro, id_user, date_start, date_end) VALUES('$idLivro', '$idUser', NOW(), FROM_UNIXTIME(UNIX_TIMESTAMP(DATE_ADD(CURDATE(), INTERVAL +7 DAY))))";
$result_emp = mysqli_query($ccon, $res_emp);
// print_r(mysqli_error($ccon));
header("Location:dashboard_Emp.php");
