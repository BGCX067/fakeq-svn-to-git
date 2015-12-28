<?php

/**
 * Os filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'data_abertura'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'data_fechamento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'prometida'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'status'          => new sfWidgetFormFilterInput(),
      'tipo_os'         => new sfWidgetFormFilterInput(),
      'cod_veiculo'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Veiculo'), 'add_empty' => true)),
      'cod_cliente'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'data_abertura'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'data_fechamento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'prometida'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'status'          => new sfValidatorPass(array('required' => false)),
      'tipo_os'         => new sfValidatorPass(array('required' => false)),
      'cod_veiculo'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Veiculo'), 'column' => 'cod_veiculo')),
      'cod_cliente'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clientes'), 'column' => 'cod_clientes')),
    ));

    $this->widgetSchema->setNameFormat('os_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Os';
  }

  public function getFields()
  {
    return array(
      'numero_os'       => 'Number',
      'data_abertura'   => 'Date',
      'data_fechamento' => 'Date',
      'prometida'       => 'Date',
      'status'          => 'Text',
      'tipo_os'         => 'Text',
      'cod_veiculo'     => 'ForeignKey',
      'cod_cliente'     => 'ForeignKey',
    );
  }
}
