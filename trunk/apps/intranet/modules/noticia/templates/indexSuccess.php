<h1>Noticias List</h1>

<table>
  <thead>
    <tr>
      <th>Cod noticia</th>
      <th>Titulo noticia</th>
      <th>Noticia</th>
      <th>Data publicacao</th>
      <th>Endereco imagem</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($noticias as $noticia): ?>
    <tr>
      <td><a href="<?php echo url_for('noticia/edit?cod_noticia='.$noticia->getCodNoticia()) ?>"><?php echo $noticia->getCodNoticia() ?></a></td>
      <td><?php echo $noticia->getTituloNoticia() ?></td>
      <td><?php echo $noticia->getNoticia() ?></td>
      <td><?php echo $noticia->getDataPublicacao() ?></td>
      <td><?php echo $noticia->getEnderecoImagem() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('noticia/new') ?>">New</a>
