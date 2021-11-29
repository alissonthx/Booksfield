<?php
include_once "conection.php";

$id_session = $_SESSION["id"];
$devolution = "DELETE FROM emprestimos WHERE $id_session";
$result_emp = mysqli_query($ccon, $devolution);
// print_r(mysqli_error($ccon));
header("Location:dashboard_Emp.php");
