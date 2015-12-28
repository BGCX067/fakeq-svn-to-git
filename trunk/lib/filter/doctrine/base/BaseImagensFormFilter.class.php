<?php

/**
 * Imagens filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseImagensFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'endereco_imagens' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'endereco_imagens' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('imagens_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Imagens';
  }

  public function getFields()
  {
    return array(
      'idimagens'        => 'Number',
      'endereco_imagens' => 'Text',
    );
  }
}
