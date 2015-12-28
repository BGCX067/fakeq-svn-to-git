<?php

/**
 * Email filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEmailFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'assunto'     => new sfWidgetFormFilterInput(),
      'descricao'   => new sfWidgetFormFilterInput(),
      'numero_os'   => new sfWidgetFormFilterInput(),
      'vod_cliente' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Clientes'), 'add_empty' => true)),
      'cod_veiculo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Veiculo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'assunto'     => new sfValidatorPass(array('required' => false)),
      'descricao'   => new sfValidatorPass(array('required' => false)),
      'numero_os'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'vod_cliente' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Clientes'), 'column' => 'cod_clientes')),
      'cod_veiculo' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Veiculo'), 'column' => 'cod_veiculo')),
    ));

    $this->widgetSchema->setNameFormat('email_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Email';
  }

  public function getFields()
  {
    return array(
      'cod_email'   => 'Number',
      'assunto'     => 'Text',
      'descricao'   => 'Text',
      'numero_os'   => 'Number',
      'vod_cliente' => 'ForeignKey',
      'cod_veiculo' => 'ForeignKey',
    );
  }
}
