<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto3/albia.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>DeviceRecord</code>
 */
class DeviceRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * <code>uint32 deviceId = 1;</code>
     */
    private $deviceId = 0;
    /**
     * <code>string key = 2;</code>
     */
    private $key = '';
    /**
     * <code>.DeviceRecord.RecordType type = 3;</code>
     */
    private $type = 0;
    /**
     * <code>.google.protobuf.Timestamp date = 4;</code>
     */
    private $date = null;
    protected $record_value;

    public function __construct() {
        \GPBMetadata\Proto3\Albia::initOnce();
        parent::__construct();
    }

    /**
     * <code>uint32 deviceId = 1;</code>
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * <code>uint32 deviceId = 1;</code>
     */
    public function setDeviceId($var)
    {
        GPBUtil::checkUint32($var);
        $this->deviceId = $var;
    }

    /**
     * <code>string key = 2;</code>
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * <code>string key = 2;</code>
     */
    public function setKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->key = $var;
    }

    /**
     * <code>.DeviceRecord.RecordType type = 3;</code>
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * <code>.DeviceRecord.RecordType type = 3;</code>
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \DeviceRecord_RecordType::class);
        $this->type = $var;
    }

    /**
     * <code>.google.protobuf.Timestamp date = 4;</code>
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * <code>.google.protobuf.Timestamp date = 4;</code>
     */
    public function setDate(&$var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->date = $var;
    }

    /**
     * <code>double doubleValue = 5;</code>
     */
    public function getDoubleValue()
    {
        return $this->readOneof(5);
    }

    /**
     * <code>double doubleValue = 5;</code>
     */
    public function setDoubleValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(5, $var);
    }

    /**
     * <code>float floatValue = 6;</code>
     */
    public function getFloatValue()
    {
        return $this->readOneof(6);
    }

    /**
     * <code>float floatValue = 6;</code>
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(6, $var);
    }

    /**
     * <code>int32 int32Value = 7;</code>
     */
    public function getInt32Value()
    {
        return $this->readOneof(7);
    }

    /**
     * <code>int32 int32Value = 7;</code>
     */
    public function setInt32Value($var)
    {
        GPBUtil::checkInt32($var);
        $this->writeOneof(7, $var);
    }

    /**
     * <code>int64 int64Value = 8;</code>
     */
    public function getInt64Value()
    {
        return $this->readOneof(8);
    }

    /**
     * <code>int64 int64Value = 8;</code>
     */
    public function setInt64Value($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(8, $var);
    }

    /**
     * <code>uint32 uint32Value = 9;</code>
     */
    public function getUint32Value()
    {
        return $this->readOneof(9);
    }

    /**
     * <code>uint32 uint32Value = 9;</code>
     */
    public function setUint32Value($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(9, $var);
    }

    /**
     * <code>uint64 uint64Value = 10;</code>
     */
    public function getUint64Value()
    {
        return $this->readOneof(10);
    }

    /**
     * <code>uint64 uint64Value = 10;</code>
     */
    public function setUint64Value($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(10, $var);
    }

    /**
     * <code>bool boolValue = 11;</code>
     */
    public function getBoolValue()
    {
        return $this->readOneof(11);
    }

    /**
     * <code>bool boolValue = 11;</code>
     */
    public function setBoolValue($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(11, $var);
    }

    /**
     * <code>string stringValue = 12;</code>
     */
    public function getStringValue()
    {
        return $this->readOneof(12);
    }

    /**
     * <code>string stringValue = 12;</code>
     */
    public function setStringValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(12, $var);
    }

    /**
     * <code>bytes byteStringValue = 13;</code>
     */
    public function getByteStringValue()
    {
        return $this->readOneof(13);
    }

    /**
     * <code>bytes byteStringValue = 13;</code>
     */
    public function setByteStringValue($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(13, $var);
    }

    public function getRecordValue()
    {
        return $this->whichOneof("record_value");
    }

}

