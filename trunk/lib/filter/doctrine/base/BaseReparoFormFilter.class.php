<?php

/**
 * Reparo filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseReparoFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cliente'                     => new sfWidgetFormFilterInput(),
      'veiculo'                     => new sfWidgetFormFilterInput(),
      'placa'                       => new sfWidgetFormFilterInput(),
      'status'                      => new sfWidgetFormFilterInput(),
      'descricao'                   => new sfWidgetFormFilterInput(),
      'previsao'                    => new sfWidgetFormFilterInput(),
      'cod_imagem'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Imagens'), 'add_empty' => true)),
      'valor_reparo_idvalor_reparo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ValorReparo'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cliente'                     => new sfValidatorPass(array('required' => false)),
      'veiculo'                     => new sfValidatorPass(array('required' => false)),
      'placa'                       => new sfValidatorPass(array('required' => false)),
      'status'                      => new sfValidatorPass(array('required' => false)),
      'descricao'                   => new sfValidatorPass(array('required' => false)),
      'previsao'                    => new sfValidatorPass(array('required' => false)),
      'cod_imagem'                  => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Imagens'), 'column' => 'idimagens')),
      'valor_reparo_idvalor_reparo' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ValorReparo'), 'column' => 'idvalor_reparo')),
    ));

    $this->widgetSchema->setNameFormat('reparo_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reparo';
  }

  public function getFields()
  {
    return array(
      'id_reparo'                   => 'Number',
      'cliente'                     => 'Text',
      'veiculo'                     => 'Text',
      'placa'                       => 'Text',
      'status'                      => 'Text',
      'descricao'                   => 'Text',
      'previsao'                    => 'Text',
      'cod_imagem'                  => 'ForeignKey',
      'valor_reparo_idvalor_reparo' => 'ForeignKey',
    );
  }
}
