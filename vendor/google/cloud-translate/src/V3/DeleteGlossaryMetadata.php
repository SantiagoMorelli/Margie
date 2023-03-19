<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stored in the
 * [google.longrunning.Operation.metadata][google.longrunning.Operation.metadata]
 * field returned by DeleteGlossary.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.DeleteGlossaryMetadata</code>
 */
class DeleteGlossaryMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the glossary that is being deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The current state of the glossary deletion operation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DeleteGlossaryMetadata.State state = 2;</code>
     */
    private $state = 0;
    /**
     * The time when the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 3;</code>
     */
    private $submit_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the glossary that is being deleted.
     *     @type int $state
     *           The current state of the glossary deletion operation.
     *     @type \Google\Protobuf\Timestamp $submit_time
     *           The time when the operation was submitted to the server.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the glossary that is being deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the glossary that is being deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The current state of the glossary deletion operation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DeleteGlossaryMetadata.State state = 2;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * The current state of the glossary deletion operation.
     *
     * Generated from protobuf field <code>.google.cloud.translation.v3.DeleteGlossaryMetadata.State state = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Translate\V3\DeleteGlossaryMetadata\State::class);
        $this->state = $var;

        return $this;
    }

    /**
     * The time when the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getSubmitTime()
    {
        return isset($this->submit_time) ? $this->submit_time : null;
    }

    public function hasSubmitTime()
    {
        return isset($this->submit_time);
    }

    public function clearSubmitTime()
    {
        unset($this->submit_time);
    }

    /**
     * The time when the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSubmitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->submit_time = $var;

        return $this;
    }

}

