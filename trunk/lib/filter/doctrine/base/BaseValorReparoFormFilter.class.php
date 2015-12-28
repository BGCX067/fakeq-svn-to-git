<?php

/**
 * ValorReparo filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseValorReparoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'valor'          => new sfWidgetFormFilterInput(),
      'pecas_veiculo'  => new sfWidgetFormFilterInput(),
      'modelo'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'valor'          => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'pecas_veiculo'  => new sfValidatorPass(array('required' => false)),
      'modelo'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('valor_reparo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ValorReparo';
  }

  public function getFields()
  {
    return array(
      'idvalor_reparo' => 'Number',
      'valor'          => 'Number',
      'pecas_veiculo'  => 'Text',
      'modelo'         => 'Text',
    );
  }
}
