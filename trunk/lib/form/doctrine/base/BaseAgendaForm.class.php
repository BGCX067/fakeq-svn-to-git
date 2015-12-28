<?php

/**
 * Agenda form base class.
 *
 * @method Agenda getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAgendaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idagenda'       => new sfWidgetFormInputHidden(),
      'nome'           => new sfWidgetFormInputText(),
      'telefone'       => new sfWidgetFormInputText(),
      'placa'          => new sfWidgetFormInputText(),
      'modelo'         => new sfWidgetFormInputText(),
      'horario_status' => new sfWidgetFormInputText(),
      'data_cadastro'  => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'idagenda'       => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idagenda')), 'empty_value' => $this->getObject()->get('idagenda'), 'required' => false)),
      'nome'           => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'telefone'       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'placa'          => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'modelo'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'horario_status' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'data_cadastro'  => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('agenda[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agenda';
  }

}
