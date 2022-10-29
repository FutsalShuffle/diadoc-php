<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/DocumentZip.proto

namespace Diadoc\Proto\Documents;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.DocumentZipGenerationResult</code>
 */
class DocumentZipGenerationResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ZipFileNameOnShelf = 1;</code>
     */
    protected $ZipFileNameOnShelf = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ZipFileNameOnShelf
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\DocumentZip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ZipFileNameOnShelf = 1;</code>
     * @return string
     */
    public function getZipFileNameOnShelf()
    {
        return $this->ZipFileNameOnShelf;
    }

    /**
     * Generated from protobuf field <code>string ZipFileNameOnShelf = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setZipFileNameOnShelf($var)
    {
        GPBUtil::checkString($var, True);
        $this->ZipFileNameOnShelf = $var;

        return $this;
    }

}

