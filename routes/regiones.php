<?php
include_once("../server/conexion.php");

$query2 = "SELECT id, nombre FROM regiones";
$regiones = mysqli_query($conn, $query2);
$regionesarray = array();
while ($row = mysqli_fetch_assoc($regiones)) {
  $regionesarray[] = $row;
}

header("Content-type:application/json;charset=utf-8");
echo json_encode($regionesarray);
mysqli_free_result($regiones);

?>
