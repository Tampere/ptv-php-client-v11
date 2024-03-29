<?php
/**
 * V9VmOpenApiContactDetailsInBase
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
 * V9VmOpenApiContactDetailsInBase Class Doc Comment
 *
 * @category Class
 * @description OPEN API - View Model of contact details (PUT) - base version
 * @package  Tampere\PtvV11
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class V9VmOpenApiContactDetailsInBase implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'V9VmOpenApiContactDetailsInBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'emails' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
        'faxNumbers' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[]',
        'webPages' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]',
        'addresses' => '\Tampere\PtvV11\PtvModel\V7VmOpenApiAddressContactIn[]',
        'phoneNumbers' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]',
        'deleteAllEmails' => 'bool',
        'deleteAllPhones' => 'bool',
        'deleteAllFaxNumbers' => 'bool',
        'deleteAllWebPages' => 'bool',
        'deleteAllAddresses' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'emails' => null,
        'faxNumbers' => null,
        'webPages' => null,
        'addresses' => null,
        'phoneNumbers' => null,
        'deleteAllEmails' => null,
        'deleteAllPhones' => null,
        'deleteAllFaxNumbers' => null,
        'deleteAllWebPages' => null,
        'deleteAllAddresses' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'emails' => true,
		'faxNumbers' => true,
		'webPages' => true,
		'addresses' => true,
		'phoneNumbers' => true,
		'deleteAllEmails' => false,
		'deleteAllPhones' => false,
		'deleteAllFaxNumbers' => false,
		'deleteAllWebPages' => false,
		'deleteAllAddresses' => false
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
        'emails' => 'emails',
        'faxNumbers' => 'faxNumbers',
        'webPages' => 'webPages',
        'addresses' => 'addresses',
        'phoneNumbers' => 'phoneNumbers',
        'deleteAllEmails' => 'deleteAllEmails',
        'deleteAllPhones' => 'deleteAllPhones',
        'deleteAllFaxNumbers' => 'deleteAllFaxNumbers',
        'deleteAllWebPages' => 'deleteAllWebPages',
        'deleteAllAddresses' => 'deleteAllAddresses'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'emails' => 'setEmails',
        'faxNumbers' => 'setFaxNumbers',
        'webPages' => 'setWebPages',
        'addresses' => 'setAddresses',
        'phoneNumbers' => 'setPhoneNumbers',
        'deleteAllEmails' => 'setDeleteAllEmails',
        'deleteAllPhones' => 'setDeleteAllPhones',
        'deleteAllFaxNumbers' => 'setDeleteAllFaxNumbers',
        'deleteAllWebPages' => 'setDeleteAllWebPages',
        'deleteAllAddresses' => 'setDeleteAllAddresses'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'emails' => 'getEmails',
        'faxNumbers' => 'getFaxNumbers',
        'webPages' => 'getWebPages',
        'addresses' => 'getAddresses',
        'phoneNumbers' => 'getPhoneNumbers',
        'deleteAllEmails' => 'getDeleteAllEmails',
        'deleteAllPhones' => 'getDeleteAllPhones',
        'deleteAllFaxNumbers' => 'getDeleteAllFaxNumbers',
        'deleteAllWebPages' => 'getDeleteAllWebPages',
        'deleteAllAddresses' => 'getDeleteAllAddresses'
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
        $this->setIfExists('emails', $data ?? [], null);
        $this->setIfExists('faxNumbers', $data ?? [], null);
        $this->setIfExists('webPages', $data ?? [], null);
        $this->setIfExists('addresses', $data ?? [], null);
        $this->setIfExists('phoneNumbers', $data ?? [], null);
        $this->setIfExists('deleteAllEmails', $data ?? [], null);
        $this->setIfExists('deleteAllPhones', $data ?? [], null);
        $this->setIfExists('deleteAllFaxNumbers', $data ?? [], null);
        $this->setIfExists('deleteAllWebPages', $data ?? [], null);
        $this->setIfExists('deleteAllAddresses', $data ?? [], null);
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
     * Gets emails
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]|null $emails List of connection related email addresses.
     *
     * @return self
     */
    public function setEmails($emails)
    {
        if (is_null($emails)) {
            array_push($this->openAPINullablesSetToNull, 'emails');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('emails', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['emails'] = $emails;

        return $this;
    }

    /**
     * Gets faxNumbers
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[]|null
     */
    public function getFaxNumbers()
    {
        return $this->container['faxNumbers'];
    }

    /**
     * Sets faxNumbers
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[]|null $faxNumbers List of connection related fax numbers numbers.
     *
     * @return self
     */
    public function setFaxNumbers($faxNumbers)
    {
        if (is_null($faxNumbers)) {
            array_push($this->openAPINullablesSetToNull, 'faxNumbers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('faxNumbers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['faxNumbers'] = $faxNumbers;

        return $this;
    }

    /**
     * Gets webPages
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]|null
     */
    public function getWebPages()
    {
        return $this->container['webPages'];
    }

    /**
     * Sets webPages
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]|null $webPages List of connection related web pages.
     *
     * @return self
     */
    public function setWebPages($webPages)
    {
        if (is_null($webPages)) {
            array_push($this->openAPINullablesSetToNull, 'webPages');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('webPages', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['webPages'] = $webPages;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Tampere\PtvV11\PtvModel\V7VmOpenApiAddressContactIn[]|null
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Tampere\PtvV11\PtvModel\V7VmOpenApiAddressContactIn[]|null $addresses List of service location addresses.
     *
     * @return self
     */
    public function setAddresses($addresses)
    {
        if (is_null($addresses)) {
            array_push($this->openAPINullablesSetToNull, 'addresses');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('addresses', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['addresses'] = $addresses;

        return $this;
    }

    /**
     * Gets phoneNumbers
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]|null
     */
    public function getPhoneNumbers()
    {
        return $this->container['phoneNumbers'];
    }

    /**
     * Sets phoneNumbers
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]|null $phoneNumbers List of connection related phone numbers.
     *
     * @return self
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        if (is_null($phoneNumbers)) {
            array_push($this->openAPINullablesSetToNull, 'phoneNumbers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('phoneNumbers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['phoneNumbers'] = $phoneNumbers;

        return $this;
    }

    /**
     * Gets deleteAllEmails
     *
     * @return bool|null
     */
    public function getDeleteAllEmails()
    {
        return $this->container['deleteAllEmails'];
    }

    /**
     * Sets deleteAllEmails
     *
     * @param bool|null $deleteAllEmails Gets or sets a value indicating whether all emails should be delted.
     *
     * @return self
     */
    public function setDeleteAllEmails($deleteAllEmails)
    {
        if (is_null($deleteAllEmails)) {
            throw new \InvalidArgumentException('non-nullable deleteAllEmails cannot be null');
        }
        $this->container['deleteAllEmails'] = $deleteAllEmails;

        return $this;
    }

    /**
     * Gets deleteAllPhones
     *
     * @return bool|null
     */
    public function getDeleteAllPhones()
    {
        return $this->container['deleteAllPhones'];
    }

    /**
     * Sets deleteAllPhones
     *
     * @param bool|null $deleteAllPhones Gets or sets a value indicating whether all phones should be delted.
     *
     * @return self
     */
    public function setDeleteAllPhones($deleteAllPhones)
    {
        if (is_null($deleteAllPhones)) {
            throw new \InvalidArgumentException('non-nullable deleteAllPhones cannot be null');
        }
        $this->container['deleteAllPhones'] = $deleteAllPhones;

        return $this;
    }

    /**
     * Gets deleteAllFaxNumbers
     *
     * @return bool|null
     */
    public function getDeleteAllFaxNumbers()
    {
        return $this->container['deleteAllFaxNumbers'];
    }

    /**
     * Sets deleteAllFaxNumbers
     *
     * @param bool|null $deleteAllFaxNumbers Gets or sets a value indicating whether all fax numbers should be delted.
     *
     * @return self
     */
    public function setDeleteAllFaxNumbers($deleteAllFaxNumbers)
    {
        if (is_null($deleteAllFaxNumbers)) {
            throw new \InvalidArgumentException('non-nullable deleteAllFaxNumbers cannot be null');
        }
        $this->container['deleteAllFaxNumbers'] = $deleteAllFaxNumbers;

        return $this;
    }

    /**
     * Gets deleteAllWebPages
     *
     * @return bool|null
     */
    public function getDeleteAllWebPages()
    {
        return $this->container['deleteAllWebPages'];
    }

    /**
     * Sets deleteAllWebPages
     *
     * @param bool|null $deleteAllWebPages Gets or sets a value indicating whether all web pages should be delted.
     *
     * @return self
     */
    public function setDeleteAllWebPages($deleteAllWebPages)
    {
        if (is_null($deleteAllWebPages)) {
            throw new \InvalidArgumentException('non-nullable deleteAllWebPages cannot be null');
        }
        $this->container['deleteAllWebPages'] = $deleteAllWebPages;

        return $this;
    }

    /**
     * Gets deleteAllAddresses
     *
     * @return bool|null
     */
    public function getDeleteAllAddresses()
    {
        return $this->container['deleteAllAddresses'];
    }

    /**
     * Sets deleteAllAddresses
     *
     * @param bool|null $deleteAllAddresses Gets or sets a value indicating whether all addresses should be delted.
     *
     * @return self
     */
    public function setDeleteAllAddresses($deleteAllAddresses)
    {
        if (is_null($deleteAllAddresses)) {
            throw new \InvalidArgumentException('non-nullable deleteAllAddresses cannot be null');
        }
        $this->container['deleteAllAddresses'] = $deleteAllAddresses;

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


