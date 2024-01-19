<?php
include_once("../server/conexion.php");

if (isset($_POST)) {
  $data = file_get_contents("php://input");
  $resp = json_decode($data, true);

  $stmt = $conn->prepare("SELECT id, nombre FROM comunas WHERE id_region = ? ORDER BY nombre");
  $stmt->bind_param("i", $resp["id"]);
  $stmt->execute();
  $query_st = $stmt->get_result();
  $row_st = $query_st->fetch_all();
  header("Content-type:application/json; charset=utf-8");
  $comunasarray = array();
  foreach ($row_st as list($a, $b)) {
    $comunasarray[] = array("id" => $a, "nombre" => $b);
  }
  echo json_encode($comunasarray);
  $stmt->close();
}
