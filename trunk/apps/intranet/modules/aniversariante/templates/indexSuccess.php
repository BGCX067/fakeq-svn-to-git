<h1>Lista de Aniversariantes</h1>

<table>
    <thead>
        <tr>
            <th>
                Pesquisar
            </th>
            <td>
                <form action="<?php echo url_for('aniversariante/index') ?>" method="post" <?php print 'enctype="multipart/form-data" ' ?>>

                    <ul class="ui-widget ui-helper-clearfix" id="icons">
                        <li>
                            <select name="mes">
                                <option value='-'></option>
                                <option value='1'>Janeiro</option>
                                <option value='2'>Fevereiro</option>
                                <option value='3'>Março</option>
                                <option value='4'>Abril</option>
                                <option value='5'>Maio</option>
                                <option value='6'>Junho</option>
                                <option value='7'>Julho</option>
                                <option value='8'>Agosto</option>
                                <option value='9'>Setembro</option>
                                <option value='10'>Outubro</option>
                                <option value='11'>Novembro</option>
                                <option value='12'>Dezembro</option>
                            </select>
                        </li>
                        <li>
                            <input type="text" name="pesquisar"/></li>

                        <li onclick="document.forms[0].submit()" title="Pesquisar" class="ui-state-default ui-corner-all">
                            <span class="ui-icon ui-icon-search"></span>
                        </li>                        
                    </ul>
                </form>
            </td>
        </tr>
        <tr>
            <th>Nome</th>
            <th>Aniversario</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $usuario): ?>
            <tr>
                <td>
                    <a href="<?php echo url_for('aniversariante/edit?cod_usuario=' . $usuario->getCodUsuario()) ?>">
                        <?php echo $usuario->getNome() ?>
                    </a>
                </td>
                <td><?php echo implode('/', array_reverse(explode('-', $usuario->getDataAniversario()))) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<ul class="ui-widget ui-helper-clearfix" id="icons">
    <a href="<?php echo url_for('aniversariante/new') ?>">
        <li title="Novo" class="ui-state-default ui-corner-all">
            <span class="ui-icon ui-icon-circle-plus"> </span>
        </li>
    </a>
</ul>