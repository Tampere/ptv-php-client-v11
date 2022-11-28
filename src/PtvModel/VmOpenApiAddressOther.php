<?php
/**
 * VmOpenApiAddressOther
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
 * VmOpenApiAddressOther Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of other address.
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmOpenApiAddressOther implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VmOpenApiAddressOther';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'postalCode' => 'string',
'postOffice' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'additionalInformation' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'latitude' => 'string',
'longitude' => 'string',
'municipality' => '\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'postalCode' => null,
'postOffice' => null,
'additionalInformation' => null,
'latitude' => null,
'longitude' => null,
'municipality' => null    ];

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
'postalCode' => 'postalCode',
'postOffice' => 'postOffice',
'additionalInformation' => 'additionalInformation',
'latitude' => 'latitude',
'longitude' => 'longitude',
'municipality' => 'municipality'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'postalCode' => 'setPostalCode',
'postOffice' => 'setPostOffice',
'additionalInformation' => 'setAdditionalInformation',
'latitude' => 'setLatitude',
'longitude' => 'setLongitude',
'municipality' => 'setMunicipality'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'postalCode' => 'getPostalCode',
'postOffice' => 'getPostOffice',
'additionalInformation' => 'getAdditionalInformation',
'latitude' => 'getLatitude',
'longitude' => 'getLongitude',
'municipality' => 'getMunicipality'    ];

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
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['postOffice'] = isset($data['postOffice']) ? $data['postOffice'] : null;
        $this->container['additionalInformation'] = isset($data['additionalInformation']) ? $data['additionalInformation'] : null;
        $this->container['latitude'] = isset($data['latitude']) ? $data['latitude'] : null;
        $this->container['longitude'] = isset($data['longitude']) ? $data['longitude'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
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
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return isset($this->container['postalCode']) ? $this->container['postalCode'] : null;
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode Postal code, for example 00100.
     *
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets postOffice
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getPostOffice()
    {
        return isset($this->container['postOffice']) ? $this->container['postOffice'] : null;
    }

    /**
     * Sets postOffice
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $postOffice List of localized Post offices, for example Helsinki, Helsingfors.
     *
     * @return $this
     */
    public function setPostOffice($postOffice)
    {
        $this->container['postOffice'] = $postOffice;

        return $this;
    }

    /**
     * Gets additionalInformation
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getAdditionalInformation()
    {
        return isset($this->container['additionalInformation']) ? $this->container['additionalInformation'] : null;
    }

    /**
     * Sets additionalInformation
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $additionalInformation Localized list of additional information about the address. (Max.Length: 150).
     *
     * @return $this
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->container['additionalInformation'] = $additionalInformation;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string
     */
    public function getLatitude()
    {
        return isset($this->container['latitude']) ? $this->container['latitude'] : null;
    }

    /**
     * Sets latitude
     *
     * @param string $latitude Location latitude coordinate.
     *
     * @return $this
     */
    public function setLatitude($latitude)
    {
        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string
     */
    public function getLongitude()
    {
        return isset($this->container['longitude']) ? $this->container['longitude'] : null;
    }

    /**
     * Sets longitude
     *
     * @param string $longitude Location longitude coordinate.
     *
     * @return $this
     */
    public function setLongitude($longitude)
    {
        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality
     */
    public function getMunicipality()
    {
        return isset($this->container['municipality']) ? $this->container['municipality'] : null;
    }

    /**
     * Sets municipality
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality $municipality municipality
     *
     * @return $this
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

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
