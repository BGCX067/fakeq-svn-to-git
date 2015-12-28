<?php

/**
 * MaterialApoio form base class.
 *
 * @method MaterialApoio getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMaterialApoioForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_mat_apoio'      => new sfWidgetFormInputHidden(),
      'titulo_mat_apoio'   => new sfWidgetFormInputText(),
      'desc_mat_apoio'     => new sfWidgetFormInputText(),
      'data_mat_apoio'     => new sfWidgetFormDate(),
      'endereco_mat_apoio' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_mat_apoio'      => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_mat_apoio')), 'empty_value' => $this->getObject()->get('cod_mat_apoio'), 'required' => false)),
      'titulo_mat_apoio'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'desc_mat_apoio'     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'data_mat_apoio'     => new sfValidatorDate(array('required' => false)),
      'endereco_mat_apoio' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('material_apoio[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MaterialApoio';
  }

}
