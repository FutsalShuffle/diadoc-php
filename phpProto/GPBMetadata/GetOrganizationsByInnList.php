<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: GetOrganizationsByInnList.proto

namespace GPBMetadata;

class GetOrganizationsByInnList
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Organization::initOnce();
        \GPBMetadata\Counteragent::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0a85030a1f4765744f7267616e697a6174696f6e734279496e6e4c6973742e70726f746f120c446961646f632e50726f746f1a12436f756e7465726167656e742e70726f746f22330a204765744f7267616e697a6174696f6e734279496e6e4c69737452657175657374120f0a07496e6e4c6973741801200328092294010a224f7267616e697a6174696f6e57697468436f756e7465726167656e7453746174757312300a0c4f7267616e697a6174696f6e18012001280b321a2e446961646f632e50726f746f2e4f7267616e697a6174696f6e123c0a12436f756e7465726167656e7453746174757318022001280e32202e446961646f632e50726f746f2e436f756e7465726167656e74537461747573226c0a214765744f7267616e697a6174696f6e734279496e6e4c697374526573706f6e736512470a0d4f7267616e697a6174696f6e7318012003280b32302e446961646f632e50726f746f2e4f7267616e697a6174696f6e57697468436f756e7465726167656e74537461747573620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

