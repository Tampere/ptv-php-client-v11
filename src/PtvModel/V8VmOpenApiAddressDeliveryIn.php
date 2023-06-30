<?php
/**
 * V8VmOpenApiAddressDeliveryIn
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * PTV Open Api version 11
 *
 * Here you can see listed all the PTV Open Api methods.
 *
 * The version of the OpenAPI document: v11
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
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
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V8VmOpenApiAddressDeliveryIn implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V8VmOpenApiAddressDeliveryIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'subType' => 'string',
        'postOfficeBoxAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn',
        'streetAddress' => '\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn',
        'deliveryAddressInText' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'formReceiver' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'orderNumber' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'uuid',
        'subType' => null,
        'postOfficeBoxAddress' => null,
        'streetAddress' => null,
        'deliveryAddressInText' => null,
        'formReceiver' => null,
        'orderNumber' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'subType' => false,
		'postOfficeBoxAddress' => false,
		'streetAddress' => false,
		'deliveryAddressInText' => true,
		'formReceiver' => true,
		'orderNumber' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
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
        'orderNumber' => 'orderNumber'
    ];

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
        'orderNumber' => 'setOrderNumber'
    ];

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
        'orderNumber' => 'getOrderNumber'
    ];

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
        return self::$openAPIModelName;
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('subType', $data ?? [], null);
        $this->setIfExists('postOfficeBoxAddress', $data ?? [], null);
        $this->setIfExists('streetAddress', $data ?? [], null);
        $this->setIfExists('deliveryAddressInText', $data ?? [], null);
        $this->setIfExists('formReceiver', $data ?? [], null);
        $this->setIfExists('orderNumber', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
        if ((mb_strlen($this->container['subType']) < 1)) {
            $invalidProperties[] = "invalid value for 'subType', the character length must be bigger than or equal to 1.";
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
     * @return string|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string|null $id Gets or sets the identifier.
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
        return $this->container['subType'];
    }

    /**
     * Sets subType
     *
     * @param string $subType Address sub type, Street, PostOfficeBox or NoAddress.
     *
     * @return self
     */
    public function setSubType($subType)
    {
        if (is_null($subType)) {
            throw new \InvalidArgumentException('non-nullable subType cannot be null');
        }

        if ((mb_strlen($subType) < 1)) {
            throw new \InvalidArgumentException('invalid length for $subType when calling V8VmOpenApiAddressDeliveryIn., must be bigger than or equal to 1.');
        }

        $this->container['subType'] = $subType;

        return $this;
    }

    /**
     * Gets postOfficeBoxAddress
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn|null
     */
    public function getPostOfficeBoxAddress()
    {
        return $this->container['postOfficeBoxAddress'];
    }

    /**
     * Sets postOfficeBoxAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn|null $postOfficeBoxAddress postOfficeBoxAddress
     *
     * @return self
     */
    public function setPostOfficeBoxAddress($postOfficeBoxAddress)
    {
        if (is_null($postOfficeBoxAddress)) {
            throw new \InvalidArgumentException('non-nullable postOfficeBoxAddress cannot be null');
        }
        $this->container['postOfficeBoxAddress'] = $postOfficeBoxAddress;

        return $this;
    }

    /**
     * Gets streetAddress
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn|null
     */
    public function getStreetAddress()
    {
        return $this->container['streetAddress'];
    }

    /**
     * Sets streetAddress
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn|null $streetAddress streetAddress
     *
     * @return self
     */
    public function setStreetAddress($streetAddress)
    {
        if (is_null($streetAddress)) {
            throw new \InvalidArgumentException('non-nullable streetAddress cannot be null');
        }
        $this->container['streetAddress'] = $streetAddress;

        return $this;
    }

    /**
     * Gets deliveryAddressInText
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getDeliveryAddressInText()
    {
        return $this->container['deliveryAddressInText'];
    }

    /**
     * Sets deliveryAddressInText
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $deliveryAddressInText Localized list of foreign address information. (Max.Length: 150).
     *
     * @return self
     */
    public function setDeliveryAddressInText($deliveryAddressInText)
    {
        if (is_null($deliveryAddressInText)) {
            array_push($this->openAPINullablesSetToNull, 'deliveryAddressInText');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deliveryAddressInText', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deliveryAddressInText'] = $deliveryAddressInText;

        return $this;
    }

    /**
     * Gets formReceiver
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getFormReceiver()
    {
        return $this->container['formReceiver'];
    }

    /**
     * Sets formReceiver
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $formReceiver List of localized form receivers. One per language. (Max.Length: 100).
     *
     * @return self
     */
    public function setFormReceiver($formReceiver)
    {
        if (is_null($formReceiver)) {
            array_push($this->openAPINullablesSetToNull, 'formReceiver');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('formReceiver', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['formReceiver'] = $formReceiver;

        return $this;
    }

    /**
     * Gets orderNumber
     *
     * @return int|null
     */
    public function getOrderNumber()
    {
        return $this->container['orderNumber'];
    }

    /**
     * Sets orderNumber
     *
     * @param int|null $orderNumber Gets or sets the order number
     *
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        if (is_null($orderNumber)) {
            throw new \InvalidArgumentException('non-nullable orderNumber cannot be null');
        }
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
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


