<?php
include_once("../server/conexion.php");

$query1 = "SELECT id, nombre FROM candidatos";
$candidatos = mysqli_query($conn, $query1);
$candidatosarray = array();
while ($row = mysqli_fetch_assoc($candidatos)) {
  $candidatosarray[] = $row;
}

header("Content-type:application/json;charset=utf-8");
echo json_encode($candidatosarray);
mysqli_free_result($candidatos);

?>
