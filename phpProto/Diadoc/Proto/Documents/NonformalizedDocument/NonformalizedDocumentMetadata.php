<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/NonformalizedDocument.proto

namespace Diadoc\Proto\Documents\NonformalizedDocument;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.NonformalizedDocument.NonformalizedDocumentMetadata</code>
 */
class NonformalizedDocumentMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.NonformalizedDocument.NonformalizedDocumentStatus DocumentStatus = 1;</code>
     */
    protected $DocumentStatus = 0;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.ReceiptStatus ReceiptStatus = 2;</code>
     */
    protected $ReceiptStatus = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $DocumentStatus
     *     @type int $ReceiptStatus
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\NonformalizedDocument::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.NonformalizedDocument.NonformalizedDocumentStatus DocumentStatus = 1;</code>
     * @return int
     */
    public function getDocumentStatus()
    {
        return $this->DocumentStatus;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.NonformalizedDocument.NonformalizedDocumentStatus DocumentStatus = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setDocumentStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Documents\NonformalizedDocument\NonformalizedDocumentStatus::class);
        $this->DocumentStatus = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.ReceiptStatus ReceiptStatus = 2;</code>
     * @return int
     */
    public function getReceiptStatus()
    {
        return $this->ReceiptStatus;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.ReceiptStatus ReceiptStatus = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setReceiptStatus($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Documents\ReceiptStatus::class);
        $this->ReceiptStatus = $var;

        return $this;
    }

}

