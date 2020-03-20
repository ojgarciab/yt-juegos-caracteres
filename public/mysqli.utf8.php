<?php
$mysqli = new mysqli('localhost', 'root', '', 'pruebas');

if ($mysqli->connect_errno !== 0) {
    die('Error de conexión: '. $mysqli->connect_error);
}
if ($mysqli->set_charset('latin1') === false) {
    die('Error cambiando juego de caracteres: '. htmlspecialchars($mysqli->error));
}
