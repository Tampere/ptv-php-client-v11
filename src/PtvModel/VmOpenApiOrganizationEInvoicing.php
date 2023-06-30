<?php
/**
 * VmOpenApiOrganizationEInvoicing
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
 * VmOpenApiOrganizationEInvoicing Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of organization email
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class VmOpenApiOrganizationEInvoicing implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'VmOpenApiOrganizationEInvoicing';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'string',
        'operatorCode' => 'string',
        'electronicInvoicingAddress' => 'string',
        'additionalInformation' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'ownerReferenceId' => 'string'
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
        'operatorCode' => null,
        'electronicInvoicingAddress' => null,
        'additionalInformation' => null,
        'ownerReferenceId' => 'uuid'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
		'operatorCode' => true,
		'electronicInvoicingAddress' => true,
		'additionalInformation' => true,
		'ownerReferenceId' => true
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
        'operatorCode' => 'operatorCode',
        'electronicInvoicingAddress' => 'electronicInvoicingAddress',
        'additionalInformation' => 'additionalInformation',
        'ownerReferenceId' => 'ownerReferenceId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'operatorCode' => 'setOperatorCode',
        'electronicInvoicingAddress' => 'setElectronicInvoicingAddress',
        'additionalInformation' => 'setAdditionalInformation',
        'ownerReferenceId' => 'setOwnerReferenceId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'operatorCode' => 'getOperatorCode',
        'electronicInvoicingAddress' => 'getElectronicInvoicingAddress',
        'additionalInformation' => 'getAdditionalInformation',
        'ownerReferenceId' => 'getOwnerReferenceId'
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
        $this->setIfExists('operatorCode', $data ?? [], null);
        $this->setIfExists('electronicInvoicingAddress', $data ?? [], null);
        $this->setIfExists('additionalInformation', $data ?? [], null);
        $this->setIfExists('ownerReferenceId', $data ?? [], null);
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

        if (!is_null($this->container['operatorCode']) && (mb_strlen($this->container['operatorCode']) > 110)) {
            $invalidProperties[] = "invalid value for 'operatorCode', the character length must be smaller than or equal to 110.";
        }

        if (!is_null($this->container['electronicInvoicingAddress']) && (mb_strlen($this->container['electronicInvoicingAddress']) > 110)) {
            $invalidProperties[] = "invalid value for 'electronicInvoicingAddress', the character length must be smaller than or equal to 110.";
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
     * Gets operatorCode
     *
     * @return string|null
     */
    public function getOperatorCode()
    {
        return $this->container['operatorCode'];
    }

    /**
     * Sets operatorCode
     *
     * @param string|null $operatorCode Operator code. (Max.Length: 110).
     *
     * @return self
     */
    public function setOperatorCode($operatorCode)
    {
        if (is_null($operatorCode)) {
            array_push($this->openAPINullablesSetToNull, 'operatorCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('operatorCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($operatorCode) && (mb_strlen($operatorCode) > 110)) {
            throw new \InvalidArgumentException('invalid length for $operatorCode when calling VmOpenApiOrganizationEInvoicing., must be smaller than or equal to 110.');
        }

        $this->container['operatorCode'] = $operatorCode;

        return $this;
    }

    /**
     * Gets electronicInvoicingAddress
     *
     * @return string|null
     */
    public function getElectronicInvoicingAddress()
    {
        return $this->container['electronicInvoicingAddress'];
    }

    /**
     * Sets electronicInvoicingAddress
     *
     * @param string|null $electronicInvoicingAddress Electronic invoicing address (Max.Length: 110).
     *
     * @return self
     */
    public function setElectronicInvoicingAddress($electronicInvoicingAddress)
    {
        if (is_null($electronicInvoicingAddress)) {
            array_push($this->openAPINullablesSetToNull, 'electronicInvoicingAddress');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('electronicInvoicingAddress', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($electronicInvoicingAddress) && (mb_strlen($electronicInvoicingAddress) > 110)) {
            throw new \InvalidArgumentException('invalid length for $electronicInvoicingAddress when calling VmOpenApiOrganizationEInvoicing., must be smaller than or equal to 110.');
        }

        $this->container['electronicInvoicingAddress'] = $electronicInvoicingAddress;

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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $additionalInformation Localized list of additional information for electronic invoicing address. (Max.Length: 150).
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


