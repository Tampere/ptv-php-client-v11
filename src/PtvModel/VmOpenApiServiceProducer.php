<?php
/**
 * VmOpenApiServiceProducer
 *
 * PHP version 5
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * PTV Open Api version 11
 *
 * Here you can see listed all the PTV Open Api methods.
 *
 * OpenAPI spec version: v11
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Tampere\PtvV11\PtvModel;

use \ArrayAccess;
use \Tampere\PtvV11\ObjectSerializer;

/**
 * VmOpenApiServiceProducer Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of service producer
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmOpenApiServiceProducer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VmOpenApiServiceProducer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'ownerReferenceId' => 'string',
'orderNumber' => 'int',
'provisionType' => 'string',
'additionalInformation' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'organizations' => '\Tampere\PtvV11\PtvModel\VmOpenApiItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'ownerReferenceId' => 'uuid',
'orderNumber' => 'int32',
'provisionType' => null,
'additionalInformation' => null,
'organizations' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
'ownerReferenceId' => 'ownerReferenceId',
'orderNumber' => 'orderNumber',
'provisionType' => 'provisionType',
'additionalInformation' => 'additionalInformation',
'organizations' => 'organizations'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'ownerReferenceId' => 'setOwnerReferenceId',
'orderNumber' => 'setOrderNumber',
'provisionType' => 'setProvisionType',
'additionalInformation' => 'setAdditionalInformation',
'organizations' => 'setOrganizations'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'ownerReferenceId' => 'getOwnerReferenceId',
'orderNumber' => 'getOrderNumber',
'provisionType' => 'getProvisionType',
'additionalInformation' => 'getAdditionalInformation',
'organizations' => 'getOrganizations'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['ownerReferenceId'] = isset($data['ownerReferenceId']) ? $data['ownerReferenceId'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
        $this->container['provisionType'] = isset($data['provisionType']) ? $data['provisionType'] : null;
        $this->container['additionalInformation'] = isset($data['additionalInformation']) ? $data['additionalInformation'] : null;
        $this->container['organizations'] = isset($data['organizations']) ? $data['organizations'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['provisionType'] === null) {
            $invalidProperties[] = "'provisionType' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Gets or sets the identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets ownerReferenceId
     *
     * @return string
     */
    public function getOwnerReferenceId()
    {
        return $this->container['ownerReferenceId'];
    }

    /**
     * Sets ownerReferenceId
     *
     * @param string $ownerReferenceId Gets or sets the owner reference identifier.
     *
     * @return $this
     */
    public function setOwnerReferenceId($ownerReferenceId)
    {
        $this->container['ownerReferenceId'] = $ownerReferenceId;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber
     *
     * @param int $orderNumber The order of service voucher.
     *
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * Gets provisionType
     *
     * @return string
     */
    public function getProvisionType()
    {
        return $this->container['provisionType'];
    }

    /**
     * Sets provisionType
     *
     * @param string $provisionType Provision type, valid values for version 8 are SelfProducedServices, ProcuredServices or Other.  For older versions valid values are SelfProduced, PurchaseServices or Other.
     *
     * @return $this
     */
    public function setProvisionType($provisionType)
    {
        $this->container['provisionType'] = $provisionType;

        return $this;
    }

    /**
     * Gets additionalInformation
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getAdditionalInformation()
    {
        return $this->container['additionalInformation'];
    }

    /**
     * Sets additionalInformation
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $additionalInformation Localized list of additional information. (Max.Length: 150).
     *
     * @return $this
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->container['additionalInformation'] = $additionalInformation;

        return $this;
    }

    /**
     * Gets organizations
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiItem[]
     */
    public function getOrganizations()
    {
        return $this->container['organizations'];
    }

    /**
     * Sets organizations
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiItem[] $organizations Gets or sets the organization information.
     *
     * @return $this
     */
    public function setOrganizations($organizations)
    {
        $this->container['organizations'] = $organizations;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
