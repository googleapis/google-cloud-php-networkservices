<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/dep.proto

namespace Google\Cloud\NetworkServices\V1\ExtensionChain;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single extension in the chain to execute for the matching request.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.ExtensionChain.Extension</code>
 */
class Extension extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The name for this extension.
     * The name is logged as part of the HTTP request logs.
     * The name must conform with RFC-1034, is restricted to lower-cased
     * letters, numbers and hyphens, and can have a maximum length of 63
     * characters. Additionally, the first character must be a letter and the
     * last a letter or a number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Optional. The `:authority` header in the gRPC request sent from Envoy
     * to the extension service.
     * Required for Callout extensions.
     *
     * Generated from protobuf field <code>string authority = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $authority = '';
    /**
     * Required. The reference to the service that runs the extension.
     * Currently only callout extensions are supported here.
     * To configure a callout extension, `service` must be a fully-qualified
     * reference
     * to a [backend
     * service](https://cloud.google.com/compute/docs/reference/rest/v1/backendServices)
     * in the format:
     * `https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/backendServices/{backendService}`
     * or
     * `https://www.googleapis.com/compute/v1/projects/{project}/global/backendServices/{backendService}`.
     *
     * Generated from protobuf field <code>string service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $service = '';
    /**
     * Optional. A set of events during request or response processing for which
     * this extension is called. This field is required for the
     * `LbTrafficExtension` resource. It must not be set for the
     * `LbRouteExtension` resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.EventType supported_events = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $supported_events;
    /**
     * Optional. Specifies the timeout for each individual message on the
     * stream. The timeout must be between 10-1000 milliseconds. Required for
     * Callout extensions.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $timeout = null;
    /**
     * Optional. Determines how the proxy behaves if the call to the extension
     * fails or times out.
     * When set to `TRUE`, request or response processing continues without
     * error. Any subsequent extensions in the extension chain are also
     * executed. When set to `FALSE` or the default setting of `FALSE` is used,
     * one of the following happens:
     * * If response headers have not been delivered to the downstream client,
     * a generic 500 error is returned to the client. The error response can be
     * tailored by configuring a custom error response in the load balancer.
     * * If response headers have been delivered, then the HTTP stream to the
     * downstream client is reset.
     *
     * Generated from protobuf field <code>bool fail_open = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $fail_open = false;
    /**
     * Optional. List of the HTTP headers to forward to the extension
     * (from the client or backend). If omitted, all headers are sent.
     * Each element is a string indicating the header name.
     *
     * Generated from protobuf field <code>repeated string forward_headers = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $forward_headers;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The name for this extension.
     *           The name is logged as part of the HTTP request logs.
     *           The name must conform with RFC-1034, is restricted to lower-cased
     *           letters, numbers and hyphens, and can have a maximum length of 63
     *           characters. Additionally, the first character must be a letter and the
     *           last a letter or a number.
     *     @type string $authority
     *           Optional. The `:authority` header in the gRPC request sent from Envoy
     *           to the extension service.
     *           Required for Callout extensions.
     *     @type string $service
     *           Required. The reference to the service that runs the extension.
     *           Currently only callout extensions are supported here.
     *           To configure a callout extension, `service` must be a fully-qualified
     *           reference
     *           to a [backend
     *           service](https://cloud.google.com/compute/docs/reference/rest/v1/backendServices)
     *           in the format:
     *           `https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/backendServices/{backendService}`
     *           or
     *           `https://www.googleapis.com/compute/v1/projects/{project}/global/backendServices/{backendService}`.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $supported_events
     *           Optional. A set of events during request or response processing for which
     *           this extension is called. This field is required for the
     *           `LbTrafficExtension` resource. It must not be set for the
     *           `LbRouteExtension` resource.
     *     @type \Google\Protobuf\Duration $timeout
     *           Optional. Specifies the timeout for each individual message on the
     *           stream. The timeout must be between 10-1000 milliseconds. Required for
     *           Callout extensions.
     *     @type bool $fail_open
     *           Optional. Determines how the proxy behaves if the call to the extension
     *           fails or times out.
     *           When set to `TRUE`, request or response processing continues without
     *           error. Any subsequent extensions in the extension chain are also
     *           executed. When set to `FALSE` or the default setting of `FALSE` is used,
     *           one of the following happens:
     *           * If response headers have not been delivered to the downstream client,
     *           a generic 500 error is returned to the client. The error response can be
     *           tailored by configuring a custom error response in the load balancer.
     *           * If response headers have been delivered, then the HTTP stream to the
     *           downstream client is reset.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $forward_headers
     *           Optional. List of the HTTP headers to forward to the extension
     *           (from the client or backend). If omitted, all headers are sent.
     *           Each element is a string indicating the header name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\Dep::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The name for this extension.
     * The name is logged as part of the HTTP request logs.
     * The name must conform with RFC-1034, is restricted to lower-cased
     * letters, numbers and hyphens, and can have a maximum length of 63
     * characters. Additionally, the first character must be a letter and the
     * last a letter or a number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name for this extension.
     * The name is logged as part of the HTTP request logs.
     * The name must conform with RFC-1034, is restricted to lower-cased
     * letters, numbers and hyphens, and can have a maximum length of 63
     * characters. Additionally, the first character must be a letter and the
     * last a letter or a number.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Optional. The `:authority` header in the gRPC request sent from Envoy
     * to the extension service.
     * Required for Callout extensions.
     *
     * Generated from protobuf field <code>string authority = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * Optional. The `:authority` header in the gRPC request sent from Envoy
     * to the extension service.
     * Required for Callout extensions.
     *
     * Generated from protobuf field <code>string authority = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setAuthority($var)
    {
        GPBUtil::checkString($var, True);
        $this->authority = $var;

        return $this;
    }

    /**
     * Required. The reference to the service that runs the extension.
     * Currently only callout extensions are supported here.
     * To configure a callout extension, `service` must be a fully-qualified
     * reference
     * to a [backend
     * service](https://cloud.google.com/compute/docs/reference/rest/v1/backendServices)
     * in the format:
     * `https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/backendServices/{backendService}`
     * or
     * `https://www.googleapis.com/compute/v1/projects/{project}/global/backendServices/{backendService}`.
     *
     * Generated from protobuf field <code>string service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Required. The reference to the service that runs the extension.
     * Currently only callout extensions are supported here.
     * To configure a callout extension, `service` must be a fully-qualified
     * reference
     * to a [backend
     * service](https://cloud.google.com/compute/docs/reference/rest/v1/backendServices)
     * in the format:
     * `https://www.googleapis.com/compute/v1/projects/{project}/regions/{region}/backendServices/{backendService}`
     * or
     * `https://www.googleapis.com/compute/v1/projects/{project}/global/backendServices/{backendService}`.
     *
     * Generated from protobuf field <code>string service = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Optional. A set of events during request or response processing for which
     * this extension is called. This field is required for the
     * `LbTrafficExtension` resource. It must not be set for the
     * `LbRouteExtension` resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.EventType supported_events = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSupportedEvents()
    {
        return $this->supported_events;
    }

    /**
     * Optional. A set of events during request or response processing for which
     * this extension is called. This field is required for the
     * `LbTrafficExtension` resource. It must not be set for the
     * `LbRouteExtension` resource.
     *
     * Generated from protobuf field <code>repeated .google.cloud.networkservices.v1.EventType supported_events = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSupportedEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\NetworkServices\V1\EventType::class);
        $this->supported_events = $arr;

        return $this;
    }

    /**
     * Optional. Specifies the timeout for each individual message on the
     * stream. The timeout must be between 10-1000 milliseconds. Required for
     * Callout extensions.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    public function hasTimeout()
    {
        return isset($this->timeout);
    }

    public function clearTimeout()
    {
        unset($this->timeout);
    }

    /**
     * Optional. Specifies the timeout for each individual message on the
     * stream. The timeout must be between 10-1000 milliseconds. Required for
     * Callout extensions.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration timeout = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->timeout = $var;

        return $this;
    }

    /**
     * Optional. Determines how the proxy behaves if the call to the extension
     * fails or times out.
     * When set to `TRUE`, request or response processing continues without
     * error. Any subsequent extensions in the extension chain are also
     * executed. When set to `FALSE` or the default setting of `FALSE` is used,
     * one of the following happens:
     * * If response headers have not been delivered to the downstream client,
     * a generic 500 error is returned to the client. The error response can be
     * tailored by configuring a custom error response in the load balancer.
     * * If response headers have been delivered, then the HTTP stream to the
     * downstream client is reset.
     *
     * Generated from protobuf field <code>bool fail_open = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getFailOpen()
    {
        return $this->fail_open;
    }

    /**
     * Optional. Determines how the proxy behaves if the call to the extension
     * fails or times out.
     * When set to `TRUE`, request or response processing continues without
     * error. Any subsequent extensions in the extension chain are also
     * executed. When set to `FALSE` or the default setting of `FALSE` is used,
     * one of the following happens:
     * * If response headers have not been delivered to the downstream client,
     * a generic 500 error is returned to the client. The error response can be
     * tailored by configuring a custom error response in the load balancer.
     * * If response headers have been delivered, then the HTTP stream to the
     * downstream client is reset.
     *
     * Generated from protobuf field <code>bool fail_open = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setFailOpen($var)
    {
        GPBUtil::checkBool($var);
        $this->fail_open = $var;

        return $this;
    }

    /**
     * Optional. List of the HTTP headers to forward to the extension
     * (from the client or backend). If omitted, all headers are sent.
     * Each element is a string indicating the header name.
     *
     * Generated from protobuf field <code>repeated string forward_headers = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getForwardHeaders()
    {
        return $this->forward_headers;
    }

    /**
     * Optional. List of the HTTP headers to forward to the extension
     * (from the client or backend). If omitted, all headers are sent.
     * Each element is a string indicating the header name.
     *
     * Generated from protobuf field <code>repeated string forward_headers = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setForwardHeaders($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->forward_headers = $arr;

        return $this;
    }

}


