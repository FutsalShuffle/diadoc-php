<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: TimeBasedFilter.proto

namespace GPBMetadata;

class TimeBasedFilter
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Timestamp::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a9d020a1554696d65426173656446696c7465722e70726f746f120c446961646f632e50726f746f22a3010a0f54696d65426173656446696c746572122e0a0d46726f6d54696d657374616d7018012001280b32172e446961646f632e50726f746f2e54696d657374616d70122c0a0b546f54696d657374616d7018022001280b32172e446961646f632e50726f746f2e54696d657374616d7012320a0d536f7274446972656374696f6e18032001280e321b2e446961646f632e50726f746f2e536f7274446972656374696f6e2a480a0d536f7274446972656374696f6e12180a14556e6b6e6f776e536f7274446972656374696f6e1000120d0a09417363656e64696e671001120e0a0a44657363656e64696e671002620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

