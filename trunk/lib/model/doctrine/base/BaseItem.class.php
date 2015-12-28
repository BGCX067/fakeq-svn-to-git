<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Item', 'erp');

/**
 * BaseItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $cod_item
 * @property string $descricao
 * @property float $valor_venda
 * @property float $valor_custo
 * @property Doctrine_Collection $Vendas
 * 
 * @method integer             getCodItem()     Returns the current record's "cod_item" value
 * @method string              getDescricao()   Returns the current record's "descricao" value
 * @method float               getValorVenda()  Returns the current record's "valor_venda" value
 * @method float               getValorCusto()  Returns the current record's "valor_custo" value
 * @method Doctrine_Collection getVendas()      Returns the current record's "Vendas" collection
 * @method Item                setCodItem()     Sets the current record's "cod_item" value
 * @method Item                setDescricao()   Sets the current record's "descricao" value
 * @method Item                setValorVenda()  Sets the current record's "valor_venda" value
 * @method Item                setValorCusto()  Sets the current record's "valor_custo" value
 * @method Item                setVendas()      Sets the current record's "Vendas" collection
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('item');
        $this->hasColumn('cod_item', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
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
        $this->hasColumn('valor_venda', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
        $this->hasColumn('valor_custo', 'float', 18, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 18,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Vendas', array(
             'local' => 'cod_item',
             'foreign' => 'cod_item'));
    }
}