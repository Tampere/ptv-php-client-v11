<?php
/**
 * VmOpenApiAddressPostOfficeBoxIn
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
 * VmOpenApiAddressPostOfficeBoxIn Class Doc Comment
 *
 * @category Class
 * @description OPEN API V7 - In view Model of post office box address.
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmOpenApiAddressPostOfficeBoxIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VmOpenApiAddressPostOfficeBoxIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'municipality' => 'string',
'additionalInformation' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'ownerReferenceId' => 'string',
'postOfficeBox' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'postalCode' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'municipality' => null,
'additionalInformation' => null,
'ownerReferenceId' => 'uuid',
'postOfficeBox' => null,
'postalCode' => null    ];

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
'municipality' => 'municipality',
'additionalInformation' => 'additionalInformation',
'ownerReferenceId' => 'ownerReferenceId',
'postOfficeBox' => 'postOfficeBox',
'postalCode' => 'postalCode'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'municipality' => 'setMunicipality',
'additionalInformation' => 'setAdditionalInformation',
'ownerReferenceId' => 'setOwnerReferenceId',
'postOfficeBox' => 'setPostOfficeBox',
'postalCode' => 'setPostalCode'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'municipality' => 'getMunicipality',
'additionalInformation' => 'getAdditionalInformation',
'ownerReferenceId' => 'getOwnerReferenceId',
'postOfficeBox' => 'getPostOfficeBox',
'postalCode' => 'getPostalCode'    ];

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
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['additionalInformation'] = isset($data['additionalInformation']) ? $data['additionalInformation'] : null;
        $this->container['ownerReferenceId'] = isset($data['ownerReferenceId']) ? $data['ownerReferenceId'] : null;
        $this->container['postOfficeBox'] = isset($data['postOfficeBox']) ? $data['postOfficeBox'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['postOfficeBox'] === null) {
            $invalidProperties[] = "'postOfficeBox' can't be null";
        }
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
     * Gets municipality
     *
     * @return string
     */
    public function getMunicipality()
    {
        return isset($this->container['municipality']) ? $this->container['municipality'] : null;
    }

    /**
     * Sets municipality
     *
     * @param string $municipality Municipality code (e.g. 091).
     *
     * @return $this
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

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
     * Gets ownerReferenceId
     *
     * @return string
     */
    public function getOwnerReferenceId()
    {
        return isset($this->container['ownerReferenceId']) ? $this->container['ownerReferenceId'] : null;
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
     * Gets postOfficeBox
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getPostOfficeBox()
    {
        return isset($this->container['postOfficeBox']) ? $this->container['postOfficeBox'] : null;
    }

    /**
     * Sets postOfficeBox
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $postOfficeBox Post office box like PL 310 (Max.Length: 100).
     *
     * @return $this
     */
    public function setPostOfficeBox($postOfficeBox)
    {
        $this->container['postOfficeBox'] = $postOfficeBox;

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
