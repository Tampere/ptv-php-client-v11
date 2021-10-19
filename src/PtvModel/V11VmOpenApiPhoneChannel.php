<?php
/**
 * V11VmOpenApiPhoneChannel
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
 * V11VmOpenApiPhoneChannel Class Doc Comment
 *
 * @category Class
 * @description OPEN API V11 - View Model of phone channel
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiPhoneChannel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiPhoneChannel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'sourceId' => 'string',
'serviceChannelDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'areaType' => 'string',
'supportEmails' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'languages' => 'string[]',
'webPages' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]',
'serviceHours' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]',
'channelId' => 'string',
'versionId' => 'string',
'serviceChannelType' => 'string',
'organizationId' => 'string',
'serviceChannelNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'areas' => '\Tampere\PtvV11\PtvModel\VmOpenApiArea[]',
'services' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelService[]',
'serviceCollections' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[]',
'publishingStatus' => 'string',
'modified' => '\DateTime',
'responsibleSoteOrganization' => 'string',
'ontologyTerms' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]',
'areaMunicipalities' => '\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]',
'isVisibleForAll' => 'bool',
'security' => '\Tampere\PtvV11\PtvModel\ISecurityOwnOrganization',
'availableLanguages' => 'string[]',
'phoneNumbers' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneWithType[]',
'supportPhones' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'sourceId' => null,
'serviceChannelDescriptions' => null,
'areaType' => null,
'supportEmails' => null,
'languages' => null,
'webPages' => null,
'serviceHours' => null,
'channelId' => 'uuid',
'versionId' => 'uuid',
'serviceChannelType' => null,
'organizationId' => 'uuid',
'serviceChannelNames' => null,
'areas' => null,
'services' => null,
'serviceCollections' => null,
'publishingStatus' => null,
'modified' => 'date-time',
'responsibleSoteOrganization' => null,
'ontologyTerms' => null,
'areaMunicipalities' => null,
'isVisibleForAll' => null,
'security' => null,
'availableLanguages' => null,
'phoneNumbers' => null,
'supportPhones' => null    ];

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
        'id' => 'id',
'sourceId' => 'sourceId',
'serviceChannelDescriptions' => 'serviceChannelDescriptions',
'areaType' => 'areaType',
'supportEmails' => 'supportEmails',
'languages' => 'languages',
'webPages' => 'webPages',
'serviceHours' => 'serviceHours',
'channelId' => 'channelId',
'versionId' => 'versionId',
'serviceChannelType' => 'serviceChannelType',
'organizationId' => 'organizationId',
'serviceChannelNames' => 'serviceChannelNames',
'areas' => 'areas',
'services' => 'services',
'serviceCollections' => 'serviceCollections',
'publishingStatus' => 'publishingStatus',
'modified' => 'modified',
'responsibleSoteOrganization' => 'responsibleSoteOrganization',
'ontologyTerms' => 'ontologyTerms',
'areaMunicipalities' => 'areaMunicipalities',
'isVisibleForAll' => 'isVisibleForAll',
'security' => 'security',
'availableLanguages' => 'availableLanguages',
'phoneNumbers' => 'phoneNumbers',
'supportPhones' => 'supportPhones'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sourceId' => 'setSourceId',
'serviceChannelDescriptions' => 'setServiceChannelDescriptions',
'areaType' => 'setAreaType',
'supportEmails' => 'setSupportEmails',
'languages' => 'setLanguages',
'webPages' => 'setWebPages',
'serviceHours' => 'setServiceHours',
'channelId' => 'setChannelId',
'versionId' => 'setVersionId',
'serviceChannelType' => 'setServiceChannelType',
'organizationId' => 'setOrganizationId',
'serviceChannelNames' => 'setServiceChannelNames',
'areas' => 'setAreas',
'services' => 'setServices',
'serviceCollections' => 'setServiceCollections',
'publishingStatus' => 'setPublishingStatus',
'modified' => 'setModified',
'responsibleSoteOrganization' => 'setResponsibleSoteOrganization',
'ontologyTerms' => 'setOntologyTerms',
'areaMunicipalities' => 'setAreaMunicipalities',
'isVisibleForAll' => 'setIsVisibleForAll',
'security' => 'setSecurity',
'availableLanguages' => 'setAvailableLanguages',
'phoneNumbers' => 'setPhoneNumbers',
'supportPhones' => 'setSupportPhones'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sourceId' => 'getSourceId',
'serviceChannelDescriptions' => 'getServiceChannelDescriptions',
'areaType' => 'getAreaType',
'supportEmails' => 'getSupportEmails',
'languages' => 'getLanguages',
'webPages' => 'getWebPages',
'serviceHours' => 'getServiceHours',
'channelId' => 'getChannelId',
'versionId' => 'getVersionId',
'serviceChannelType' => 'getServiceChannelType',
'organizationId' => 'getOrganizationId',
'serviceChannelNames' => 'getServiceChannelNames',
'areas' => 'getAreas',
'services' => 'getServices',
'serviceCollections' => 'getServiceCollections',
'publishingStatus' => 'getPublishingStatus',
'modified' => 'getModified',
'responsibleSoteOrganization' => 'getResponsibleSoteOrganization',
'ontologyTerms' => 'getOntologyTerms',
'areaMunicipalities' => 'getAreaMunicipalities',
'isVisibleForAll' => 'getIsVisibleForAll',
'security' => 'getSecurity',
'availableLanguages' => 'getAvailableLanguages',
'phoneNumbers' => 'getPhoneNumbers',
'supportPhones' => 'getSupportPhones'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['serviceChannelDescriptions'] = isset($data['serviceChannelDescriptions']) ? $data['serviceChannelDescriptions'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['supportEmails'] = isset($data['supportEmails']) ? $data['supportEmails'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
        $this->container['serviceHours'] = isset($data['serviceHours']) ? $data['serviceHours'] : null;
        $this->container['channelId'] = isset($data['channelId']) ? $data['channelId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['serviceChannelType'] = isset($data['serviceChannelType']) ? $data['serviceChannelType'] : null;
        $this->container['organizationId'] = isset($data['organizationId']) ? $data['organizationId'] : null;
        $this->container['serviceChannelNames'] = isset($data['serviceChannelNames']) ? $data['serviceChannelNames'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['serviceCollections'] = isset($data['serviceCollections']) ? $data['serviceCollections'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['responsibleSoteOrganization'] = isset($data['responsibleSoteOrganization']) ? $data['responsibleSoteOrganization'] : null;
        $this->container['ontologyTerms'] = isset($data['ontologyTerms']) ? $data['ontologyTerms'] : null;
        $this->container['areaMunicipalities'] = isset($data['areaMunicipalities']) ? $data['areaMunicipalities'] : null;
        $this->container['isVisibleForAll'] = isset($data['isVisibleForAll']) ? $data['isVisibleForAll'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['availableLanguages'] = isset($data['availableLanguages']) ? $data['availableLanguages'] : null;
        $this->container['phoneNumbers'] = isset($data['phoneNumbers']) ? $data['phoneNumbers'] : null;
        $this->container['supportPhones'] = isset($data['supportPhones']) ? $data['supportPhones'] : null;
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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelDescriptions List of localized service channel descriptions. Possible type values are: Description, Summary (in version 7 ShortDescription). (Max.Length: 2500 Description).
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
        return $this->container['areaType'];
    }

    /**
     * Sets areaType
     *
     * @param string $areaType Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType.  In version 7 and older: WholeCountry, WholeCountryExceptAlandIslands, AreaType.
     *
     * @return $this
     */
    public function setAreaType($areaType)
    {
        $this->container['areaType'] = $areaType;

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
     * Gets serviceChannelType
     *
     * @return string
     */
    public function getServiceChannelType()
    {
        return $this->container['serviceChannelType'];
    }

    /**
     * Sets serviceChannelType
     *
     * @param string $serviceChannelType Type of the service channel. Channel types: EChannel, WebPage, PrintableForm, Phone or ServiceLocation.
     *
     * @return $this
     */
    public function setServiceChannelType($serviceChannelType)
    {
        $this->container['serviceChannelType'] = $serviceChannelType;

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
     * @param string $organizationId PTV organization identifier responsible for the channel.
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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceChannelNames Localized list of service channel names. Possible type values are: Name, AlternativeName (in version 7 AlternateName).
     *
     * @return $this
     */
    public function setServiceChannelNames($serviceChannelNames)
    {
        $this->container['serviceChannelNames'] = $serviceChannelNames;

        return $this;
    }

    /**
     * Gets areas
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiArea[]
     */
    public function getAreas()
    {
        return $this->container['areas'];
    }

    /**
     * Sets areas
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiArea[] $areas List of service channel areas.
     *
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

        return $this;
    }

    /**
     * Gets services
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelService[] $services List of linked services including relationship data.
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets serviceCollections
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[]
     */
    public function getServiceCollections()
    {
        return $this->container['serviceCollections'];
    }

    /**
     * Sets serviceCollections
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[] $serviceCollections serviceCollections
     *
     * @return $this
     */
    public function setServiceCollections($serviceCollections)
    {
        $this->container['serviceCollections'] = $serviceCollections;

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
     * Gets modified
     *
     * @return \DateTime
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     *
     * @param \DateTime $modified Date when item was modified/created (UTC).
     *
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets responsibleSoteOrganization
     *
     * @return string
     */
    public function getResponsibleSoteOrganization()
    {
        return $this->container['responsibleSoteOrganization'];
    }

    /**
     * Sets responsibleSoteOrganization
     *
     * @param string $responsibleSoteOrganization Sote organization that is responsible for the service channel. Notice! At the moment always empty - the property is a placeholder for later use.
     *
     * @return $this
     */
    public function setResponsibleSoteOrganization($responsibleSoteOrganization)
    {
        $this->container['responsibleSoteOrganization'] = $responsibleSoteOrganization;

        return $this;
    }

    /**
     * Gets ontologyTerms
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]
     */
    public function getOntologyTerms()
    {
        return $this->container['ontologyTerms'];
    }

    /**
     * Sets ontologyTerms
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[] $ontologyTerms List of ontology terms related to the all service connections.
     *
     * @return $this
     */
    public function setOntologyTerms($ontologyTerms)
    {
        $this->container['ontologyTerms'] = $ontologyTerms;

        return $this;
    }

    /**
     * Gets areaMunicipalities
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]
     */
    public function getAreaMunicipalities()
    {
        return $this->container['areaMunicipalities'];
    }

    /**
     * Sets areaMunicipalities
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[] $areaMunicipalities List of municipalities including municipality code and a localized list of municipality names.
     *
     * @return $this
     */
    public function setAreaMunicipalities($areaMunicipalities)
    {
        $this->container['areaMunicipalities'] = $areaMunicipalities;

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
     * Gets security
     *
     * @return \Tampere\PtvV11\PtvModel\ISecurityOwnOrganization
     */
    public function getSecurity()
    {
        return $this->container['security'];
    }

    /**
     * Sets security
     *
     * @param \Tampere\PtvV11\PtvModel\ISecurityOwnOrganization $security security
     *
     * @return $this
     */
    public function setSecurity($security)
    {
        $this->container['security'] = $security;

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
     * Gets phoneNumbers
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneWithType[]
     */
    public function getPhoneNumbers()
    {
        return $this->container['phoneNumbers'];
    }

    /**
     * Sets phoneNumbers
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneWithType[] $phoneNumbers List of phone numbers for the service channel.
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->container['phoneNumbers'] = $phoneNumbers;

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