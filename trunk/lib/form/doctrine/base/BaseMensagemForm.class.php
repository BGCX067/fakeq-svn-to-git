<?php

/**
 * Mensagem form base class.
 *
 * @method Mensagem getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMensagemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmensagem'        => new sfWidgetFormInputHidden(),
      'cod_conversa'      => new sfWidgetFormInputText(),
      'conversa'          => new sfWidgetFormInputText(),
      'data_cadastro'     => new sfWidgetFormDate(),
      'detalhe_orcamento' => new sfWidgetFormInputText(),
      'cod_usuario'       => new sfWidgetFormInputText(),
      'cod_imagem'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Imagens'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'idmensagem'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmensagem')), 'empty_value' => $this->getObject()->get('idmensagem'), 'required' => false)),
      'cod_conversa'      => new sfValidatorInteger(array('required' => false)),
      'conversa'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'data_cadastro'     => new sfValidatorDate(array('required' => false)),
      'detalhe_orcamento' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_usuario'       => new sfValidatorInteger(),
      'cod_imagem'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Imagens'))),
    ));

    $this->widgetSchema->setNameFormat('mensagem[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mensagem';
  }

}
