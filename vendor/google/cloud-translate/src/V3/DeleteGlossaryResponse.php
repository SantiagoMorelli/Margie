<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/translate/v3/translation_service.proto

namespace Google\Cloud\Translate\V3;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Stored in the
 * [google.longrunning.Operation.response][google.longrunning.Operation.response]
 * field returned by DeleteGlossary.
 *
 * Generated from protobuf message <code>google.cloud.translation.v3.DeleteGlossaryResponse</code>
 */
class DeleteGlossaryResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the deleted glossary.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The time when the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 2;</code>
     */
    private $submit_time = null;
    /**
     * The time when the glossary deletion is finished and
     * [google.longrunning.Operation.done][google.longrunning.Operation.done] is
     * set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     */
    private $end_time = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the deleted glossary.
     *     @type \Google\Protobuf\Timestamp $submit_time
     *           The time when the operation was submitted to the server.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           The time when the glossary deletion is finished and
     *           [google.longrunning.Operation.done][google.longrunning.Operation.done] is
     *           set to true.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Translate\V3\TranslationService::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the deleted glossary.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the deleted glossary.
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
     * The time when the operation was submitted to the server.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 2;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Timestamp submit_time = 2;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setSubmitTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->submit_time = $var;

        return $this;
    }

    /**
     * The time when the glossary deletion is finished and
     * [google.longrunning.Operation.done][google.longrunning.Operation.done] is
     * set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getEndTime()
    {
        return isset($this->end_time) ? $this->end_time : null;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * The time when the glossary deletion is finished and
     * [google.longrunning.Operation.done][google.longrunning.Operation.done] is
     * set to true.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 3;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

}

