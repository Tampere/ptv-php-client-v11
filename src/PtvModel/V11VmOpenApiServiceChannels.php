<?php
/**
 * V11VmOpenApiServiceChannels
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
 * V11VmOpenApiServiceChannels Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of service channels
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiServiceChannels implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiServiceChannels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'electronicChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel',
'phoneChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel',
'printableFormChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel',
'locationChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel',
'webPageChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'electronicChannel' => null,
'phoneChannel' => null,
'printableFormChannel' => null,
'locationChannel' => null,
'webPageChannel' => null    ];

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
        'electronicChannel' => 'electronicChannel',
'phoneChannel' => 'phoneChannel',
'printableFormChannel' => 'printableFormChannel',
'locationChannel' => 'locationChannel',
'webPageChannel' => 'webPageChannel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'electronicChannel' => 'setElectronicChannel',
'phoneChannel' => 'setPhoneChannel',
'printableFormChannel' => 'setPrintableFormChannel',
'locationChannel' => 'setLocationChannel',
'webPageChannel' => 'setWebPageChannel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'electronicChannel' => 'getElectronicChannel',
'phoneChannel' => 'getPhoneChannel',
'printableFormChannel' => 'getPrintableFormChannel',
'locationChannel' => 'getLocationChannel',
'webPageChannel' => 'getWebPageChannel'    ];

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
        $this->container['electronicChannel'] = isset($data['electronicChannel']) ? $data['electronicChannel'] : null;
        $this->container['phoneChannel'] = isset($data['phoneChannel']) ? $data['phoneChannel'] : null;
        $this->container['printableFormChannel'] = isset($data['printableFormChannel']) ? $data['printableFormChannel'] : null;
        $this->container['locationChannel'] = isset($data['locationChannel']) ? $data['locationChannel'] : null;
        $this->container['webPageChannel'] = isset($data['webPageChannel']) ? $data['webPageChannel'] : null;
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
     * Gets electronicChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel
     */
    public function getElectronicChannel()
    {
        return isset($this->container['electronicChannel']) ? $this->container['electronicChannel'] : null;
    }

    /**
     * Sets electronicChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel $electronicChannel electronicChannel
     *
     * @return $this
     */
    public function setElectronicChannel($electronicChannel)
    {
        $this->container['electronicChannel'] = $electronicChannel;

        return $this;
    }

    /**
     * Gets phoneChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel
     */
    public function getPhoneChannel()
    {
        return isset($this->container['phoneChannel']) ? $this->container['phoneChannel'] : null;
    }

    /**
     * Sets phoneChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel $phoneChannel phoneChannel
     *
     * @return $this
     */
    public function setPhoneChannel($phoneChannel)
    {
        $this->container['phoneChannel'] = $phoneChannel;

        return $this;
    }

    /**
     * Gets printableFormChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel
     */
    public function getPrintableFormChannel()
    {
        return isset($this->container['printableFormChannel']) ? $this->container['printableFormChannel'] : null;
    }

    /**
     * Sets printableFormChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel $printableFormChannel printableFormChannel
     *
     * @return $this
     */
    public function setPrintableFormChannel($printableFormChannel)
    {
        $this->container['printableFormChannel'] = $printableFormChannel;

        return $this;
    }

    /**
     * Gets locationChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel
     */
    public function getLocationChannel()
    {
        return isset($this->container['locationChannel']) ? $this->container['locationChannel'] : null;
    }

    /**
     * Sets locationChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel $locationChannel locationChannel
     *
     * @return $this
     */
    public function setLocationChannel($locationChannel)
    {
        $this->container['locationChannel'] = $locationChannel;

        return $this;
    }

    /**
     * Gets webPageChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel
     */
    public function getWebPageChannel()
    {
        return isset($this->container['webPageChannel']) ? $this->container['webPageChannel'] : null;
    }

    /**
     * Sets webPageChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel $webPageChannel webPageChannel
     *
     * @return $this
     */
    public function setWebPageChannel($webPageChannel)
    {
        $this->container['webPageChannel'] = $webPageChannel;

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
