<?php
/**
 * V11VmOpenApiServiceAndChannelIn
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
 * V11VmOpenApiServiceAndChannelIn Class Doc Comment
 *
 * @category Class
 * @description OPEN API V11 - View Model of service and channel relation
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiServiceAndChannelIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiServiceAndChannelIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serviceId' => 'string',
'serviceChannelId' => 'string',
'serviceChargeType' => 'string',
'description' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'serviceHours' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]',
'contactDetails' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsIn'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serviceId' => null,
'serviceChannelId' => null,
'serviceChargeType' => null,
'description' => null,
'serviceHours' => null,
'contactDetails' => null    ];

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
        'serviceId' => 'serviceId',
'serviceChannelId' => 'serviceChannelId',
'serviceChargeType' => 'serviceChargeType',
'description' => 'description',
'serviceHours' => 'serviceHours',
'contactDetails' => 'contactDetails'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceId' => 'setServiceId',
'serviceChannelId' => 'setServiceChannelId',
'serviceChargeType' => 'setServiceChargeType',
'description' => 'setDescription',
'serviceHours' => 'setServiceHours',
'contactDetails' => 'setContactDetails'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceId' => 'getServiceId',
'serviceChannelId' => 'getServiceChannelId',
'serviceChargeType' => 'getServiceChargeType',
'description' => 'getDescription',
'serviceHours' => 'getServiceHours',
'contactDetails' => 'getContactDetails'    ];

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
        $this->container['serviceId'] = isset($data['serviceId']) ? $data['serviceId'] : null;
        $this->container['serviceChannelId'] = isset($data['serviceChannelId']) ? $data['serviceChannelId'] : null;
        $this->container['serviceChargeType'] = isset($data['serviceChargeType']) ? $data['serviceChargeType'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['serviceHours'] = isset($data['serviceHours']) ? $data['serviceHours'] : null;
        $this->container['contactDetails'] = isset($data['contactDetails']) ? $data['contactDetails'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serviceId'] === null) {
            $invalidProperties[] = "'serviceId' can't be null";
        }
        if ($this->container['serviceChannelId'] === null) {
            $invalidProperties[] = "'serviceChannelId' can't be null";
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
     * Gets serviceId
     *
     * @return string
     */
    public function getServiceId()
    {
        return $this->container['serviceId'];
    }

    /**
     * Sets serviceId
     *
     * @param string $serviceId PTV service identifier.
     *
     * @return $this
     */
    public function setServiceId($serviceId)
    {
        $this->container['serviceId'] = $serviceId;

        return $this;
    }

    /**
     * Gets serviceChannelId
     *
     * @return string
     */
    public function getServiceChannelId()
    {
        return $this->container['serviceChannelId'];
    }

    /**
     * Sets serviceChannelId
     *
     * @param string $serviceChannelId PTV service channel identifier.
     *
     * @return $this
     */
    public function setServiceChannelId($serviceChannelId)
    {
        $this->container['serviceChannelId'] = $serviceChannelId;

        return $this;
    }

    /**
     * Gets serviceChargeType
     *
     * @return string
     */
    public function getServiceChargeType()
    {
        return $this->container['serviceChargeType'];
    }

    /**
     * Sets serviceChargeType
     *
     * @param string $serviceChargeType Service charge type. Possible values are: Chargeable, FreeOfCharge or Other.
     *
     * @return $this
     */
    public function setServiceChargeType($serviceChargeType)
    {
        $this->container['serviceChargeType'] = $serviceChargeType;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $description List of localized service channel relationship descriptions. Possible type values are: Description, ChargeTypeAdditionalInfo. (Max.Length: 500 Description). (Max.Length: 500 ChargeTypeAdditionalInfo).
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets serviceHours
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]
     */
    public function getServiceHours()
    {
        return $this->container['serviceHours'];
    }

    /**
     * Sets serviceHours
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[] $serviceHours List of connection related service hours.
     *
     * @return $this
     */
    public function setServiceHours($serviceHours)
    {
        $this->container['serviceHours'] = $serviceHours;

        return $this;
    }

    /**
     * Gets contactDetails
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsIn
     */
    public function getContactDetails()
    {
        return $this->container['contactDetails'];
    }

    /**
     * Sets contactDetails
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsIn $contactDetails contactDetails
     *
     * @return $this
     */
    public function setContactDetails($contactDetails)
    {
        $this->container['contactDetails'] = $contactDetails;

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