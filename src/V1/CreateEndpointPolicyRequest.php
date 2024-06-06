<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networkservices/v1/endpoint_policy.proto

namespace Google\Cloud\NetworkServices\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request used with the CreateEndpointPolicy method.
 *
 * Generated from protobuf message <code>google.cloud.networkservices.v1.CreateEndpointPolicyRequest</code>
 */
class CreateEndpointPolicyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource of the EndpointPolicy. Must be in the
     * format `projects/&#42;&#47;locations/global`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. Short name of the EndpointPolicy resource to be created.
     * E.g. "CustomECS".
     *
     * Generated from protobuf field <code>string endpoint_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $endpoint_policy_id = '';
    /**
     * Required. EndpointPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.EndpointPolicy endpoint_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $endpoint_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource of the EndpointPolicy. Must be in the
     *           format `projects/&#42;&#47;locations/global`.
     *     @type string $endpoint_policy_id
     *           Required. Short name of the EndpointPolicy resource to be created.
     *           E.g. "CustomECS".
     *     @type \Google\Cloud\NetworkServices\V1\EndpointPolicy $endpoint_policy
     *           Required. EndpointPolicy resource to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networkservices\V1\EndpointPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource of the EndpointPolicy. Must be in the
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
     * Required. The parent resource of the EndpointPolicy. Must be in the
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
     * Required. Short name of the EndpointPolicy resource to be created.
     * E.g. "CustomECS".
     *
     * Generated from protobuf field <code>string endpoint_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEndpointPolicyId()
    {
        return $this->endpoint_policy_id;
    }

    /**
     * Required. Short name of the EndpointPolicy resource to be created.
     * E.g. "CustomECS".
     *
     * Generated from protobuf field <code>string endpoint_policy_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointPolicyId($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_policy_id = $var;

        return $this;
    }

    /**
     * Required. EndpointPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.EndpointPolicy endpoint_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\NetworkServices\V1\EndpointPolicy|null
     */
    public function getEndpointPolicy()
    {
        return $this->endpoint_policy;
    }

    public function hasEndpointPolicy()
    {
        return isset($this->endpoint_policy);
    }

    public function clearEndpointPolicy()
    {
        unset($this->endpoint_policy);
    }

    /**
     * Required. EndpointPolicy resource to be created.
     *
     * Generated from protobuf field <code>.google.cloud.networkservices.v1.EndpointPolicy endpoint_policy = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\NetworkServices\V1\EndpointPolicy $var
     * @return $this
     */
    public function setEndpointPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkServices\V1\EndpointPolicy::class);
        $this->endpoint_policy = $var;

        return $this;
    }

}

