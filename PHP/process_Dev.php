<?php
session_start();
include_once "conection.php";

$id_session = $_SESSION["id"];
$id_book = $_GET["id"];

$devolution = "DELETE FROM emprestimos WHERE emprestimos.id_user = $id_session AND id_book = $id_book";
$result_emp = mysqli_query($ccon, $devolution);
print_r(mysqli_error($ccon));
header("Location:dashboard_Emp.php");
