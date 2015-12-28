<?php

/**
 * Item form base class.
 *
 * @method Item getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseItemForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_item'    => new sfWidgetFormInputHidden(),
      'descricao'   => new sfWidgetFormInputText(),
      'valor_venda' => new sfWidgetFormInputText(),
      'valor_custo' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_item'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_item')), 'empty_value' => $this->getObject()->get('cod_item'), 'required' => false)),
      'descricao'   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'valor_venda' => new sfValidatorNumber(array('required' => false)),
      'valor_custo' => new sfValidatorNumber(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('item[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

}
