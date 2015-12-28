<?php

/**
 * Email form base class.
 *
 * @method Email getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEmailForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_email'   => new sfWidgetFormInputHidden(),
      'assunto'     => new sfWidgetFormInputText(),
      'descricao'   => new sfWidgetFormInputText(),
      'numero_os'   => new sfWidgetFormInputText(),
      'vod_cliente' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
      'cod_veiculo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Veiculo'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_email'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_email')), 'empty_value' => $this->getObject()->get('cod_email'), 'required' => false)),
      'assunto'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'descricao'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'numero_os'   => new sfValidatorInteger(array('required' => false)),
      'vod_cliente' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'))),
      'cod_veiculo' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Veiculo'))),
    ));

    $this->widgetSchema->setNameFormat('email[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Email';
  }

}
