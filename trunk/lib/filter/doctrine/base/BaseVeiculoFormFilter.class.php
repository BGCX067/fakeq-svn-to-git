<?php

/**
 * Veiculo filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseVeiculoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'placa'       => new sfWidgetFormFilterInput(),
      'chassi'      => new sfWidgetFormFilterInput(),
      'marca'       => new sfWidgetFormFilterInput(),
      'modelo'      => new sfWidgetFormFilterInput(),
      'cor'         => new sfWidgetFormFilterInput(),
      'ano'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'placa'       => new sfValidatorPass(array('required' => false)),
      'chassi'      => new sfValidatorPass(array('required' => false)),
      'marca'       => new sfValidatorPass(array('required' => false)),
      'modelo'      => new sfValidatorPass(array('required' => false)),
      'cor'         => new sfValidatorPass(array('required' => false)),
      'ano'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('veiculo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Veiculo';
  }

  public function getFields()
  {
    return array(
      'cod_veiculo' => 'Number',
      'placa'       => 'Text',
      'chassi'      => 'Text',
      'marca'       => 'Text',
      'modelo'      => 'Text',
      'cor'         => 'Text',
      'ano'         => 'Number',
    );
  }
}
