<?php
/**
 * V10VmOpenApiOrganization
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
 * V10VmOpenApiOrganization Class Doc Comment
 *
 * @category Class
 * @description OPEN API V10 - View Model of organization
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V10VmOpenApiOrganization implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V10VmOpenApiOrganization';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'oid' => 'string',
'sourceId' => 'string',
'organizationType' => 'string',
'businessCode' => 'string',
'businessName' => 'string',
'organizationNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'displayNameType' => '\Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]',
'areaType' => 'string',
'organizationDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'emails' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiEmail[]',
'phoneNumbers' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]',
'webPages' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]',
'electronicInvoicings' => '\Tampere\PtvV11\PtvModel\VmOpenApiOrganizationEInvoicing[]',
'businessId' => 'string',
'versionId' => 'string',
'parentOrganizationId' => 'string',
'organizationRootId' => 'string',
'municipality' => '\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality',
'areas' => '\Tampere\PtvV11\PtvModel\VmOpenApiArea[]',
'areaMunicipalities' => '\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]',
'addresses' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiAddress[]',
'publishingStatus' => 'string',
'services' => '\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[]',
'responsibleOrganizationServices' => '\Tampere\PtvV11\PtvModel\VmOpenApiItem[]',
'producerOrganizationServices' => '\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[]',
'modified' => '\DateTime',
'subOrganizations' => '\Tampere\PtvV11\PtvModel\VmOpenApiItem[]',
'availableLanguages' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'oid' => null,
'sourceId' => null,
'organizationType' => null,
'businessCode' => null,
'businessName' => null,
'organizationNames' => null,
'displayNameType' => null,
'areaType' => null,
'organizationDescriptions' => null,
'emails' => null,
'phoneNumbers' => null,
'webPages' => null,
'electronicInvoicings' => null,
'businessId' => 'uuid',
'versionId' => 'uuid',
'parentOrganizationId' => 'uuid',
'organizationRootId' => 'uuid',
'municipality' => null,
'areas' => null,
'areaMunicipalities' => null,
'addresses' => null,
'publishingStatus' => null,
'services' => null,
'responsibleOrganizationServices' => null,
'producerOrganizationServices' => null,
'modified' => 'date-time',
'subOrganizations' => null,
'availableLanguages' => null    ];

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
'oid' => 'oid',
'sourceId' => 'sourceId',
'organizationType' => 'organizationType',
'businessCode' => 'businessCode',
'businessName' => 'businessName',
'organizationNames' => 'organizationNames',
'displayNameType' => 'displayNameType',
'areaType' => 'areaType',
'organizationDescriptions' => 'organizationDescriptions',
'emails' => 'emails',
'phoneNumbers' => 'phoneNumbers',
'webPages' => 'webPages',
'electronicInvoicings' => 'electronicInvoicings',
'businessId' => 'businessId',
'versionId' => 'versionId',
'parentOrganizationId' => 'parentOrganizationId',
'organizationRootId' => 'organizationRootId',
'municipality' => 'municipality',
'areas' => 'areas',
'areaMunicipalities' => 'areaMunicipalities',
'addresses' => 'addresses',
'publishingStatus' => 'publishingStatus',
'services' => 'services',
'responsibleOrganizationServices' => 'responsibleOrganizationServices',
'producerOrganizationServices' => 'producerOrganizationServices',
'modified' => 'modified',
'subOrganizations' => 'subOrganizations',
'availableLanguages' => 'availableLanguages'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'oid' => 'setOid',
'sourceId' => 'setSourceId',
'organizationType' => 'setOrganizationType',
'businessCode' => 'setBusinessCode',
'businessName' => 'setBusinessName',
'organizationNames' => 'setOrganizationNames',
'displayNameType' => 'setDisplayNameType',
'areaType' => 'setAreaType',
'organizationDescriptions' => 'setOrganizationDescriptions',
'emails' => 'setEmails',
'phoneNumbers' => 'setPhoneNumbers',
'webPages' => 'setWebPages',
'electronicInvoicings' => 'setElectronicInvoicings',
'businessId' => 'setBusinessId',
'versionId' => 'setVersionId',
'parentOrganizationId' => 'setParentOrganizationId',
'organizationRootId' => 'setOrganizationRootId',
'municipality' => 'setMunicipality',
'areas' => 'setAreas',
'areaMunicipalities' => 'setAreaMunicipalities',
'addresses' => 'setAddresses',
'publishingStatus' => 'setPublishingStatus',
'services' => 'setServices',
'responsibleOrganizationServices' => 'setResponsibleOrganizationServices',
'producerOrganizationServices' => 'setProducerOrganizationServices',
'modified' => 'setModified',
'subOrganizations' => 'setSubOrganizations',
'availableLanguages' => 'setAvailableLanguages'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'oid' => 'getOid',
'sourceId' => 'getSourceId',
'organizationType' => 'getOrganizationType',
'businessCode' => 'getBusinessCode',
'businessName' => 'getBusinessName',
'organizationNames' => 'getOrganizationNames',
'displayNameType' => 'getDisplayNameType',
'areaType' => 'getAreaType',
'organizationDescriptions' => 'getOrganizationDescriptions',
'emails' => 'getEmails',
'phoneNumbers' => 'getPhoneNumbers',
'webPages' => 'getWebPages',
'electronicInvoicings' => 'getElectronicInvoicings',
'businessId' => 'getBusinessId',
'versionId' => 'getVersionId',
'parentOrganizationId' => 'getParentOrganizationId',
'organizationRootId' => 'getOrganizationRootId',
'municipality' => 'getMunicipality',
'areas' => 'getAreas',
'areaMunicipalities' => 'getAreaMunicipalities',
'addresses' => 'getAddresses',
'publishingStatus' => 'getPublishingStatus',
'services' => 'getServices',
'responsibleOrganizationServices' => 'getResponsibleOrganizationServices',
'producerOrganizationServices' => 'getProducerOrganizationServices',
'modified' => 'getModified',
'subOrganizations' => 'getSubOrganizations',
'availableLanguages' => 'getAvailableLanguages'    ];

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
        $this->container['oid'] = isset($data['oid']) ? $data['oid'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['organizationType'] = isset($data['organizationType']) ? $data['organizationType'] : null;
        $this->container['businessCode'] = isset($data['businessCode']) ? $data['businessCode'] : null;
        $this->container['businessName'] = isset($data['businessName']) ? $data['businessName'] : null;
        $this->container['organizationNames'] = isset($data['organizationNames']) ? $data['organizationNames'] : null;
        $this->container['displayNameType'] = isset($data['displayNameType']) ? $data['displayNameType'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['organizationDescriptions'] = isset($data['organizationDescriptions']) ? $data['organizationDescriptions'] : null;
        $this->container['emails'] = isset($data['emails']) ? $data['emails'] : null;
        $this->container['phoneNumbers'] = isset($data['phoneNumbers']) ? $data['phoneNumbers'] : null;
        $this->container['webPages'] = isset($data['webPages']) ? $data['webPages'] : null;
        $this->container['electronicInvoicings'] = isset($data['electronicInvoicings']) ? $data['electronicInvoicings'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['parentOrganizationId'] = isset($data['parentOrganizationId']) ? $data['parentOrganizationId'] : null;
        $this->container['organizationRootId'] = isset($data['organizationRootId']) ? $data['organizationRootId'] : null;
        $this->container['municipality'] = isset($data['municipality']) ? $data['municipality'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['areaMunicipalities'] = isset($data['areaMunicipalities']) ? $data['areaMunicipalities'] : null;
        $this->container['addresses'] = isset($data['addresses']) ? $data['addresses'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
        $this->container['responsibleOrganizationServices'] = isset($data['responsibleOrganizationServices']) ? $data['responsibleOrganizationServices'] : null;
        $this->container['producerOrganizationServices'] = isset($data['producerOrganizationServices']) ? $data['producerOrganizationServices'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['subOrganizations'] = isset($data['subOrganizations']) ? $data['subOrganizations'] : null;
        $this->container['availableLanguages'] = isset($data['availableLanguages']) ? $data['availableLanguages'] : null;
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
     * @param string $id Entity identifier.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @param string $oid Organization OID. - must match the regex @\"^[A-Za-z0-9.-]*$\"
     *
     * @return $this
     */
    public function setOid($oid)
    {
        $this->container['oid'] = $oid;

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
     * @param string $sourceId Organization external system identifier. User needs to be logged in to be able to get/set value.
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;

        return $this;
    }

    /**
     * Gets organizationType
     *
     * @return string
     */
    public function getOrganizationType()
    {
        return $this->container['organizationType'];
    }

    /**
     * Sets organizationType
     *
     * @param string $organizationType Organization type (State, Municipality, RegionalOrganization, Organization, Company, SotePublic, SotePrivate, Region).
     *
     * @return $this
     */
    public function setOrganizationType($organizationType)
    {
        $this->container['organizationType'] = $organizationType;

        return $this;
    }

    /**
     * Gets businessCode
     *
     * @return string
     */
    public function getBusinessCode()
    {
        return $this->container['businessCode'];
    }

    /**
     * Sets businessCode
     *
     * @param string $businessCode Organization business code (Y-tunnus).
     *
     * @return $this
     */
    public function setBusinessCode($businessCode)
    {
        $this->container['businessCode'] = $businessCode;

        return $this;
    }

    /**
     * Gets businessName
     *
     * @return string
     */
    public function getBusinessName()
    {
        return $this->container['businessName'];
    }

    /**
     * Sets businessName
     *
     * @param string $businessName Organization business name (name used for business code). This property is not used in the API anymore. Do not use.
     *
     * @return $this
     */
    public function setBusinessName($businessName)
    {
        $this->container['businessName'] = $businessName;

        return $this;
    }

    /**
     * Gets organizationNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getOrganizationNames()
    {
        return $this->container['organizationNames'];
    }

    /**
     * Sets organizationNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $organizationNames List of organization names. Possible type values are: Name, AlternativeName (in version 7 AlternateName).
     *
     * @return $this
     */
    public function setOrganizationNames($organizationNames)
    {
        $this->container['organizationNames'] = $organizationNames;

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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[] $displayNameType List of Display name types (Name or AlternativeName) for each language version of OrganizationNames.
     *
     * @return $this
     */
    public function setDisplayNameType($displayNameType)
    {
        $this->container['displayNameType'] = $displayNameType;

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
     * @param string $areaType Area type (Nationwide, NationwideExceptAlandIslands, LimitedType).
     *
     * @return $this
     */
    public function setAreaType($areaType)
    {
        $this->container['areaType'] = $areaType;

        return $this;
    }

    /**
     * Gets organizationDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getOrganizationDescriptions()
    {
        return $this->container['organizationDescriptions'];
    }

    /**
     * Sets organizationDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $organizationDescriptions Localized list of organization descriptions. Possible type values are: Description, Summary (in version 7 ShortDescription). (Max.Length: 2500 Description). (Max.Length: 150 ShortDescription).
     *
     * @return $this
     */
    public function setOrganizationDescriptions($organizationDescriptions)
    {
        $this->container['organizationDescriptions'] = $organizationDescriptions;

        return $this;
    }

    /**
     * Gets emails
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiEmail[]
     */
    public function getEmails()
    {
        return $this->container['emails'];
    }

    /**
     * Sets emails
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiEmail[] $emails List of email addresses.
     *
     * @return $this
     */
    public function setEmails($emails)
    {
        $this->container['emails'] = $emails;

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
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[] $phoneNumbers List of organizations phone numbers.
     *
     * @return $this
     */
    public function setPhoneNumbers($phoneNumbers)
    {
        $this->container['phoneNumbers'] = $phoneNumbers;

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
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[] $webPages List of organizations web pages.
     *
     * @return $this
     */
    public function setWebPages($webPages)
    {
        $this->container['webPages'] = $webPages;

        return $this;
    }

    /**
     * Gets electronicInvoicings
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiOrganizationEInvoicing[]
     */
    public function getElectronicInvoicings()
    {
        return $this->container['electronicInvoicings'];
    }

    /**
     * Sets electronicInvoicings
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiOrganizationEInvoicing[] $electronicInvoicings List of organizations electronic invoicing information.
     *
     * @return $this
     */
    public function setElectronicInvoicings($electronicInvoicings)
    {
        $this->container['electronicInvoicings'] = $electronicInvoicings;

        return $this;
    }

    /**
     * Gets businessId
     *
     * @return string
     */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
     * Sets businessId
     *
     * @param string $businessId Business code entity identifier.
     *
     * @return $this
     */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;

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
     * Gets parentOrganizationId
     *
     * @return string
     */
    public function getParentOrganizationId()
    {
        return $this->container['parentOrganizationId'];
    }

    /**
     * Sets parentOrganizationId
     *
     * @param string $parentOrganizationId Organizations parent organization identifier if exists.
     *
     * @return $this
     */
    public function setParentOrganizationId($parentOrganizationId)
    {
        $this->container['parentOrganizationId'] = $parentOrganizationId;

        return $this;
    }

    /**
     * Gets organizationRootId
     *
     * @return string
     */
    public function getOrganizationRootId()
    {
        return $this->container['organizationRootId'];
    }

    /**
     * Sets organizationRootId
     *
     * @param string $organizationRootId Organizations root organization identifier if exists.
     *
     * @return $this
     */
    public function setOrganizationRootId($organizationRootId)
    {
        $this->container['organizationRootId'] = $organizationRootId;

        return $this;
    }

    /**
     * Gets municipality
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality
     */
    public function getMunicipality()
    {
        return $this->container['municipality'];
    }

    /**
     * Sets municipality
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality $municipality municipality
     *
     * @return $this
     */
    public function setMunicipality($municipality)
    {
        $this->container['municipality'] = $municipality;

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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiArea[] $areas List of organization areas.
     *
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

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
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[] $areaMunicipalities List of organization area municipalities
     *
     * @return $this
     */
    public function setAreaMunicipalities($areaMunicipalities)
    {
        $this->container['areaMunicipalities'] = $areaMunicipalities;

        return $this;
    }

    /**
     * Gets addresses
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiAddress[]
     */
    public function getAddresses()
    {
        return $this->container['addresses'];
    }

    /**
     * Sets addresses
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiAddress[] $addresses List of organizations addresses.
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
     * @param string $publishingStatus Publishing status (Draft, Published, Deleted or Modified).
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
     * @return \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[]
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     *
     * @param \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[] $services List of organizations services.
     *
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

        return $this;
    }

    /**
     * Gets responsibleOrganizationServices
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiItem[]
     */
    public function getResponsibleOrganizationServices()
    {
        return $this->container['responsibleOrganizationServices'];
    }

    /**
     * Sets responsibleOrganizationServices
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiItem[] $responsibleOrganizationServices List of organizations services where organization is main responsible.
     *
     * @return $this
     */
    public function setResponsibleOrganizationServices($responsibleOrganizationServices)
    {
        $this->container['responsibleOrganizationServices'] = $responsibleOrganizationServices;

        return $this;
    }

    /**
     * Gets producerOrganizationServices
     *
     * @return \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[]
     */
    public function getProducerOrganizationServices()
    {
        return $this->container['producerOrganizationServices'];
    }

    /**
     * Sets producerOrganizationServices
     *
     * @param \Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[] $producerOrganizationServices List of organizations services where organization is a producer.
     *
     * @return $this
     */
    public function setProducerOrganizationServices($producerOrganizationServices)
    {
        $this->container['producerOrganizationServices'] = $producerOrganizationServices;

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
     * Gets subOrganizations
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiItem[]
     */
    public function getSubOrganizations()
    {
        return $this->container['subOrganizations'];
    }

    /**
     * Sets subOrganizations
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiItem[] $subOrganizations The sub organizations
     *
     * @return $this
     */
    public function setSubOrganizations($subOrganizations)
    {
        $this->container['subOrganizations'] = $subOrganizations;

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
