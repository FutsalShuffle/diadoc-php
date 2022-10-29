<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.EntityPatch</code>
 */
class EntityPatch extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string EntityId = 1;</code>
     */
    protected $EntityId = '';
    /**
     * Generated from protobuf field <code>bool DocumentIsDeleted = 2;</code>
     */
    protected $DocumentIsDeleted = false;
    /**
     * Generated from protobuf field <code>string MovedToDepartment = 3;</code>
     */
    protected $MovedToDepartment = '';
    /**
     * Generated from protobuf field <code>bool DocumentIsRestored = 4;</code>
     */
    protected $DocumentIsRestored = false;
    /**
     * Generated from protobuf field <code>bool ContentIsPatched = 5;</code>
     */
    protected $ContentIsPatched = false;
    /**
     * Generated from protobuf field <code>string ForwardedToBoxId = 6;</code>
     */
    protected $ForwardedToBoxId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $EntityId
     *     @type bool $DocumentIsDeleted
     *     @type string $MovedToDepartment
     *     @type bool $DocumentIsRestored
     *     @type bool $ContentIsPatched
     *     @type string $ForwardedToBoxId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string EntityId = 1;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }

    /**
     * Generated from protobuf field <code>string EntityId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->EntityId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool DocumentIsDeleted = 2;</code>
     * @return bool
     */
    public function getDocumentIsDeleted()
    {
        return $this->DocumentIsDeleted;
    }

    /**
     * Generated from protobuf field <code>bool DocumentIsDeleted = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setDocumentIsDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->DocumentIsDeleted = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string MovedToDepartment = 3;</code>
     * @return string
     */
    public function getMovedToDepartment()
    {
        return $this->MovedToDepartment;
    }

    /**
     * Generated from protobuf field <code>string MovedToDepartment = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMovedToDepartment($var)
    {
        GPBUtil::checkString($var, True);
        $this->MovedToDepartment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool DocumentIsRestored = 4;</code>
     * @return bool
     */
    public function getDocumentIsRestored()
    {
        return $this->DocumentIsRestored;
    }

    /**
     * Generated from protobuf field <code>bool DocumentIsRestored = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setDocumentIsRestored($var)
    {
        GPBUtil::checkBool($var);
        $this->DocumentIsRestored = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool ContentIsPatched = 5;</code>
     * @return bool
     */
    public function getContentIsPatched()
    {
        return $this->ContentIsPatched;
    }

    /**
     * Generated from protobuf field <code>bool ContentIsPatched = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setContentIsPatched($var)
    {
        GPBUtil::checkBool($var);
        $this->ContentIsPatched = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ForwardedToBoxId = 6;</code>
     * @return string
     */
    public function getForwardedToBoxId()
    {
        return $this->ForwardedToBoxId;
    }

    /**
     * Generated from protobuf field <code>string ForwardedToBoxId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setForwardedToBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ForwardedToBoxId = $var;

        return $this;
    }

}

