<?php

/**
 * OsServicos filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOsServicosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'valor'            => new sfWidgetFormFilterInput(),
      'status'           => new sfWidgetFormFilterInput(),
      'servico'          => new sfWidgetFormFilterInput(),
      'tempo_padrao'     => new sfWidgetFormFilterInput(),
      'tempo_pago'       => new sfWidgetFormFilterInput(),
      'tempo_trabalhado' => new sfWidgetFormFilterInput(),
      'cod_mecanico'     => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Mecanico'), 'add_empty' => true)),
      'numero_os'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Os'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'valor'            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'status'           => new sfValidatorPass(array('required' => false)),
      'servico'          => new sfValidatorPass(array('required' => false)),
      'tempo_padrao'     => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tempo_pago'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tempo_trabalhado' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cod_mecanico'     => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Mecanico'), 'column' => 'cod_mecanico')),
      'numero_os'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Os'), 'column' => 'numero_os')),
    ));

    $this->widgetSchema->setNameFormat('os_servicos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OsServicos';
  }

  public function getFields()
  {
    return array(
      'cod_servico'      => 'Number',
      'valor'            => 'Number',
      'status'           => 'Text',
      'servico'          => 'Text',
      'tempo_padrao'     => 'Number',
      'tempo_pago'       => 'Number',
      'tempo_trabalhado' => 'Number',
      'cod_mecanico'     => 'ForeignKey',
      'numero_os'        => 'ForeignKey',
    );
  }
}
