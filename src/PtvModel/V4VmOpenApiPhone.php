<?php
/**
 * V4VmOpenApiPhone
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
 * V4VmOpenApiPhone Class Doc Comment
 *
 * @category Class
 * @description OPEN API V4 - View Model of phone
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V4VmOpenApiPhone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V4VmOpenApiPhone';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'number' => 'string',
'language' => 'string',
'ownerReferenceId' => 'string',
'ownerReferenceId2' => 'string',
'orderNumber' => 'int',
'prefixNumber' => 'string',
'isFinnishServiceNumber' => 'bool',
'additionalInformation' => 'string',
'serviceChargeType' => 'string',
'chargeDescription' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'number' => 'tel',
'language' => null,
'ownerReferenceId' => 'uuid',
'ownerReferenceId2' => 'uuid',
'orderNumber' => 'int32',
'prefixNumber' => null,
'isFinnishServiceNumber' => null,
'additionalInformation' => null,
'serviceChargeType' => null,
'chargeDescription' => null    ];

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
'number' => 'number',
'language' => 'language',
'ownerReferenceId' => 'ownerReferenceId',
'ownerReferenceId2' => 'ownerReferenceId2',
'orderNumber' => 'orderNumber',
'prefixNumber' => 'prefixNumber',
'isFinnishServiceNumber' => 'isFinnishServiceNumber',
'additionalInformation' => 'additionalInformation',
'serviceChargeType' => 'serviceChargeType',
'chargeDescription' => 'chargeDescription'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'number' => 'setNumber',
'language' => 'setLanguage',
'ownerReferenceId' => 'setOwnerReferenceId',
'ownerReferenceId2' => 'setOwnerReferenceId2',
'orderNumber' => 'setOrderNumber',
'prefixNumber' => 'setPrefixNumber',
'isFinnishServiceNumber' => 'setIsFinnishServiceNumber',
'additionalInformation' => 'setAdditionalInformation',
'serviceChargeType' => 'setServiceChargeType',
'chargeDescription' => 'setChargeDescription'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'number' => 'getNumber',
'language' => 'getLanguage',
'ownerReferenceId' => 'getOwnerReferenceId',
'ownerReferenceId2' => 'getOwnerReferenceId2',
'orderNumber' => 'getOrderNumber',
'prefixNumber' => 'getPrefixNumber',
'isFinnishServiceNumber' => 'getIsFinnishServiceNumber',
'additionalInformation' => 'getAdditionalInformation',
'serviceChargeType' => 'getServiceChargeType',
'chargeDescription' => 'getChargeDescription'    ];

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
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['ownerReferenceId'] = isset($data['ownerReferenceId']) ? $data['ownerReferenceId'] : null;
        $this->container['ownerReferenceId2'] = isset($data['ownerReferenceId2']) ? $data['ownerReferenceId2'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
        $this->container['prefixNumber'] = isset($data['prefixNumber']) ? $data['prefixNumber'] : null;
        $this->container['isFinnishServiceNumber'] = isset($data['isFinnishServiceNumber']) ? $data['isFinnishServiceNumber'] : null;
        $this->container['additionalInformation'] = isset($data['additionalInformation']) ? $data['additionalInformation'] : null;
        $this->container['serviceChargeType'] = isset($data['serviceChargeType']) ? $data['serviceChargeType'] : null;
        $this->container['chargeDescription'] = isset($data['chargeDescription']) ? $data['chargeDescription'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
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
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return isset($this->container['number']) ? $this->container['number'] : null;
    }

    /**
     * Sets number
     *
     * @param string $number Phone number.
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return isset($this->container['language']) ? $this->container['language'] : null;
    }

    /**
     * Sets language
     *
     * @param string $language Language of this object. Valid values are: fi, sv or en.
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

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
     * Gets ownerReferenceId2
     *
     * @return string
     */
    public function getOwnerReferenceId2()
    {
        return isset($this->container['ownerReferenceId2']) ? $this->container['ownerReferenceId2'] : null;
    }

    /**
     * Sets ownerReferenceId2
     *
     * @param string $ownerReferenceId2 Gets or sets the owner reference identifier.
     *
     * @return $this
     */
    public function setOwnerReferenceId2($ownerReferenceId2)
    {
        $this->container['ownerReferenceId2'] = $ownerReferenceId2;

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
     * @param int $orderNumber The order of phone number.
     *
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;

        return $this;
    }

    /**
     * Gets prefixNumber
     *
     * @return string
     */
    public function getPrefixNumber()
    {
        return isset($this->container['prefixNumber']) ? $this->container['prefixNumber'] : null;
    }

    /**
     * Sets prefixNumber
     *
     * @param string $prefixNumber Prefix for the phone number.
     *
     * @return $this
     */
    public function setPrefixNumber($prefixNumber)
    {
        $this->container['prefixNumber'] = $prefixNumber;

        return $this;
    }

    /**
     * Gets isFinnishServiceNumber
     *
     * @return bool
     */
    public function getIsFinnishServiceNumber()
    {
        return isset($this->container['isFinnishServiceNumber']) ? $this->container['isFinnishServiceNumber'] : null;
    }

    /**
     * Sets isFinnishServiceNumber
     *
     * @param bool $isFinnishServiceNumber Defines if number is Finnish service number. If true prefix number can be left empty.
     *
     * @return $this
     */
    public function setIsFinnishServiceNumber($isFinnishServiceNumber)
    {
        $this->container['isFinnishServiceNumber'] = $isFinnishServiceNumber;

        return $this;
    }

    /**
     * Gets additionalInformation
     *
     * @return string
     */
    public function getAdditionalInformation()
    {
        return isset($this->container['additionalInformation']) ? $this->container['additionalInformation'] : null;
    }

    /**
     * Sets additionalInformation
     *
     * @param string $additionalInformation Additional information. (Max.Length: 150).
     *
     * @return $this
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->container['additionalInformation'] = $additionalInformation;

        return $this;
    }

    /**
     * Gets serviceChargeType
     *
     * @return string
     */
    public function getServiceChargeType()
    {
        return isset($this->container['serviceChargeType']) ? $this->container['serviceChargeType'] : null;
    }

    /**
     * Sets serviceChargeType
     *
     * @param string $serviceChargeType Service charge type. Possible values are: Chargeable, FreeOfCharge or Other.  In version 7 and older: Charged, Free or Other.
     *
     * @return $this
     */
    public function setServiceChargeType($serviceChargeType)
    {
        $this->container['serviceChargeType'] = $serviceChargeType;

        return $this;
    }

    /**
     * Gets chargeDescription
     *
     * @return string
     */
    public function getChargeDescription()
    {
        return isset($this->container['chargeDescription']) ? $this->container['chargeDescription'] : null;
    }

    /**
     * Sets chargeDescription
     *
     * @param string $chargeDescription Charge description. (Max.Length: 150).
     *
     * @return $this
     */
    public function setChargeDescription($chargeDescription)
    {
        $this->container['chargeDescription'] = $chargeDescription;

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
