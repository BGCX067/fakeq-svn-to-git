<?php

/**
 * Clientes filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseClientesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'nome'         => new sfWidgetFormFilterInput(),
      'rg'           => new sfWidgetFormFilterInput(),
      'cpf'          => new sfWidgetFormFilterInput(),
      'email'        => new sfWidgetFormFilterInput(),
      'status'       => new sfWidgetFormFilterInput(),
      'estado'       => new sfWidgetFormFilterInput(),
      'cidade'       => new sfWidgetFormFilterInput(),
      'rua'          => new sfWidgetFormFilterInput(),
      'numero'       => new sfWidgetFormFilterInput(),
      'bairro'       => new sfWidgetFormFilterInput(),
      'cep'          => new sfWidgetFormFilterInput(),
      'complemento'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nome'         => new sfValidatorPass(array('required' => false)),
      'rg'           => new sfValidatorPass(array('required' => false)),
      'cpf'          => new sfValidatorPass(array('required' => false)),
      'email'        => new sfValidatorPass(array('required' => false)),
      'status'       => new sfValidatorPass(array('required' => false)),
      'estado'       => new sfValidatorPass(array('required' => false)),
      'cidade'       => new sfValidatorPass(array('required' => false)),
      'rua'          => new sfValidatorPass(array('required' => false)),
      'numero'       => new sfValidatorPass(array('required' => false)),
      'bairro'       => new sfValidatorPass(array('required' => false)),
      'cep'          => new sfValidatorPass(array('required' => false)),
      'complemento'  => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('clientes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Clientes';
  }

  public function getFields()
  {
    return array(
      'cod_clientes' => 'Number',
      'nome'         => 'Text',
      'rg'           => 'Text',
      'cpf'          => 'Text',
      'email'        => 'Text',
      'status'       => 'Text',
      'estado'       => 'Text',
      'cidade'       => 'Text',
      'rua'          => 'Text',
      'numero'       => 'Text',
      'bairro'       => 'Text',
      'cep'          => 'Text',
      'complemento'  => 'Text',
    );
  }
}
