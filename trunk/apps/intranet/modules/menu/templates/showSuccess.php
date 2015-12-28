<table>
  <tbody>
    <tr>
      <th>Cod menu:</th>
      <td><?php echo $menu->getCodMenu() ?></td>
    </tr>
    <tr>
      <th>Descricao:</th>
      <td><?php echo $menu->getDescricao() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('menu/edit?cod_menu='.$menu->getCodMenu()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('menu/index') ?>">List</a>
