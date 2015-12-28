<?php

/**
 * Usuario filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseUsuarioFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'             => new sfWidgetFormFilterInput(),
      'login'            => new sfWidgetFormFilterInput(),
      'senha'            => new sfWidgetFormFilterInput(),
      'cod_funcao'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Funcao'), 'add_empty' => true)),
      'data_aniversario' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'ativo'            => new sfWidgetFormChoice(array('choices' => array('' => '', 'S' => 'S', 'N' => 'N'))),
    ));

    $this->setValidators(array(
      'nome'             => new sfValidatorPass(array('required' => false)),
      'login'            => new sfValidatorPass(array('required' => false)),
      'senha'            => new sfValidatorPass(array('required' => false)),
      'cod_funcao'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Funcao'), 'column' => 'cod_funcao')),
      'data_aniversario' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'ativo'            => new sfValidatorChoice(array('required' => false, 'choices' => array('S' => 'S', 'N' => 'N'))),
    ));

    $this->widgetSchema->setNameFormat('usuario_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Usuario';
  }

  public function getFields()
  {
    return array(
      'cod_usuario'      => 'Number',
      'nome'             => 'Text',
      'login'            => 'Text',
      'senha'            => 'Text',
      'cod_funcao'       => 'ForeignKey',
      'data_aniversario' => 'Date',
      'ativo'            => 'Enum',
    );
  }
}
