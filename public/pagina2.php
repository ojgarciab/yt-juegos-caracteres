<?php
require_once 'pdo.malo.php';

if (empty($_POST['texto']) === false) {
    try {
        $consulta = $pdo->prepare('
          INSERT INTO tabla_latin1 (
            texto
          ) VALUES (
            :texto
          )
        ');
        $consulta->bindValue(
            ':texto',
            $_POST['texto']
        );
        $consulta->execute();
    } catch (PDOException $e) {
        die('Error SQL: '. htmlspecialchars($e->getMessage()));
    }
    
    header('Location: '. $_SERVER['PHP_SELF']);
}
try {
    $consulta = $pdo->query('
      SELECT *, UPPER(texto) texto_mayus
      FROM tabla_latin1
      ORDER BY id DESC
    ');
} catch (PDOException $e) {
    die('Error SQL: '. htmlspecialchars($e->getMessage()));
}
$registros = $consulta->fetchAll(PDO::FETCH_ASSOC);
require_once 'comun.latin1.php';
