<?php

/**
 * Erps form base class.
 *
 * @method Erps getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseErpsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_erps'    => new sfWidgetFormInputHidden(),
      'nome'        => new sfWidgetFormInputText(),
      'rg'          => new sfWidgetFormInputText(),
      'cpf'         => new sfWidgetFormInputText(),
      'email'       => new sfWidgetFormInputText(),
      'status'      => new sfWidgetFormInputText(),
      'estado'      => new sfWidgetFormInputText(),
      'cidade'      => new sfWidgetFormInputText(),
      'rua'         => new sfWidgetFormInputText(),
      'numero'      => new sfWidgetFormInputText(),
      'bairro'      => new sfWidgetFormInputText(),
      'cep'         => new sfWidgetFormInputText(),
      'complemento' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_erps'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_erps')), 'empty_value' => $this->getObject()->get('cod_erps'), 'required' => false)),
      'nome'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'rg'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cpf'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'email'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'status'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'estado'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cidade'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'rua'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'numero'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'bairro'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cep'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'complemento' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('erps[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Erps';
  }

}
