<?php

/**
 * Acessos form base class.
 *
 * @method Acessos getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseAcessosForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_acessos' => new sfWidgetFormInputHidden(),
      'acesso'      => new sfWidgetFormInputText(),
      'cod_menu'    => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_acessos' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_acessos')), 'empty_value' => $this->getObject()->get('cod_acessos'), 'required' => false)),
      'acesso'      => new sfValidatorString(array('max_length' => 1, 'required' => false)),
      'cod_menu'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_menu')), 'empty_value' => $this->getObject()->get('cod_menu'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('acessos[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Acessos';
  }

}
