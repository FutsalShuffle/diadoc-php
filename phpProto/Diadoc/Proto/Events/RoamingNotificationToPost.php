<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.RoamingNotificationToPost</code>
 */
class RoamingNotificationToPost extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     */
    protected $BoxId = '';
    /**
     * Generated from protobuf field <code>string EventId = 2;</code>
     */
    protected $EventId = '';
    /**
     * Generated from protobuf field <code>bool Success = 3;</code>
     */
    protected $Success = false;
    /**
     * Generated from protobuf field <code>string Description = 4;</code>
     */
    protected $Description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $BoxId
     *     @type string $EventId
     *     @type bool $Success
     *     @type string $Description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @return string
     */
    public function getBoxId()
    {
        return $this->BoxId;
    }

    /**
     * Generated from protobuf field <code>string BoxId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->BoxId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EventId = 2;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * Generated from protobuf field <code>string EventId = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->EventId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool Success = 3;</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->Success;
    }

    /**
     * Generated from protobuf field <code>bool Success = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->Success = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Generated from protobuf field <code>string Description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->Description = $var;

        return $this;
    }

}

