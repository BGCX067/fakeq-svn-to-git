<?php

/**
 * Funcao form base class.
 *
 * @method Funcao getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFuncaoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_funcao'  => new sfWidgetFormInputHidden(),
      'nome_funcao' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_funcao'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_funcao')), 'empty_value' => $this->getObject()->get('cod_funcao'), 'required' => false)),
      'nome_funcao' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('funcao[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcao';
  }

}
