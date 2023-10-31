<table border="1">
  <thead>
    <tr>
      <th>ID</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Color</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($listCars as $car) { ?>
      <tr>
        <td><a href="index.php?id=<?= $car->id ?>"><?= $car->id ?></td>
        <td><?= $car->make ?></td>
        <td><?= $car->model ?></td>
        <td style="background-color: <?= $car->color ?>;"><?= $car->color ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>