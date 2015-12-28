<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Acessos', 'bd');

/**
 * BaseAcessos
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cod_acessos
 * @property string $acesso
 * @property integer $cod_menu
 * @property GrupoAcesso $GrupoAcesso
 * @property Menu $Menu
 * 
 * @method integer     getCodAcessos()  Returns the current record's "cod_acessos" value
 * @method string      getAcesso()      Returns the current record's "acesso" value
 * @method integer     getCodMenu()     Returns the current record's "cod_menu" value
 * @method GrupoAcesso getGrupoAcesso() Returns the current record's "GrupoAcesso" value
 * @method Menu        getMenu()        Returns the current record's "Menu" value
 * @method Acessos     setCodAcessos()  Sets the current record's "cod_acessos" value
 * @method Acessos     setAcesso()      Sets the current record's "acesso" value
 * @method Acessos     setCodMenu()     Sets the current record's "cod_menu" value
 * @method Acessos     setGrupoAcesso() Sets the current record's "GrupoAcesso" value
 * @method Acessos     setMenu()        Sets the current record's "Menu" value
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAcessos extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('acessos');
        $this->hasColumn('cod_acessos', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('acesso', 'string', 1, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cod_menu', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('GrupoAcesso', array(
             'local' => 'cod_acessos',
             'foreign' => 'cod_acesso'));

        $this->hasOne('Menu', array(
             'local' => 'cod_menu',
             'foreign' => 'cod_menu'));
    }
}