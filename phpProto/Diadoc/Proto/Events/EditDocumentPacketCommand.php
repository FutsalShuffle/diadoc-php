<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.EditDocumentPacketCommand</code>
 */
class EditDocumentPacketCommand extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string DocumentId = 1;</code>
     */
    protected $DocumentId = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId AddDocumentsToPacket = 2;</code>
     */
    private $AddDocumentsToPacket;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId RemoveDocumentsFromPacket = 3;</code>
     */
    private $RemoveDocumentsFromPacket;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DocumentId
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $AddDocumentsToPacket
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $RemoveDocumentsFromPacket
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string DocumentId = 1;</code>
     * @return string
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Generated from protobuf field <code>string DocumentId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->DocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId AddDocumentsToPacket = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAddDocumentsToPacket()
    {
        return $this->AddDocumentsToPacket;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId AddDocumentsToPacket = 2;</code>
     * @param \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAddDocumentsToPacket($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\DocumentId::class);
        $this->AddDocumentsToPacket = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId RemoveDocumentsFromPacket = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRemoveDocumentsFromPacket()
    {
        return $this->RemoveDocumentsFromPacket;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId RemoveDocumentsFromPacket = 3;</code>
     * @param \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRemoveDocumentsFromPacket($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\DocumentId::class);
        $this->RemoveDocumentsFromPacket = $arr;

        return $this;
    }

}

