<?php
/**
 * V10VmOpenApiWebPageChannelInBase
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
 * V10VmOpenApiWebPageChannelInBase Class Doc Comment
 *
 * @category Class
 * @description OPEN API V10 - View Model of web page channel for IN api - base
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V10VmOpenApiWebPageChannelInBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V10VmOpenApiWebPageChannelInBase';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sourceId' => 'string',
'supportEmails' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'languages' => 'string[]',
'isVisibleForAll' => 'bool',
'channelId' => 'string',
'versionId' => 'string',
'id' => 'string',
'organizationId' => 'string',
'serviceChannelNamesWithType' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'deleteAllSupportEmails' => 'bool',
'deleteAllSupportPhones' => 'bool',
'validFrom' => '\DateTime',
'validTo' => '\DateTime',
'currentPublishingStatus' => 'string',
'serviceChannelServices' => 'string[]',
'userName' => 'string',
'serviceChannelNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'webPage' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'accessibilityClassification' => '\Tampere\PtvV11\PtvModel\VmOpenApiAccessibilityClassification[]',
'webPages' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]',
'serviceHours' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]',
'deleteAllWebPages' => 'bool',
'deleteAllServiceHours' => 'bool',
'availableLanguages' => 'string[]',
'requiredPropertiesAvailableLanguages' => 'string[]',
'serviceChannelDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'areaType' => 'string',
'areas' => '\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]',
'supportPhones' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]',
'publishingStatus' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sourceId' => null,
'supportEmails' => null,
'languages' => null,
'isVisibleForAll' => null,
'channelId' => 'uuid',
'versionId' => 'uuid',
'id' => 'uuid',
'organizationId' => null,
'serviceChannelNamesWithType' => null,
'deleteAllSupportEmails' => null,
'deleteAllSupportPhones' => null,
'validFrom' => 'date-time',
'validTo' => 'date-time',
'currentPublishingStatus' => null,
'serviceChannelServices' => 'uuid',
'userName' => null,
'serviceChannelNames' => null,
'webPage' => null,
'accessibilityClassification' => null,
'webPages' => null,
'serviceHours' => null,
'deleteAllWebPages' => null,
'deleteAllServiceHours' => null,
'availableLanguages' => null,
'requiredPropertiesAvailableLanguages' => null,
'serviceChannelDescriptions' => null,
'areaType' => null,
'areas' => null,
'supportPhones' => null,
'publishingStatus' => null    ];

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
'supportEmails' => 'supportEmails',
'languages' => 'languages',
'isVisibleForAll' => 'isVisibleForAll',
'channelId' => 'channelId',
'versionId' => 'versionId',
'id' => 'id',
'organizationId' => 'organizationId',
'serviceChannelNamesWithType' => 'serviceChannelNamesWithType',
'deleteAllSupportEmails' => 'deleteAllSupportEmails',
'deleteAllSupportPhones' => 'deleteAllSupportPhones',
'validFrom' => 'validFrom',
'validTo' => 'validTo',
'currentPublishingStatus' => 'currentPublishingStatus',
'serviceChannelServices' => 'serviceChannelServices',
'userName' => 'userName',
'serviceChannelNames' => 'serviceChannelNames',
'webPage' => 'webPage',
'accessibilityClassification' => 'accessibilityClassification',
'webPages' => 'webPages',
'serviceHours' => 'serviceHours',
'deleteAllWebPages' => 'deleteAllWebPages',
'deleteAllServiceHours' => 'deleteAllServiceHours',
'availableLanguages' => 'availableLanguages',
'requiredPropertiesAvailableLanguages' => 'requiredPropertiesAvailableLanguages',
'serviceChannelDescriptions' => 'serviceChannelDescriptions',
'areaType' => 'areaType',
'areas' => 'areas',
'supportPhones' => 'supportPhones',
'publishingStatus' => 'publishingStatus'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceId' => 'setSourceId',
'supportEmails' => 'setSupportEmails',
'languages' => 'setLanguages',
'isVisibleForAll' => 'setIsVisibleForAll',
'channelId' => 'setChannelId',
'versionId' => 'setVersionId',
'id' => 'setId',
'organizationId' => 'setOrganizationId',
'serviceChannelNamesWithType' => 'setServiceChannelNamesWithType',
'deleteAllSupportEmails' => 'setDeleteAllSupportEmails',
'deleteAllSupportPhones' => 'setDeleteAllSupportPhones',
'validFrom' => 'setValidFrom',
'validTo' => 'setValidTo',
'currentPublishingStatus' => 'setCurrentPublishingStatus',
'serviceChannelServices' => 'setServiceChannelServices',
'userName' => 'setUserName',
'serviceChannelNames' => 'setServiceChannelNames',
'webPage' => 'setWebPage',
'accessibilityClassification' => 'setAccessibilityClassification',
'webPages' => 'setWebPages',
'serviceHours' => 'setServiceHours',
'deleteAllWebPages' => 'setDeleteAllWebPages',
'deleteAllServiceHours' => 'setDeleteAllServiceHours',
'availableLanguages' => 'setAvailableLanguages',
'requiredPropertiesAvailableLanguages' => 'setRequiredPropertiesAvailableLanguages',
'serviceChannelDescriptions' => 'setServiceChannelDescriptions',
'areaType' => 'setAreaType',
'areas' => 'setAreas',
'supportPhones' => 'setSupportPhones',
'publishingStatus' => 'setPublishingStatus'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceId' => 'getSourceId',
'supportEmails' => 'getSupportEmails',
'languages' => 'getLanguages',
'isVisibleForAll' => 'getIsVisibleForAll',
'channelId' => 'getChannelId',
'versionId' => 'getVersionId',
'id' => 'getId',
'organizationId' => 'getOrganizationId',
'serviceChannelNamesWithType' => 'getServiceChannelNamesWithType',
'deleteAllSupportEmails' => 'getDeleteAllSupportEmails',
'deleteAllSupportPhones' => 'getDeleteAllSupportPhones',
'validFrom' => 'getValidFrom',
'validTo' => 'getValidTo',
'currentPublishingStatus' => 'getCurrentPublishingStatus',
'serviceChannelServices' => 'getServiceChannelServices',
'userName' => 'getUserName',
'serviceChannelNames' => 'getServiceChannelNames',
'webPage' => 'getWebPage',
'accessibilityClassification' => 'getAccessibilityClassification',
'webPages' => 'getWebPages',
'serviceHours' => 'getServiceHours',
'deleteAllWebPages' => 'getDeleteAllWebPages',
'deleteAllServiceHours' => 'getDeleteAllServiceHours',
'availableLanguages' => 'getAvailableLanguages',
'requiredPropertiesAvailableLanguages' => 'getRequiredPropertiesAvailableLanguages',
'serviceChannelDescriptions' => 'getServiceChannelDescriptions',
'areaType' => 'getAreaType',
'areas' => 'getAreas',
'supportPhones' => 'getSupportPhones',
'publishingStatus' => 'getPublishingStatus'    ];

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
        $this->container['supportEmails'] = isset($data['supportEmails']) ? $data['supportEmails'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['isVisibleForAll'] = isset($data['isVisibleForAll']) ? $data['isVisibleForAll'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['serviceChannelNamesWithType'] = isset($data['serviceChannelNamesWithType']) ? $data['serviceChannelNamesWithType'] : null;
        $this->container['deleteAllSupportEmails'] = isset($data['deleteAllSupportEmails']) ? $data['deleteAllSupportEmails'] : null;
        $this->container['deleteAllSupportPhones'] = isset($data['deleteAllSupportPhones']) ? $data['deleteAllSupportPhones'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['currentPublishingStatus'] = isset($data['currentPublishingStatus']) ? $data['currentPublishingStatus'] : null;
        $this->container['serviceChannelServices'] = isset($data['serviceChannelServices']) ? $data['serviceChannelServices'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['serviceChannelNames'] = isset($data['serviceChannelNames']) ? $data['serviceChannelNames'] : null;
        $this->container['webPage'] = isset($data['webPage']) ? $data['webPage'] : null;
        $this->container['accessibilityClassification'] = isset($data['accessibilityClassification']) ? $data['accessibilityClassification'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
        $this->container['serviceHours'] = isset($data['serviceHours']) ? $data['serviceHours'] : null;
        $this->container['deleteAllWebPages'] = isset($data['deleteAllWebPages']) ? $data['deleteAllWebPages'] : null;
        $this->container['deleteAllServiceHours'] = isset($data['deleteAllServiceHours']) ? $data['deleteAllServiceHours'] : null;
        $this->container['availableLanguages'] = isset($data['availableLanguages']) ? $data['availableLanguages'] : null;
        $this->container['requiredPropertiesAvailableLanguages'] = isset($data['requiredPropertiesAvailableLanguages']) ? $data['requiredPropertiesAvailableLanguages'] : null;
        $this->container['serviceChannelDescriptions'] = isset($data['serviceChannelDescriptions']) ? $data['serviceChannelDescriptions'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['supportPhones'] = isset($data['supportPhones']) ? $data['supportPhones'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
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
        return isset($this->container['sourceId']) ? $this->container['sourceId'] : null;
    }

    /**
     * Sets sourceId
     *
     * @param string $sourceId External system identifier for this service channel. User needs to be logged in to be able to get/set value.
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;

        return $this;
    }

    /**
     * Gets supportEmails
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getSupportEmails()
    {
        return isset($this->container['supportEmails']) ? $this->container['supportEmails'] : null;
    }

    /**
     * Sets supportEmails
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $supportEmails List of support email addresses for the service channel. (Max.Length: 100).
     *
     * @return $this
     */
    public function setSupportEmails($supportEmails)
    {
        $this->container['supportEmails'] = $supportEmails;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return string[]
     */
    public function getLanguages()
    {
        return isset($this->container['languages']) ? $this->container['languages'] : null;
    }

    /**
     * Sets languages
     *
     * @param string[] $languages List of languages the service channel is available in (two letter language code).
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets isVisibleForAll
     *
     * @return bool
     */
    public function getIsVisibleForAll()
    {
        return isset($this->container['isVisibleForAll']) ? $this->container['isVisibleForAll'] : null;
    }

    /**
     * Sets isVisibleForAll
     *
     * @param bool $isVisibleForAll Indicates if channel can be used (referenced within services) by other users from other organizations.
     *
     * @return $this
     */
    public function setIsVisibleForAll($isVisibleForAll)
    {
        $this->container['isVisibleForAll'] = $isVisibleForAll;

        return $this;
    }

    /**
     * Gets channelId
     *
     * @return string
     */
    public function getChannelId()
    {
        return isset($this->container['channelId']) ? $this->container['channelId'] : null;
    }

    /**
     * Sets channelId
     *
     * @param string $channelId Gets or sets the special channel identifier.
     *
     * @return $this
     */
    public function setChannelId($channelId)
    {
        $this->container['channelId'] = $channelId;

        return $this;
    }

    /**
     * Gets versionId
     *
     * @return string
     */
    public function getVersionId()
    {
        return isset($this->container['versionId']) ? $this->container['versionId'] : null;
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
        return isset($this->container['id']) ? $this->container['id'] : null;
    }

    /**
     * Sets id
     *
     * @param string $id PTV identifier for the service channel.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets organizationId
     *
     * @return string
     */
    public function getOrganizationId()
    {
        return isset($this->container['organizationId']) ? $this->container['organizationId'] : null;
    }

    /**
     * Sets organizationId
     *
     * @param string $organizationId PTV organization identifier for organization responsible for this service channel.
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets serviceChannelNamesWithType
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceChannelNamesWithType()
    {
        return isset($this->container['serviceChannelNamesWithType']) ? $this->container['serviceChannelNamesWithType'] : null;
    }

    /**
     * Sets serviceChannelNamesWithType
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelNamesWithType Localized list of service channel names.
     *
     * @return $this
     */
    public function setServiceChannelNamesWithType($serviceChannelNamesWithType)
    {
        $this->container['serviceChannelNamesWithType'] = $serviceChannelNamesWithType;

        return $this;
    }

    /**
     * Gets deleteAllSupportEmails
     *
     * @return bool
     */
    public function getDeleteAllSupportEmails()
    {
        return isset($this->container['deleteAllSupportEmails']) ? $this->container['deleteAllSupportEmails'] : null;
    }

    /**
     * Sets deleteAllSupportEmails
     *
     * @param bool $deleteAllSupportEmails Set to true to delete all existing support email addresses for the service channel. The SupportEmails collection should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllSupportEmails($deleteAllSupportEmails)
    {
        $this->container['deleteAllSupportEmails'] = $deleteAllSupportEmails;

        return $this;
    }

    /**
     * Gets deleteAllSupportPhones
     *
     * @return bool
     */
    public function getDeleteAllSupportPhones()
    {
        return isset($this->container['deleteAllSupportPhones']) ? $this->container['deleteAllSupportPhones'] : null;
    }

    /**
     * Sets deleteAllSupportPhones
     *
     * @param bool $deleteAllSupportPhones Set to true to delete all existing support phone numbers for the service channel. The SupportPhones collection should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllSupportPhones($deleteAllSupportPhones)
    {
        $this->container['deleteAllSupportPhones'] = $deleteAllSupportPhones;

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
     * @param \DateTime $validFrom Date when item should be published.
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
     * @param \DateTime $validTo Date when item should be archived.
     *
     * @return $this
     */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;

        return $this;
    }

    /**
     * Gets currentPublishingStatus
     *
     * @return string
     */
    public function getCurrentPublishingStatus()
    {
        return isset($this->container['currentPublishingStatus']) ? $this->container['currentPublishingStatus'] : null;
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
     * Gets serviceChannelServices
     *
     * @return string[]
     */
    public function getServiceChannelServices()
    {
        return isset($this->container['serviceChannelServices']) ? $this->container['serviceChannelServices'] : null;
    }

    /**
     * Sets serviceChannelServices
     *
     * @param string[] $serviceChannelServices Internal property for adding service relations for a service channel.
     *
     * @return $this
     */
    public function setServiceChannelServices($serviceChannelServices)
    {
        $this->container['serviceChannelServices'] = $serviceChannelServices;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return isset($this->container['userName']) ? $this->container['userName'] : null;
    }

    /**
     * Sets userName
     *
     * @param string $userName User name.
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets serviceChannelNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getServiceChannelNames()
    {
        return isset($this->container['serviceChannelNames']) ? $this->container['serviceChannelNames'] : null;
    }

    /**
     * Sets serviceChannelNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $serviceChannelNames Localized list of service channel names. (Max.Length: 100).
     *
     * @return $this
     */
    public function setServiceChannelNames($serviceChannelNames)
    {
        $this->container['serviceChannelNames'] = $serviceChannelNames;

        return $this;
    }

    /**
     * Gets webPage
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getWebPage()
    {
        return isset($this->container['webPage']) ? $this->container['webPage'] : null;
    }

    /**
     * Sets webPage
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $webPage List of localized urls. (Max.Length: 500).
     *
     * @return $this
     */
    public function setWebPage($webPage)
    {
        $this->container['webPage'] = $webPage;

        return $this;
    }

    /**
     * Gets accessibilityClassification
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAccessibilityClassification[]
     */
    public function getAccessibilityClassification()
    {
        return isset($this->container['accessibilityClassification']) ? $this->container['accessibilityClassification'] : null;
    }

    /**
     * Sets accessibilityClassification
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAccessibilityClassification[] $accessibilityClassification The accessibility classification.
     *
     * @return $this
     */
    public function setAccessibilityClassification($accessibilityClassification)
    {
        $this->container['accessibilityClassification'] = $accessibilityClassification;

        return $this;
    }

    /**
     * Gets webPages
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]
     */
    public function getWebPages()
    {
        return isset($this->container['webPages']) ? $this->container['webPages'] : null;
    }

    /**
     * Sets webPages
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[] $webPages List of service channel web pages.
     *
     * @return $this
     */
    public function setWebPages($webPages)
    {
        $this->container['webPages'] = $webPages;

        return $this;
    }

    /**
     * Gets serviceHours
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]
     */
    public function getServiceHours()
    {
        return isset($this->container['serviceHours']) ? $this->container['serviceHours'] : null;
    }

    /**
     * Sets serviceHours
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[] $serviceHours List of service channel service hours.
     *
     * @return $this
     */
    public function setServiceHours($serviceHours)
    {
        $this->container['serviceHours'] = $serviceHours;

        return $this;
    }

    /**
     * Gets deleteAllWebPages
     *
     * @return bool
     */
    public function getDeleteAllWebPages()
    {
        return isset($this->container['deleteAllWebPages']) ? $this->container['deleteAllWebPages'] : null;
    }

    /**
     * Sets deleteAllWebPages
     *
     * @param bool $deleteAllWebPages Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllWebPages($deleteAllWebPages)
    {
        $this->container['deleteAllWebPages'] = $deleteAllWebPages;

        return $this;
    }

    /**
     * Gets deleteAllServiceHours
     *
     * @return bool
     */
    public function getDeleteAllServiceHours()
    {
        return isset($this->container['deleteAllServiceHours']) ? $this->container['deleteAllServiceHours'] : null;
    }

    /**
     * Sets deleteAllServiceHours
     *
     * @param bool $deleteAllServiceHours Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllServiceHours($deleteAllServiceHours)
    {
        $this->container['deleteAllServiceHours'] = $deleteAllServiceHours;

        return $this;
    }

    /**
     * Gets availableLanguages
     *
     * @return string[]
     */
    public function getAvailableLanguages()
    {
        return isset($this->container['availableLanguages']) ? $this->container['availableLanguages'] : null;
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
     * Gets requiredPropertiesAvailableLanguages
     *
     * @return string[]
     */
    public function getRequiredPropertiesAvailableLanguages()
    {
        return isset($this->container['requiredPropertiesAvailableLanguages']) ? $this->container['requiredPropertiesAvailableLanguages'] : null;
    }

    /**
     * Sets requiredPropertiesAvailableLanguages
     *
     * @param string[] $requiredPropertiesAvailableLanguages Internal property to check the languages within required lists: ServiceChannelNames, ServiceChannelDescriptions  and ChannelUrls lists.
     *
     * @return $this
     */
    public function setRequiredPropertiesAvailableLanguages($requiredPropertiesAvailableLanguages)
    {
        $this->container['requiredPropertiesAvailableLanguages'] = $requiredPropertiesAvailableLanguages;

        return $this;
    }

    /**
     * Gets serviceChannelDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceChannelDescriptions()
    {
        return isset($this->container['serviceChannelDescriptions']) ? $this->container['serviceChannelDescriptions'] : null;
    }

    /**
     * Sets serviceChannelDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelDescriptions List of localized service channel descriptions. Possible type values are: Summary, Description. (Max.Length: 150 Summary).
     *
     * @return $this
     */
    public function setServiceChannelDescriptions($serviceChannelDescriptions)
    {
        $this->container['serviceChannelDescriptions'] = $serviceChannelDescriptions;

        return $this;
    }

    /**
     * Gets areaType
     *
     * @return string
     */
    public function getAreaType()
    {
        return isset($this->container['areaType']) ? $this->container['areaType'] : null;
    }

    /**
     * Sets areaType
     *
     * @param string $areaType Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType.
     *
     * @return $this
     */
    public function setAreaType($areaType)
    {
        $this->container['areaType'] = $areaType;

        return $this;
    }

    /**
     * Gets areas
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]
     */
    public function getAreas()
    {
        return isset($this->container['areas']) ? $this->container['areas'] : null;
    }

    /**
     * Sets areas
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[] $areas List of areas. List can contain different types of areas.
     *
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

        return $this;
    }

    /**
     * Gets supportPhones
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]
     */
    public function getSupportPhones()
    {
        return isset($this->container['supportPhones']) ? $this->container['supportPhones'] : null;
    }

    /**
     * Sets supportPhones
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[] $supportPhones List of support phone numbers for the service channel.
     *
     * @return $this
     */
    public function setSupportPhones($supportPhones)
    {
        $this->container['supportPhones'] = $supportPhones;

        return $this;
    }

    /**
     * Gets publishingStatus
     *
     * @return string
     */
    public function getPublishingStatus()
    {
        return isset($this->container['publishingStatus']) ? $this->container['publishingStatus'] : null;
    }

    /**
     * Sets publishingStatus
     *
     * @param string $publishingStatus Service channel publishing status. Values: Draft, Published, Deleted or Modified.
     *
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

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
