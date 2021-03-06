<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Reparo', 'bd');

/**
 * BaseReparo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id_reparo
 * @property string $cliente
 * @property string $veiculo
 * @property string $placa
 * @property string $status
 * @property string $descricao
 * @property string $previsao
 * @property integer $cod_imagem
 * @property integer $valor_reparo_idvalor_reparo
 * @property Imagens $Imagens
 * @property ValorReparo $ValorReparo
 * 
 * @method integer     getIdReparo()                    Returns the current record's "id_reparo" value
 * @method string      getCliente()                     Returns the current record's "cliente" value
 * @method string      getVeiculo()                     Returns the current record's "veiculo" value
 * @method string      getPlaca()                       Returns the current record's "placa" value
 * @method string      getStatus()                      Returns the current record's "status" value
 * @method string      getDescricao()                   Returns the current record's "descricao" value
 * @method string      getPrevisao()                    Returns the current record's "previsao" value
 * @method integer     getCodImagem()                   Returns the current record's "cod_imagem" value
 * @method integer     getValorReparoIdvalorReparo()    Returns the current record's "valor_reparo_idvalor_reparo" value
 * @method Imagens     getImagens()                     Returns the current record's "Imagens" value
 * @method ValorReparo getValorReparo()                 Returns the current record's "ValorReparo" value
 * @method Reparo      setIdReparo()                    Sets the current record's "id_reparo" value
 * @method Reparo      setCliente()                     Sets the current record's "cliente" value
 * @method Reparo      setVeiculo()                     Sets the current record's "veiculo" value
 * @method Reparo      setPlaca()                       Sets the current record's "placa" value
 * @method Reparo      setStatus()                      Sets the current record's "status" value
 * @method Reparo      setDescricao()                   Sets the current record's "descricao" value
 * @method Reparo      setPrevisao()                    Sets the current record's "previsao" value
 * @method Reparo      setCodImagem()                   Sets the current record's "cod_imagem" value
 * @method Reparo      setValorReparoIdvalorReparo()    Sets the current record's "valor_reparo_idvalor_reparo" value
 * @method Reparo      setImagens()                     Sets the current record's "Imagens" value
 * @method Reparo      setValorReparo()                 Sets the current record's "ValorReparo" value
 * 
 * @package    tcc
 * @subpackage model
 * @author     Renato e Leo
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseReparo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('reparo');
        $this->hasColumn('id_reparo', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 4,
             ));
        $this->hasColumn('cliente', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('veiculo', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('placa', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('status', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
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
        $this->hasColumn('previsao', 'string', 45, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 45,
             ));
        $this->hasColumn('cod_imagem', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('valor_reparo_idvalor_reparo', 'integer', 4, array(
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
        $this->hasOne('Imagens', array(
             'local' => 'cod_imagem',
             'foreign' => 'idimagens'));

        $this->hasOne('ValorReparo', array(
             'local' => 'valor_reparo_idvalor_reparo',
             'foreign' => 'idvalor_reparo'));
    }
}