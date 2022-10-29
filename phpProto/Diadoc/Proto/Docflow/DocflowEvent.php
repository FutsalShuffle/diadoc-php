<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/DocflowApi.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.DocflowEvent</code>
 */
class DocflowEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string EventId = 1;</code>
     */
    protected $EventId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp Timestamp = 2;</code>
     */
    protected $Timestamp = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentId DocumentId = 3;</code>
     */
    protected $DocumentId = null;
    /**
     * Generated from protobuf field <code>bytes IndexKey = 4;</code>
     */
    protected $IndexKey = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow Document = 5;</code>
     */
    protected $Document = null;
    /**
     * Generated from protobuf field <code>string PreviousEventId = 6;</code>
     */
    protected $PreviousEventId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow PreviousDocumentState = 7;</code>
     */
    protected $PreviousDocumentState = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $EventId
     *     @type \Diadoc\Proto\Timestamp $Timestamp
     *     @type \Diadoc\Proto\DocumentId $DocumentId
     *     @type string $IndexKey
     *     @type \Diadoc\Proto\Docflow\DocumentWithDocflow $Document
     *     @type string $PreviousEventId
     *     @type \Diadoc\Proto\Docflow\DocumentWithDocflow $PreviousDocumentState
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\DocflowApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string EventId = 1;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->EventId;
    }

    /**
     * Generated from protobuf field <code>string EventId = 1;</code>
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
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp Timestamp = 2;</code>
     * @return \Diadoc\Proto\Timestamp
     */
    public function getTimestamp()
    {
        return $this->Timestamp;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp Timestamp = 2;</code>
     * @param \Diadoc\Proto\Timestamp $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Timestamp::class);
        $this->Timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentId DocumentId = 3;</code>
     * @return \Diadoc\Proto\DocumentId
     */
    public function getDocumentId()
    {
        return $this->DocumentId;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.DocumentId DocumentId = 3;</code>
     * @param \Diadoc\Proto\DocumentId $var
     * @return $this
     */
    public function setDocumentId($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\DocumentId::class);
        $this->DocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 4;</code>
     * @return string
     */
    public function getIndexKey()
    {
        return $this->IndexKey;
    }

    /**
     * Generated from protobuf field <code>bytes IndexKey = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIndexKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->IndexKey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow Document = 5;</code>
     * @return \Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    public function getDocument()
    {
        return $this->Document;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow Document = 5;</code>
     * @param \Diadoc\Proto\Docflow\DocumentWithDocflow $var
     * @return $this
     */
    public function setDocument($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\DocumentWithDocflow::class);
        $this->Document = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PreviousEventId = 6;</code>
     * @return string
     */
    public function getPreviousEventId()
    {
        return $this->PreviousEventId;
    }

    /**
     * Generated from protobuf field <code>string PreviousEventId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPreviousEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PreviousEventId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow PreviousDocumentState = 7;</code>
     * @return \Diadoc\Proto\Docflow\DocumentWithDocflow
     */
    public function getPreviousDocumentState()
    {
        return $this->PreviousDocumentState;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.DocumentWithDocflow PreviousDocumentState = 7;</code>
     * @param \Diadoc\Proto\Docflow\DocumentWithDocflow $var
     * @return $this
     */
    public function setPreviousDocumentState($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\DocumentWithDocflow::class);
        $this->PreviousDocumentState = $var;

        return $this;
    }

}

