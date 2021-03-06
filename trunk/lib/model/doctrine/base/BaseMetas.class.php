<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Metas', 'bd');

/**
 * BaseMetas
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $idmetas
 * @property integer $ano_metas
 * @property integer $mes_metas
 * @property float $meta_metas
 * @property integer $cod_grupo
 * 
 * @method integer getIdmetas()    Returns the current record's "idmetas" value
 * @method integer getAnoMetas()   Returns the current record's "ano_metas" value
 * @method integer getMesMetas()   Returns the current record's "mes_metas" value
 * @method float   getMetaMetas()  Returns the current record's "meta_metas" value
 * @method integer getCodGrupo()   Returns the current record's "cod_grupo" value
 * @method Metas   setIdmetas()    Sets the current record's "idmetas" value
 * @method Metas   setAnoMetas()   Sets the current record's "ano_metas" value
 * @method Metas   setMesMetas()   Sets the current record's "mes_metas" value
 * @method Metas   setMetaMetas()  Sets the current record's "meta_metas" value
 * @method Metas   setCodGrupo()   Sets the current record's "cod_grupo" value
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMetas extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('metas');
        $this->hasColumn('idmetas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('ano_metas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('mes_metas', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('meta_metas', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('cod_grupo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}