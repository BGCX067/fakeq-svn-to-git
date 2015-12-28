<?php

/**
 * Agenda filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAgendaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'           => new sfWidgetFormFilterInput(),
      'telefone'       => new sfWidgetFormFilterInput(),
      'placa'          => new sfWidgetFormFilterInput(),
      'modelo'         => new sfWidgetFormFilterInput(),
      'horario_status' => new sfWidgetFormFilterInput(),
      'data_cadastro'  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nome'           => new sfValidatorPass(array('required' => false)),
      'telefone'       => new sfValidatorPass(array('required' => false)),
      'placa'          => new sfValidatorPass(array('required' => false)),
      'modelo'         => new sfValidatorPass(array('required' => false)),
      'horario_status' => new sfValidatorPass(array('required' => false)),
      'data_cadastro'  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('agenda_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Agenda';
  }

  public function getFields()
  {
    return array(
      'idagenda'       => 'Number',
      'nome'           => 'Text',
      'telefone'       => 'Text',
      'placa'          => 'Text',
      'modelo'         => 'Text',
      'horario_status' => 'Text',
      'data_cadastro'  => 'Date',
    );
  }
}
