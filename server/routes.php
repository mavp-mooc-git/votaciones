<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
  case "/":
  case "":
  case "/server.php":
    require __DIR__ . '/index.html';
    break;
  case '/candidatos':
    require __DIR__ . '/../routes/candidatos.php';
    break;
  case '/regiones':
    require __DIR__ . '/../routes/regiones.php';
    break;
  case '/comunas':
    require __DIR__ . '/../routes/comunas.php';
    break;
  case '/candidatos.js':
    header("Content-type:application/javascript;charset=utf-8");
    require __DIR__ . '/../public/candidatos.js';
    break;
  case '/regiones.js':
    header("Content-type:application/javascript;charset=utf-8");
    require __DIR__ . '/../public/regiones.js';
    break;
  case '/comunas.js':
    header("Content-type:application/javascript;charset=utf-8");
    require __DIR__ . '/../public/comunas.js';
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/index.html';
    break;
}
