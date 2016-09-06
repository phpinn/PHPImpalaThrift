<?php
namespace beeswax;

/**
 * Autogenerated by Thrift Compiler (0.9.3)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;


final class QueryState {
  const CREATED = 0;
  const INITIALIZED = 1;
  const COMPILED = 2;
  const RUNNING = 3;
  const FINISHED = 4;
  const EXCEPTION = 5;
  static public $__names = array(
    0 => 'CREATED',
    1 => 'INITIALIZED',
    2 => 'COMPILED',
    3 => 'RUNNING',
    4 => 'FINISHED',
    5 => 'EXCEPTION',
  );
}

class Query {
  static $_TSPEC;

  /**
   * @var string
   */
  public $query = null;
  /**
   * @var string[]
   */
  public $configuration = null;
  /**
   * @var string
   */
  public $hadoop_user = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'query',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'configuration',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        4 => array(
          'var' => 'hadoop_user',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['query'])) {
        $this->query = $vals['query'];
      }
      if (isset($vals['configuration'])) {
        $this->configuration = $vals['configuration'];
      }
      if (isset($vals['hadoop_user'])) {
        $this->hadoop_user = $vals['hadoop_user'];
      }
    }
  }

  public function getName() {
    return 'Query';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->query);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::LST) {
            $this->configuration = array();
            $_size0 = 0;
            $_etype3 = 0;
            $xfer += $input->readListBegin($_etype3, $_size0);
            for ($_i4 = 0; $_i4 < $_size0; ++$_i4)
            {
              $elem5 = null;
              $xfer += $input->readString($elem5);
              $this->configuration []= $elem5;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->hadoop_user);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Query');
    if ($this->query !== null) {
      $xfer += $output->writeFieldBegin('query', TType::STRING, 1);
      $xfer += $output->writeString($this->query);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->configuration !== null) {
      if (!is_array($this->configuration)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('configuration', TType::LST, 3);
      {
        $output->writeListBegin(TType::STRING, count($this->configuration));
        {
          foreach ($this->configuration as $iter6)
          {
            $xfer += $output->writeString($iter6);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->hadoop_user !== null) {
      $xfer += $output->writeFieldBegin('hadoop_user', TType::STRING, 4);
      $xfer += $output->writeString($this->hadoop_user);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class QueryHandle {
  static $_TSPEC;

  /**
   * @var string
   */
  public $id = null;
  /**
   * @var string
   */
  public $log_context = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'id',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'log_context',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['id'])) {
        $this->id = $vals['id'];
      }
      if (isset($vals['log_context'])) {
        $this->log_context = $vals['log_context'];
      }
    }
  }

  public function getName() {
    return 'QueryHandle';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->id);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->log_context);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('QueryHandle');
    if ($this->id !== null) {
      $xfer += $output->writeFieldBegin('id', TType::STRING, 1);
      $xfer += $output->writeString($this->id);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->log_context !== null) {
      $xfer += $output->writeFieldBegin('log_context', TType::STRING, 2);
      $xfer += $output->writeString($this->log_context);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class QueryExplanation {
  static $_TSPEC;

  /**
   * @var string
   */
  public $textual = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'textual',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['textual'])) {
        $this->textual = $vals['textual'];
      }
    }
  }

  public function getName() {
    return 'QueryExplanation';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->textual);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('QueryExplanation');
    if ($this->textual !== null) {
      $xfer += $output->writeFieldBegin('textual', TType::STRING, 1);
      $xfer += $output->writeString($this->textual);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class Results {
  static $_TSPEC;

  /**
   * @var bool
   */
  public $ready = null;
  /**
   * @var string[]
   */
  public $columns = null;
  /**
   * @var string[]
   */
  public $data = null;
  /**
   * @var int
   */
  public $start_row = null;
  /**
   * @var bool
   */
  public $has_more = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'ready',
          'type' => TType::BOOL,
          ),
        2 => array(
          'var' => 'columns',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        3 => array(
          'var' => 'data',
          'type' => TType::LST,
          'etype' => TType::STRING,
          'elem' => array(
            'type' => TType::STRING,
            ),
          ),
        4 => array(
          'var' => 'start_row',
          'type' => TType::I64,
          ),
        5 => array(
          'var' => 'has_more',
          'type' => TType::BOOL,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['ready'])) {
        $this->ready = $vals['ready'];
      }
      if (isset($vals['columns'])) {
        $this->columns = $vals['columns'];
      }
      if (isset($vals['data'])) {
        $this->data = $vals['data'];
      }
      if (isset($vals['start_row'])) {
        $this->start_row = $vals['start_row'];
      }
      if (isset($vals['has_more'])) {
        $this->has_more = $vals['has_more'];
      }
    }
  }

  public function getName() {
    return 'Results';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->ready);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::LST) {
            $this->columns = array();
            $_size7 = 0;
            $_etype10 = 0;
            $xfer += $input->readListBegin($_etype10, $_size7);
            for ($_i11 = 0; $_i11 < $_size7; ++$_i11)
            {
              $elem12 = null;
              $xfer += $input->readString($elem12);
              $this->columns []= $elem12;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::LST) {
            $this->data = array();
            $_size13 = 0;
            $_etype16 = 0;
            $xfer += $input->readListBegin($_etype16, $_size13);
            for ($_i17 = 0; $_i17 < $_size13; ++$_i17)
            {
              $elem18 = null;
              $xfer += $input->readString($elem18);
              $this->data []= $elem18;
            }
            $xfer += $input->readListEnd();
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I64) {
            $xfer += $input->readI64($this->start_row);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::BOOL) {
            $xfer += $input->readBool($this->has_more);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('Results');
    if ($this->ready !== null) {
      $xfer += $output->writeFieldBegin('ready', TType::BOOL, 1);
      $xfer += $output->writeBool($this->ready);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->columns !== null) {
      if (!is_array($this->columns)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('columns', TType::LST, 2);
      {
        $output->writeListBegin(TType::STRING, count($this->columns));
        {
          foreach ($this->columns as $iter19)
          {
            $xfer += $output->writeString($iter19);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->data !== null) {
      if (!is_array($this->data)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('data', TType::LST, 3);
      {
        $output->writeListBegin(TType::STRING, count($this->data));
        {
          foreach ($this->data as $iter20)
          {
            $xfer += $output->writeString($iter20);
          }
        }
        $output->writeListEnd();
      }
      $xfer += $output->writeFieldEnd();
    }
    if ($this->start_row !== null) {
      $xfer += $output->writeFieldBegin('start_row', TType::I64, 4);
      $xfer += $output->writeI64($this->start_row);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->has_more !== null) {
      $xfer += $output->writeFieldBegin('has_more', TType::BOOL, 5);
      $xfer += $output->writeBool($this->has_more);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * Metadata information about the results.
 * Applicable only for SELECT.
 */
class ResultsMetadata {
  static $_TSPEC;

  /**
   * The schema of the results
   * 
   * @var \impala\hive_metastore\Schema
   */
  public $schema = null;
  /**
   * The directory containing the results. Not applicable for partition table.
   * 
   * @var string
   */
  public $table_dir = null;
  /**
   * If the results are straight from an existing table, the table name.
   * 
   * @var string
   */
  public $in_tablename = null;
  /**
   * Field delimiter
   * 
   * @var string
   */
  public $delim = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'schema',
          'type' => TType::STRUCT,
          'class' => '\impala\hive_metastore\Schema',
          ),
        2 => array(
          'var' => 'table_dir',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'in_tablename',
          'type' => TType::STRING,
          ),
        4 => array(
          'var' => 'delim',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['schema'])) {
        $this->schema = $vals['schema'];
      }
      if (isset($vals['table_dir'])) {
        $this->table_dir = $vals['table_dir'];
      }
      if (isset($vals['in_tablename'])) {
        $this->in_tablename = $vals['in_tablename'];
      }
      if (isset($vals['delim'])) {
        $this->delim = $vals['delim'];
      }
    }
  }

  public function getName() {
    return 'ResultsMetadata';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRUCT) {
            $this->schema = new \impala\hive_metastore\Schema();
            $xfer += $this->schema->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->table_dir);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->in_tablename);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->delim);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ResultsMetadata');
    if ($this->schema !== null) {
      if (!is_object($this->schema)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('schema', TType::STRUCT, 1);
      $xfer += $this->schema->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->table_dir !== null) {
      $xfer += $output->writeFieldBegin('table_dir', TType::STRING, 2);
      $xfer += $output->writeString($this->table_dir);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->in_tablename !== null) {
      $xfer += $output->writeFieldBegin('in_tablename', TType::STRING, 3);
      $xfer += $output->writeString($this->in_tablename);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->delim !== null) {
      $xfer += $output->writeFieldBegin('delim', TType::STRING, 4);
      $xfer += $output->writeString($this->delim);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class BeeswaxException extends TException {
  static $_TSPEC;

  /**
   * @var string
   */
  public $message = null;
  /**
   * @var string
   */
  public $log_context = null;
  /**
   * @var \beeswax\QueryHandle
   */
  public $handle = null;
  /**
   * @var int
   */
  public $errorCode = 0;
  /**
   * @var string
   */
  public $SQLState = "     ";

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'message',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'log_context',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'handle',
          'type' => TType::STRUCT,
          'class' => '\beeswax\QueryHandle',
          ),
        4 => array(
          'var' => 'errorCode',
          'type' => TType::I32,
          ),
        5 => array(
          'var' => 'SQLState',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['message'])) {
        $this->message = $vals['message'];
      }
      if (isset($vals['log_context'])) {
        $this->log_context = $vals['log_context'];
      }
      if (isset($vals['handle'])) {
        $this->handle = $vals['handle'];
      }
      if (isset($vals['errorCode'])) {
        $this->errorCode = $vals['errorCode'];
      }
      if (isset($vals['SQLState'])) {
        $this->SQLState = $vals['SQLState'];
      }
    }
  }

  public function getName() {
    return 'BeeswaxException';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->message);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->log_context);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRUCT) {
            $this->handle = new \beeswax\QueryHandle();
            $xfer += $this->handle->read($input);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 4:
          if ($ftype == TType::I32) {
            $xfer += $input->readI32($this->errorCode);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 5:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->SQLState);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('BeeswaxException');
    if ($this->message !== null) {
      $xfer += $output->writeFieldBegin('message', TType::STRING, 1);
      $xfer += $output->writeString($this->message);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->log_context !== null) {
      $xfer += $output->writeFieldBegin('log_context', TType::STRING, 2);
      $xfer += $output->writeString($this->log_context);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->handle !== null) {
      if (!is_object($this->handle)) {
        throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
      }
      $xfer += $output->writeFieldBegin('handle', TType::STRUCT, 3);
      $xfer += $this->handle->write($output);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->errorCode !== null) {
      $xfer += $output->writeFieldBegin('errorCode', TType::I32, 4);
      $xfer += $output->writeI32($this->errorCode);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->SQLState !== null) {
      $xfer += $output->writeFieldBegin('SQLState', TType::STRING, 5);
      $xfer += $output->writeString($this->SQLState);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

class QueryNotFoundException extends TException {
  static $_TSPEC;


  public function __construct() {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        );
    }
  }

  public function getName() {
    return 'QueryNotFoundException';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('QueryNotFoundException');
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}

/**
 * Represents a Hadoop-style configuration variable.
 */
class ConfigVariable {
  static $_TSPEC;

  /**
   * @var string
   */
  public $key = null;
  /**
   * @var string
   */
  public $value = null;
  /**
   * @var string
   */
  public $description = null;

  public function __construct($vals=null) {
    if (!isset(self::$_TSPEC)) {
      self::$_TSPEC = array(
        1 => array(
          'var' => 'key',
          'type' => TType::STRING,
          ),
        2 => array(
          'var' => 'value',
          'type' => TType::STRING,
          ),
        3 => array(
          'var' => 'description',
          'type' => TType::STRING,
          ),
        );
    }
    if (is_array($vals)) {
      if (isset($vals['key'])) {
        $this->key = $vals['key'];
      }
      if (isset($vals['value'])) {
        $this->value = $vals['value'];
      }
      if (isset($vals['description'])) {
        $this->description = $vals['description'];
      }
    }
  }

  public function getName() {
    return 'ConfigVariable';
  }

  public function read($input)
  {
    $xfer = 0;
    $fname = null;
    $ftype = 0;
    $fid = 0;
    $xfer += $input->readStructBegin($fname);
    while (true)
    {
      $xfer += $input->readFieldBegin($fname, $ftype, $fid);
      if ($ftype == TType::STOP) {
        break;
      }
      switch ($fid)
      {
        case 1:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->key);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 2:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->value);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        case 3:
          if ($ftype == TType::STRING) {
            $xfer += $input->readString($this->description);
          } else {
            $xfer += $input->skip($ftype);
          }
          break;
        default:
          $xfer += $input->skip($ftype);
          break;
      }
      $xfer += $input->readFieldEnd();
    }
    $xfer += $input->readStructEnd();
    return $xfer;
  }

  public function write($output) {
    $xfer = 0;
    $xfer += $output->writeStructBegin('ConfigVariable');
    if ($this->key !== null) {
      $xfer += $output->writeFieldBegin('key', TType::STRING, 1);
      $xfer += $output->writeString($this->key);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->value !== null) {
      $xfer += $output->writeFieldBegin('value', TType::STRING, 2);
      $xfer += $output->writeString($this->value);
      $xfer += $output->writeFieldEnd();
    }
    if ($this->description !== null) {
      $xfer += $output->writeFieldBegin('description', TType::STRING, 3);
      $xfer += $output->writeString($this->description);
      $xfer += $output->writeFieldEnd();
    }
    $xfer += $output->writeFieldStop();
    $xfer += $output->writeStructEnd();
    return $xfer;
  }

}


