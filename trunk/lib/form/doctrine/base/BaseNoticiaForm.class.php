<?php

/**
 * Noticia form base class.
 *
 * @method Noticia getObject() Returns the current form's model object
 *
 * @package    tcc
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseNoticiaForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'cod_noticia'     => new sfWidgetFormInputHidden(),
      'titulo_noticia'  => new sfWidgetFormInputText(),
      'noticia'         => new sfWidgetFormInputText(),
      'data_publicacao' => new sfWidgetFormDate(),
      'endereco_imagem' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'cod_noticia'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('cod_noticia')), 'empty_value' => $this->getObject()->get('cod_noticia'), 'required' => false)),
      'titulo_noticia'  => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'noticia'         => new sfValidatorString(array('max_length' => 45, 'required' => false)),
      'data_publicacao' => new sfValidatorDate(array('required' => false)),
      'endereco_imagem' => new sfValidatorString(array('max_length' => 45, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('noticia[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Noticia';
  }

}
