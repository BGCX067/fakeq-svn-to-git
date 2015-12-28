<?php

/**
 * GrupoAcesso form base class.
 *
 * @method GrupoAcesso getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseGrupoAcessoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_acesso' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Acessos'), 'add_empty' => false)),
      'cod_funcao' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Funcao'), 'add_empty' => false)),
      'cod_grupo'  => new sfWidgetFormInputHidden(),
    ));

    $this->setValidators(array(
      'cod_acesso' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Acessos'))),
      'cod_funcao' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Funcao'))),
      'cod_grupo'  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_grupo')), 'empty_value' => $this->getObject()->get('cod_grupo'), 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('grupo_acesso[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'GrupoAcesso';
  }

}
