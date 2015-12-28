<?php

/**
 * Funcao filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFuncaoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome_funcao' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome_funcao' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('funcao_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Funcao';
  }

  public function getFields()
  {
    return array(
      'cod_funcao'  => 'Number',
      'nome_funcao' => 'Text',
    );
  }
}
