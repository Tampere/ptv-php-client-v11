<?php
/**
 * V11VmOpenApiServiceChannels
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
 * V11VmOpenApiServiceChannels Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of service channels
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V11VmOpenApiServiceChannels implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V11VmOpenApiServiceChannels';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'electronicChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel',
        'phoneChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel',
        'printableFormChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel',
        'locationChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel',
        'webPageChannel' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'electronicChannel' => null,
        'phoneChannel' => null,
        'printableFormChannel' => null,
        'locationChannel' => null,
        'webPageChannel' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'electronicChannel' => false,
		'phoneChannel' => false,
		'printableFormChannel' => false,
		'locationChannel' => false,
		'webPageChannel' => false
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
        'electronicChannel' => 'electronicChannel',
        'phoneChannel' => 'phoneChannel',
        'printableFormChannel' => 'printableFormChannel',
        'locationChannel' => 'locationChannel',
        'webPageChannel' => 'webPageChannel'
    ];

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
        'webPageChannel' => 'setWebPageChannel'
    ];

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
        'webPageChannel' => 'getWebPageChannel'
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
        $this->setIfExists('electronicChannel', $data ?? [], null);
        $this->setIfExists('phoneChannel', $data ?? [], null);
        $this->setIfExists('printableFormChannel', $data ?? [], null);
        $this->setIfExists('locationChannel', $data ?? [], null);
        $this->setIfExists('webPageChannel', $data ?? [], null);
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
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel|null
     */
    public function getElectronicChannel()
    {
        return $this->container['electronicChannel'];
    }

    /**
     * Sets electronicChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiElectronicChannel|null $electronicChannel electronicChannel
     *
     * @return self
     */
    public function setElectronicChannel($electronicChannel)
    {
        if (is_null($electronicChannel)) {
            throw new \InvalidArgumentException('non-nullable electronicChannel cannot be null');
        }
        $this->container['electronicChannel'] = $electronicChannel;

        return $this;
    }

    /**
     * Gets phoneChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel|null
     */
    public function getPhoneChannel()
    {
        return $this->container['phoneChannel'];
    }

    /**
     * Sets phoneChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiPhoneChannel|null $phoneChannel phoneChannel
     *
     * @return self
     */
    public function setPhoneChannel($phoneChannel)
    {
        if (is_null($phoneChannel)) {
            throw new \InvalidArgumentException('non-nullable phoneChannel cannot be null');
        }
        $this->container['phoneChannel'] = $phoneChannel;

        return $this;
    }

    /**
     * Gets printableFormChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel|null
     */
    public function getPrintableFormChannel()
    {
        return $this->container['printableFormChannel'];
    }

    /**
     * Sets printableFormChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiPrintableFormChannel|null $printableFormChannel printableFormChannel
     *
     * @return self
     */
    public function setPrintableFormChannel($printableFormChannel)
    {
        if (is_null($printableFormChannel)) {
            throw new \InvalidArgumentException('non-nullable printableFormChannel cannot be null');
        }
        $this->container['printableFormChannel'] = $printableFormChannel;

        return $this;
    }

    /**
     * Gets locationChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel|null
     */
    public function getLocationChannel()
    {
        return $this->container['locationChannel'];
    }

    /**
     * Sets locationChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceLocationChannel|null $locationChannel locationChannel
     *
     * @return self
     */
    public function setLocationChannel($locationChannel)
    {
        if (is_null($locationChannel)) {
            throw new \InvalidArgumentException('non-nullable locationChannel cannot be null');
        }
        $this->container['locationChannel'] = $locationChannel;

        return $this;
    }

    /**
     * Gets webPageChannel
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel|null
     */
    public function getWebPageChannel()
    {
        return $this->container['webPageChannel'];
    }

    /**
     * Sets webPageChannel
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiWebPageChannel|null $webPageChannel webPageChannel
     *
     * @return self
     */
    public function setWebPageChannel($webPageChannel)
    {
        if (is_null($webPageChannel)) {
            throw new \InvalidArgumentException('non-nullable webPageChannel cannot be null');
        }
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


