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
?><h2>Redacta un nuevo mensaje</h2>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
  <textarea name="texto"></textarea><br/>
  <button type="submit">Enviar</button>
</form>
<h2>Mensajes enviados</h2>
<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Texto inseguro normal</th>
      <th>Texto seguro normal</th>
      <th>Texto inseguro mayúsculas</th>
      <th>Texto seguro mayúsculas</th>
    </tr>
  </thead>
  <tbody>
<?php while ($registro = $consulta->fetch(PDO::FETCH_ASSOC)): ?>
    <tr>
      <td><?= htmlspecialchars($registro['id']) ?></td>
      <td><?= $registro['texto'] ?></td>
      <td><?= htmlspecialchars($registro['texto']) ?></td>
      <td><?= $registro['texto_mayus'] ?></td>
      <td><?= htmlspecialchars($registro['texto_mayus']) ?></td>
    </tr>
<?php endwhile; ?>
  </tbody>
</table>
