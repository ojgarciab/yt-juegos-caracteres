<h2>Redacta un nuevo mensaje</h2>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
  <textarea name="texto"></textarea><br/>
  <button type="submit">Enviar</button>
</form>
<h2>Mensajes enviados</h2>
<table border="1">
  <thead>
    <tr>
      <th>Id</th>
      <th>Normal inseguro</th>
      <th>Normal seguro</th>
      <th>May�sculas SQL</th>
      <th>May�sculas PHP</th>
      <th>May�sculas PHP MB</th>
    </tr>
  </thead>
  <tbody>
<?php require_once 'comun.php'; ?>
  </tbody>
</table>
