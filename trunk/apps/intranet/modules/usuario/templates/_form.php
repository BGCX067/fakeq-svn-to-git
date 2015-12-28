<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="<?php echo url_for('usuario/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?cod_usuario=' . $form->getObject()->getCodUsuario() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
    <table>
        <tfoot>
            <tr>
                <td colspan="2">
                    &nbsp;<a href="<?php echo url_for('usuario/index') ?>">Back to list</a>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Delete', 'usuario/delete?cod_usuario=' . $form->getObject()->getCodUsuario(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
                    <?php endif; ?>
                    <input type="submit" value="Save" />
                </td>
            </tr>
        </tfoot>
        <tbody>
            <?php echo $form['cod_usuario']->render(); ?>
            <?php echo $form['nome']->renderRow(array(), 'Nome'); ?>
            <?php echo $form['login']->renderRow(array(), 'Login'); ?>
            <?php echo $form['senha']->renderRow(array(), 'Senha'); ?>
            <?php echo $form['cod_funcao']->renderRow(array(), 'Função'); ?>
            <?php echo $form['data_aniversario']->renderRow(array(), 'Data Nascimento'); ?>
            <?php echo $form['ativo']->renderRow(array(), 'Status'); ?>
              <?php echo $form['_csrf_token']->render(); ?>  
        <script>
            $(function() {
                $( "#usuario_data_aniversario" ).datepicker();
            });
        </script>
        </tbody>
    </table>
</form>
