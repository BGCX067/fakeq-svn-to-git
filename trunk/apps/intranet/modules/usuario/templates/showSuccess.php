<table>
  <tbody>
    <tr>
      <th>Cod usuario:</th>
      <td><?php echo $usuario->getCodUsuario() ?></td>
    </tr>
    <tr>
      <th>Nome:</th>
      <td><?php echo $usuario->getNome() ?></td>
    </tr>
    <tr>
      <th>Login:</th>
      <td><?php echo $usuario->getLogin() ?></td>
    </tr>
    <tr>
      <th>Senha:</th>
      <td><?php echo $usuario->getSenha() ?></td>
    </tr>
    <tr>
      <th>Cod funcao:</th>
      <td><?php echo $usuario->getCodFuncao() ?></td>
    </tr>
    <tr>
      <th>Data aniversario:</th>
      <td><?php echo $usuario->getDataAniversario() ?></td>
    </tr>
    <tr>
      <th>Ativo:</th>
      <td><?php echo $usuario->getAtivo() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('usuario/edit?cod_usuario='.$usuario->getCodUsuario()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('usuario/index') ?>">List</a>
