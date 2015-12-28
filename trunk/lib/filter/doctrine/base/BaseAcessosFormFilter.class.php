<?php

/**
 * Acessos filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseAcessosFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'acesso'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'acesso'      => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('acessos_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Acessos';
  }

  public function getFields()
  {
    return array(
      'cod_acessos' => 'Number',
      'acesso'      => 'Text',
      'cod_menu'    => 'Number',
    );
  }
}
