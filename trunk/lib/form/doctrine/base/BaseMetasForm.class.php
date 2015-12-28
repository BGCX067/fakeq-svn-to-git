<?php

/**
 * Metas form base class.
 *
 * @method Metas getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMetasForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'idmetas'    => new sfWidgetFormInputHidden(),
      'ano_metas'  => new sfWidgetFormInputText(),
      'mes_metas'  => new sfWidgetFormInputText(),
      'meta_metas' => new sfWidgetFormInputText(),
      'cod_grupo'  => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'idmetas'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('idmetas')), 'empty_value' => $this->getObject()->get('idmetas'), 'required' => false)),
      'ano_metas'  => new sfValidatorInteger(array('required' => false)),
      'mes_metas'  => new sfValidatorInteger(array('required' => false)),
      'meta_metas' => new sfValidatorNumber(array('required' => false)),
      'cod_grupo'  => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('metas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Metas';
  }

}
