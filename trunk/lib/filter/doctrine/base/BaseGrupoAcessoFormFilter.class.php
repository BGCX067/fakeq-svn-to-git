<?php

/**
 * GrupoAcesso filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseGrupoAcessoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_acesso' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acessos'), 'add_empty' => true)),
      'cod_funcao' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Funcao'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cod_acesso' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Acessos'), 'column' => 'cod_acessos')),
      'cod_funcao' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Funcao'), 'column' => 'cod_funcao')),
    ));

    $this->widgetSchema->setNameFormat('grupo_acesso_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrupoAcesso';
  }

  public function getFields()
  {
    return array(
      'cod_acesso' => 'ForeignKey',
      'cod_funcao' => 'ForeignKey',
      'cod_grupo'  => 'Number',
    );
  }
}
