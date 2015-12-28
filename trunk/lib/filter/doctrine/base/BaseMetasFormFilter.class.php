<?php

/**
 * Metas filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMetasFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'ano_metas'  => new sfWidgetFormFilterInput(),
      'mes_metas'  => new sfWidgetFormFilterInput(),
      'meta_metas' => new sfWidgetFormFilterInput(),
      'cod_grupo'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'ano_metas'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'mes_metas'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'meta_metas' => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'cod_grupo'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('metas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Metas';
  }

  public function getFields()
  {
    return array(
      'idmetas'    => 'Number',
      'ano_metas'  => 'Number',
      'mes_metas'  => 'Number',
      'meta_metas' => 'Number',
      'cod_grupo'  => 'Number',
    );
  }
}
