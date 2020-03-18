<?php
$mysqli = new mysqli('localhost', 'root', '', 'pruebas');

if ($mysqli->connect_errno !== 0) {
    die('Error de conexión: '. $mysqli->connect_error);
}
