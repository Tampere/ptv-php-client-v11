<?php
/**
 * V8VmOpenApiAddressDeliveryIn
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
 * V8VmOpenApiAddressDeliveryIn Class Doc Comment
 *
 * @category Class
 * @description OPEN API V8 - View Model of delivery address
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V8VmOpenApiAddressDeliveryIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V8VmOpenApiAddressDeliveryIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'subType' => 'string',
'postOfficeBoxAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn',
'streetAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn',
'deliveryAddressInText' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'formReceiver' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'orderNumber' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'subType' => null,
'postOfficeBoxAddress' => null,
'streetAddress' => null,
'deliveryAddressInText' => null,
'formReceiver' => null,
'orderNumber' => 'int32'    ];

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
'subType' => 'subType',
'postOfficeBoxAddress' => 'postOfficeBoxAddress',
'streetAddress' => 'streetAddress',
'deliveryAddressInText' => 'deliveryAddressInText',
'formReceiver' => 'formReceiver',
'orderNumber' => 'orderNumber'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'subType' => 'setSubType',
'postOfficeBoxAddress' => 'setPostOfficeBoxAddress',
'streetAddress' => 'setStreetAddress',
'deliveryAddressInText' => 'setDeliveryAddressInText',
'formReceiver' => 'setFormReceiver',
'orderNumber' => 'setOrderNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'subType' => 'getSubType',
'postOfficeBoxAddress' => 'getPostOfficeBoxAddress',
'streetAddress' => 'getStreetAddress',
'deliveryAddressInText' => 'getDeliveryAddressInText',
'formReceiver' => 'getFormReceiver',
'orderNumber' => 'getOrderNumber'    ];

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
        $this->container['subType'] = isset($data['subType']) ? $data['subType'] : null;
        $this->container['postOfficeBoxAddress'] = isset($data['postOfficeBoxAddress']) ? $data['postOfficeBoxAddress'] : null;
        $this->container['streetAddress'] = isset($data['streetAddress']) ? $data['streetAddress'] : null;
        $this->container['deliveryAddressInText'] = isset($data['deliveryAddressInText']) ? $data['deliveryAddressInText'] : null;
        $this->container['formReceiver'] = isset($data['formReceiver']) ? $data['formReceiver'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['subType'] === null) {
            $invalidProperties[] = "'subType' can't be null";
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
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn
     */
    public function getPostOfficeBoxAddress()
    {
        return isset($this->container['postOfficeBoxAddress']) ? $this->container['postOfficeBoxAddress'] : null;
    }

    /**
     * Sets postOfficeBoxAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn $postOfficeBoxAddress postOfficeBoxAddress
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
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn
     */
    public function getStreetAddress()
    {
        return isset($this->container['streetAddress']) ? $this->container['streetAddress'] : null;
    }

    /**
     * Sets streetAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn $streetAddress streetAddress
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
        return isset($this->container['deliveryAddressInText']) ? $this->container['deliveryAddressInText'] : null;
    }

    /**
     * Sets deliveryAddressInText
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $deliveryAddressInText Localized list of foreign address information. (Max.Length: 150).
     *
     * @return $this
     */
    public function setDeliveryAddressInText($deliveryAddressInText)
    {
        $this->container['deliveryAddressInText'] = $deliveryAddressInText;

        return $this;
    }

    /**
     * Gets formReceiver
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getFormReceiver()
    {
        return isset($this->container['formReceiver']) ? $this->container['formReceiver'] : null;
    }

    /**
     * Sets formReceiver
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $formReceiver List of localized form receivers. One per language. (Max.Length: 100).
     *
     * @return $this
     */
    public function setFormReceiver($formReceiver)
    {
        $this->container['formReceiver'] = $formReceiver;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return int
     */
    public function getOrderNumber()
    {
        return isset($this->container['orderNumber']) ? $this->container['orderNumber'] : null;
    }

    /**
     * Sets orderNumber
     *
     * @param int $orderNumber Gets or sets the order number
     *
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;

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
