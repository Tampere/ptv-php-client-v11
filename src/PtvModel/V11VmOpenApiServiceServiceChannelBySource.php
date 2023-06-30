<?php
/**
 * V11VmOpenApiServiceServiceChannelBySource
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
 * V11VmOpenApiServiceServiceChannelBySource Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of Service service channel - with external source and external types
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V11VmOpenApiServiceServiceChannelBySource implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V11VmOpenApiServiceServiceChannelBySource';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'serviceChannelSourceId' => 'string',
        'description' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
        'serviceChargeType' => 'string',
        'serviceHours' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]',
        'contactDetails' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsInBase',
        'deleteServiceChargeType' => 'bool',
        'deleteAllDescriptions' => 'bool',
        'deleteAllServiceHours' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'serviceChannelSourceId' => null,
        'description' => null,
        'serviceChargeType' => null,
        'serviceHours' => null,
        'contactDetails' => null,
        'deleteServiceChargeType' => null,
        'deleteAllDescriptions' => null,
        'deleteAllServiceHours' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'serviceChannelSourceId' => false,
		'description' => true,
		'serviceChargeType' => true,
		'serviceHours' => true,
		'contactDetails' => false,
		'deleteServiceChargeType' => false,
		'deleteAllDescriptions' => false,
		'deleteAllServiceHours' => false
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
        'serviceChannelSourceId' => 'serviceChannelSourceId',
        'description' => 'description',
        'serviceChargeType' => 'serviceChargeType',
        'serviceHours' => 'serviceHours',
        'contactDetails' => 'contactDetails',
        'deleteServiceChargeType' => 'deleteServiceChargeType',
        'deleteAllDescriptions' => 'deleteAllDescriptions',
        'deleteAllServiceHours' => 'deleteAllServiceHours'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceChannelSourceId' => 'setServiceChannelSourceId',
        'description' => 'setDescription',
        'serviceChargeType' => 'setServiceChargeType',
        'serviceHours' => 'setServiceHours',
        'contactDetails' => 'setContactDetails',
        'deleteServiceChargeType' => 'setDeleteServiceChargeType',
        'deleteAllDescriptions' => 'setDeleteAllDescriptions',
        'deleteAllServiceHours' => 'setDeleteAllServiceHours'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceChannelSourceId' => 'getServiceChannelSourceId',
        'description' => 'getDescription',
        'serviceChargeType' => 'getServiceChargeType',
        'serviceHours' => 'getServiceHours',
        'contactDetails' => 'getContactDetails',
        'deleteServiceChargeType' => 'getDeleteServiceChargeType',
        'deleteAllDescriptions' => 'getDeleteAllDescriptions',
        'deleteAllServiceHours' => 'getDeleteAllServiceHours'
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
        $this->setIfExists('serviceChannelSourceId', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('serviceChargeType', $data ?? [], null);
        $this->setIfExists('serviceHours', $data ?? [], null);
        $this->setIfExists('contactDetails', $data ?? [], null);
        $this->setIfExists('deleteServiceChargeType', $data ?? [], null);
        $this->setIfExists('deleteAllDescriptions', $data ?? [], null);
        $this->setIfExists('deleteAllServiceHours', $data ?? [], null);
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

        if ($this->container['serviceChannelSourceId'] === null) {
            $invalidProperties[] = "'serviceChannelSourceId' can't be null";
        }
        if ((mb_strlen($this->container['serviceChannelSourceId']) < 1)) {
            $invalidProperties[] = "invalid value for 'serviceChannelSourceId', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[A-Za-z0-9-.]*$/", $this->container['serviceChannelSourceId'])) {
            $invalidProperties[] = "invalid value for 'serviceChannelSourceId', must be conform to the pattern /^[A-Za-z0-9-.]*$/.";
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
     * Gets serviceChannelSourceId
     *
     * @return string
     */
    public function getServiceChannelSourceId()
    {
        return $this->container['serviceChannelSourceId'];
    }

    /**
     * Sets serviceChannelSourceId
     *
     * @param string $serviceChannelSourceId The external source id for service channel.
     *
     * @return self
     */
    public function setServiceChannelSourceId($serviceChannelSourceId)
    {
        if (is_null($serviceChannelSourceId)) {
            throw new \InvalidArgumentException('non-nullable serviceChannelSourceId cannot be null');
        }

        if ((mb_strlen($serviceChannelSourceId) < 1)) {
            throw new \InvalidArgumentException('invalid length for $serviceChannelSourceId when calling V11VmOpenApiServiceServiceChannelBySource., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[A-Za-z0-9-.]*$/", $serviceChannelSourceId))) {
            throw new \InvalidArgumentException("invalid value for \$serviceChannelSourceId when calling V11VmOpenApiServiceServiceChannelBySource., must conform to the pattern /^[A-Za-z0-9-.]*$/.");
        }

        $this->container['serviceChannelSourceId'] = $serviceChannelSourceId;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]|null $description List of localized service channel relationship descriptions. Possible type values are: Description, ChargeTypeAdditionalInfo. (Max.Length: 500 Description). (Max.Length: 500 ChargeTypeAdditionalInfo).
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
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets serviceChargeType
     *
     * @return string|null
     */
    public function getServiceChargeType()
    {
        return $this->container['serviceChargeType'];
    }

    /**
     * Sets serviceChargeType
     *
     * @param string|null $serviceChargeType Service charge type. Possible values are: Chargeable, FreeOfCharge or Other
     *
     * @return self
     */
    public function setServiceChargeType($serviceChargeType)
    {
        if (is_null($serviceChargeType)) {
            array_push($this->openAPINullablesSetToNull, 'serviceChargeType');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceChargeType', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceChargeType'] = $serviceChargeType;

        return $this;
    }

    /**
     * Gets serviceHours
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]|null
     */
    public function getServiceHours()
    {
        return $this->container['serviceHours'];
    }

    /**
     * Sets serviceHours
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]|null $serviceHours List of connection related service hours.
     *
     * @return self
     */
    public function setServiceHours($serviceHours)
    {
        if (is_null($serviceHours)) {
            array_push($this->openAPINullablesSetToNull, 'serviceHours');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('serviceHours', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['serviceHours'] = $serviceHours;

        return $this;
    }

    /**
     * Gets contactDetails
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsInBase|null
     */
    public function getContactDetails()
    {
        return $this->container['contactDetails'];
    }

    /**
     * Sets contactDetails
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsInBase|null $contactDetails contactDetails
     *
     * @return self
     */
    public function setContactDetails($contactDetails)
    {
        if (is_null($contactDetails)) {
            throw new \InvalidArgumentException('non-nullable contactDetails cannot be null');
        }
        $this->container['contactDetails'] = $contactDetails;

        return $this;
    }

    /**
     * Gets deleteServiceChargeType
     *
     * @return bool|null
     */
    public function getDeleteServiceChargeType()
    {
        return $this->container['deleteServiceChargeType'];
    }

    /**
     * Sets deleteServiceChargeType
     *
     * @param bool|null $deleteServiceChargeType Indicates if value for property ServiceChargeType should be deleted.
     *
     * @return self
     */
    public function setDeleteServiceChargeType($deleteServiceChargeType)
    {
        if (is_null($deleteServiceChargeType)) {
            throw new \InvalidArgumentException('non-nullable deleteServiceChargeType cannot be null');
        }
        $this->container['deleteServiceChargeType'] = $deleteServiceChargeType;

        return $this;
    }

    /**
     * Gets deleteAllDescriptions
     *
     * @return bool|null
     */
    public function getDeleteAllDescriptions()
    {
        return $this->container['deleteAllDescriptions'];
    }

    /**
     * Sets deleteAllDescriptions
     *
     * @param bool|null $deleteAllDescriptions Indicates if all descriptions should be deleted.
     *
     * @return self
     */
    public function setDeleteAllDescriptions($deleteAllDescriptions)
    {
        if (is_null($deleteAllDescriptions)) {
            throw new \InvalidArgumentException('non-nullable deleteAllDescriptions cannot be null');
        }
        $this->container['deleteAllDescriptions'] = $deleteAllDescriptions;

        return $this;
    }

    /**
     * Gets deleteAllServiceHours
     *
     * @return bool|null
     */
    public function getDeleteAllServiceHours()
    {
        return $this->container['deleteAllServiceHours'];
    }

    /**
     * Sets deleteAllServiceHours
     *
     * @param bool|null $deleteAllServiceHours Gets or sets a value indicating whether all service hours should be deleted.
     *
     * @return self
     */
    public function setDeleteAllServiceHours($deleteAllServiceHours)
    {
        if (is_null($deleteAllServiceHours)) {
            throw new \InvalidArgumentException('non-nullable deleteAllServiceHours cannot be null');
        }
        $this->container['deleteAllServiceHours'] = $deleteAllServiceHours;

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


