<?php
const PRODUCCION = False;     // en entornos de producción, cambiar a True
if(!PRODUCCION) {
  ini_set('error_reporting', E_ALL | E_NOTICE | E_STRICT);
  ini_set('display_errors', '1');
  ini_set('track_errors', 'On');
} else {
  ini_set('display_errors', '0');
}
?>
