<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/Types/DocumentTypeDescriptionV2.proto

namespace Diadoc\Proto\Documents\Types;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.Types.DocumentTypeDescriptionV2</code>
 */
class DocumentTypeDescriptionV2 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     */
    protected $Name = '';
    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     */
    protected $Title = '';
    /**
     * Generated from protobuf field <code>repeated int32 SupportedDocflows = 3;</code>
     */
    private $SupportedDocflows;
    /**
     * Generated from protobuf field <code>bool RequiresFnsRegistration = 4;</code>
     */
    protected $RequiresFnsRegistration = false;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentFunctionV2 Functions = 9;</code>
     */
    private $Functions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Name
     *     @type string $Title
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $SupportedDocflows
     *     @type bool $RequiresFnsRegistration
     *     @type \Diadoc\Proto\Documents\Types\DocumentFunctionV2[]|\Google\Protobuf\Internal\RepeatedField $Functions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\Types\DocumentTypeDescriptionV2::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Generated from protobuf field <code>string Name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->Name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     * @return string
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Generated from protobuf field <code>string Title = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTitle($var)
    {
        GPBUtil::checkString($var, True);
        $this->Title = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated int32 SupportedDocflows = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedDocflows()
    {
        return $this->SupportedDocflows;
    }

    /**
     * Generated from protobuf field <code>repeated int32 SupportedDocflows = 3;</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedDocflows($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->SupportedDocflows = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool RequiresFnsRegistration = 4;</code>
     * @return bool
     */
    public function getRequiresFnsRegistration()
    {
        return $this->RequiresFnsRegistration;
    }

    /**
     * Generated from protobuf field <code>bool RequiresFnsRegistration = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequiresFnsRegistration($var)
    {
        GPBUtil::checkBool($var);
        $this->RequiresFnsRegistration = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentFunctionV2 Functions = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFunctions()
    {
        return $this->Functions;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Types.DocumentFunctionV2 Functions = 9;</code>
     * @param \Diadoc\Proto\Documents\Types\DocumentFunctionV2[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFunctions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Documents\Types\DocumentFunctionV2::class);
        $this->Functions = $arr;

        return $this;
    }

}

