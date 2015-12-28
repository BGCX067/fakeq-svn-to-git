<?php

/**
 * OsServicos form base class.
 *
 * @method OsServicos getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOsServicosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_servico'      => new sfWidgetFormInputHidden(),
      'valor'            => new sfWidgetFormInputText(),
      'status'           => new sfWidgetFormInputText(),
      'servico'          => new sfWidgetFormInputText(),
      'tempo_padrao'     => new sfWidgetFormInputText(),
      'tempo_pago'       => new sfWidgetFormInputText(),
      'tempo_trabalhado' => new sfWidgetFormInputText(),
      'cod_mecanico'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mecanico'), 'add_empty' => false)),
      'numero_os'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Os'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_servico'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_servico')), 'empty_value' => $this->getObject()->get('cod_servico'), 'required' => false)),
      'valor'            => new sfValidatorNumber(array('required' => false)),
      'status'           => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'servico'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'tempo_padrao'     => new sfValidatorNumber(array('required' => false)),
      'tempo_pago'       => new sfValidatorNumber(array('required' => false)),
      'tempo_trabalhado' => new sfValidatorNumber(array('required' => false)),
      'cod_mecanico'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Mecanico'))),
      'numero_os'        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Os'))),
    ));

    $this->widgetSchema->setNameFormat('os_servicos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OsServicos';
  }

}
