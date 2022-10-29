<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Docflow/InvoiceDocflow.proto

namespace Diadoc\Proto\Docflow;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Docflow.InboundInvoiceDocflow</code>
 */
class InboundInvoiceDocflow extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool IsFinished = 1;</code>
     */
    protected $IsFinished = false;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InboundInvoiceReceiptDocflow ReceiptDocflow = 2;</code>
     */
    protected $ReceiptDocflow = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InvoiceConfirmationDocflow ConfirmationDocflow = 3;</code>
     */
    protected $ConfirmationDocflow = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InvoiceCorrectionRequestDocflow CorrectionRequestDocflow = 4;</code>
     */
    protected $CorrectionRequestDocflow = null;
    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp ConfirmationTimestamp = 5;</code>
     */
    protected $ConfirmationTimestamp = null;
    /**
     * Generated from protobuf field <code>bool IsAmendmentRequested = 6;</code>
     */
    protected $IsAmendmentRequested = false;
    /**
     * Generated from protobuf field <code>bool IsRevised = 7;</code>
     */
    protected $IsRevised = false;
    /**
     * Generated from protobuf field <code>bool IsCorrected = 8;</code>
     */
    protected $IsCorrected = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $IsFinished
     *     @type \Diadoc\Proto\Docflow\InboundInvoiceReceiptDocflow $ReceiptDocflow
     *     @type \Diadoc\Proto\Docflow\InvoiceConfirmationDocflow $ConfirmationDocflow
     *     @type \Diadoc\Proto\Docflow\InvoiceCorrectionRequestDocflow $CorrectionRequestDocflow
     *     @type \Diadoc\Proto\Timestamp $ConfirmationTimestamp
     *     @type bool $IsAmendmentRequested
     *     @type bool $IsRevised
     *     @type bool $IsCorrected
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Docflow\InvoiceDocflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool IsFinished = 1;</code>
     * @return bool
     */
    public function getIsFinished()
    {
        return $this->IsFinished;
    }

    /**
     * Generated from protobuf field <code>bool IsFinished = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFinished($var)
    {
        GPBUtil::checkBool($var);
        $this->IsFinished = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InboundInvoiceReceiptDocflow ReceiptDocflow = 2;</code>
     * @return \Diadoc\Proto\Docflow\InboundInvoiceReceiptDocflow
     */
    public function getReceiptDocflow()
    {
        return $this->ReceiptDocflow;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InboundInvoiceReceiptDocflow ReceiptDocflow = 2;</code>
     * @param \Diadoc\Proto\Docflow\InboundInvoiceReceiptDocflow $var
     * @return $this
     */
    public function setReceiptDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\InboundInvoiceReceiptDocflow::class);
        $this->ReceiptDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InvoiceConfirmationDocflow ConfirmationDocflow = 3;</code>
     * @return \Diadoc\Proto\Docflow\InvoiceConfirmationDocflow
     */
    public function getConfirmationDocflow()
    {
        return $this->ConfirmationDocflow;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InvoiceConfirmationDocflow ConfirmationDocflow = 3;</code>
     * @param \Diadoc\Proto\Docflow\InvoiceConfirmationDocflow $var
     * @return $this
     */
    public function setConfirmationDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\InvoiceConfirmationDocflow::class);
        $this->ConfirmationDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InvoiceCorrectionRequestDocflow CorrectionRequestDocflow = 4;</code>
     * @return \Diadoc\Proto\Docflow\InvoiceCorrectionRequestDocflow
     */
    public function getCorrectionRequestDocflow()
    {
        return $this->CorrectionRequestDocflow;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Docflow.InvoiceCorrectionRequestDocflow CorrectionRequestDocflow = 4;</code>
     * @param \Diadoc\Proto\Docflow\InvoiceCorrectionRequestDocflow $var
     * @return $this
     */
    public function setCorrectionRequestDocflow($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Docflow\InvoiceCorrectionRequestDocflow::class);
        $this->CorrectionRequestDocflow = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp ConfirmationTimestamp = 5;</code>
     * @return \Diadoc\Proto\Timestamp
     */
    public function getConfirmationTimestamp()
    {
        return $this->ConfirmationTimestamp;
    }

    /**
     * Generated from protobuf field <code>.Diadoc.Proto.Timestamp ConfirmationTimestamp = 5;</code>
     * @param \Diadoc\Proto\Timestamp $var
     * @return $this
     */
    public function setConfirmationTimestamp($var)
    {
        GPBUtil::checkMessage($var, \Diadoc\Proto\Timestamp::class);
        $this->ConfirmationTimestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsAmendmentRequested = 6;</code>
     * @return bool
     */
    public function getIsAmendmentRequested()
    {
        return $this->IsAmendmentRequested;
    }

    /**
     * Generated from protobuf field <code>bool IsAmendmentRequested = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAmendmentRequested($var)
    {
        GPBUtil::checkBool($var);
        $this->IsAmendmentRequested = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsRevised = 7;</code>
     * @return bool
     */
    public function getIsRevised()
    {
        return $this->IsRevised;
    }

    /**
     * Generated from protobuf field <code>bool IsRevised = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsRevised($var)
    {
        GPBUtil::checkBool($var);
        $this->IsRevised = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool IsCorrected = 8;</code>
     * @return bool
     */
    public function getIsCorrected()
    {
        return $this->IsCorrected;
    }

    /**
     * Generated from protobuf field <code>bool IsCorrected = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsCorrected($var)
    {
        GPBUtil::checkBool($var);
        $this->IsCorrected = $var;

        return $this;
    }

}

