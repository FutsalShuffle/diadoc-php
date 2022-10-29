<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.DocumentSenderSignature</code>
 */
class DocumentSenderSignature extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     */
    protected $ParentEntityId = '';
    /**
     * Generated from protobuf field <code>bytes Signature = 2;</code>
     */
    protected $Signature = '';
    /**
     * Generated from protobuf field <code>bool SignWithTestSignature = 4;</code>
     */
    protected $SignWithTestSignature = false;
    /**
     * Generated from protobuf field <code>string PatchedContentId = 5;</code>
     */
    protected $PatchedContentId = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ParentEntityId
     *     @type string $Signature
     *     @type bool $SignWithTestSignature
     *     @type string $PatchedContentId
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setParentEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ParentEntityId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes Signature = 2;</code>
     * @return string
     */
    public function getSignature()
    {
        return $this->Signature;
    }

    /**
     * Generated from protobuf field <code>bytes Signature = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSignature($var)
    {
        GPBUtil::checkString($var, False);
        $this->Signature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool SignWithTestSignature = 4;</code>
     * @return bool
     */
    public function getSignWithTestSignature()
    {
        return $this->SignWithTestSignature;
    }

    /**
     * Generated from protobuf field <code>bool SignWithTestSignature = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSignWithTestSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->SignWithTestSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PatchedContentId = 5;</code>
     * @return string
     */
    public function getPatchedContentId()
    {
        return $this->PatchedContentId;
    }

    /**
     * Generated from protobuf field <code>string PatchedContentId = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPatchedContentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PatchedContentId = $var;

        return $this;
    }

}

