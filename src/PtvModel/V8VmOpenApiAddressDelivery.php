<?php
/**
 * V8VmOpenApiAddressDelivery
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
 * V8VmOpenApiAddressDelivery Class Doc Comment
 *
 * @category Class
 * @description OPEN API V8 - View Model of delivery address
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V8VmOpenApiAddressDelivery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V8VmOpenApiAddressDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'subType' => 'string',
'postOfficeBoxAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBox',
'streetAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreet',
'deliveryAddressInText' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'receiver' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'subType' => null,
'postOfficeBoxAddress' => null,
'streetAddress' => null,
'deliveryAddressInText' => null,
'receiver' => null    ];

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
        'subType' => 'subType',
'postOfficeBoxAddress' => 'postOfficeBoxAddress',
'streetAddress' => 'streetAddress',
'deliveryAddressInText' => 'deliveryAddressInText',
'receiver' => 'receiver'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'subType' => 'setSubType',
'postOfficeBoxAddress' => 'setPostOfficeBoxAddress',
'streetAddress' => 'setStreetAddress',
'deliveryAddressInText' => 'setDeliveryAddressInText',
'receiver' => 'setReceiver'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'subType' => 'getSubType',
'postOfficeBoxAddress' => 'getPostOfficeBoxAddress',
'streetAddress' => 'getStreetAddress',
'deliveryAddressInText' => 'getDeliveryAddressInText',
'receiver' => 'getReceiver'    ];

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
        $this->container['subType'] = isset($data['subType']) ? $data['subType'] : null;
        $this->container['postOfficeBoxAddress'] = isset($data['postOfficeBoxAddress']) ? $data['postOfficeBoxAddress'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['deliveryAddressInText'] = isset($data['deliveryAddressInText']) ? $data['deliveryAddressInText'] : null;
        $this->container['receiver'] = isset($data['receiver']) ? $data['receiver'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets subType
     *
     * @return string
     */
    public function getSubType()
    {
        return $this->container['subType'];
    }

    /**
     * Sets subType
     *
     * @param string $subType Address sub type, Street, PostOfficeBox or NoAddress.
     *
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;

        return $this;
    }

    /**
     * Gets postOfficeBoxAddress
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBox
     */
    public function getPostOfficeBoxAddress()
    {
        return $this->container['postOfficeBoxAddress'];
    }

    /**
     * Sets postOfficeBoxAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBox $postOfficeBoxAddress postOfficeBoxAddress
     *
     * @return $this
     */
    public function setPostOfficeBoxAddress($postOfficeBoxAddress)
    {
        $this->container['postOfficeBoxAddress'] = $postOfficeBoxAddress;

        return $this;
    }

    /**
     * Gets streetAddress
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreet
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreet $streetAddress streetAddress
     *
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets deliveryAddressInText
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getDeliveryAddressInText()
    {
        return $this->container['deliveryAddressInText'];
    }

    /**
     * Sets deliveryAddressInText
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $deliveryAddressInText Localized list of delivery address information.
     *
     * @return $this
     */
    public function setDeliveryAddressInText($deliveryAddressInText)
    {
        $this->container['deliveryAddressInText'] = $deliveryAddressInText;

        return $this;
    }

    /**
     * Gets receiver
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getReceiver()
    {
        return $this->container['receiver'];
    }

    /**
     * Sets receiver
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $receiver List of localized form receiver. One per language.
     *
     * @return $this
     */
    public function setReceiver($receiver)
    {
        $this->container['receiver'] = $receiver;

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
