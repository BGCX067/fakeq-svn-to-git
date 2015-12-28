<?php

/**
 * Mensagem filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMensagemFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_conversa'      => new sfWidgetFormFilterInput(),
      'conversa'          => new sfWidgetFormFilterInput(),
      'data_cadastro'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'detalhe_orcamento' => new sfWidgetFormFilterInput(),
      'cod_usuario'       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cod_imagem'        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Imagens'), 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'cod_conversa'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'conversa'          => new sfValidatorPass(array('required' => false)),
      'data_cadastro'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'detalhe_orcamento' => new sfValidatorPass(array('required' => false)),
      'cod_usuario'       => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'cod_imagem'        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Imagens'), 'column' => 'idimagens')),
    ));

    $this->widgetSchema->setNameFormat('mensagem_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Mensagem';
  }

  public function getFields()
  {
    return array(
      'idmensagem'        => 'Number',
      'cod_conversa'      => 'Number',
      'conversa'          => 'Text',
      'data_cadastro'     => 'Date',
      'detalhe_orcamento' => 'Text',
      'cod_usuario'       => 'Number',
      'cod_imagem'        => 'ForeignKey',
    );
  }
}
