<?php
/**
 * V4VmOpenApiEmail
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
 * V4VmOpenApiEmail Class Doc Comment
 *
 * @category Class
 * @description OPEN API V4 - View Model of email
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V4VmOpenApiEmail implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V4VmOpenApiEmail';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'language' => 'string',
        'id' => 'string',
        'ownerReferenceId' => 'string',
        'ownerReferenceId2' => 'string',
        'description' => 'string',
        'value' => 'string',
        'existsOnePerLanguage' => 'bool',
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
        'language' => null,
        'id' => 'uuid',
        'ownerReferenceId' => 'uuid',
        'ownerReferenceId2' => 'uuid',
        'description' => null,
        'value' => null,
        'existsOnePerLanguage' => null,
        'orderNumber' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'language' => false,
		'id' => true,
		'ownerReferenceId' => true,
		'ownerReferenceId2' => true,
		'description' => true,
		'value' => true,
		'existsOnePerLanguage' => false,
		'orderNumber' => true
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
        'language' => 'language',
        'id' => 'id',
        'ownerReferenceId' => 'ownerReferenceId',
        'ownerReferenceId2' => 'ownerReferenceId2',
        'description' => 'description',
        'value' => 'value',
        'existsOnePerLanguage' => 'existsOnePerLanguage',
        'orderNumber' => 'orderNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'language' => 'setLanguage',
        'id' => 'setId',
        'ownerReferenceId' => 'setOwnerReferenceId',
        'ownerReferenceId2' => 'setOwnerReferenceId2',
        'description' => 'setDescription',
        'value' => 'setValue',
        'existsOnePerLanguage' => 'setExistsOnePerLanguage',
        'orderNumber' => 'setOrderNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'language' => 'getLanguage',
        'id' => 'getId',
        'ownerReferenceId' => 'getOwnerReferenceId',
        'ownerReferenceId2' => 'getOwnerReferenceId2',
        'description' => 'getDescription',
        'value' => 'getValue',
        'existsOnePerLanguage' => 'getExistsOnePerLanguage',
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
        $this->setIfExists('language', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('ownerReferenceId', $data ?? [], null);
        $this->setIfExists('ownerReferenceId2', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('value', $data ?? [], null);
        $this->setIfExists('existsOnePerLanguage', $data ?? [], null);
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

        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ((mb_strlen($this->container['language']) < 1)) {
            $invalidProperties[] = "invalid value for 'language', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 100)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 100.";
        }

        if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 100)) {
            $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 100.";
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
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language Language code.
     *
     * @return self
     */
    public function setLanguage($language)
    {
        if (is_null($language)) {
            throw new \InvalidArgumentException('non-nullable language cannot be null');
        }

        if ((mb_strlen($language) < 1)) {
            throw new \InvalidArgumentException('invalid length for $language when calling V4VmOpenApiEmail., must be bigger than or equal to 1.');
        }

        $this->container['language'] = $language;

        return $this;
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
     * Gets ownerReferenceId
     *
     * @return string|null
     */
    public function getOwnerReferenceId()
    {
        return $this->container['ownerReferenceId'];
    }

    /**
     * Sets ownerReferenceId
     *
     * @param string|null $ownerReferenceId Gets or sets the owner reference identifier.
     *
     * @return self
     */
    public function setOwnerReferenceId($ownerReferenceId)
    {
        if (is_null($ownerReferenceId)) {
            array_push($this->openAPINullablesSetToNull, 'ownerReferenceId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ownerReferenceId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ownerReferenceId'] = $ownerReferenceId;

        return $this;
    }

    /**
     * Gets ownerReferenceId2
     *
     * @return string|null
     */
    public function getOwnerReferenceId2()
    {
        return $this->container['ownerReferenceId2'];
    }

    /**
     * Sets ownerReferenceId2
     *
     * @param string|null $ownerReferenceId2 Gets or sets the owner reference identifier.
     *
     * @return self
     */
    public function setOwnerReferenceId2($ownerReferenceId2)
    {
        if (is_null($ownerReferenceId2)) {
            array_push($this->openAPINullablesSetToNull, 'ownerReferenceId2');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ownerReferenceId2', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ownerReferenceId2'] = $ownerReferenceId2;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Email address description. (Max.Length: 100).
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            array_push($this->openAPINullablesSetToNull, 'description');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('description', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($description) && (mb_strlen($description) > 100)) {
            throw new \InvalidArgumentException('invalid length for $description when calling V4VmOpenApiEmail., must be smaller than or equal to 100.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets value
     *
     * @return string|null
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     *
     * @param string|null $value Localized value corresponding to the Language property value. (Max.Length: 100).
     *
     * @return self
     */
    public function setValue($value)
    {
        if (is_null($value)) {
            array_push($this->openAPINullablesSetToNull, 'value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($value) && (mb_strlen($value) > 100)) {
            throw new \InvalidArgumentException('invalid length for $value when calling V4VmOpenApiEmail., must be smaller than or equal to 100.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets existsOnePerLanguage
     *
     * @return bool|null
     */
    public function getExistsOnePerLanguage()
    {
        return $this->container['existsOnePerLanguage'];
    }

    /**
     * Sets existsOnePerLanguage
     *
     * @param bool|null $existsOnePerLanguage Gets or sets a value indicating whether exists in all languages.
     *
     * @return self
     */
    public function setExistsOnePerLanguage($existsOnePerLanguage)
    {
        if (is_null($existsOnePerLanguage)) {
            throw new \InvalidArgumentException('non-nullable existsOnePerLanguage cannot be null');
        }
        $this->container['existsOnePerLanguage'] = $existsOnePerLanguage;

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
     * @param int|null $orderNumber The order of email.
     *
     * @return self
     */
    public function setOrderNumber($orderNumber)
    {
        if (is_null($orderNumber)) {
            array_push($this->openAPINullablesSetToNull, 'orderNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('orderNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
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


