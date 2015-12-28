<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('MaterialApoio', 'bd');

/**
 * BaseMaterialApoio
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cod_mat_apoio
 * @property string $titulo_mat_apoio
 * @property string $desc_mat_apoio
 * @property date $data_mat_apoio
 * @property string $endereco_mat_apoio
 * 
 * @method integer       getCodMatApoio()        Returns the current record's "cod_mat_apoio" value
 * @method string        getTituloMatApoio()     Returns the current record's "titulo_mat_apoio" value
 * @method string        getDescMatApoio()       Returns the current record's "desc_mat_apoio" value
 * @method date          getDataMatApoio()       Returns the current record's "data_mat_apoio" value
 * @method string        getEnderecoMatApoio()   Returns the current record's "endereco_mat_apoio" value
 * @method MaterialApoio setCodMatApoio()        Sets the current record's "cod_mat_apoio" value
 * @method MaterialApoio setTituloMatApoio()     Sets the current record's "titulo_mat_apoio" value
 * @method MaterialApoio setDescMatApoio()       Sets the current record's "desc_mat_apoio" value
 * @method MaterialApoio setDataMatApoio()       Sets the current record's "data_mat_apoio" value
 * @method MaterialApoio setEnderecoMatApoio()   Sets the current record's "endereco_mat_apoio" value
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMaterialApoio extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('material_apoio');
        $this->hasColumn('cod_mat_apoio', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('titulo_mat_apoio', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('desc_mat_apoio', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('data_mat_apoio', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('endereco_mat_apoio', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}