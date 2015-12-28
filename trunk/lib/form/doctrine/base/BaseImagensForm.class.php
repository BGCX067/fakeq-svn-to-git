<?php

/**
 * Imagens form base class.
 *
 * @method Imagens getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseImagensForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idimagens'        => new sfWidgetFormInputHidden(),
      'endereco_imagens' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idimagens'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idimagens')), 'empty_value' => $this->getObject()->get('idimagens'), 'required' => false)),
      'endereco_imagens' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('imagens[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Imagens';
  }

}
