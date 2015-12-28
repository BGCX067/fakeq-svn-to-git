<?php

/**
 * Usuario form.
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class UsuarioForm extends BaseUsuarioForm {

    public function configure() {
        $hoje = date('d/m/Y');
        $validar = date('m/d/Y');

        $this->validatorSchema['nome'] = new sfValidatorString(array('required' => true), array('required' => $this->format_erro('Nome é obrigatório')));
        $this->validatorSchema['data_aniversario'] = new sfValidatorDate(
                        array('min' => '01/01/1900',
                            'max' => $validar,
                            'date_format' => '~(?P<day>\d{2})/(?P<month>\d{2})/(?P<year>\d{4})~'),
                        array('max' => $this->format_erro("A data deve ser menor que $hoje."),
                            'min' => $this->format_erro('A data deve ser maior que 01/01/1910.'),
                            'bad_format' => $this->format_erro('Data inválida (dd/mm/aaaa).'),
                            'invalid' => $this->format_erro('Data inválida.'),
                            'required' => $this->format_erro('Data de Nascimento é obrigatória')));

        $this->setWidget('nome', new sfWidgetFormInputText(array(), array('size' => '50')));
        $this->setWidget('senha', new sfWidgetFormInputPassword(array(), array()));
        $this->setWidget('data_aniversario', new sfWidgetFormInputText(array(), array('size' => '10', 'maxlength' => '10', 'onkeypress' => 'mascara(this,msk_data);')));
        $this->getObject()->setDataAniversario(implode('/', array_reverse(explode('-', $this->getObject()->getDataAniversario()))));
        $this->getObject()->setDataAniversario(implode('/', array_reverse(explode('-', $this->getObject()->getDataAniversario()))));
    }

    public function validaUsuario1() {
        /*        <?php echo $form['cod_usuario']->render(); 
          //<?php echo $form['nome']->renderRow(array(), 'Nome'); ?>
          //<?php echo $form['login']->renderRow(array(), 'Login'); ?>
          //<?php echo $form['senha']->renderRow(array(), 'Senha'); ?>
          //<?php echo $form['cod_funcao']->renderRow(array(), 'Função'); ?>
          //<?php echo $form['data_aniversario']->renderRow(array(), 'Data Nascimento'); ?>
          //<?php echo $form['ativo']->renderRow(array(), 'Status'); ?>
          //<?php echo $form['_csrf_token']->render(); ?> */

        //   $this->validatorSchema['nome'] = new sfValidatorString(array('required' => true), array('required' => $this->format_erro('Nome é obrigatório')));
        $this->validatorSchema['senha'] = new sfValidatorString(array('required' => true), array('required' => $this->format_erro('senha é obrigatório')));
        $this->validatorSchema['login'] = new sfValidatorString(array('required' => true), array('required' => $this->format_erro('login é obrigatório')));
    }

    public function doSave($con = null) {
        parent::doSave($con);

        $this->getObject()->setDataAniversario(implode('-', array_reverse(explode('/', $this->getObject()->getDataAniversario()))));
        $this->getObject()->setSenha(md5($this->getObject()->getSenha()));
        $this->getObject()->save();
    }

    function format_erro($erro="") {
        return
                "<div class='ui-widget'style='font-size:10px; width:-moz-max-content;' >
			<div style='padding: 0 .7em;' class='ui-state-error ui-corner-all'> 
				<p><span style='float: left; margin-right: .3em;' class='ui-icon ui-icon-alert'></span> 
				<strong>Erro:</strong> $erro</p>
			</div>
		</div>"
        ;
    }

}
