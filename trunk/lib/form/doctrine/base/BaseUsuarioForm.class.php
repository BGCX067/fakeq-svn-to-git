<?php

/**
 * Usuario form base class.
 *
 * @method Usuario getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseUsuarioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_usuario'      => new sfWidgetFormInputHidden(),
      'nome'             => new sfWidgetFormInputText(),
      'login'            => new sfWidgetFormInputText(),
      'senha'            => new sfWidgetFormInputText(),
      'cod_funcao'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Funcao'), 'add_empty' => true)),
      'data_aniversario' => new sfWidgetFormDate(),
      'ativo'            => new sfWidgetFormChoice(array('choices' => array('S' => 'S', 'N' => 'N'))),
    ));

    $this->setValidators(array(
      'cod_usuario'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_usuario')), 'empty_value' => $this->getObject()->get('cod_usuario'), 'required' => false)),
      'nome'             => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'login'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'senha'            => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_funcao'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Funcao'), 'required' => false)),
      'data_aniversario' => new sfValidatorDate(array('required' => false)),
      'ativo'            => new sfValidatorChoice(array('choices' => array(0 => 'S', 1 => 'N'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('usuario[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

}
