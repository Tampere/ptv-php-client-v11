<?php
/**
 * VmOpenApiAddressStreetWithCoordinates
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
 * VmOpenApiAddressStreetWithCoordinates Class Doc Comment
 *
 * @category Class
 * @description OPEN API V7 - View Model of address with type
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmOpenApiAddressStreetWithCoordinates implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VmOpenApiAddressStreetWithCoordinates';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'postalCode' => 'string',
        'postOffice' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'municipality' => '\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality',
        'additionalInformation' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'street' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'streetNumber' => 'string',
        'latitude' => 'string',
        'longitude' => 'string',
        'coordinateState' => 'string'
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
        'postalCode' => null,
        'postOffice' => null,
        'municipality' => null,
        'additionalInformation' => null,
        'street' => null,
        'streetNumber' => null,
        'latitude' => null,
        'longitude' => null,
        'coordinateState' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'postalCode' => false,
		'postOffice' => true,
		'municipality' => false,
		'additionalInformation' => true,
		'street' => true,
		'streetNumber' => true,
		'latitude' => true,
		'longitude' => true,
		'coordinateState' => true
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
        'postalCode' => 'postalCode',
        'postOffice' => 'postOffice',
        'municipality' => 'municipality',
        'additionalInformation' => 'additionalInformation',
        'street' => 'street',
        'streetNumber' => 'streetNumber',
        'latitude' => 'latitude',
        'longitude' => 'longitude',
        'coordinateState' => 'coordinateState'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'postalCode' => 'setPostalCode',
        'postOffice' => 'setPostOffice',
        'municipality' => 'setMunicipality',
        'additionalInformation' => 'setAdditionalInformation',
        'street' => 'setStreet',
        'streetNumber' => 'setStreetNumber',
        'latitude' => 'setLatitude',
        'longitude' => 'setLongitude',
        'coordinateState' => 'setCoordinateState'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'postalCode' => 'getPostalCode',
        'postOffice' => 'getPostOffice',
        'municipality' => 'getMunicipality',
        'additionalInformation' => 'getAdditionalInformation',
        'street' => 'getStreet',
        'streetNumber' => 'getStreetNumber',
        'latitude' => 'getLatitude',
        'longitude' => 'getLongitude',
        'coordinateState' => 'getCoordinateState'
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
        $this->setIfExists('postalCode', $data ?? [], null);
        $this->setIfExists('postOffice', $data ?? [], null);
        $this->setIfExists('municipality', $data ?? [], null);
        $this->setIfExists('additionalInformation', $data ?? [], null);
        $this->setIfExists('street', $data ?? [], null);
        $this->setIfExists('streetNumber', $data ?? [], null);
        $this->setIfExists('latitude', $data ?? [], null);
        $this->setIfExists('longitude', $data ?? [], null);
        $this->setIfExists('coordinateState', $data ?? [], null);
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

        if ($this->container['postalCode'] === null) {
            $invalidProperties[] = "'postalCode' can't be null";
        }
        if ((mb_strlen($this->container['postalCode']) < 1)) {
            $invalidProperties[] = "invalid value for 'postalCode', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/\\d{5}?/", $this->container['postalCode'])) {
            $invalidProperties[] = "invalid value for 'postalCode', must be conform to the pattern /\\d{5}?/.";
        }

        if (!is_null($this->container['streetNumber']) && (mb_strlen($this->container['streetNumber']) > 30)) {
            $invalidProperties[] = "invalid value for 'streetNumber', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['latitude']) && !preg_match("/^\\d+\\.?\\d*$/", $this->container['latitude'])) {
            $invalidProperties[] = "invalid value for 'latitude', must be conform to the pattern /^\\d+\\.?\\d*$/.";
        }

        if (!is_null($this->container['longitude']) && !preg_match("/^\\d+\\.?\\d*$/", $this->container['longitude'])) {
            $invalidProperties[] = "invalid value for 'longitude', must be conform to the pattern /^\\d+\\.?\\d*$/.";
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
     * Gets postalCode
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     *
     * @param string $postalCode Postal code, for example 00100.
     *
     * @return self
     */
    public function setPostalCode($postalCode)
    {
        if (is_null($postalCode)) {
            throw new \InvalidArgumentException('non-nullable postalCode cannot be null');
        }

        if ((mb_strlen($postalCode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling VmOpenApiAddressStreetWithCoordinates., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/\\d{5}?/", $postalCode))) {
            throw new \InvalidArgumentException("invalid value for \$postalCode when calling VmOpenApiAddressStreetWithCoordinates., must conform to the pattern /\\d{5}?/.");
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets postOffice
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getPostOffice()
    {
        return $this->container['postOffice'];
    }

    /**
     * Sets postOffice
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $postOffice List of localized Post offices, for example Helsinki, Helsingfors.
     *
     * @return self
     */
    public function setPostOffice($postOffice)
    {
        if (is_null($postOffice)) {
            array_push($this->openAPINullablesSetToNull, 'postOffice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('postOffice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['postOffice'] = $postOffice;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality|null
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality|null $municipality municipality
     *
     * @return self
     */
    public function setMunicipality($municipality)
    {
        if (is_null($municipality)) {
            throw new \InvalidArgumentException('non-nullable municipality cannot be null');
        }
        $this->container['municipality'] = $municipality;

        return $this;
    }

    /**
     * Gets additionalInformation
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getAdditionalInformation()
    {
        return $this->container['additionalInformation'];
    }

    /**
     * Sets additionalInformation
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $additionalInformation Localized list of additional information about the address. (Max.Length: 150).
     *
     * @return self
     */
    public function setAdditionalInformation($additionalInformation)
    {
        if (is_null($additionalInformation)) {
            array_push($this->openAPINullablesSetToNull, 'additionalInformation');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('additionalInformation', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['additionalInformation'] = $additionalInformation;

        return $this;
    }

    /**
     * Gets street
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $street List of localized street addresses. (Max.Length: 100).
     *
     * @return self
     */
    public function setStreet($street)
    {
        if (is_null($street)) {
            array_push($this->openAPINullablesSetToNull, 'street');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('street', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets streetNumber
     *
     * @return string|null
     */
    public function getStreetNumber()
    {
        return $this->container['streetNumber'];
    }

    /**
     * Sets streetNumber
     *
     * @param string|null $streetNumber Street number for street address. (Max.Length: 30).
     *
     * @return self
     */
    public function setStreetNumber($streetNumber)
    {
        if (is_null($streetNumber)) {
            array_push($this->openAPINullablesSetToNull, 'streetNumber');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('streetNumber', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($streetNumber) && (mb_strlen($streetNumber) > 30)) {
            throw new \InvalidArgumentException('invalid length for $streetNumber when calling VmOpenApiAddressStreetWithCoordinates., must be smaller than or equal to 30.');
        }

        $this->container['streetNumber'] = $streetNumber;

        return $this;
    }

    /**
     * Gets latitude
     *
     * @return string|null
     */
    public function getLatitude()
    {
        return $this->container['latitude'];
    }

    /**
     * Sets latitude
     *
     * @param string|null $latitude Location latitude coordinate.
     *
     * @return self
     */
    public function setLatitude($latitude)
    {
        if (is_null($latitude)) {
            array_push($this->openAPINullablesSetToNull, 'latitude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('latitude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($latitude) && (!preg_match("/^\\d+\\.?\\d*$/", $latitude))) {
            throw new \InvalidArgumentException("invalid value for \$latitude when calling VmOpenApiAddressStreetWithCoordinates., must conform to the pattern /^\\d+\\.?\\d*$/.");
        }

        $this->container['latitude'] = $latitude;

        return $this;
    }

    /**
     * Gets longitude
     *
     * @return string|null
     */
    public function getLongitude()
    {
        return $this->container['longitude'];
    }

    /**
     * Sets longitude
     *
     * @param string|null $longitude Location longitude coordinate.
     *
     * @return self
     */
    public function setLongitude($longitude)
    {
        if (is_null($longitude)) {
            array_push($this->openAPINullablesSetToNull, 'longitude');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('longitude', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }

        if (!is_null($longitude) && (!preg_match("/^\\d+\\.?\\d*$/", $longitude))) {
            throw new \InvalidArgumentException("invalid value for \$longitude when calling VmOpenApiAddressStreetWithCoordinates., must conform to the pattern /^\\d+\\.?\\d*$/.");
        }

        $this->container['longitude'] = $longitude;

        return $this;
    }

    /**
     * Gets coordinateState
     *
     * @return string|null
     */
    public function getCoordinateState()
    {
        return $this->container['coordinateState'];
    }

    /**
     * Sets coordinateState
     *
     * @param string|null $coordinateState State of coordinates. Coordinates are fetched from a service provided by Maanmittauslaitos (WFS).  Possible values are: Loading, Ok, Failed, NotReceived, EmptyInputReceived, MultipleResultsReceived, WrongFormatReceived or EnteredByUser.
     *
     * @return self
     */
    public function setCoordinateState($coordinateState)
    {
        if (is_null($coordinateState)) {
            array_push($this->openAPINullablesSetToNull, 'coordinateState');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('coordinateState', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['coordinateState'] = $coordinateState;

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


