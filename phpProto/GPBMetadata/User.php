<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: User.proto

namespace GPBMetadata;

class User
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\CertificateInfo::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0aaa010a0a557365722e70726f746f120c446961646f632e50726f746f2285010a0455736572120a0a02496418012001280912100a084c6173744e616d6518022001280912110a0946697273744e616d6518032001280912120a0a4d6964646c654e616d6518042001280912380a11436c6f756443657274696669636174657318052003280b321d2e446961646f632e50726f746f2e4365727469666963617465496e666f620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

