<h1>Usuarios List</h1>

<table>
  <thead>
    <tr>
      <th>Cod usuario</th>
      <th>Nome</th>
      <th>Login</th>
      <th>Senha</th>
      <th>Cod funcao</th>
      <th>Data aniversario</th>
      <th>Ativo</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
      <td><a href="<?php echo url_for('usuario/show?cod_usuario='.$usuario->getCodUsuario()) ?>"><?php echo $usuario->getCodUsuario() ?></a></td>
      <td><?php echo $usuario->getNome() ?></td>
      <td><?php echo $usuario->getLogin() ?></td>
      <td><?php echo $usuario->getSenha() ?></td>
      <td><?php echo $usuario->getCodFuncao() ?></td>
      <td><?php echo $usuario->getDataAniversario() ?></td>
      <td><?php echo $usuario->getAtivo() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<input type="button" onclick="<?php echo url_for('usuario/new') ?>"/>
  <a href="<?php echo url_for('usuario/new') ?>">Novo</a>
