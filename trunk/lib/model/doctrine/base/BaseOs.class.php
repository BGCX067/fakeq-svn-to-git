<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Os', 'erp');

/**
 * BaseOs
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $numero_os
 * @property date $data_abertura
 * @property date $data_fechamento
 * @property date $prometida
 * @property string $status
 * @property string $tipo_os
 * @property integer $cod_veiculo
 * @property integer $cod_cliente
 * @property Clientes $Clientes
 * @property Veiculo $Veiculo
 * @property Doctrine_Collection $OsServicos
 * 
 * @method integer             getNumeroOs()        Returns the current record's "numero_os" value
 * @method date                getDataAbertura()    Returns the current record's "data_abertura" value
 * @method date                getDataFechamento()  Returns the current record's "data_fechamento" value
 * @method date                getPrometida()       Returns the current record's "prometida" value
 * @method string              getStatus()          Returns the current record's "status" value
 * @method string              getTipoOs()          Returns the current record's "tipo_os" value
 * @method integer             getCodVeiculo()      Returns the current record's "cod_veiculo" value
 * @method integer             getCodCliente()      Returns the current record's "cod_cliente" value
 * @method Clientes            getClientes()        Returns the current record's "Clientes" value
 * @method Veiculo             getVeiculo()         Returns the current record's "Veiculo" value
 * @method Doctrine_Collection getOsServicos()      Returns the current record's "OsServicos" collection
 * @method Os                  setNumeroOs()        Sets the current record's "numero_os" value
 * @method Os                  setDataAbertura()    Sets the current record's "data_abertura" value
 * @method Os                  setDataFechamento()  Sets the current record's "data_fechamento" value
 * @method Os                  setPrometida()       Sets the current record's "prometida" value
 * @method Os                  setStatus()          Sets the current record's "status" value
 * @method Os                  setTipoOs()          Sets the current record's "tipo_os" value
 * @method Os                  setCodVeiculo()      Sets the current record's "cod_veiculo" value
 * @method Os                  setCodCliente()      Sets the current record's "cod_cliente" value
 * @method Os                  setClientes()        Sets the current record's "Clientes" value
 * @method Os                  setVeiculo()         Sets the current record's "Veiculo" value
 * @method Os                  setOsServicos()      Sets the current record's "OsServicos" collection
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseOs extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('os');
        $this->hasColumn('numero_os', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('data_abertura', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('data_fechamento', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('prometida', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('status', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('tipo_os', 'string', 1, array(
             'type' => 'string',
             'fixed' => 1,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 1,
             ));
        $this->hasColumn('cod_veiculo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('cod_cliente', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Clientes', array(
             'local' => 'cod_cliente',
             'foreign' => 'cod_clientes'));

        $this->hasOne('Veiculo', array(
             'local' => 'cod_veiculo',
             'foreign' => 'cod_veiculo'));

        $this->hasMany('OsServicos', array(
             'local' => 'numero_os',
             'foreign' => 'numero_os'));
    }
}