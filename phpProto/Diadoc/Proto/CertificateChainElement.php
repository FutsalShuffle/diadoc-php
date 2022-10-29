<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: SignatureVerificationResult.proto

namespace Diadoc\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.CertificateChainElement</code>
 */
class CertificateChainElement extends \Google\Protobuf\Internal\Message
{
    /**
     * X509ChainStatusFlags value
     *
     * Generated from protobuf field <code>int32 CertificateChainStatusFlags = 1;</code>
     */
    protected $CertificateChainStatusFlags = 0;
    /**
     * Generated from protobuf field <code>bytes DerCertificate = 2;</code>
     */
    protected $DerCertificate = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $CertificateChainStatusFlags
     *           X509ChainStatusFlags value
     *     @type string $DerCertificate
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\SignatureVerificationResult::initOnce();
        parent::__construct($data);
    }

    /**
     * X509ChainStatusFlags value
     *
     * Generated from protobuf field <code>int32 CertificateChainStatusFlags = 1;</code>
     * @return int
     */
    public function getCertificateChainStatusFlags()
    {
        return $this->CertificateChainStatusFlags;
    }

    /**
     * X509ChainStatusFlags value
     *
     * Generated from protobuf field <code>int32 CertificateChainStatusFlags = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCertificateChainStatusFlags($var)
    {
        GPBUtil::checkInt32($var);
        $this->CertificateChainStatusFlags = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes DerCertificate = 2;</code>
     * @return string
     */
    public function getDerCertificate()
    {
        return $this->DerCertificate;
    }

    /**
     * Generated from protobuf field <code>bytes DerCertificate = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDerCertificate($var)
    {
        GPBUtil::checkString($var, False);
        $this->DerCertificate = $var;

        return $this;
    }

}

