<?php

/**
 * MaterialApoio filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMaterialApoioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo_mat_apoio'   => new sfWidgetFormFilterInput(),
      'desc_mat_apoio'     => new sfWidgetFormFilterInput(),
      'data_mat_apoio'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'endereco_mat_apoio' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titulo_mat_apoio'   => new sfValidatorPass(array('required' => false)),
      'desc_mat_apoio'     => new sfValidatorPass(array('required' => false)),
      'data_mat_apoio'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'endereco_mat_apoio' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('material_apoio_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MaterialApoio';
  }

  public function getFields()
  {
    return array(
      'cod_mat_apoio'      => 'Number',
      'titulo_mat_apoio'   => 'Text',
      'desc_mat_apoio'     => 'Text',
      'data_mat_apoio'     => 'Date',
      'endereco_mat_apoio' => 'Text',
    );
  }
}
