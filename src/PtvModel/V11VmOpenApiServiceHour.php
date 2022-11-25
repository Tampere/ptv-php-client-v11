<?php
/**
 * V11VmOpenApiServiceHour
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
 * V11VmOpenApiServiceHour Class Doc Comment
 *
 * @category Class
 * @description OPEN API V11 - View Model of service hour
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiServiceHour implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiServiceHour';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'serviceHourType' => 'string',
'validFrom' => '\DateTime',
'validTo' => '\DateTime',
'isClosed' => 'bool',
'validForNow' => 'bool',
'isAlwaysOpen' => 'bool',
'isReservation' => 'bool',
'additionalInformation' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'openingHour' => '\Tampere\PtvV11\PtvModel\V8VmOpenApiDailyOpeningTime[]',
'orderNumber' => 'int',
'ownerReferenceId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'serviceHourType' => null,
'validFrom' => 'date-time',
'validTo' => 'date-time',
'isClosed' => null,
'validForNow' => null,
'isAlwaysOpen' => null,
'isReservation' => null,
'additionalInformation' => null,
'openingHour' => null,
'orderNumber' => 'int32',
'ownerReferenceId' => 'uuid'    ];

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
        'serviceHourType' => 'serviceHourType',
'validFrom' => 'validFrom',
'validTo' => 'validTo',
'isClosed' => 'isClosed',
'validForNow' => 'validForNow',
'isAlwaysOpen' => 'isAlwaysOpen',
'isReservation' => 'isReservation',
'additionalInformation' => 'additionalInformation',
'openingHour' => 'openingHour',
'orderNumber' => 'orderNumber',
'ownerReferenceId' => 'ownerReferenceId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'serviceHourType' => 'setServiceHourType',
'validFrom' => 'setValidFrom',
'validTo' => 'setValidTo',
'isClosed' => 'setIsClosed',
'validForNow' => 'setValidForNow',
'isAlwaysOpen' => 'setIsAlwaysOpen',
'isReservation' => 'setIsReservation',
'additionalInformation' => 'setAdditionalInformation',
'openingHour' => 'setOpeningHour',
'orderNumber' => 'setOrderNumber',
'ownerReferenceId' => 'setOwnerReferenceId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'serviceHourType' => 'getServiceHourType',
'validFrom' => 'getValidFrom',
'validTo' => 'getValidTo',
'isClosed' => 'getIsClosed',
'validForNow' => 'getValidForNow',
'isAlwaysOpen' => 'getIsAlwaysOpen',
'isReservation' => 'getIsReservation',
'additionalInformation' => 'getAdditionalInformation',
'openingHour' => 'getOpeningHour',
'orderNumber' => 'getOrderNumber',
'ownerReferenceId' => 'getOwnerReferenceId'    ];

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
        $this->container['serviceHourType'] = isset($data['serviceHourType']) ? $data['serviceHourType'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['isClosed'] = isset($data['isClosed']) ? $data['isClosed'] : null;
        $this->container['validForNow'] = isset($data['validForNow']) ? $data['validForNow'] : null;
        $this->container['isAlwaysOpen'] = isset($data['isAlwaysOpen']) ? $data['isAlwaysOpen'] : null;
        $this->container['isReservation'] = isset($data['isReservation']) ? $data['isReservation'] : null;
        $this->container['additionalInformation'] = isset($data['additionalInformation']) ? $data['additionalInformation'] : null;
        $this->container['openingHour'] = isset($data['openingHour']) ? $data['openingHour'] : null;
        $this->container['orderNumber'] = isset($data['orderNumber']) ? $data['orderNumber'] : null;
        $this->container['ownerReferenceId'] = isset($data['ownerReferenceId']) ? $data['ownerReferenceId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['serviceHourType'] === null) {
            $invalidProperties[] = "'serviceHourType' can't be null";
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
     * Gets serviceHourType
     *
     * @return string
     */
    public function getServiceHourType()
    {
        return isset($this->container['serviceHourType']) ? $this->container['serviceHourType'] : null;
    }

    /**
     * Sets serviceHourType
     *
     * @param string $serviceHourType Type of service hour. Valid values are: DaysOfTheWeek, Exceptional or OverMidnight.  In version 7 and older: Standard, Exception or Special.
     *
     * @return $this
     */
    public function setServiceHourType($serviceHourType)
    {
        $this->container['serviceHourType'] = $serviceHourType;

        return $this;
    }

    /**
     * Gets validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return isset($this->container['validFrom']) ? $this->container['validFrom'] : null;
    }

    /**
     * Sets validFrom
     *
     * @param \DateTime $validFrom Date time where from this entry is valid.
     *
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;

        return $this;
    }

    /**
     * Gets validTo
     *
     * @return \DateTime
     */
    public function getValidTo()
    {
        return isset($this->container['validTo']) ? $this->container['validTo'] : null;
    }

    /**
     * Sets validTo
     *
     * @param \DateTime $validTo Date time to this entry is valid.
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;

        return $this;
    }

    /**
     * Gets isClosed
     *
     * @return bool
     */
    public function getIsClosed()
    {
        return isset($this->container['isClosed']) ? $this->container['isClosed'] : null;
    }

    /**
     * Sets isClosed
     *
     * @param bool $isClosed Set to true to present a time between the valid from and to times as closed.
     *
     * @return $this
     */
    public function setIsClosed($isClosed)
    {
        $this->container['isClosed'] = $isClosed;

        return $this;
    }

    /**
     * Gets validForNow
     *
     * @return bool
     */
    public function getValidForNow()
    {
        return isset($this->container['validForNow']) ? $this->container['validForNow'] : null;
    }

    /**
     * Sets validForNow
     *
     * @param bool $validForNow Set to true to present that this entry is valid for now.
     *
     * @return $this
     */
    public function setValidForNow($validForNow)
    {
        $this->container['validForNow'] = $validForNow;

        return $this;
    }

    /**
     * Gets isAlwaysOpen
     *
     * @return bool
     */
    public function getIsAlwaysOpen()
    {
        return isset($this->container['isAlwaysOpen']) ? $this->container['isAlwaysOpen'] : null;
    }

    /**
     * Sets isAlwaysOpen
     *
     * @param bool $isAlwaysOpen Set to true to present a time between the valid from and to times as allways open.
     *
     * @return $this
     */
    public function setIsAlwaysOpen($isAlwaysOpen)
    {
        $this->container['isAlwaysOpen'] = $isAlwaysOpen;

        return $this;
    }

    /**
     * Gets isReservation
     *
     * @return bool
     */
    public function getIsReservation()
    {
        return isset($this->container['isReservation']) ? $this->container['isReservation'] : null;
    }

    /**
     * Sets isReservation
     *
     * @param bool $isReservation Gets or sets a value indicating whether this instance is open on reservation.
     *
     * @return $this
     */
    public function setIsReservation($isReservation)
    {
        $this->container['isReservation'] = $isReservation;

        return $this;
    }

    /**
     * Gets additionalInformation
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getAdditionalInformation()
    {
        return isset($this->container['additionalInformation']) ? $this->container['additionalInformation'] : null;
    }

    /**
     * Sets additionalInformation
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $additionalInformation Localized list of additional information. (Max.Length: 150).
     *
     * @return $this
     */
    public function setAdditionalInformation($additionalInformation)
    {
        $this->container['additionalInformation'] = $additionalInformation;

        return $this;
    }

    /**
     * Gets openingHour
     *
     * @return \Tampere\PtvV11\PtvModel\V8VmOpenApiDailyOpeningTime[]
     */
    public function getOpeningHour()
    {
        return isset($this->container['openingHour']) ? $this->container['openingHour'] : null;
    }

    /**
     * Sets openingHour
     *
     * @param \Tampere\PtvV11\PtvModel\V8VmOpenApiDailyOpeningTime[] $openingHour Gets or sets the opening hour.
     *
     * @return $this
     */
    public function setOpeningHour($openingHour)
    {
        $this->container['openingHour'] = $openingHour;

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
     * @param int $orderNumber The order of service hours.
     *
     * @return $this
     */
    public function setOrderNumber($orderNumber)
    {
        $this->container['orderNumber'] = $orderNumber;

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
