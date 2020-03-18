<?php
require_once 'mysqli.malo.php';

if (empty($_POST['texto']) === false) {
    $consulta = $mysqli->prepare('
      INSERT INTO tabla_latin1 (
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
  SELECT id, UPPER(texto) texto
  FROM tabla_latin1
  ORDER BY id DESC
');
if ($consulta === false) {
    die('Error SQL: '. htmlspecialchars($mysqli->error));
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
<?php while ($registro = $consulta->fetch_assoc()): ?>
    <tr>
      <td><?= htmlspecialchars($registro['id']) ?></td>
      <td><?= $registro['texto'] ?></td>
      <td><?= htmlspecialchars($registro['texto']) ?></td>
      <td><?= $registro['texto_mayus'] ?></td>
      <td><?= htmlspecialchars($registro['texto_mayus']) ?></td>
    </tr>
<?php endwhile; ?>
  </tbody>
  