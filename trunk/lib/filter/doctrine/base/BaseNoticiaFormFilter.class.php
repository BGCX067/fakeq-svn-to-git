<?php

/**
 * Noticia filter form base class.
 *
 * @package    tcc
 * @subpackage filter
 * @author     Renato e Leo
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseNoticiaFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo_noticia'  => new sfWidgetFormFilterInput(),
      'noticia'         => new sfWidgetFormFilterInput(),
      'data_publicacao' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'endereco_imagem' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titulo_noticia'  => new sfValidatorPass(array('required' => false)),
      'noticia'         => new sfValidatorPass(array('required' => false)),
      'data_publicacao' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'endereco_imagem' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('noticia_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Noticia';
  }

  public function getFields()
  {
    return array(
      'cod_noticia'     => 'Number',
      'titulo_noticia'  => 'Text',
      'noticia'         => 'Text',
      'data_publicacao' => 'Date',
      'endereco_imagem' => 'Text',
    );
  }
}
