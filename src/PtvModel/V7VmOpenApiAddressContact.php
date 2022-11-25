<?php
/**
 * V7VmOpenApiAddressContact
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
 * V7VmOpenApiAddressContact Class Doc Comment
 *
 * @category Class
 * @description OPEN API V7 - View Model of address
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V7VmOpenApiAddressContact implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V7VmOpenApiAddressContact';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'postOfficeBoxAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBox',
'streetAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetWithCoordinates',
'country' => 'string',
'type' => 'string',
'subType' => 'string',
'locationAbroad' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'postOfficeBoxAddress' => null,
'streetAddress' => null,
'country' => null,
'type' => null,
'subType' => null,
'locationAbroad' => null    ];

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
'postOfficeBoxAddress' => 'postOfficeBoxAddress',
'streetAddress' => 'streetAddress',
'country' => 'country',
'type' => 'type',
'subType' => 'subType',
'locationAbroad' => 'locationAbroad'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'postOfficeBoxAddress' => 'setPostOfficeBoxAddress',
'streetAddress' => 'setStreetAddress',
'country' => 'setCountry',
'type' => 'setType',
'subType' => 'setSubType',
'locationAbroad' => 'setLocationAbroad'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'postOfficeBoxAddress' => 'getPostOfficeBoxAddress',
'streetAddress' => 'getStreetAddress',
'country' => 'getCountry',
'type' => 'getType',
'subType' => 'getSubType',
'locationAbroad' => 'getLocationAbroad'    ];

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
        $this->container['postOfficeBoxAddress'] = isset($data['postOfficeBoxAddress']) ? $data['postOfficeBoxAddress'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subType'] = isset($data['subType']) ? $data['subType'] : null;
        $this->container['locationAbroad'] = isset($data['locationAbroad']) ? $data['locationAbroad'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return isset($this->container['id']) ? $this->container['id'] : null;
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
     * Gets postOfficeBoxAddress
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBox
     */
    public function getPostOfficeBoxAddress()
    {
        return isset($this->container['postOfficeBoxAddress']) ? $this->container['postOfficeBoxAddress'] : null;
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
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetWithCoordinates
     */
    public function getStreetAddress()
    {
        return isset($this->container['streetAddress']) ? $this->container['streetAddress'] : null;
    }

    /**
     * Sets streetAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetWithCoordinates $streetAddress streetAddress
     *
     * @return $this
     */
    public function setStreetAddress($streetAddress)
    {
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return isset($this->container['country']) ? $this->container['country'] : null;
    }

    /**
     * Sets country
     *
     * @param string $country Country code (ISO 3166-1 alpha-2), for example FI.
     *
     * @return $this
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return isset($this->container['type']) ? $this->container['type'] : null;
    }

    /**
     * Sets type
     *
     * @param string $type Address type, Postal.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subType
     *
     * @return string
     */
    public function getSubType()
    {
        return isset($this->container['subType']) ? $this->container['subType'] : null;
    }

    /**
     * Sets subType
     *
     * @param string $subType Address sub type, Street, PostOfficeBox or Abroad.
     *
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;

        return $this;
    }

    /**
     * Gets locationAbroad
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getLocationAbroad()
    {
        return isset($this->container['locationAbroad']) ? $this->container['locationAbroad'] : null;
    }

    /**
     * Sets locationAbroad
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $locationAbroad Localized list of foreign address information.
     *
     * @return $this
     */
    public function setLocationAbroad($locationAbroad)
    {
        $this->container['locationAbroad'] = $locationAbroad;

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
