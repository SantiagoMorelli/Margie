<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/value.proto

namespace Google\Api\Expr\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A list.
 * Wrapped in a message so 'not set' and empty can be differentiated, which is
 * required for use in a 'oneof'.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.ListValue</code>
 */
class ListValue extends \Google\Protobuf\Internal\Message
{
    /**
     * The ordered values in the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Value values = 1;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1beta1\Value[]|\Google\Protobuf\Internal\RepeatedField $values
     *           The ordered values in the list.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\Value::initOnce();
        parent::__construct($data);
    }

    /**
     * The ordered values in the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Value values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The ordered values in the list.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.Value values = 1;</code>
     * @param \Google\Api\Expr\V1beta1\Value[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1beta1\Value::class);
        $this->values = $arr;

        return $this;
    }

}

