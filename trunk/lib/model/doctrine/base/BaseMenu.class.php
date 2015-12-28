<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Menu', 'bd');

/**
 * BaseMenu
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cod_menu
 * @property string $descricao
 * @property Doctrine_Collection $Acessos
 * 
 * @method integer             getCodMenu()   Returns the current record's "cod_menu" value
 * @method string              getDescricao() Returns the current record's "descricao" value
 * @method Doctrine_Collection getAcessos()   Returns the current record's "Acessos" collection
 * @method Menu                setCodMenu()   Sets the current record's "cod_menu" value
 * @method Menu                setDescricao() Sets the current record's "descricao" value
 * @method Menu                setAcessos()   Sets the current record's "Acessos" collection
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseMenu extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('menu');
        $this->hasColumn('cod_menu', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('descricao', 'string', 45, array(
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
        $this->hasMany('Acessos', array(
             'local' => 'cod_menu',
             'foreign' => 'cod_menu'));
    }
}