<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: Invoicing/UniversalTransferDocumentInfo.proto

namespace Diadoc\Proto\Invoicing;

use UnexpectedValueException;

/**
 * Protobuf type <code>Diadoc.Proto.Invoicing.ItemMark</code>
 */
class ItemMark
{
    /**
     * не указано
     *
     * Generated from protobuf enum <code>NotSpecified = 0;</code>
     */
    const NotSpecified = 0;
    /**
     * имущество
     *
     * Generated from protobuf enum <code>Property = 1;</code>
     */
    const Property = 1;
    /**
     * работа
     *
     * Generated from protobuf enum <code>Job = 2;</code>
     */
    const Job = 2;
    /**
     * услуга
     *
     * Generated from protobuf enum <code>Service = 3;</code>
     */
    const Service = 3;
    /**
     * имущественные права
     *
     * Generated from protobuf enum <code>PropertyRights = 4;</code>
     */
    const PropertyRights = 4;
    /**
     * иное
     *
     * Generated from protobuf enum <code>Other = 5;</code>
     */
    const Other = 5;

    private static $valueToName = [
        self::NotSpecified => 'NotSpecified',
        self::Property => 'Property',
        self::Job => 'Job',
        self::Service => 'Service',
        self::PropertyRights => 'PropertyRights',
        self::Other => 'Other',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

