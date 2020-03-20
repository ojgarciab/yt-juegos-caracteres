<?php
try {
    $pdo = new \PDO(
        'mysql:dbname=pruebas;host=localhost;charset=latin1',
        'root',
        ''
    );
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
} catch (\PDOException $e) {
    die("Error de conexión: " . htmlspecialchars($e->getMessage()));
}
