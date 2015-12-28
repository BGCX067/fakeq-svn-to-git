<?php

/**
 * Item filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseItemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'descricao'   => new sfWidgetFormFilterInput(),
      'valor_venda' => new sfWidgetFormFilterInput(),
      'valor_custo' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'descricao'   => new sfValidatorPass(array('required' => false)),
      'valor_venda' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'valor_custo' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('item_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Item';
  }

  public function getFields()
  {
    return array(
      'cod_item'    => 'Number',
      'descricao'   => 'Text',
      'valor_venda' => 'Number',
      'valor_custo' => 'Number',
    );
  }
}
