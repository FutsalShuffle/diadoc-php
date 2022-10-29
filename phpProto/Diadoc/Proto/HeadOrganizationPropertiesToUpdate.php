<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: OrganizationPropertiesToUpdate.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.HeadOrganizationPropertiesToUpdate</code>
 */
class HeadOrganizationPropertiesToUpdate extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.StringValue Kpp = 1;</code>
     */
    protected $Kpp = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.StringValue FullName = 2;</code>
     */
    protected $FullName = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Address Address = 3;</code>
     */
    protected $Address = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\StringValue $Kpp
     *     @type \Diadoc\Proto\StringValue $FullName
     *     @type \Diadoc\Proto\Address $Address
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\OrganizationPropertiesToUpdate::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.StringValue Kpp = 1;</code>
     * @return \Diadoc\Proto\StringValue
     */
    public function getKpp()
    {
        return $this->Kpp;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.StringValue Kpp = 1;</code>
     * @param \Diadoc\Proto\StringValue $var
     * @return $this
     */
    public function setKpp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\StringValue::class);
        $this->Kpp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.StringValue FullName = 2;</code>
     * @return \Diadoc\Proto\StringValue
     */
    public function getFullName()
    {
        return $this->FullName;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.StringValue FullName = 2;</code>
     * @param \Diadoc\Proto\StringValue $var
     * @return $this
     */
    public function setFullName($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\StringValue::class);
        $this->FullName = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Address Address = 3;</code>
     * @return \Diadoc\Proto\Address
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Address Address = 3;</code>
     * @param \Diadoc\Proto\Address $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Address::class);
        $this->Address = $var;

        return $this;
    }

}

