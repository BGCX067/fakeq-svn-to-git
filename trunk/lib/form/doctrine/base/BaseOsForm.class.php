<?php

/**
 * Os form base class.
 *
 * @method Os getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'numero_os'       => new sfWidgetFormInputHidden(),
      'data_abertura'   => new sfWidgetFormDate(),
      'data_fechamento' => new sfWidgetFormDate(),
      'prometida'       => new sfWidgetFormDate(),
      'status'          => new sfWidgetFormInputText(),
      'tipo_os'         => new sfWidgetFormInputText(),
      'cod_veiculo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Veiculo'), 'add_empty' => false)),
      'cod_cliente'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'numero_os'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('numero_os')), 'empty_value' => $this->getObject()->get('numero_os'), 'required' => false)),
      'data_abertura'   => new sfValidatorDate(array('required' => false)),
      'data_fechamento' => new sfValidatorDate(array('required' => false)),
      'prometida'       => new sfValidatorDate(array('required' => false)),
      'status'          => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'tipo_os'         => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cod_veiculo'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Veiculo'))),
      'cod_cliente'     => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'))),
    ));

    $this->widgetSchema->setNameFormat('os[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Os';
  }

}
