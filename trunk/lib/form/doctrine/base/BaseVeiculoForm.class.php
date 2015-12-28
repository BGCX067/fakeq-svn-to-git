<?php

/**
 * Veiculo form base class.
 *
 * @method Veiculo getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVeiculoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_veiculo' => new sfWidgetFormInputHidden(),
      'placa'       => new sfWidgetFormInputText(),
      'chassi'      => new sfWidgetFormInputText(),
      'marca'       => new sfWidgetFormInputText(),
      'modelo'      => new sfWidgetFormInputText(),
      'cor'         => new sfWidgetFormInputText(),
      'ano'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_veiculo' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_veiculo')), 'empty_value' => $this->getObject()->get('cod_veiculo'), 'required' => false)),
      'placa'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'chassi'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'marca'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'modelo'      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cor'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'ano'         => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('veiculo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Veiculo';
  }

}
