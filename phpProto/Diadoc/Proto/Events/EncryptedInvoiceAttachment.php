<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-PostApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.EncryptedInvoiceAttachment</code>
 */
class EncryptedInvoiceAttachment extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     */
    protected $SignedContent = null;
    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     */
    protected $Comment = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 4;</code>
     */
    private $InitialDocumentIds;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     */
    private $SubordinateDocumentIds;
    /**
     * Generated from protobuf field <code>string CustomDocumentId = 6;</code>
     */
    protected $CustomDocumentId = '';
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 7;</code>
     */
    private $CustomData;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedDocumentMetadata Metadata = 8;</code>
     */
    protected $Metadata = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedInvoiceMetadata InvoiceMetadata = 9;</code>
     */
    protected $InvoiceMetadata = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedInvoiceCorrectionMetadata InvoiceCorrectionMetadata = 10;</code>
     */
    protected $InvoiceCorrectionMetadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Diadoc\Proto\Events\SignedContent $SignedContent
     *     @type string $Comment
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $InitialDocumentIds
     *     @type \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $SubordinateDocumentIds
     *     @type string $CustomDocumentId
     *     @type \Diadoc\Proto\CustomDataItem[]|\Google\Protobuf\Internal\RepeatedField $CustomData
     *     @type \Diadoc\Proto\Events\EncryptedDocumentMetadata $Metadata
     *     @type \Diadoc\Proto\Events\EncryptedInvoiceMetadata $InvoiceMetadata
     *     @type \Diadoc\Proto\Events\EncryptedInvoiceCorrectionMetadata $InvoiceCorrectionMetadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessagePostApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     * @return \Diadoc\Proto\Events\SignedContent
     */
    public function getSignedContent()
    {
        return $this->SignedContent;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.SignedContent SignedContent = 1;</code>
     * @param \Diadoc\Proto\Events\SignedContent $var
     * @return $this
     */
    public function setSignedContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\SignedContent::class);
        $this->SignedContent = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Generated from protobuf field <code>string Comment = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setComment($var)
    {
        GPBUtil::checkString($var, True);
        $this->Comment = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInitialDocumentIds()
    {
        return $this->InitialDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId InitialDocumentIds = 4;</code>
     * @param \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInitialDocumentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\DocumentId::class);
        $this->InitialDocumentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubordinateDocumentIds()
    {
        return $this->SubordinateDocumentIds;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.DocumentId SubordinateDocumentIds = 5;</code>
     * @param \Diadoc\Proto\DocumentId[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubordinateDocumentIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\DocumentId::class);
        $this->SubordinateDocumentIds = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string CustomDocumentId = 6;</code>
     * @return string
     */
    public function getCustomDocumentId()
    {
        return $this->CustomDocumentId;
    }

    /**
     * Generated from protobuf field <code>string CustomDocumentId = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomDocumentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->CustomDocumentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCustomData()
    {
        return $this->CustomData;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.CustomDataItem CustomData = 7;</code>
     * @param \Diadoc\Proto\CustomDataItem[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCustomData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\CustomDataItem::class);
        $this->CustomData = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedDocumentMetadata Metadata = 8;</code>
     * @return \Diadoc\Proto\Events\EncryptedDocumentMetadata
     */
    public function getMetadata()
    {
        return $this->Metadata;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedDocumentMetadata Metadata = 8;</code>
     * @param \Diadoc\Proto\Events\EncryptedDocumentMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\EncryptedDocumentMetadata::class);
        $this->Metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedInvoiceMetadata InvoiceMetadata = 9;</code>
     * @return \Diadoc\Proto\Events\EncryptedInvoiceMetadata
     */
    public function getInvoiceMetadata()
    {
        return $this->InvoiceMetadata;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedInvoiceMetadata InvoiceMetadata = 9;</code>
     * @param \Diadoc\Proto\Events\EncryptedInvoiceMetadata $var
     * @return $this
     */
    public function setInvoiceMetadata($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\EncryptedInvoiceMetadata::class);
        $this->InvoiceMetadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedInvoiceCorrectionMetadata InvoiceCorrectionMetadata = 10;</code>
     * @return \Diadoc\Proto\Events\EncryptedInvoiceCorrectionMetadata
     */
    public function getInvoiceCorrectionMetadata()
    {
        return $this->InvoiceCorrectionMetadata;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EncryptedInvoiceCorrectionMetadata InvoiceCorrectionMetadata = 10;</code>
     * @param \Diadoc\Proto\Events\EncryptedInvoiceCorrectionMetadata $var
     * @return $this
     */
    public function setInvoiceCorrectionMetadata($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\EncryptedInvoiceCorrectionMetadata::class);
        $this->InvoiceCorrectionMetadata = $var;

        return $this;
    }

}

