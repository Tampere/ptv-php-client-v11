<?php
/**
 * V10VmOpenApiServiceCollectionItem
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
 * V10VmOpenApiServiceCollectionItem Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of service collection item.
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V10VmOpenApiServiceCollectionItem implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V10VmOpenApiServiceCollectionItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'serviceCollectionNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'serviceCollectionDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
        'services' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[]',
        'serviceChannels' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[]',
        'name' => 'string'
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
        'serviceCollectionNames' => null,
        'serviceCollectionDescriptions' => null,
        'services' => null,
        'serviceChannels' => null,
        'name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'serviceCollectionNames' => true,
		'serviceCollectionDescriptions' => true,
		'services' => true,
		'serviceChannels' => true,
		'name' => true
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
        'serviceCollectionNames' => 'serviceCollectionNames',
        'serviceCollectionDescriptions' => 'serviceCollectionDescriptions',
        'services' => 'services',
        'serviceChannels' => 'serviceChannels',
        'name' => 'name'
    ];

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
        'name' => 'setName'
    ];

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
        'name' => 'getName'
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
        $this->setIfExists('serviceCollectionNames', $data ?? [], null);
        $this->setIfExists('serviceCollectionDescriptions', $data ?? [], null);
        $this->setIfExists('services', $data ?? [], null);
        $this->setIfExists('serviceChannels', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
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
     * @param string|null $id Id of the item.
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
     * Gets serviceCollectionNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getServiceCollectionNames()
    {
        return $this->container['serviceCollectionNames'];
    }

    /**
     * Sets serviceCollectionNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $serviceCollectionNames List of localized service collection names.
     *
     * @return self
     */
    public function setServiceCollectionNames($serviceCollectionNames)
    {
        if (is_null($serviceCollectionNames)) {
            array_push($this->openAPINullablesSetToNull, 'serviceCollectionNames');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceCollectionNames', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceCollectionNames'] = $serviceCollectionNames;

        return $this;
    }

    /**
     * Gets serviceCollectionDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]|null
     */
    public function getServiceCollectionDescriptions()
    {
        return $this->container['serviceCollectionDescriptions'];
    }

    /**
     * Sets serviceCollectionDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]|null $serviceCollectionDescriptions List of localized service collection descriptions.
     *
     * @return self
     */
    public function setServiceCollectionDescriptions($serviceCollectionDescriptions)
    {
        if (is_null($serviceCollectionDescriptions)) {
            array_push($this->openAPINullablesSetToNull, 'serviceCollectionDescriptions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceCollectionDescriptions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceCollectionDescriptions'] = $serviceCollectionDescriptions;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[]|null
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[]|null $services List of service collection services.
     *
     * @return self
     */
    public function setServices($services)
    {
        if (is_null($services)) {
            array_push($this->openAPINullablesSetToNull, 'services');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('services', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets serviceChannels
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[]|null
     */
    public function getServiceChannels()
    {
        return $this->container['serviceChannels'];
    }

    /**
     * Sets serviceChannels
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[]|null $serviceChannels List of service collection services.
     *
     * @return self
     */
    public function setServiceChannels($serviceChannels)
    {
        if (is_null($serviceChannels)) {
            array_push($this->openAPINullablesSetToNull, 'serviceChannels');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceChannels', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceChannels'] = $serviceChannels;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name 
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            array_push($this->openAPINullablesSetToNull, 'name');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('name', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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


