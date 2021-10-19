<?php
/**
 * V10VmOpenApiWebPageChannelIn
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
 * V10VmOpenApiWebPageChannelIn Class Doc Comment
 *
 * @category Class
 * @description OPEN API V10 - View Model of web page channel for IN api
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V10VmOpenApiWebPageChannelIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V10VmOpenApiWebPageChannelIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sourceId' => 'string',
'supportEmails' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'isVisibleForAll' => 'bool',
'channelId' => 'string',
'versionId' => 'string',
'id' => 'string',
'serviceChannelNamesWithType' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'validFrom' => '\DateTime',
'validTo' => '\DateTime',
'currentPublishingStatus' => 'string',
'serviceChannelServices' => 'string[]',
'userName' => 'string',
'webPages' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]',
'serviceHours' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]',
'deleteAllServiceHours' => 'bool',
'availableLanguages' => 'string[]',
'requiredPropertiesAvailableLanguages' => 'string[]',
'areaType' => 'string',
'areas' => '\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]',
'supportPhones' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]',
'webPage' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'languages' => 'string[]',
'organizationId' => 'string',
'serviceChannelNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'serviceChannelDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'accessibilityClassification' => '\Tampere\PtvV11\PtvModel\VmOpenApiAccessibilityClassification[]',
'publishingStatus' => 'string',
'services' => 'string[]',
'deleteAllWebPages' => 'bool',
'deleteAllSupportEmails' => 'bool',
'deleteAllSupportPhones' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sourceId' => null,
'supportEmails' => null,
'isVisibleForAll' => null,
'channelId' => 'uuid',
'versionId' => 'uuid',
'id' => 'uuid',
'serviceChannelNamesWithType' => null,
'validFrom' => 'date-time',
'validTo' => 'date-time',
'currentPublishingStatus' => null,
'serviceChannelServices' => 'uuid',
'userName' => null,
'webPages' => null,
'serviceHours' => null,
'deleteAllServiceHours' => null,
'availableLanguages' => null,
'requiredPropertiesAvailableLanguages' => null,
'areaType' => null,
'areas' => null,
'supportPhones' => null,
'webPage' => null,
'languages' => null,
'organizationId' => null,
'serviceChannelNames' => null,
'serviceChannelDescriptions' => null,
'accessibilityClassification' => null,
'publishingStatus' => null,
'services' => null,
'deleteAllWebPages' => null,
'deleteAllSupportEmails' => null,
'deleteAllSupportPhones' => null    ];

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
'isVisibleForAll' => 'isVisibleForAll',
'channelId' => 'channelId',
'versionId' => 'versionId',
'id' => 'id',
'serviceChannelNamesWithType' => 'serviceChannelNamesWithType',
'validFrom' => 'validFrom',
'validTo' => 'validTo',
'currentPublishingStatus' => 'currentPublishingStatus',
'serviceChannelServices' => 'serviceChannelServices',
'userName' => 'userName',
'webPages' => 'webPages',
'serviceHours' => 'serviceHours',
'deleteAllServiceHours' => 'deleteAllServiceHours',
'availableLanguages' => 'availableLanguages',
'requiredPropertiesAvailableLanguages' => 'requiredPropertiesAvailableLanguages',
'areaType' => 'areaType',
'areas' => 'areas',
'supportPhones' => 'supportPhones',
'webPage' => 'webPage',
'languages' => 'languages',
'organizationId' => 'organizationId',
'serviceChannelNames' => 'serviceChannelNames',
'serviceChannelDescriptions' => 'serviceChannelDescriptions',
'accessibilityClassification' => 'accessibilityClassification',
'publishingStatus' => 'publishingStatus',
'services' => 'services',
'deleteAllWebPages' => 'deleteAllWebPages',
'deleteAllSupportEmails' => 'deleteAllSupportEmails',
'deleteAllSupportPhones' => 'deleteAllSupportPhones'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceId' => 'setSourceId',
'supportEmails' => 'setSupportEmails',
'isVisibleForAll' => 'setIsVisibleForAll',
'channelId' => 'setChannelId',
'versionId' => 'setVersionId',
'id' => 'setId',
'serviceChannelNamesWithType' => 'setServiceChannelNamesWithType',
'validFrom' => 'setValidFrom',
'validTo' => 'setValidTo',
'currentPublishingStatus' => 'setCurrentPublishingStatus',
'serviceChannelServices' => 'setServiceChannelServices',
'userName' => 'setUserName',
'webPages' => 'setWebPages',
'serviceHours' => 'setServiceHours',
'deleteAllServiceHours' => 'setDeleteAllServiceHours',
'availableLanguages' => 'setAvailableLanguages',
'requiredPropertiesAvailableLanguages' => 'setRequiredPropertiesAvailableLanguages',
'areaType' => 'setAreaType',
'areas' => 'setAreas',
'supportPhones' => 'setSupportPhones',
'webPage' => 'setWebPage',
'languages' => 'setLanguages',
'organizationId' => 'setOrganizationId',
'serviceChannelNames' => 'setServiceChannelNames',
'serviceChannelDescriptions' => 'setServiceChannelDescriptions',
'accessibilityClassification' => 'setAccessibilityClassification',
'publishingStatus' => 'setPublishingStatus',
'services' => 'setServices',
'deleteAllWebPages' => 'setDeleteAllWebPages',
'deleteAllSupportEmails' => 'setDeleteAllSupportEmails',
'deleteAllSupportPhones' => 'setDeleteAllSupportPhones'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceId' => 'getSourceId',
'supportEmails' => 'getSupportEmails',
'isVisibleForAll' => 'getIsVisibleForAll',
'channelId' => 'getChannelId',
'versionId' => 'getVersionId',
'id' => 'getId',
'serviceChannelNamesWithType' => 'getServiceChannelNamesWithType',
'validFrom' => 'getValidFrom',
'validTo' => 'getValidTo',
'currentPublishingStatus' => 'getCurrentPublishingStatus',
'serviceChannelServices' => 'getServiceChannelServices',
'userName' => 'getUserName',
'webPages' => 'getWebPages',
'serviceHours' => 'getServiceHours',
'deleteAllServiceHours' => 'getDeleteAllServiceHours',
'availableLanguages' => 'getAvailableLanguages',
'requiredPropertiesAvailableLanguages' => 'getRequiredPropertiesAvailableLanguages',
'areaType' => 'getAreaType',
'areas' => 'getAreas',
'supportPhones' => 'getSupportPhones',
'webPage' => 'getWebPage',
'languages' => 'getLanguages',
'organizationId' => 'getOrganizationId',
'serviceChannelNames' => 'getServiceChannelNames',
'serviceChannelDescriptions' => 'getServiceChannelDescriptions',
'accessibilityClassification' => 'getAccessibilityClassification',
'publishingStatus' => 'getPublishingStatus',
'services' => 'getServices',
'deleteAllWebPages' => 'getDeleteAllWebPages',
'deleteAllSupportEmails' => 'getDeleteAllSupportEmails',
'deleteAllSupportPhones' => 'getDeleteAllSupportPhones'    ];

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
        $this->container['isVisibleForAll'] = isset($data['isVisibleForAll']) ? $data['isVisibleForAll'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['serviceChannelNamesWithType'] = isset($data['serviceChannelNamesWithType']) ? $data['serviceChannelNamesWithType'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['currentPublishingStatus'] = isset($data['currentPublishingStatus']) ? $data['currentPublishingStatus'] : null;
        $this->container['serviceChannelServices'] = isset($data['serviceChannelServices']) ? $data['serviceChannelServices'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
        $this->container['serviceHours'] = isset($data['serviceHours']) ? $data['serviceHours'] : null;
        $this->container['deleteAllServiceHours'] = isset($data['deleteAllServiceHours']) ? $data['deleteAllServiceHours'] : null;
        $this->container['availableLanguages'] = isset($data['availableLanguages']) ? $data['availableLanguages'] : null;
        $this->container['requiredPropertiesAvailableLanguages'] = isset($data['requiredPropertiesAvailableLanguages']) ? $data['requiredPropertiesAvailableLanguages'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['supportPhones'] = isset($data['supportPhones']) ? $data['supportPhones'] : null;
        $this->container['webPage'] = isset($data['webPage']) ? $data['webPage'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['serviceChannelNames'] = isset($data['serviceChannelNames']) ? $data['serviceChannelNames'] : null;
        $this->container['serviceChannelDescriptions'] = isset($data['serviceChannelDescriptions']) ? $data['serviceChannelDescriptions'] : null;
        $this->container['accessibilityClassification'] = isset($data['accessibilityClassification']) ? $data['accessibilityClassification'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['deleteAllWebPages'] = isset($data['deleteAllWebPages']) ? $data['deleteAllWebPages'] : null;
        $this->container['deleteAllSupportEmails'] = isset($data['deleteAllSupportEmails']) ? $data['deleteAllSupportEmails'] : null;
        $this->container['deleteAllSupportPhones'] = isset($data['deleteAllSupportPhones']) ? $data['deleteAllSupportPhones'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['webPage'] === null) {
            $invalidProperties[] = "'webPage' can't be null";
        }
        if ($this->container['languages'] === null) {
            $invalidProperties[] = "'languages' can't be null";
        }
        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
        if ($this->container['serviceChannelNames'] === null) {
            $invalidProperties[] = "'serviceChannelNames' can't be null";
        }
        if ($this->container['serviceChannelDescriptions'] === null) {
            $invalidProperties[] = "'serviceChannelDescriptions' can't be null";
        }
        if ($this->container['accessibilityClassification'] === null) {
            $invalidProperties[] = "'accessibilityClassification' can't be null";
        }
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
        return $this->container['supportEmails'];
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
     * Gets isVisibleForAll
     *
     * @return bool
     */
    public function getIsVisibleForAll()
    {
        return $this->container['isVisibleForAll'];
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
        return $this->container['channelId'];
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
     * Gets serviceChannelNamesWithType
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceChannelNamesWithType()
    {
        return $this->container['serviceChannelNamesWithType'];
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
     * Gets validFrom
     *
     * @return \DateTime
     */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
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
        return $this->container['validTo'];
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
     * Gets serviceChannelServices
     *
     * @return string[]
     */
    public function getServiceChannelServices()
    {
        return $this->container['serviceChannelServices'];
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
        return $this->container['userName'];
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
     * Gets webPages
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]
     */
    public function getWebPages()
    {
        return $this->container['webPages'];
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
        return $this->container['serviceHours'];
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
     * Gets deleteAllServiceHours
     *
     * @return bool
     */
    public function getDeleteAllServiceHours()
    {
        return $this->container['deleteAllServiceHours'];
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
     * Gets areaType
     *
     * @return string
     */
    public function getAreaType()
    {
        return $this->container['areaType'];
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
        return $this->container['areas'];
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
        return $this->container['supportPhones'];
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
     * Gets webPage
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getWebPage()
    {
        return $this->container['webPage'];
    }

    /**
     * Sets webPage
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $webPage List of localized urls.
     *
     * @return $this
     */
    public function setWebPage($webPage)
    {
        $this->container['webPage'] = $webPage;

        return $this;
    }

    /**
     * Gets languages
     *
     * @return string[]
     */
    public function getLanguages()
    {
        return $this->container['languages'];
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
     * @param string $organizationId PTV organization identifier of organization responsible for this channel.
     *
     * @return $this
     */
    public function setOrganizationId($organizationId)
    {
        $this->container['organizationId'] = $organizationId;

        return $this;
    }

    /**
     * Gets serviceChannelNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getServiceChannelNames()
    {
        return $this->container['serviceChannelNames'];
    }

    /**
     * Sets serviceChannelNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $serviceChannelNames List of localized service channel names.
     *
     * @return $this
     */
    public function setServiceChannelNames($serviceChannelNames)
    {
        $this->container['serviceChannelNames'] = $serviceChannelNames;

        return $this;
    }

    /**
     * Gets serviceChannelDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceChannelDescriptions()
    {
        return $this->container['serviceChannelDescriptions'];
    }

    /**
     * Sets serviceChannelDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelDescriptions List of localized service channel descriptions. Possible type values are: Summary, Description.
     *
     * @return $this
     */
    public function setServiceChannelDescriptions($serviceChannelDescriptions)
    {
        $this->container['serviceChannelDescriptions'] = $serviceChannelDescriptions;

        return $this;
    }

    /**
     * Gets accessibilityClassification
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiAccessibilityClassification[]
     */
    public function getAccessibilityClassification()
    {
        return $this->container['accessibilityClassification'];
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
     * @param string $publishingStatus Service channel publishing status. Values: Draft or Published.
     *
     * @return $this
     */
    public function setPublishingStatus($publishingStatus)
    {
        $this->container['publishingStatus'] = $publishingStatus;

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
     * @param string[] $services List of related services (GUID).
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets deleteAllWebPages
     *
     * @return bool
     */
    public function getDeleteAllWebPages()
    {
        return $this->container['deleteAllWebPages'];
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
     * Gets deleteAllSupportEmails
     *
     * @return bool
     */
    public function getDeleteAllSupportEmails()
    {
        return $this->container['deleteAllSupportEmails'];
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
        return $this->container['deleteAllSupportPhones'];
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