<?php
session_start();
include_once "conection.php";

// $id_session = $_SESSION["id"];
$id_emp = $_GET["id"];

// $devolution = "DELETE FROM emprestimos WHERE emprestimos.id_user = $id_session AND id_livro = $id_book";
$devolution = "DELETE FROM emprestimos WHERE id = $id_emp";
$result_emp = mysqli_query($ccon, $devolution);
print_r(mysqli_error($ccon));
header("Location:dashboard_Emp.php");
