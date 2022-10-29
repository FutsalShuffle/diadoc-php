<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Documents/DocumentList.proto

namespace Diadoc\Proto\Documents;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Diadoc.Proto.Documents.DocumentList</code>
 */
class DocumentList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 TotalCount = 1;</code>
     */
    protected $TotalCount = 0;
    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Document Documents = 2;</code>
     */
    private $Documents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $TotalCount
     *     @type \Diadoc\Proto\Documents\Document[]|\Google\Protobuf\Internal\RepeatedField $Documents
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Documents\DocumentList::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 TotalCount = 1;</code>
     * @return int
     */
    public function getTotalCount()
    {
        return $this->TotalCount;
    }

    /**
     * Generated from protobuf field <code>int32 TotalCount = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setTotalCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->TotalCount = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Document Documents = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->Documents;
    }

    /**
     * Generated from protobuf field <code>repeated .Diadoc.Proto.Documents.Document Documents = 2;</code>
     * @param \Diadoc\Proto\Documents\Document[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Diadoc\Proto\Documents\Document::class);
        $this->Documents = $arr;

        return $this;
    }

}

