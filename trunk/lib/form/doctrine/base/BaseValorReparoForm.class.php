<?php

/**
 * ValorReparo form base class.
 *
 * @method ValorReparo getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseValorReparoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idvalor_reparo' => new sfWidgetFormInputHidden(),
      'valor'          => new sfWidgetFormInputText(),
      'pecas_veiculo'  => new sfWidgetFormInputText(),
      'modelo'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idvalor_reparo' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idvalor_reparo')), 'empty_value' => $this->getObject()->get('idvalor_reparo'), 'required' => false)),
      'valor'          => new sfValidatorNumber(array('required' => false)),
      'pecas_veiculo'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'modelo'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('valor_reparo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ValorReparo';
  }

}
