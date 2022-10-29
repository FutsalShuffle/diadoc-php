<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Events/DiadocMessage-GetApi.proto

namespace Diadoc\Proto\Events;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Events.Entity</code>
 */
class Entity extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EntityType EntityType = 1;</code>
     */
    protected $EntityType = 0;
    /**
     * Generated from protobuf field <code>string EntityId = 2;</code>
     */
    protected $EntityId = '';
    /**
     * Generated from protobuf field <code>string ParentEntityId = 3;</code>
     */
    protected $ParentEntityId = '';
    /**
     * null <=> there is no content for this entity (very unlikely to happen)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Content Content = 4;</code>
     */
    protected $Content = null;
    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Events.AttachmentType AttachmentType = 5;</code>
     */
    protected $AttachmentType = 0;
    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>string FileName = 6;</code>
     */
    protected $FileName = '';
    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>bool NeedRecipientSignature = 7;</code>
     */
    protected $NeedRecipientSignature = false;
    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>string SignerBoxId = 8;</code>
     */
    protected $SignerBoxId = '';
    /**
     * only for Attachment/DeliveryFailureNotification
     *
     * Generated from protobuf field <code>string NotDeliveredEventId = 10;</code>
     */
    protected $NotDeliveredEventId = '';
    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.Document DocumentInfo = 11;</code>
     */
    protected $DocumentInfo = null;
    /**
     * Generated from protobuf field <code>sfixed64 RawCreationDate = 12;</code>
     */
    protected $RawCreationDate = 0;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionInfo ResolutionInfo = 13;</code>
     */
    protected $ResolutionInfo = null;
    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>string SignerDepartmentId = 14;</code>
     */
    protected $SignerDepartmentId = '';
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionRequestInfo ResolutionRequestInfo = 15;</code>
     */
    protected $ResolutionRequestInfo = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionRequestDenialInfo ResolutionRequestDenialInfo = 16;</code>
     */
    protected $ResolutionRequestDenialInfo = null;
    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>bool NeedReceipt = 17;</code>
     */
    protected $NeedReceipt = false;
    /**
     * Generated from protobuf field <code>string PacketId = 18;</code>
     */
    protected $PacketId = '';
    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>bool IsApprovementSignature = 19;</code>
     */
    protected $IsApprovementSignature = false;
    /**
     * Generated from protobuf field <code>bool IsEncryptedContent = 20;</code>
     */
    protected $IsEncryptedContent = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $EntityType
     *     @type string $EntityId
     *     @type string $ParentEntityId
     *     @type \Diadoc\Proto\Content $Content
     *           null <=> there is no content for this entity (very unlikely to happen)
     *     @type int $AttachmentType
     *           only for EntityType.Attachment
     *     @type string $FileName
     *           only for EntityType.Attachment
     *     @type bool $NeedRecipientSignature
     *           only for EntityType.Attachment
     *     @type string $SignerBoxId
     *           only for EntityType.Signature
     *     @type string $NotDeliveredEventId
     *           only for Attachment/DeliveryFailureNotification
     *     @type \Diadoc\Proto\Documents\Document $DocumentInfo
     *           only for EntityType.Attachment
     *     @type int|string $RawCreationDate
     *     @type \Diadoc\Proto\Events\ResolutionInfo $ResolutionInfo
     *     @type string $SignerDepartmentId
     *           only for EntityType.Signature
     *     @type \Diadoc\Proto\Events\ResolutionRequestInfo $ResolutionRequestInfo
     *     @type \Diadoc\Proto\Events\ResolutionRequestDenialInfo $ResolutionRequestDenialInfo
     *     @type bool $NeedReceipt
     *           only for EntityType.Attachment
     *     @type string $PacketId
     *     @type bool $IsApprovementSignature
     *           only for EntityType.Signature
     *     @type bool $IsEncryptedContent
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Events\DiadocMessageGetApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EntityType EntityType = 1;</code>
     * @return int
     */
    public function getEntityType()
    {
        return $this->EntityType;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.EntityType EntityType = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Events\EntityType::class);
        $this->EntityType = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string EntityId = 2;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->EntityId;
    }

    /**
     * Generated from protobuf field <code>string EntityId = 2;</code>
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
     * Generated from protobuf field <code>string ParentEntityId = 3;</code>
     * @return string
     */
    public function getParentEntityId()
    {
        return $this->ParentEntityId;
    }

    /**
     * Generated from protobuf field <code>string ParentEntityId = 3;</code>
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
     * null <=> there is no content for this entity (very unlikely to happen)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Content Content = 4;</code>
     * @return \Diadoc\Proto\Content
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * null <=> there is no content for this entity (very unlikely to happen)
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Content Content = 4;</code>
     * @param \Diadoc\Proto\Content $var
     * @return $this
     */
    public function setContent($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Content::class);
        $this->Content = $var;

        return $this;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Events.AttachmentType AttachmentType = 5;</code>
     * @return int
     */
    public function getAttachmentType()
    {
        return $this->AttachmentType;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Events.AttachmentType AttachmentType = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAttachmentType($var)
    {
        GPBUtil::checkEnum($var, \Diadoc\Proto\Events\AttachmentType::class);
        $this->AttachmentType = $var;

        return $this;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>string FileName = 6;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>string FileName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>bool NeedRecipientSignature = 7;</code>
     * @return bool
     */
    public function getNeedRecipientSignature()
    {
        return $this->NeedRecipientSignature;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>bool NeedRecipientSignature = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedRecipientSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->NeedRecipientSignature = $var;

        return $this;
    }

    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>string SignerBoxId = 8;</code>
     * @return string
     */
    public function getSignerBoxId()
    {
        return $this->SignerBoxId;
    }

    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>string SignerBoxId = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerBoxId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerBoxId = $var;

        return $this;
    }

    /**
     * only for Attachment/DeliveryFailureNotification
     *
     * Generated from protobuf field <code>string NotDeliveredEventId = 10;</code>
     * @return string
     */
    public function getNotDeliveredEventId()
    {
        return $this->NotDeliveredEventId;
    }

    /**
     * only for Attachment/DeliveryFailureNotification
     *
     * Generated from protobuf field <code>string NotDeliveredEventId = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setNotDeliveredEventId($var)
    {
        GPBUtil::checkString($var, True);
        $this->NotDeliveredEventId = $var;

        return $this;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.Document DocumentInfo = 11;</code>
     * @return \Diadoc\Proto\Documents\Document
     */
    public function getDocumentInfo()
    {
        return $this->DocumentInfo;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>.Diadoc.Proto.Documents.Document DocumentInfo = 11;</code>
     * @param \Diadoc\Proto\Documents\Document $var
     * @return $this
     */
    public function setDocumentInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Documents\Document::class);
        $this->DocumentInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>sfixed64 RawCreationDate = 12;</code>
     * @return int|string
     */
    public function getRawCreationDate()
    {
        return $this->RawCreationDate;
    }

    /**
     * Generated from protobuf field <code>sfixed64 RawCreationDate = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRawCreationDate($var)
    {
        GPBUtil::checkInt64($var);
        $this->RawCreationDate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionInfo ResolutionInfo = 13;</code>
     * @return \Diadoc\Proto\Events\ResolutionInfo
     */
    public function getResolutionInfo()
    {
        return $this->ResolutionInfo;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionInfo ResolutionInfo = 13;</code>
     * @param \Diadoc\Proto\Events\ResolutionInfo $var
     * @return $this
     */
    public function setResolutionInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\ResolutionInfo::class);
        $this->ResolutionInfo = $var;

        return $this;
    }

    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>string SignerDepartmentId = 14;</code>
     * @return string
     */
    public function getSignerDepartmentId()
    {
        return $this->SignerDepartmentId;
    }

    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>string SignerDepartmentId = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setSignerDepartmentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->SignerDepartmentId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionRequestInfo ResolutionRequestInfo = 15;</code>
     * @return \Diadoc\Proto\Events\ResolutionRequestInfo
     */
    public function getResolutionRequestInfo()
    {
        return $this->ResolutionRequestInfo;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionRequestInfo ResolutionRequestInfo = 15;</code>
     * @param \Diadoc\Proto\Events\ResolutionRequestInfo $var
     * @return $this
     */
    public function setResolutionRequestInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\ResolutionRequestInfo::class);
        $this->ResolutionRequestInfo = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionRequestDenialInfo ResolutionRequestDenialInfo = 16;</code>
     * @return \Diadoc\Proto\Events\ResolutionRequestDenialInfo
     */
    public function getResolutionRequestDenialInfo()
    {
        return $this->ResolutionRequestDenialInfo;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Events.ResolutionRequestDenialInfo ResolutionRequestDenialInfo = 16;</code>
     * @param \Diadoc\Proto\Events\ResolutionRequestDenialInfo $var
     * @return $this
     */
    public function setResolutionRequestDenialInfo($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Events\ResolutionRequestDenialInfo::class);
        $this->ResolutionRequestDenialInfo = $var;

        return $this;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>bool NeedReceipt = 17;</code>
     * @return bool
     */
    public function getNeedReceipt()
    {
        return $this->NeedReceipt;
    }

    /**
     * only for EntityType.Attachment
     *
     * Generated from protobuf field <code>bool NeedReceipt = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setNeedReceipt($var)
    {
        GPBUtil::checkBool($var);
        $this->NeedReceipt = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string PacketId = 18;</code>
     * @return string
     */
    public function getPacketId()
    {
        return $this->PacketId;
    }

    /**
     * Generated from protobuf field <code>string PacketId = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setPacketId($var)
    {
        GPBUtil::checkString($var, True);
        $this->PacketId = $var;

        return $this;
    }

    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>bool IsApprovementSignature = 19;</code>
     * @return bool
     */
    public function getIsApprovementSignature()
    {
        return $this->IsApprovementSignature;
    }

    /**
     * only for EntityType.Signature
     *
     * Generated from protobuf field <code>bool IsApprovementSignature = 19;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsApprovementSignature($var)
    {
        GPBUtil::checkBool($var);
        $this->IsApprovementSignature = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsEncryptedContent = 20;</code>
     * @return bool
     */
    public function getIsEncryptedContent()
    {
        return $this->IsEncryptedContent;
    }

    /**
     * Generated from protobuf field <code>bool IsEncryptedContent = 20;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEncryptedContent($var)
    {
        GPBUtil::checkBool($var);
        $this->IsEncryptedContent = $var;

        return $this;
    }

}

