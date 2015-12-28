<?php

/**
 * Vendas filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVendasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'data_venda'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'valor_venda' => new sfWidgetFormFilterInput(),
      'cod_cliente' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => true)),
      'cod_item'    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Item'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'data_venda'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'valor_venda' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cod_cliente' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clientes'), 'column' => 'cod_clientes')),
      'cod_item'    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Item'), 'column' => 'cod_item')),
    ));

    $this->widgetSchema->setNameFormat('vendas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Vendas';
  }

  public function getFields()
  {
    return array(
      'cod_venda'   => 'Number',
      'data_venda'  => 'Date',
      'valor_venda' => 'Number',
      'cod_cliente' => 'ForeignKey',
      'cod_item'    => 'ForeignKey',
    );
  }
}
