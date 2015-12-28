<?php

/**
 * Mecanico form base class.
 *
 * @method Mecanico getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMecanicoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_mecanico'  => new sfWidgetFormInputHidden(),
      'nome'          => new sfWidgetFormInputText(),
      'expediente'    => new sfWidgetFormInputText(),
      'status'        => new sfWidgetFormInputText(),
      'produtividade' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_mecanico'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_mecanico')), 'empty_value' => $this->getObject()->get('cod_mecanico'), 'required' => false)),
      'nome'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'expediente'    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'status'        => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'produtividade' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('mecanico[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mecanico';
  }

}
