<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/distribution.proto

namespace Google\Api\Distribution;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The range of the population values.
 *
 * Generated from protobuf message <code>google.api.Distribution.Range</code>
 */
class Range extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum of the population values.
     *
     * Generated from protobuf field <code>double min = 1;</code>
     */
    private $min = 0.0;
    /**
     * The maximum of the population values.
     *
     * Generated from protobuf field <code>double max = 2;</code>
     */
    private $max = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $min
     *           The minimum of the population values.
     *     @type float $max
     *           The maximum of the population values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Distribution::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum of the population values.
     *
     * Generated from protobuf field <code>double min = 1;</code>
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * The minimum of the population values.
     *
     * Generated from protobuf field <code>double min = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMin($var)
    {
        GPBUtil::checkDouble($var);
        $this->min = $var;

        return $this;
    }

    /**
     * The maximum of the population values.
     *
     * Generated from protobuf field <code>double max = 2;</code>
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * The maximum of the population values.
     *
     * Generated from protobuf field <code>double max = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkDouble($var);
        $this->max = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Range::class, \Google\Api\Distribution_Range::class);

