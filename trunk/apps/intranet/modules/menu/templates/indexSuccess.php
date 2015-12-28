<h1>Menus List</h1>

<table>
  <thead>
    <tr>
      <th>Cod menu</th>
      <th>Descricao</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($menus as $menu): ?>
    <tr>
      <td><a href="<?php echo url_for('menu/show?cod_menu='.$menu->getCodMenu()) ?>"><?php echo $menu->getCodMenu() ?></a></td>
      <td><?php echo $menu->getDescricao() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('menu/new') ?>">New</a>
