<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('GrupoAcesso', 'bd');

/**
 * BaseGrupoAcesso
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cod_acesso
 * @property integer $cod_funcao
 * @property integer $cod_grupo
 * @property Funcao $Funcao
 * @property Doctrine_Collection $Acessos
 * 
 * @method integer             getCodAcesso()  Returns the current record's "cod_acesso" value
 * @method integer             getCodFuncao()  Returns the current record's "cod_funcao" value
 * @method integer             getCodGrupo()   Returns the current record's "cod_grupo" value
 * @method Funcao              getFuncao()     Returns the current record's "Funcao" value
 * @method Doctrine_Collection getAcessos()    Returns the current record's "Acessos" collection
 * @method GrupoAcesso         setCodAcesso()  Sets the current record's "cod_acesso" value
 * @method GrupoAcesso         setCodFuncao()  Sets the current record's "cod_funcao" value
 * @method GrupoAcesso         setCodGrupo()   Sets the current record's "cod_grupo" value
 * @method GrupoAcesso         setFuncao()     Sets the current record's "Funcao" value
 * @method GrupoAcesso         setAcessos()    Sets the current record's "Acessos" collection
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseGrupoAcesso extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('grupo_acesso');
        $this->hasColumn('cod_acesso', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cod_funcao', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cod_grupo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Funcao', array(
             'local' => 'cod_funcao',
             'foreign' => 'cod_funcao'));

        $this->hasMany('Acessos', array(
             'local' => 'cod_acesso',
             'foreign' => 'cod_acessos'));
    }
}