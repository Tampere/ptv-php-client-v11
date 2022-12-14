<?php
/**
 * VmOpenApiOrganizationSaha
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
 * VmOpenApiOrganizationSaha Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of Saha organization
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class VmOpenApiOrganizationSaha implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'VmOpenApiOrganizationSaha';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'parentOrganizationId' => 'string',
'sahaId' => 'string',
'organizationNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'modified' => '\DateTime',
'publishingStatus' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'parentOrganizationId' => 'uuid',
'sahaId' => null,
'organizationNames' => null,
'modified' => 'date-time',
'publishingStatus' => null    ];

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
'parentOrganizationId' => 'parentOrganizationId',
'sahaId' => 'sahaId',
'organizationNames' => 'organizationNames',
'modified' => 'modified',
'publishingStatus' => 'publishingStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'parentOrganizationId' => 'setParentOrganizationId',
'sahaId' => 'setSahaId',
'organizationNames' => 'setOrganizationNames',
'modified' => 'setModified',
'publishingStatus' => 'setPublishingStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'parentOrganizationId' => 'getParentOrganizationId',
'sahaId' => 'getSahaId',
'organizationNames' => 'getOrganizationNames',
'modified' => 'getModified',
'publishingStatus' => 'getPublishingStatus'    ];

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
        $this->container['parentOrganizationId'] = isset($data['parentOrganizationId']) ? $data['parentOrganizationId'] : null;
        $this->container['sahaId'] = isset($data['sahaId']) ? $data['sahaId'] : null;
        $this->container['organizationNames'] = isset($data['organizationNames']) ? $data['organizationNames'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
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
     * @param string $id Entity identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets parentOrganizationId
     *
     * @return string
     */
    public function getParentOrganizationId()
    {
        return isset($this->container['parentOrganizationId']) ? $this->container['parentOrganizationId'] : null;
    }

    /**
     * Sets parentOrganizationId
     *
     * @param string $parentOrganizationId Organizations parent organization identifier if exists.
     *
     * @return $this
     */
    public function setParentOrganizationId($parentOrganizationId)
    {
        $this->container['parentOrganizationId'] = $parentOrganizationId;

        return $this;
    }

    /**
     * Gets sahaId
     *
     * @return string
     */
    public function getSahaId()
    {
        return isset($this->container['sahaId']) ? $this->container['sahaId'] : null;
    }

    /**
     * Sets sahaId
     *
     * @param string $sahaId Organizations Saha identifier if exists.
     *
     * @return $this
     */
    public function setSahaId($sahaId)
    {
        $this->container['sahaId'] = $sahaId;

        return $this;
    }

    /**
     * Gets organizationNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getOrganizationNames()
    {
        return isset($this->container['organizationNames']) ? $this->container['organizationNames'] : null;
    }

    /**
     * Sets organizationNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $organizationNames List of organization names. Possible type values are: Name, AlternativeName.
     *
     * @return $this
     */
    public function setOrganizationNames($organizationNames)
    {
        $this->container['organizationNames'] = $organizationNames;

        return $this;
    }

    /**
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return isset($this->container['modified']) ? $this->container['modified'] : null;
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified Date when item was modified/created (UTC).
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets publishingStatus
     *
     * @return string
     */
    public function getPublishingStatus()
    {
        return isset($this->container['publishingStatus']) ? $this->container['publishingStatus'] : null;
    }

    /**
     * Sets publishingStatus
     *
     * @param string $publishingStatus Publishing status (Published or Deleted).
     *
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

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
