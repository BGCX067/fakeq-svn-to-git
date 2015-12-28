<?php

/**
 * Mecanico filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMecanicoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'          => new sfWidgetFormFilterInput(),
      'expediente'    => new sfWidgetFormFilterInput(),
      'status'        => new sfWidgetFormFilterInput(),
      'produtividade' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome'          => new sfValidatorPass(array('required' => false)),
      'expediente'    => new sfValidatorPass(array('required' => false)),
      'status'        => new sfValidatorPass(array('required' => false)),
      'produtividade' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('mecanico_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mecanico';
  }

  public function getFields()
  {
    return array(
      'cod_mecanico'  => 'Number',
      'nome'          => 'Text',
      'expediente'    => 'Text',
      'status'        => 'Text',
      'produtividade' => 'Number',
    );
  }
}
