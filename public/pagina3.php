<?php
require_once 'mysqli.malo.php';

if (empty($_POST['texto']) === false) {
    $consulta = $mysqli->prepare('
      INSERT INTO tabla_utf8 (
        texto
      ) VALUES (
        ?
      )
    ');
    if ($consulta === false) {
        die('Error SQL: '. htmlspecialchars($mysqli->error));
    }
    $consulta->bind_param(
        's',
        $_POST['texto']
    );
    if ($consulta->execute() === false) {
        die('Error SQL: '. htmlspecialchars($consulta->error));
    }
    header('Location: '. $_SERVER['PHP_SELF']);
}
$consulta = $mysqli->query('
  SELECT *, UPPER(texto) texto_mayus
  FROM tabla_latin1
  ORDER BY id DESC
');
if ($consulta === false) {
    die('Error SQL: '. htmlspecialchars($mysqli->error));
}
$registros = $consulta->fetch_all(MYSQLI_ASSOC);
require_once 'comun.utf8.php';
