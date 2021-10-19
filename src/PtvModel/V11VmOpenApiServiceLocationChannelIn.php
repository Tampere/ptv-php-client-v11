<?php
/**
 * V11VmOpenApiServiceLocationChannelIn
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
 * V11VmOpenApiServiceLocationChannelIn Class Doc Comment
 *
 * @category Class
 * @description OPEN API V11 - View Model of service location channel for IN api
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiServiceLocationChannelIn implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiServiceLocationChannelIn';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sourceId' => 'string',
'webPages' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]',
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
'oid' => 'string',
'emails' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'supportEmails' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'faxNumbers' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[]',
'supportPhones' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]',
'availableLanguages' => 'string[]',
'requiredPropertiesAvailableLanguages' => 'string[]',
'areaType' => 'string',
'areas' => '\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]',
'phoneNumbers' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]',
'serviceHours' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]',
'organizationId' => 'string',
'serviceChannelNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'serviceChannelDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'displayNameType' => '\Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]',
'languages' => 'string[]',
'addresses' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiAddressLocationIn[]',
'publishingStatus' => 'string',
'services' => 'string[]',
'deleteAllPhoneNumbers' => 'bool',
'deleteAllFaxNumbers' => 'bool',
'deleteAllServiceHours' => 'bool',
'deleteAllWebPages' => 'bool',
'deleteAllSupportEmails' => 'bool',
'deleteAllSupportPhones' => 'bool',
'deleteOid' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sourceId' => null,
'webPages' => null,
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
'oid' => null,
'emails' => null,
'supportEmails' => null,
'faxNumbers' => null,
'supportPhones' => null,
'availableLanguages' => null,
'requiredPropertiesAvailableLanguages' => null,
'areaType' => null,
'areas' => null,
'phoneNumbers' => null,
'serviceHours' => null,
'organizationId' => null,
'serviceChannelNames' => null,
'serviceChannelDescriptions' => null,
'displayNameType' => null,
'languages' => null,
'addresses' => null,
'publishingStatus' => null,
'services' => null,
'deleteAllPhoneNumbers' => null,
'deleteAllFaxNumbers' => null,
'deleteAllServiceHours' => null,
'deleteAllWebPages' => null,
'deleteAllSupportEmails' => null,
'deleteAllSupportPhones' => null,
'deleteOid' => null    ];

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
'webPages' => 'webPages',
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
'oid' => 'oid',
'emails' => 'emails',
'supportEmails' => 'supportEmails',
'faxNumbers' => 'faxNumbers',
'supportPhones' => 'supportPhones',
'availableLanguages' => 'availableLanguages',
'requiredPropertiesAvailableLanguages' => 'requiredPropertiesAvailableLanguages',
'areaType' => 'areaType',
'areas' => 'areas',
'phoneNumbers' => 'phoneNumbers',
'serviceHours' => 'serviceHours',
'organizationId' => 'organizationId',
'serviceChannelNames' => 'serviceChannelNames',
'serviceChannelDescriptions' => 'serviceChannelDescriptions',
'displayNameType' => 'displayNameType',
'languages' => 'languages',
'addresses' => 'addresses',
'publishingStatus' => 'publishingStatus',
'services' => 'services',
'deleteAllPhoneNumbers' => 'deleteAllPhoneNumbers',
'deleteAllFaxNumbers' => 'deleteAllFaxNumbers',
'deleteAllServiceHours' => 'deleteAllServiceHours',
'deleteAllWebPages' => 'deleteAllWebPages',
'deleteAllSupportEmails' => 'deleteAllSupportEmails',
'deleteAllSupportPhones' => 'deleteAllSupportPhones',
'deleteOid' => 'deleteOid'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sourceId' => 'setSourceId',
'webPages' => 'setWebPages',
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
'oid' => 'setOid',
'emails' => 'setEmails',
'supportEmails' => 'setSupportEmails',
'faxNumbers' => 'setFaxNumbers',
'supportPhones' => 'setSupportPhones',
'availableLanguages' => 'setAvailableLanguages',
'requiredPropertiesAvailableLanguages' => 'setRequiredPropertiesAvailableLanguages',
'areaType' => 'setAreaType',
'areas' => 'setAreas',
'phoneNumbers' => 'setPhoneNumbers',
'serviceHours' => 'setServiceHours',
'organizationId' => 'setOrganizationId',
'serviceChannelNames' => 'setServiceChannelNames',
'serviceChannelDescriptions' => 'setServiceChannelDescriptions',
'displayNameType' => 'setDisplayNameType',
'languages' => 'setLanguages',
'addresses' => 'setAddresses',
'publishingStatus' => 'setPublishingStatus',
'services' => 'setServices',
'deleteAllPhoneNumbers' => 'setDeleteAllPhoneNumbers',
'deleteAllFaxNumbers' => 'setDeleteAllFaxNumbers',
'deleteAllServiceHours' => 'setDeleteAllServiceHours',
'deleteAllWebPages' => 'setDeleteAllWebPages',
'deleteAllSupportEmails' => 'setDeleteAllSupportEmails',
'deleteAllSupportPhones' => 'setDeleteAllSupportPhones',
'deleteOid' => 'setDeleteOid'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sourceId' => 'getSourceId',
'webPages' => 'getWebPages',
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
'oid' => 'getOid',
'emails' => 'getEmails',
'supportEmails' => 'getSupportEmails',
'faxNumbers' => 'getFaxNumbers',
'supportPhones' => 'getSupportPhones',
'availableLanguages' => 'getAvailableLanguages',
'requiredPropertiesAvailableLanguages' => 'getRequiredPropertiesAvailableLanguages',
'areaType' => 'getAreaType',
'areas' => 'getAreas',
'phoneNumbers' => 'getPhoneNumbers',
'serviceHours' => 'getServiceHours',
'organizationId' => 'getOrganizationId',
'serviceChannelNames' => 'getServiceChannelNames',
'serviceChannelDescriptions' => 'getServiceChannelDescriptions',
'displayNameType' => 'getDisplayNameType',
'languages' => 'getLanguages',
'addresses' => 'getAddresses',
'publishingStatus' => 'getPublishingStatus',
'services' => 'getServices',
'deleteAllPhoneNumbers' => 'getDeleteAllPhoneNumbers',
'deleteAllFaxNumbers' => 'getDeleteAllFaxNumbers',
'deleteAllServiceHours' => 'getDeleteAllServiceHours',
'deleteAllWebPages' => 'getDeleteAllWebPages',
'deleteAllSupportEmails' => 'getDeleteAllSupportEmails',
'deleteAllSupportPhones' => 'getDeleteAllSupportPhones',
'deleteOid' => 'getDeleteOid'    ];

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
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
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
        $this->container['oid'] = isset($data['oid']) ? $data['oid'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['supportEmails'] = isset($data['supportEmails']) ? $data['supportEmails'] : null;
        $this->container['faxNumbers'] = isset($data['faxNumbers']) ? $data['faxNumbers'] : null;
        $this->container['supportPhones'] = isset($data['supportPhones']) ? $data['supportPhones'] : null;
        $this->container['availableLanguages'] = isset($data['availableLanguages']) ? $data['availableLanguages'] : null;
        $this->container['requiredPropertiesAvailableLanguages'] = isset($data['requiredPropertiesAvailableLanguages']) ? $data['requiredPropertiesAvailableLanguages'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['phoneNumbers'] = isset($data['phoneNumbers']) ? $data['phoneNumbers'] : null;
        $this->container['serviceHours'] = isset($data['serviceHours']) ? $data['serviceHours'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['serviceChannelNames'] = isset($data['serviceChannelNames']) ? $data['serviceChannelNames'] : null;
        $this->container['serviceChannelDescriptions'] = isset($data['serviceChannelDescriptions']) ? $data['serviceChannelDescriptions'] : null;
        $this->container['displayNameType'] = isset($data['displayNameType']) ? $data['displayNameType'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['deleteAllPhoneNumbers'] = isset($data['deleteAllPhoneNumbers']) ? $data['deleteAllPhoneNumbers'] : null;
        $this->container['deleteAllFaxNumbers'] = isset($data['deleteAllFaxNumbers']) ? $data['deleteAllFaxNumbers'] : null;
        $this->container['deleteAllServiceHours'] = isset($data['deleteAllServiceHours']) ? $data['deleteAllServiceHours'] : null;
        $this->container['deleteAllWebPages'] = isset($data['deleteAllWebPages']) ? $data['deleteAllWebPages'] : null;
        $this->container['deleteAllSupportEmails'] = isset($data['deleteAllSupportEmails']) ? $data['deleteAllSupportEmails'] : null;
        $this->container['deleteAllSupportPhones'] = isset($data['deleteAllSupportPhones']) ? $data['deleteAllSupportPhones'] : null;
        $this->container['deleteOid'] = isset($data['deleteOid']) ? $data['deleteOid'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['organizationId'] === null) {
            $invalidProperties[] = "'organizationId' can't be null";
        }
        if ($this->container['serviceChannelNames'] === null) {
            $invalidProperties[] = "'serviceChannelNames' can't be null";
        }
        if ($this->container['serviceChannelDescriptions'] === null) {
            $invalidProperties[] = "'serviceChannelDescriptions' can't be null";
        }
        if ($this->container['displayNameType'] === null) {
            $invalidProperties[] = "'displayNameType' can't be null";
        }
        if ($this->container['languages'] === null) {
            $invalidProperties[] = "'languages' can't be null";
        }
        if ($this->container['addresses'] === null) {
            $invalidProperties[] = "'addresses' can't be null";
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
     * Gets oid
     *
     * @return string
     */
    public function getOid()
    {
        return $this->container['oid'];
    }

    /**
     * Sets oid
     *
     * @param string $oid Service channel OID. Must match the regex @\"^[A-Za-z0-9.-]*$\".  NOTICE! At the moment the property is only a placeholder. The data is not saved into database!
     *
     * @return $this
     */
    public function setOid($oid)
    {
        $this->container['oid'] = $oid;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $emails List email addresses for the service channel.
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $supportEmails List email addresses for the service channel.
     *
     * @return $this
     */
    public function setSupportEmails($supportEmails)
    {
        $this->container['supportEmails'] = $supportEmails;

        return $this;
    }

    /**
     * Gets faxNumbers
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[]
     */
    public function getFaxNumbers()
    {
        return $this->container['faxNumbers'];
    }

    /**
     * Sets faxNumbers
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[] $faxNumbers Service location contact fax numbers.
     *
     * @return $this
     */
    public function setFaxNumbers($faxNumbers)
    {
        $this->container['faxNumbers'] = $faxNumbers;

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
     * Gets phoneNumbers
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phoneNumbers'];
    }

    /**
     * Sets phoneNumbers
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[] $phoneNumbers List of support phone numbers for the service channel.
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->container['phoneNumbers'] = $phoneNumbers;

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
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceChannelNames()
    {
        return $this->container['serviceChannelNames'];
    }

    /**
     * Sets serviceChannelNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelNames List of localized service channel names. Possible type values are: Name, AlternativeName.
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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelDescriptions List of localized service channel descriptions. Possible type values are: Description, Summary.
     *
     * @return $this
     */
    public function setServiceChannelDescriptions($serviceChannelDescriptions)
    {
        $this->container['serviceChannelDescriptions'] = $serviceChannelDescriptions;

        return $this;
    }

    /**
     * Gets displayNameType
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]
     */
    public function getDisplayNameType()
    {
        return $this->container['displayNameType'];
    }

    /**
     * Sets displayNameType
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[] $displayNameType List of Display name types (Name or AlternativeName) for each language version of ServiceChannelNames.  Is only available for PUT operations, since user cannot add alternative anmes through in api (PTV-4340).
     *
     * @return $this
     */
    public function setDisplayNameType($displayNameType)
    {
        $this->container['displayNameType'] = $displayNameType;

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
     * Gets addresses
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiAddressLocationIn[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiAddressLocationIn[] $addresses List of visiting addresses.
     *
     * @return $this
     */
    public function setAddresses($addresses)
    {
        $this->container['addresses'] = $addresses;

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
     * Gets deleteAllPhoneNumbers
     *
     * @return bool
     */
    public function getDeleteAllPhoneNumbers()
    {
        return $this->container['deleteAllPhoneNumbers'];
    }

    /**
     * Sets deleteAllPhoneNumbers
     *
     * @param bool $deleteAllPhoneNumbers Set to true to delete phone number. The prohone property should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllPhoneNumbers($deleteAllPhoneNumbers)
    {
        $this->container['deleteAllPhoneNumbers'] = $deleteAllPhoneNumbers;

        return $this;
    }

    /**
     * Gets deleteAllFaxNumbers
     *
     * @return bool
     */
    public function getDeleteAllFaxNumbers()
    {
        return $this->container['deleteAllFaxNumbers'];
    }

    /**
     * Sets deleteAllFaxNumbers
     *
     * @param bool $deleteAllFaxNumbers Set to true to delete fax number. The fax property should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllFaxNumbers($deleteAllFaxNumbers)
    {
        $this->container['deleteAllFaxNumbers'] = $deleteAllFaxNumbers;

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
     * @param bool $deleteAllSupportEmails Set to true to delete emails. The email property should be empty when this property is set to true.
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
     * @param bool $deleteAllSupportPhones Set to true to delete all existing support phones for the service channel. The SupportPhones collection should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteAllSupportPhones($deleteAllSupportPhones)
    {
        $this->container['deleteAllSupportPhones'] = $deleteAllSupportPhones;

        return $this;
    }

    /**
     * Gets deleteOid
     *
     * @return bool
     */
    public function getDeleteOid()
    {
        return $this->container['deleteOid'];
    }

    /**
     * Sets deleteOid
     *
     * @param bool $deleteOid Set to true to delete OID. The Oid property should be empty when this property is set to true.
     *
     * @return $this
     */
    public function setDeleteOid($deleteOid)
    {
        $this->container['deleteOid'] = $deleteOid;

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