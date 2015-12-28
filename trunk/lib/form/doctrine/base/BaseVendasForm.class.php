<?php

/**
 * Vendas form base class.
 *
 * @method Vendas getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseVendasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_venda'   => new sfWidgetFormInputHidden(),
      'data_venda'  => new sfWidgetFormDate(),
      'valor_venda' => new sfWidgetFormInputText(),
      'cod_cliente' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => false)),
      'cod_item'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Item'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'cod_venda'   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_venda')), 'empty_value' => $this->getObject()->get('cod_venda'), 'required' => false)),
      'data_venda'  => new sfValidatorDate(array('required' => false)),
      'valor_venda' => new sfValidatorNumber(array('required' => false)),
      'cod_cliente' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'))),
      'cod_item'    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Item'))),
    ));

    $this->widgetSchema->setNameFormat('vendas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendas';
  }

}
