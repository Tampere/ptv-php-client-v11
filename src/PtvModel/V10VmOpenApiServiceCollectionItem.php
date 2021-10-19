<?php
/**
 * V10VmOpenApiServiceCollectionItem
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
 * V10VmOpenApiServiceCollectionItem Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of service collection item.
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V10VmOpenApiServiceCollectionItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V10VmOpenApiServiceCollectionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'serviceCollectionNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'serviceCollectionDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'services' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[]',
'serviceChannels' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[]',
'name' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'serviceCollectionNames' => null,
'serviceCollectionDescriptions' => null,
'services' => null,
'serviceChannels' => null,
'name' => null    ];

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
'serviceCollectionNames' => 'serviceCollectionNames',
'serviceCollectionDescriptions' => 'serviceCollectionDescriptions',
'services' => 'services',
'serviceChannels' => 'serviceChannels',
'name' => 'name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'serviceCollectionNames' => 'setServiceCollectionNames',
'serviceCollectionDescriptions' => 'setServiceCollectionDescriptions',
'services' => 'setServices',
'serviceChannels' => 'setServiceChannels',
'name' => 'setName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'serviceCollectionNames' => 'getServiceCollectionNames',
'serviceCollectionDescriptions' => 'getServiceCollectionDescriptions',
'services' => 'getServices',
'serviceChannels' => 'getServiceChannels',
'name' => 'getName'    ];

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
        $this->container['serviceCollectionNames'] = isset($data['serviceCollectionNames']) ? $data['serviceCollectionNames'] : null;
        $this->container['serviceCollectionDescriptions'] = isset($data['serviceCollectionDescriptions']) ? $data['serviceCollectionDescriptions'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['serviceChannels'] = isset($data['serviceChannels']) ? $data['serviceChannels'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Id of the item.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets serviceCollectionNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getServiceCollectionNames()
    {
        return $this->container['serviceCollectionNames'];
    }

    /**
     * Sets serviceCollectionNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $serviceCollectionNames List of localized service collection names.
     *
     * @return $this
     */
    public function setServiceCollectionNames($serviceCollectionNames)
    {
        $this->container['serviceCollectionNames'] = $serviceCollectionNames;

        return $this;
    }

    /**
     * Gets serviceCollectionDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceCollectionDescriptions()
    {
        return $this->container['serviceCollectionDescriptions'];
    }

    /**
     * Sets serviceCollectionDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceCollectionDescriptions List of localized service collection descriptions.
     *
     * @return $this
     */
    public function setServiceCollectionDescriptions($serviceCollectionDescriptions)
    {
        $this->container['serviceCollectionDescriptions'] = $serviceCollectionDescriptions;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[] $services List of service collection services.
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets serviceChannels
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[]
     */
    public function getServiceChannels()
    {
        return $this->container['serviceChannels'];
    }

    /**
     * Sets serviceChannels
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[] $serviceChannels List of service collection services.
     *
     * @return $this
     */
    public function setServiceChannels($serviceChannels)
    {
        $this->container['serviceChannels'] = $serviceChannels;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

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