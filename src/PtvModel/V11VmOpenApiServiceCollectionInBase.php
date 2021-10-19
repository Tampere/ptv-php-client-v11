<?php
/**
 * V11VmOpenApiServiceCollectionInBase
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
 * V11VmOpenApiServiceCollectionInBase Class Doc Comment
 *
 * @category Class
 * @description OPEN API V11 - View Model of service collection IN - base
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiServiceCollectionInBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiServiceCollectionInBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sourceId' => 'string',
'serviceCollectionNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'publishingStatus' => 'string',
'availableLanguages' => 'string[]',
'versionId' => 'string',
'id' => 'string',
'currentPublishingStatus' => 'string',
'organizationId' => 'string',
'services' => 'string[]',
'serviceCollectionServices' => 'string[]',
'serviceCollectionChannels' => 'string[]',
'deleteAllServices' => 'bool',
'deleteAllChannels' => 'bool',
'requiredPropertiesAvailableLanguages' => 'string[]',
'serviceCollectionDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'serviceChannels' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sourceId' => null,
'serviceCollectionNames' => null,
'publishingStatus' => null,
'availableLanguages' => null,
'versionId' => 'uuid',
'id' => 'uuid',
'currentPublishingStatus' => null,
'organizationId' => null,
'services' => null,
'serviceCollectionServices' => 'uuid',
'serviceCollectionChannels' => 'uuid',
'deleteAllServices' => null,
'deleteAllChannels' => null,
'requiredPropertiesAvailableLanguages' => null,
'serviceCollectionDescriptions' => null,
'serviceChannels' => null    ];

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
        'sourceId' => 'sourceId',
'serviceCollectionNames' => 'serviceCollectionNames',
'publishingStatus' => 'publishingStatus',
'availableLanguages' => 'availableLanguages',
'versionId' => 'versionId',
'id' => 'id',
'currentPublishingStatus' => 'currentPublishingStatus',
'organizationId' => 'organizationId',
'services' => 'services',
'serviceCollectionServices' => 'serviceCollectionServices',
'serviceCollectionChannels' => 'serviceCollectionChannels',
'deleteAllServices' => 'deleteAllServices',
'deleteAllChannels' => 'deleteAllChannels',
'requiredPropertiesAvailableLanguages' => 'requiredPropertiesAvailableLanguages',
'serviceCollectionDescriptions' => 'serviceCollectionDescriptions',
'serviceChannels' => 'serviceChannels'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceId' => 'setSourceId',
'serviceCollectionNames' => 'setServiceCollectionNames',
'publishingStatus' => 'setPublishingStatus',
'availableLanguages' => 'setAvailableLanguages',
'versionId' => 'setVersionId',
'id' => 'setId',
'currentPublishingStatus' => 'setCurrentPublishingStatus',
'organizationId' => 'setOrganizationId',
'services' => 'setServices',
'serviceCollectionServices' => 'setServiceCollectionServices',
'serviceCollectionChannels' => 'setServiceCollectionChannels',
'deleteAllServices' => 'setDeleteAllServices',
'deleteAllChannels' => 'setDeleteAllChannels',
'requiredPropertiesAvailableLanguages' => 'setRequiredPropertiesAvailableLanguages',
'serviceCollectionDescriptions' => 'setServiceCollectionDescriptions',
'serviceChannels' => 'setServiceChannels'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceId' => 'getSourceId',
'serviceCollectionNames' => 'getServiceCollectionNames',
'publishingStatus' => 'getPublishingStatus',
'availableLanguages' => 'getAvailableLanguages',
'versionId' => 'getVersionId',
'id' => 'getId',
'currentPublishingStatus' => 'getCurrentPublishingStatus',
'organizationId' => 'getOrganizationId',
'services' => 'getServices',
'serviceCollectionServices' => 'getServiceCollectionServices',
'serviceCollectionChannels' => 'getServiceCollectionChannels',
'deleteAllServices' => 'getDeleteAllServices',
'deleteAllChannels' => 'getDeleteAllChannels',
'requiredPropertiesAvailableLanguages' => 'getRequiredPropertiesAvailableLanguages',
'serviceCollectionDescriptions' => 'getServiceCollectionDescriptions',
'serviceChannels' => 'getServiceChannels'    ];

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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['serviceCollectionNames'] = isset($data['serviceCollectionNames']) ? $data['serviceCollectionNames'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['availableLanguages'] = isset($data['availableLanguages']) ? $data['availableLanguages'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['currentPublishingStatus'] = isset($data['currentPublishingStatus']) ? $data['currentPublishingStatus'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['serviceCollectionServices'] = isset($data['serviceCollectionServices']) ? $data['serviceCollectionServices'] : null;
        $this->container['serviceCollectionChannels'] = isset($data['serviceCollectionChannels']) ? $data['serviceCollectionChannels'] : null;
        $this->container['deleteAllServices'] = isset($data['deleteAllServices']) ? $data['deleteAllServices'] : null;
        $this->container['deleteAllChannels'] = isset($data['deleteAllChannels']) ? $data['deleteAllChannels'] : null;
        $this->container['requiredPropertiesAvailableLanguages'] = isset($data['requiredPropertiesAvailableLanguages']) ? $data['requiredPropertiesAvailableLanguages'] : null;
        $this->container['serviceCollectionDescriptions'] = isset($data['serviceCollectionDescriptions']) ? $data['serviceCollectionDescriptions'] : null;
        $this->container['serviceChannels'] = isset($data['serviceChannels']) ? $data['serviceChannels'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['publishingStatus'] === null) {
            $invalidProperties[] = "'publishingStatus' can't be null";
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
     * Gets sourceId
     *
     * @return string
     */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
     * Sets sourceId
     *
     * @param string $sourceId External system identifier for the entity. User needs to be logged in to be able to get/set value.
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;

        return $this;
    }

    /**
     * Gets serviceCollectionNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getServiceCollectionNames()
    {
        return $this->container['serviceCollectionNames'];
    }

    /**
     * Sets serviceCollectionNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $serviceCollectionNames List of localized service collection names. (Max.Length: 100).
     *
     * @return $this
     */
    public function setServiceCollectionNames($serviceCollectionNames)
    {
        $this->container['serviceCollectionNames'] = $serviceCollectionNames;

        return $this;
    }

    /**
     * Gets publishingStatus
     *
     * @return string
     */
    public function getPublishingStatus()
    {
        return $this->container['publishingStatus'];
    }

    /**
     * Sets publishingStatus
     *
     * @param string $publishingStatus Publishing status. Possible values are: Draft, Published, Deleted or Modified.
     *
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

        return $this;
    }

    /**
     * Gets availableLanguages
     *
     * @return string[]
     */
    public function getAvailableLanguages()
    {
        return $this->container['availableLanguages'];
    }

    /**
     * Sets availableLanguages
     *
     * @param string[] $availableLanguages Gets or sets available languages
     *
     * @return $this
     */
    public function setAvailableLanguages($availableLanguages)
    {
        $this->container['availableLanguages'] = $availableLanguages;

        return $this;
    }

    /**
     * Gets versionId
     *
     * @return string
     */
    public function getVersionId()
    {
        return $this->container['versionId'];
    }

    /**
     * Sets versionId
     *
     * @param string $versionId The identifier for current version.
     *
     * @return $this
     */
    public function setVersionId($versionId)
    {
        $this->container['versionId'] = $versionId;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id PTV service identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets currentPublishingStatus
     *
     * @return string
     */
    public function getCurrentPublishingStatus()
    {
        return $this->container['currentPublishingStatus'];
    }

    /**
     * Sets currentPublishingStatus
     *
     * @param string $currentPublishingStatus Current version publishing status.
     *
     * @return $this
     */
    public function setCurrentPublishingStatus($currentPublishingStatus)
    {
        $this->container['currentPublishingStatus'] = $currentPublishingStatus;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return $this->container['organizationId'];
    }

    /**
     * Sets organizationId
     *
     * @param string $organizationId Main responsible organization Id
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets services
     *
     * @return string[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param string[] $services List of service collection services.
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets serviceCollectionServices
     *
     * @return string[]
     */
    public function getServiceCollectionServices()
    {
        return $this->container['serviceCollectionServices'];
    }

    /**
     * Sets serviceCollectionServices
     *
     * @param string[] $serviceCollectionServices Internal property for adding service collection services for service collection.
     *
     * @return $this
     */
    public function setServiceCollectionServices($serviceCollectionServices)
    {
        $this->container['serviceCollectionServices'] = $serviceCollectionServices;

        return $this;
    }

    /**
     * Gets serviceCollectionChannels
     *
     * @return string[]
     */
    public function getServiceCollectionChannels()
    {
        return $this->container['serviceCollectionChannels'];
    }

    /**
     * Sets serviceCollectionChannels
     *
     * @param string[] $serviceCollectionChannels Internal property for adding service collection services for service collection.
     *
     * @return $this
     */
    public function setServiceCollectionChannels($serviceCollectionChannels)
    {
        $this->container['serviceCollectionChannels'] = $serviceCollectionChannels;

        return $this;
    }

    /**
     * Gets deleteAllServices
     *
     * @return bool
     */
    public function getDeleteAllServices()
    {
        return $this->container['deleteAllServices'];
    }

    /**
     * Sets deleteAllServices
     *
     * @param bool $deleteAllServices Set to true to delete all existing services (the services collection for this object should be empty collection when this option is used).
     *
     * @return $this
     */
    public function setDeleteAllServices($deleteAllServices)
    {
        $this->container['deleteAllServices'] = $deleteAllServices;

        return $this;
    }

    /**
     * Gets deleteAllChannels
     *
     * @return bool
     */
    public function getDeleteAllChannels()
    {
        return $this->container['deleteAllChannels'];
    }

    /**
     * Sets deleteAllChannels
     *
     * @param bool $deleteAllChannels Set to true to delete all existing channels (the services collection for this object should be empty collection when this option is used).
     *
     * @return $this
     */
    public function setDeleteAllChannels($deleteAllChannels)
    {
        $this->container['deleteAllChannels'] = $deleteAllChannels;

        return $this;
    }

    /**
     * Gets requiredPropertiesAvailableLanguages
     *
     * @return string[]
     */
    public function getRequiredPropertiesAvailableLanguages()
    {
        return $this->container['requiredPropertiesAvailableLanguages'];
    }

    /**
     * Sets requiredPropertiesAvailableLanguages
     *
     * @param string[] $requiredPropertiesAvailableLanguages Internal property to check the languages within required lists: ServiceCollectionNames and ServiceCollectionDescriptions
     *
     * @return $this
     */
    public function setRequiredPropertiesAvailableLanguages($requiredPropertiesAvailableLanguages)
    {
        $this->container['requiredPropertiesAvailableLanguages'] = $requiredPropertiesAvailableLanguages;

        return $this;
    }

    /**
     * Gets serviceCollectionDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceCollectionDescriptions()
    {
        return $this->container['serviceCollectionDescriptions'];
    }

    /**
     * Sets serviceCollectionDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceCollectionDescriptions List of localized service colections descriptions. Possible type values are: Description, Summary. (Max.Length: 150 Summary). (Max.Length: 2500 Description).
     *
     * @return $this
     */
    public function setServiceCollectionDescriptions($serviceCollectionDescriptions)
    {
        $this->container['serviceCollectionDescriptions'] = $serviceCollectionDescriptions;

        return $this;
    }

    /**
     * Gets serviceChannels
     *
     * @return string[]
     */
    public function getServiceChannels()
    {
        return $this->container['serviceChannels'];
    }

    /**
     * Sets serviceChannels
     *
     * @param string[] $serviceChannels List of service collection channels.
     *
     * @return $this
     */
    public function setServiceChannels($serviceChannels)
    {
        $this->container['serviceChannels'] = $serviceChannels;

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
