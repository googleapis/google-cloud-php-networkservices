<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/http_route.proto

namespace Google\Cloud\NetworkServices\V1\HttpRoute;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The specifications for retries.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.HttpRoute.RetryPolicy</code>
 */
class RetryPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Specifies one or more conditions when this retry policy applies. Valid
     * values are:
     *   5xx: Proxy will attempt a retry if the destination service responds
     *     with any 5xx response code, of if the destination service does not
     *     respond at all, example: disconnect, reset, read timeout, connection
     *     failure and refused streams.
     *   gateway-error: Similar to 5xx, but only applies to response codes 502,
     *     503, 504.
     *   reset: Proxy will attempt a retry if the destination service does not
     *     respond at all (disconnect/reset/read timeout)
     *   connect-failure: Proxy will retry on failures connecting to destination
     *     for example due to connection timeouts.
     *   retriable-4xx: Proxy will retry fro retriable 4xx response codes.
     *     Currently the only retriable error supported is 409.
     *   refused-stream: Proxy will retry if the destination resets the stream
     *     with a REFUSED_STREAM error code. This reset type indicates that it
     *     is safe to retry.
     *
     * Generated from protobuf field <code>repeated string retry_conditions = 1;</code>
     */
    private $retry_conditions;
    /**
     * Specifies the allowed number of retries. This number must be > 0. If not
     * specified, default to 1.
     *
     * Generated from protobuf field <code>int32 num_retries = 2;</code>
     */
    protected $num_retries = 0;
    /**
     * Specifies a non-zero timeout per retry attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration per_try_timeout = 3;</code>
     */
    protected $per_try_timeout = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $retry_conditions
     *           Specifies one or more conditions when this retry policy applies. Valid
     *           values are:
     *             5xx: Proxy will attempt a retry if the destination service responds
     *               with any 5xx response code, of if the destination service does not
     *               respond at all, example: disconnect, reset, read timeout, connection
     *               failure and refused streams.
     *             gateway-error: Similar to 5xx, but only applies to response codes 502,
     *               503, 504.
     *             reset: Proxy will attempt a retry if the destination service does not
     *               respond at all (disconnect/reset/read timeout)
     *             connect-failure: Proxy will retry on failures connecting to destination
     *               for example due to connection timeouts.
     *             retriable-4xx: Proxy will retry fro retriable 4xx response codes.
     *               Currently the only retriable error supported is 409.
     *             refused-stream: Proxy will retry if the destination resets the stream
     *               with a REFUSED_STREAM error code. This reset type indicates that it
     *               is safe to retry.
     *     @type int $num_retries
     *           Specifies the allowed number of retries. This number must be > 0. If not
     *           specified, default to 1.
     *     @type \Google\Protobuf\Duration $per_try_timeout
     *           Specifies a non-zero timeout per retry attempt.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\HttpRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Specifies one or more conditions when this retry policy applies. Valid
     * values are:
     *   5xx: Proxy will attempt a retry if the destination service responds
     *     with any 5xx response code, of if the destination service does not
     *     respond at all, example: disconnect, reset, read timeout, connection
     *     failure and refused streams.
     *   gateway-error: Similar to 5xx, but only applies to response codes 502,
     *     503, 504.
     *   reset: Proxy will attempt a retry if the destination service does not
     *     respond at all (disconnect/reset/read timeout)
     *   connect-failure: Proxy will retry on failures connecting to destination
     *     for example due to connection timeouts.
     *   retriable-4xx: Proxy will retry fro retriable 4xx response codes.
     *     Currently the only retriable error supported is 409.
     *   refused-stream: Proxy will retry if the destination resets the stream
     *     with a REFUSED_STREAM error code. This reset type indicates that it
     *     is safe to retry.
     *
     * Generated from protobuf field <code>repeated string retry_conditions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRetryConditions()
    {
        return $this->retry_conditions;
    }

    /**
     * Specifies one or more conditions when this retry policy applies. Valid
     * values are:
     *   5xx: Proxy will attempt a retry if the destination service responds
     *     with any 5xx response code, of if the destination service does not
     *     respond at all, example: disconnect, reset, read timeout, connection
     *     failure and refused streams.
     *   gateway-error: Similar to 5xx, but only applies to response codes 502,
     *     503, 504.
     *   reset: Proxy will attempt a retry if the destination service does not
     *     respond at all (disconnect/reset/read timeout)
     *   connect-failure: Proxy will retry on failures connecting to destination
     *     for example due to connection timeouts.
     *   retriable-4xx: Proxy will retry fro retriable 4xx response codes.
     *     Currently the only retriable error supported is 409.
     *   refused-stream: Proxy will retry if the destination resets the stream
     *     with a REFUSED_STREAM error code. This reset type indicates that it
     *     is safe to retry.
     *
     * Generated from protobuf field <code>repeated string retry_conditions = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRetryConditions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->retry_conditions = $arr;

        return $this;
    }

    /**
     * Specifies the allowed number of retries. This number must be > 0. If not
     * specified, default to 1.
     *
     * Generated from protobuf field <code>int32 num_retries = 2;</code>
     * @return int
     */
    public function getNumRetries()
    {
        return $this->num_retries;
    }

    /**
     * Specifies the allowed number of retries. This number must be > 0. If not
     * specified, default to 1.
     *
     * Generated from protobuf field <code>int32 num_retries = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setNumRetries($var)
    {
        GPBUtil::checkInt32($var);
        $this->num_retries = $var;

        return $this;
    }

    /**
     * Specifies a non-zero timeout per retry attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration per_try_timeout = 3;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getPerTryTimeout()
    {
        return $this->per_try_timeout;
    }

    public function hasPerTryTimeout()
    {
        return isset($this->per_try_timeout);
    }

    public function clearPerTryTimeout()
    {
        unset($this->per_try_timeout);
    }

    /**
     * Specifies a non-zero timeout per retry attempt.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration per_try_timeout = 3;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setPerTryTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->per_try_timeout = $var;

        return $this;
    }

}


