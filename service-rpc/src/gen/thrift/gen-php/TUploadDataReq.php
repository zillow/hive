<?php
/**
 * Autogenerated by Thrift Compiler (0.14.1)
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

class TUploadDataReq
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'sessionHandle',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\TSessionHandle',
        ),
        2 => array(
            'var' => 'tableName',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        3 => array(
            'var' => 'path',
            'isRequired' => false,
            'type' => TType::STRING,
        ),
        4 => array(
            'var' => 'values',
            'isRequired' => true,
            'type' => TType::STRING,
        ),
    );

    /**
     * @var \TSessionHandle
     */
    public $sessionHandle = null;
    /**
     * @var string
     */
    public $tableName = null;
    /**
     * @var string
     */
    public $path = null;
    /**
     * @var string
     */
    public $values = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['sessionHandle'])) {
                $this->sessionHandle = $vals['sessionHandle'];
            }
            if (isset($vals['tableName'])) {
                $this->tableName = $vals['tableName'];
            }
            if (isset($vals['path'])) {
                $this->path = $vals['path'];
            }
            if (isset($vals['values'])) {
                $this->values = $vals['values'];
            }
        }
    }

    public function getName()
    {
        return 'TUploadDataReq';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->sessionHandle = new \TSessionHandle();
                        $xfer += $this->sessionHandle->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->tableName);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->path);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRING) {
                        $xfer += $input->readString($this->values);
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

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('TUploadDataReq');
        if ($this->sessionHandle !== null) {
            if (!is_object($this->sessionHandle)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('sessionHandle', TType::STRUCT, 1);
            $xfer += $this->sessionHandle->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->tableName !== null) {
            $xfer += $output->writeFieldBegin('tableName', TType::STRING, 2);
            $xfer += $output->writeString($this->tableName);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->path !== null) {
            $xfer += $output->writeFieldBegin('path', TType::STRING, 3);
            $xfer += $output->writeString($this->path);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->values !== null) {
            $xfer += $output->writeFieldBegin('values', TType::STRING, 4);
            $xfer += $output->writeString($this->values);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
