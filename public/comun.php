<?php foreach ($registros as $registro): ?>
    <tr>
      <td><?= htmlspecialchars($registro['id']) ?></td>
      <td><?= htmlspecialchars($registro['texto']) ?></td>
      <td><?= $registro['texto'] ?></td>
      <td><?= $registro['texto_mayus'] ?></td>
      <td><?= strtoupper($registro['texto_mayus']) ?></td>
      <td><?= mb_strtoupper($registro['texto_mayus']) ?></td>
    </tr>
<?php endforeach; ?>
