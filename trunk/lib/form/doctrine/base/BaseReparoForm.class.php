<?php

/**
 * Reparo form base class.
 *
 * @method Reparo getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseReparoForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id_reparo'                   => new sfWidgetFormInputHidden(),
      'cliente'                     => new sfWidgetFormInputText(),
      'veiculo'                     => new sfWidgetFormInputText(),
      'placa'                       => new sfWidgetFormInputText(),
      'status'                      => new sfWidgetFormInputText(),
      'descricao'                   => new sfWidgetFormInputText(),
      'previsao'                    => new sfWidgetFormInputText(),
      'cod_imagem'                  => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Imagens'), 'add_empty' => false)),
      'valor_reparo_idvalor_reparo' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ValorReparo'), 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id_reparo'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id_reparo')), 'empty_value' => $this->getObject()->get('id_reparo'), 'required' => false)),
      'cliente'                     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'veiculo'                     => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'placa'                       => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'status'                      => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'descricao'                   => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'previsao'                    => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'cod_imagem'                  => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Imagens'))),
      'valor_reparo_idvalor_reparo' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ValorReparo'))),
    ));

    $this->widgetSchema->setNameFormat('reparo[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Reparo';
  }

}
