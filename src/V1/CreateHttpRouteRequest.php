<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/http_route.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used by the HttpRoute method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateHttpRouteRequest</code>
 */
class CreateHttpRouteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the HttpRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the HttpRoute resource to be created.
     *
     * Generated from protobuf field <code>string http_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $http_route_id = '';
    /**
     * Required. HttpRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.HttpRoute http_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $http_route = null;

    /**
     * @param string                                     $parent      Required. The parent resource of the HttpRoute. Must be in the
     *                                                                format `projects/&#42;/locations/global`. Please see
     *                                                                {@see NetworkServicesClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\NetworkServices\V1\HttpRoute $httpRoute   Required. HttpRoute resource to be created.
     * @param string                                     $httpRouteId Required. Short name of the HttpRoute resource to be created.
     *
     * @return \Google\Cloud\NetworkServices\V1\CreateHttpRouteRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\NetworkServices\V1\HttpRoute $httpRoute, string $httpRouteId): self
    {
        return (new self())
            ->setParent($parent)
            ->setHttpRoute($httpRoute)
            ->setHttpRouteId($httpRouteId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the HttpRoute. Must be in the
     *           format `projects/&#42;&#47;locations/global`.
     *     @type string $http_route_id
     *           Required. Short name of the HttpRoute resource to be created.
     *     @type \Google\Cloud\NetworkServices\V1\HttpRoute $http_route
     *           Required. HttpRoute resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\HttpRoute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the HttpRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource of the HttpRoute. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Short name of the HttpRoute resource to be created.
     *
     * Generated from protobuf field <code>string http_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getHttpRouteId()
    {
        return $this->http_route_id;
    }

    /**
     * Required. Short name of the HttpRoute resource to be created.
     *
     * Generated from protobuf field <code>string http_route_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setHttpRouteId($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_route_id = $var;

        return $this;
    }

    /**
     * Required. HttpRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.HttpRoute http_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\HttpRoute|null
     */
    public function getHttpRoute()
    {
        return $this->http_route;
    }

    public function hasHttpRoute()
    {
        return isset($this->http_route);
    }

    public function clearHttpRoute()
    {
        unset($this->http_route);
    }

    /**
     * Required. HttpRoute resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.HttpRoute http_route = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\HttpRoute $var
     * @return $this
     */
    public function setHttpRoute($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\HttpRoute::class);
        $this->http_route = $var;

        return $this;
    }

}

