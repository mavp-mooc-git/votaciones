<?php
$errors = [];

include_once("./conexion.php");

if (isset($_POST["name"])) {
  //$name = filter_var($_POST["name"], FILTER_SANITIZE_SPECIAL_CHARS);
  $name = "Alguien aqui-.";
  if (!preg_match("/^([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ']{5,35})+([ ]{1})+([a-zA-ZñÑáéíóúÁÉÍÓÚüÜ']{3,35})$/", $name)) {
    array_push($errors, "Nombre y apellidos formato inválido.\n");
  }
};

if (isset($_POST["alias"])) {
  $alias = filter_var($_POST["alias"], FILTER_SANITIZE_SPECIAL_CHARS);
  //$alias = "aaa";
  if (!preg_match("/^[A-Za-z0-9]{5,15}$/", $alias)) {
    array_push($errors, "Campo Alias formato inválido.\n");
  }
};

if (isset($_POST["rut"])) {
  $rut = filter_var($_POST["rut"], FILTER_SANITIZE_SPECIAL_CHARS);
  if (!preg_match("/^([1-9]|[1-9]\d|[1-9]\d{2})((\.\d{3})*|(\d{3})*)\-(\d|k|K)$/", $rut)) {
    array_push($errors, "Campo RUT formato inválido.\n");
  }
};

if (isset($_POST["email"])) {
  $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($errors, "Campo Email formato inválido.\n");
  }
};

if (isset($_POST[intval("region")])) {
  $region = filter_var($_POST["region"], FILTER_SANITIZE_NUMBER_INT);
  if (!filter_var($region, FILTER_VALIDATE_INT)) {
    array_push($errors, "Campo Región formato inválido.\n");
  }
};

if (isset($_POST[intval("comuna")])) {
  $comuna = filter_var($_POST["comuna"], FILTER_SANITIZE_NUMBER_INT);
  if (!filter_var($comuna, FILTER_VALIDATE_INT)) {
    array_push($errors, "Campo Comuna formato inválido.\n");
  }
};

if (isset($_POST[intval("candidato")])) {
  $candidato = filter_var($_POST["candidato"], FILTER_SANITIZE_NUMBER_INT);
  if (!filter_var($candidato, FILTER_VALIDATE_INT)) {
    array_push($errors, "Campo Candidato formato inválido.\n");
  }
};

if (isset($_POST["us"])) {
  $counter = sizeof($_POST["us"]);
  if ($counter < 2) {
    array_push($errors, "Sobre Nosotros: Debe elegir al menos dos opciones.\n");
  }
};

header("Content-type:application/json;charset=utf-8");

echo "errors:" . count($errors) . "\n";
foreach ($errors as $val) {
  print "$val";
}

include_once("./routes/candidatos.php");
include_once("./routes/regiones.php");
include_once("./routes/comunas.php");

mysqli_close($conn);
