<?php
/**
 * V11VmOpenApiService
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
 * V11VmOpenApiService Class Doc Comment
 *
 * @category Class
 * @description OPEN API V11 - View Model of service
 * @package  Tampere\PtvV11
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class V11VmOpenApiService implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'V11VmOpenApiService';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'sourceId' => 'string',
'type' => 'string',
'fundingType' => 'string',
'serviceNames' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'serviceChargeType' => 'string',
'areaType' => 'string',
'serviceDescriptions' => '\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]',
'languages' => 'string[]',
'legislation' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]',
'keywords' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'requirements' => '\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]',
'serviceVouchersInUse' => 'bool',
'serviceVouchers' => '\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceVoucher[]',
'versionId' => 'string',
'generalDescriptionId' => 'string',
'subType' => 'string',
'areas' => '\Tampere\PtvV11\PtvModel\VmOpenApiArea[]',
'serviceClasses' => '\Tampere\PtvV11\PtvModel\V7VmOpenApiFintoItemWithDescription[]',
'ontologyTerms' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]',
'targetGroups' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]',
'lifeEvents' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]',
'industrialClasses' => '\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]',
'serviceChannels' => '\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceServiceChannel[]',
'organizations' => '\Tampere\PtvV11\PtvModel\V6VmOpenApiServiceOrganization[]',
'serviceCollections' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[]',
'publishingStatus' => 'string',
'modified' => '\DateTime',
'responsibleSoteOrganization' => 'string',
'mainOrganization' => '\Tampere\PtvV11\PtvModel\VmOpenApiItem',
'serviceProducers' => '\Tampere\PtvV11\PtvModel\VmOpenApiServiceProducer[]',
'security' => '\Tampere\PtvV11\PtvModel\ISecurityOwnOrganization',
'municipalities' => '\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]',
'availableLanguages' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
'sourceId' => null,
'type' => null,
'fundingType' => null,
'serviceNames' => null,
'serviceChargeType' => null,
'areaType' => null,
'serviceDescriptions' => null,
'languages' => null,
'legislation' => null,
'keywords' => null,
'requirements' => null,
'serviceVouchersInUse' => null,
'serviceVouchers' => null,
'versionId' => 'uuid',
'generalDescriptionId' => 'uuid',
'subType' => null,
'areas' => null,
'serviceClasses' => null,
'ontologyTerms' => null,
'targetGroups' => null,
'lifeEvents' => null,
'industrialClasses' => null,
'serviceChannels' => null,
'organizations' => null,
'serviceCollections' => null,
'publishingStatus' => null,
'modified' => 'date-time',
'responsibleSoteOrganization' => null,
'mainOrganization' => null,
'serviceProducers' => null,
'security' => null,
'municipalities' => null,
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
'sourceId' => 'sourceId',
'type' => 'type',
'fundingType' => 'fundingType',
'serviceNames' => 'serviceNames',
'serviceChargeType' => 'serviceChargeType',
'areaType' => 'areaType',
'serviceDescriptions' => 'serviceDescriptions',
'languages' => 'languages',
'legislation' => 'legislation',
'keywords' => 'keywords',
'requirements' => 'requirements',
'serviceVouchersInUse' => 'serviceVouchersInUse',
'serviceVouchers' => 'serviceVouchers',
'versionId' => 'versionId',
'generalDescriptionId' => 'generalDescriptionId',
'subType' => 'subType',
'areas' => 'areas',
'serviceClasses' => 'serviceClasses',
'ontologyTerms' => 'ontologyTerms',
'targetGroups' => 'targetGroups',
'lifeEvents' => 'lifeEvents',
'industrialClasses' => 'industrialClasses',
'serviceChannels' => 'serviceChannels',
'organizations' => 'organizations',
'serviceCollections' => 'serviceCollections',
'publishingStatus' => 'publishingStatus',
'modified' => 'modified',
'responsibleSoteOrganization' => 'responsibleSoteOrganization',
'mainOrganization' => 'mainOrganization',
'serviceProducers' => 'serviceProducers',
'security' => 'security',
'municipalities' => 'municipalities',
'availableLanguages' => 'availableLanguages'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sourceId' => 'setSourceId',
'type' => 'setType',
'fundingType' => 'setFundingType',
'serviceNames' => 'setServiceNames',
'serviceChargeType' => 'setServiceChargeType',
'areaType' => 'setAreaType',
'serviceDescriptions' => 'setServiceDescriptions',
'languages' => 'setLanguages',
'legislation' => 'setLegislation',
'keywords' => 'setKeywords',
'requirements' => 'setRequirements',
'serviceVouchersInUse' => 'setServiceVouchersInUse',
'serviceVouchers' => 'setServiceVouchers',
'versionId' => 'setVersionId',
'generalDescriptionId' => 'setGeneralDescriptionId',
'subType' => 'setSubType',
'areas' => 'setAreas',
'serviceClasses' => 'setServiceClasses',
'ontologyTerms' => 'setOntologyTerms',
'targetGroups' => 'setTargetGroups',
'lifeEvents' => 'setLifeEvents',
'industrialClasses' => 'setIndustrialClasses',
'serviceChannels' => 'setServiceChannels',
'organizations' => 'setOrganizations',
'serviceCollections' => 'setServiceCollections',
'publishingStatus' => 'setPublishingStatus',
'modified' => 'setModified',
'responsibleSoteOrganization' => 'setResponsibleSoteOrganization',
'mainOrganization' => 'setMainOrganization',
'serviceProducers' => 'setServiceProducers',
'security' => 'setSecurity',
'municipalities' => 'setMunicipalities',
'availableLanguages' => 'setAvailableLanguages'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sourceId' => 'getSourceId',
'type' => 'getType',
'fundingType' => 'getFundingType',
'serviceNames' => 'getServiceNames',
'serviceChargeType' => 'getServiceChargeType',
'areaType' => 'getAreaType',
'serviceDescriptions' => 'getServiceDescriptions',
'languages' => 'getLanguages',
'legislation' => 'getLegislation',
'keywords' => 'getKeywords',
'requirements' => 'getRequirements',
'serviceVouchersInUse' => 'getServiceVouchersInUse',
'serviceVouchers' => 'getServiceVouchers',
'versionId' => 'getVersionId',
'generalDescriptionId' => 'getGeneralDescriptionId',
'subType' => 'getSubType',
'areas' => 'getAreas',
'serviceClasses' => 'getServiceClasses',
'ontologyTerms' => 'getOntologyTerms',
'targetGroups' => 'getTargetGroups',
'lifeEvents' => 'getLifeEvents',
'industrialClasses' => 'getIndustrialClasses',
'serviceChannels' => 'getServiceChannels',
'organizations' => 'getOrganizations',
'serviceCollections' => 'getServiceCollections',
'publishingStatus' => 'getPublishingStatus',
'modified' => 'getModified',
'responsibleSoteOrganization' => 'getResponsibleSoteOrganization',
'mainOrganization' => 'getMainOrganization',
'serviceProducers' => 'getServiceProducers',
'security' => 'getSecurity',
'municipalities' => 'getMunicipalities',
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['fundingType'] = isset($data['fundingType']) ? $data['fundingType'] : null;
        $this->container['serviceNames'] = isset($data['serviceNames']) ? $data['serviceNames'] : null;
        $this->container['serviceChargeType'] = isset($data['serviceChargeType']) ? $data['serviceChargeType'] : null;
        $this->container['areaType'] = isset($data['areaType']) ? $data['areaType'] : null;
        $this->container['serviceDescriptions'] = isset($data['serviceDescriptions']) ? $data['serviceDescriptions'] : null;
        $this->container['languages'] = isset($data['languages']) ? $data['languages'] : null;
        $this->container['legislation'] = isset($data['legislation']) ? $data['legislation'] : null;
        $this->container['keywords'] = isset($data['keywords']) ? $data['keywords'] : null;
        $this->container['requirements'] = isset($data['requirements']) ? $data['requirements'] : null;
        $this->container['serviceVouchersInUse'] = isset($data['serviceVouchersInUse']) ? $data['serviceVouchersInUse'] : null;
        $this->container['serviceVouchers'] = isset($data['serviceVouchers']) ? $data['serviceVouchers'] : null;
        $this->container['versionId'] = isset($data['versionId']) ? $data['versionId'] : null;
        $this->container['generalDescriptionId'] = isset($data['generalDescriptionId']) ? $data['generalDescriptionId'] : null;
        $this->container['subType'] = isset($data['subType']) ? $data['subType'] : null;
        $this->container['areas'] = isset($data['areas']) ? $data['areas'] : null;
        $this->container['serviceClasses'] = isset($data['serviceClasses']) ? $data['serviceClasses'] : null;
        $this->container['ontologyTerms'] = isset($data['ontologyTerms']) ? $data['ontologyTerms'] : null;
        $this->container['targetGroups'] = isset($data['targetGroups']) ? $data['targetGroups'] : null;
        $this->container['lifeEvents'] = isset($data['lifeEvents']) ? $data['lifeEvents'] : null;
        $this->container['industrialClasses'] = isset($data['industrialClasses']) ? $data['industrialClasses'] : null;
        $this->container['serviceChannels'] = isset($data['serviceChannels']) ? $data['serviceChannels'] : null;
        $this->container['organizations'] = isset($data['organizations']) ? $data['organizations'] : null;
        $this->container['serviceCollections'] = isset($data['serviceCollections']) ? $data['serviceCollections'] : null;
        $this->container['publishingStatus'] = isset($data['publishingStatus']) ? $data['publishingStatus'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['responsibleSoteOrganization'] = isset($data['responsibleSoteOrganization']) ? $data['responsibleSoteOrganization'] : null;
        $this->container['mainOrganization'] = isset($data['mainOrganization']) ? $data['mainOrganization'] : null;
        $this->container['serviceProducers'] = isset($data['serviceProducers']) ? $data['serviceProducers'] : null;
        $this->container['security'] = isset($data['security']) ? $data['security'] : null;
        $this->container['municipalities'] = isset($data['municipalities']) ? $data['municipalities'] : null;
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
        return isset($this->container['id']) ? $this->container['id'] : null;
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return isset($this->container['type']) ? $this->container['type'] : null;
    }

    /**
     * Sets type
     *
     * @param string $type Service type. Possible values are: Service, PermitOrObligation or ProfessionalQualification. In version 7 Service, PermissionAndObligation or ProfessionalQualifications.
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets fundingType
     *
     * @return string
     */
    public function getFundingType()
    {
        return isset($this->container['fundingType']) ? $this->container['fundingType'] : null;
    }

    /**
     * Sets fundingType
     *
     * @param string $fundingType Service funding type. Possible values are: PubliclyFunded or MarketFunded.
     *
     * @return $this
     */
    public function setFundingType($fundingType)
    {
        $this->container['fundingType'] = $fundingType;

        return $this;
    }

    /**
     * Gets serviceNames
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceNames()
    {
        return isset($this->container['serviceNames']) ? $this->container['serviceNames'] : null;
    }

    /**
     * Sets serviceNames
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceNames List of localized service names. Possible type values are: Name, AlternativeName (in version 7 AlternateName). (Max.Length: 100).
     *
     * @return $this
     */
    public function setServiceNames($serviceNames)
    {
        $this->container['serviceNames'] = $serviceNames;

        return $this;
    }

    /**
     * Gets serviceChargeType
     *
     * @return string
     */
    public function getServiceChargeType()
    {
        return isset($this->container['serviceChargeType']) ? $this->container['serviceChargeType'] : null;
    }

    /**
     * Sets serviceChargeType
     *
     * @param string $serviceChargeType Service charge type. Possible values are: Chargeable or FreeOfCharge.  In version 7: Charged or Free.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored.
     *
     * @return $this
     */
    public function setServiceChargeType($serviceChargeType)
    {
        $this->container['serviceChargeType'] = $serviceChargeType;

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
     * @param string $areaType Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType.  In version 7: WholeCountry, WholeCountryExceptAlandIslands, AreaType.
     *
     * @return $this
     */
    public function setAreaType($areaType)
    {
        $this->container['areaType'] = $areaType;

        return $this;
    }

    /**
     * Gets serviceDescriptions
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]
     */
    public function getServiceDescriptions()
    {
        return isset($this->container['serviceDescriptions']) ? $this->container['serviceDescriptions'] : null;
    }

    /**
     * Sets serviceDescriptions
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[] $serviceDescriptions List of localized service descriptions. Possible type values are: Description, Summary, UserInstruction, ValidityTime, ProcessingTime, DeadLine, ChargeTypeAdditionalInfo, ServiceType.  In version 7: Description, ShortDescription, ServiceUserInstruction, ValidityTimeAdditionalInfo, ProcessingTimeAdditionalInfo, DeadLineAdditionalInfo, ChargeTypeAdditionalInfo, ServiceTypeAdditionalInfo.
     *
     * @return $this
     */
    public function setServiceDescriptions($serviceDescriptions)
    {
        $this->container['serviceDescriptions'] = $serviceDescriptions;

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
     * @param string[] $languages List of service languages.
     *
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->container['languages'] = $languages;

        return $this;
    }

    /**
     * Gets legislation
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]
     */
    public function getLegislation()
    {
        return isset($this->container['legislation']) ? $this->container['legislation'] : null;
    }

    /**
     * Sets legislation
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[] $legislation List of laws related to the service.
     *
     * @return $this
     */
    public function setLegislation($legislation)
    {
        $this->container['legislation'] = $legislation;

        return $this;
    }

    /**
     * Gets keywords
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getKeywords()
    {
        return isset($this->container['keywords']) ? $this->container['keywords'] : null;
    }

    /**
     * Sets keywords
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $keywords List of localized service keywords. (Max.Length: 150).
     *
     * @return $this
     */
    public function setKeywords($keywords)
    {
        $this->container['keywords'] = $keywords;

        return $this;
    }

    /**
     * Gets requirements
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]
     */
    public function getRequirements()
    {
        return isset($this->container['requirements']) ? $this->container['requirements'] : null;
    }

    /**
     * Sets requirements
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[] $requirements Localized service usage requirements (description of requirement). (Max.Length: 2500).
     *
     * @return $this
     */
    public function setRequirements($requirements)
    {
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets serviceVouchersInUse
     *
     * @return bool
     */
    public function getServiceVouchersInUse()
    {
        return isset($this->container['serviceVouchersInUse']) ? $this->container['serviceVouchersInUse'] : null;
    }

    /**
     * Sets serviceVouchersInUse
     *
     * @param bool $serviceVouchersInUse Indicates if service vouchers are used in the service.
     *
     * @return $this
     */
    public function setServiceVouchersInUse($serviceVouchersInUse)
    {
        $this->container['serviceVouchersInUse'] = $serviceVouchersInUse;

        return $this;
    }

    /**
     * Gets serviceVouchers
     *
     * @return \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceVoucher[]
     */
    public function getServiceVouchers()
    {
        return isset($this->container['serviceVouchers']) ? $this->container['serviceVouchers'] : null;
    }

    /**
     * Sets serviceVouchers
     *
     * @param \Tampere\PtvV11\PtvModel\V9VmOpenApiServiceVoucher[] $serviceVouchers List of service vouchers.
     *
     * @return $this
     */
    public function setServiceVouchers($serviceVouchers)
    {
        $this->container['serviceVouchers'] = $serviceVouchers;

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
     * Gets generalDescriptionId
     *
     * @return string
     */
    public function getGeneralDescriptionId()
    {
        return isset($this->container['generalDescriptionId']) ? $this->container['generalDescriptionId'] : null;
    }

    /**
     * Sets generalDescriptionId
     *
     * @param string $generalDescriptionId PTV identifier for linked general description.
     *
     * @return $this
     */
    public function setGeneralDescriptionId($generalDescriptionId)
    {
        $this->container['generalDescriptionId'] = $generalDescriptionId;

        return $this;
    }

    /**
     * Gets subType
     *
     * @return string
     */
    public function getSubType()
    {
        return isset($this->container['subType']) ? $this->container['subType'] : null;
    }

    /**
     * Sets subType
     *
     * @param string $subType Service sub-type. It is used for SOTE and its taken from GeneralDescription's generalDescriptionType. Possible values are: PrescribedByFreedomOfChoiceAct, OtherPermissionGrantedSote.
     *
     * @return $this
     */
    public function setSubType($subType)
    {
        $this->container['subType'] = $subType;

        return $this;
    }

    /**
     * Gets areas
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiArea[]
     */
    public function getAreas()
    {
        return isset($this->container['areas']) ? $this->container['areas'] : null;
    }

    /**
     * Sets areas
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiArea[] $areas List of service areas.
     *
     * @return $this
     */
    public function setAreas($areas)
    {
        $this->container['areas'] = $areas;

        return $this;
    }

    /**
     * Gets serviceClasses
     *
     * @return \Tampere\PtvV11\PtvModel\V7VmOpenApiFintoItemWithDescription[]
     */
    public function getServiceClasses()
    {
        return isset($this->container['serviceClasses']) ? $this->container['serviceClasses'] : null;
    }

    /**
     * Sets serviceClasses
     *
     * @param \Tampere\PtvV11\PtvModel\V7VmOpenApiFintoItemWithDescription[] $serviceClasses List of service classes related to the service.
     *
     * @return $this
     */
    public function setServiceClasses($serviceClasses)
    {
        $this->container['serviceClasses'] = $serviceClasses;

        return $this;
    }

    /**
     * Gets ontologyTerms
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]
     */
    public function getOntologyTerms()
    {
        return isset($this->container['ontologyTerms']) ? $this->container['ontologyTerms'] : null;
    }

    /**
     * Sets ontologyTerms
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[] $ontologyTerms List of ontology terms related to the service.
     *
     * @return $this
     */
    public function setOntologyTerms($ontologyTerms)
    {
        $this->container['ontologyTerms'] = $ontologyTerms;

        return $this;
    }

    /**
     * Gets targetGroups
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]
     */
    public function getTargetGroups()
    {
        return isset($this->container['targetGroups']) ? $this->container['targetGroups'] : null;
    }

    /**
     * Sets targetGroups
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[] $targetGroups List of target groups related to the service.
     *
     * @return $this
     */
    public function setTargetGroups($targetGroups)
    {
        $this->container['targetGroups'] = $targetGroups;

        return $this;
    }

    /**
     * Gets lifeEvents
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]
     */
    public function getLifeEvents()
    {
        return isset($this->container['lifeEvents']) ? $this->container['lifeEvents'] : null;
    }

    /**
     * Sets lifeEvents
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[] $lifeEvents List of life events  related to the service.
     *
     * @return $this
     */
    public function setLifeEvents($lifeEvents)
    {
        $this->container['lifeEvents'] = $lifeEvents;

        return $this;
    }

    /**
     * Gets industrialClasses
     *
     * @return \Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]
     */
    public function getIndustrialClasses()
    {
        return isset($this->container['industrialClasses']) ? $this->container['industrialClasses'] : null;
    }

    /**
     * Sets industrialClasses
     *
     * @param \Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[] $industrialClasses List of industrial classes related to the service.
     *
     * @return $this
     */
    public function setIndustrialClasses($industrialClasses)
    {
        $this->container['industrialClasses'] = $industrialClasses;

        return $this;
    }

    /**
     * Gets serviceChannels
     *
     * @return \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceServiceChannel[]
     */
    public function getServiceChannels()
    {
        return isset($this->container['serviceChannels']) ? $this->container['serviceChannels'] : null;
    }

    /**
     * Sets serviceChannels
     *
     * @param \Tampere\PtvV11\PtvModel\V11VmOpenApiServiceServiceChannel[] $serviceChannels List of linked service channels including relationship data.
     *
     * @return $this
     */
    public function setServiceChannels($serviceChannels)
    {
        $this->container['serviceChannels'] = $serviceChannels;

        return $this;
    }

    /**
     * Gets organizations
     *
     * @return \Tampere\PtvV11\PtvModel\V6VmOpenApiServiceOrganization[]
     */
    public function getOrganizations()
    {
        return isset($this->container['organizations']) ? $this->container['organizations'] : null;
    }

    /**
     * Sets organizations
     *
     * @param \Tampere\PtvV11\PtvModel\V6VmOpenApiServiceOrganization[] $organizations List of organizations, responsible and producer organizations of the service.
     *
     * @return $this
     */
    public function setOrganizations($organizations)
    {
        $this->container['organizations'] = $organizations;

        return $this;
    }

    /**
     * Gets serviceCollections
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[]
     */
    public function getServiceCollections()
    {
        return isset($this->container['serviceCollections']) ? $this->container['serviceCollections'] : null;
    }

    /**
     * Sets serviceCollections
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[] $serviceCollections List of service collections that the service has been linked to
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
        return isset($this->container['publishingStatus']) ? $this->container['publishingStatus'] : null;
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
        return isset($this->container['modified']) ? $this->container['modified'] : null;
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
        return isset($this->container['responsibleSoteOrganization']) ? $this->container['responsibleSoteOrganization'] : null;
    }

    /**
     * Sets responsibleSoteOrganization
     *
     * @param string $responsibleSoteOrganization Sote organization that is responsible for the service. Notice! At the moment always empty - the property is a placeholder for later use.
     *
     * @return $this
     */
    public function setResponsibleSoteOrganization($responsibleSoteOrganization)
    {
        $this->container['responsibleSoteOrganization'] = $responsibleSoteOrganization;

        return $this;
    }

    /**
     * Gets mainOrganization
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiItem
     */
    public function getMainOrganization()
    {
        return isset($this->container['mainOrganization']) ? $this->container['mainOrganization'] : null;
    }

    /**
     * Sets mainOrganization
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiItem $mainOrganization mainOrganization
     *
     * @return $this
     */
    public function setMainOrganization($mainOrganization)
    {
        $this->container['mainOrganization'] = $mainOrganization;

        return $this;
    }

    /**
     * Gets serviceProducers
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiServiceProducer[]
     */
    public function getServiceProducers()
    {
        return isset($this->container['serviceProducers']) ? $this->container['serviceProducers'] : null;
    }

    /**
     * Sets serviceProducers
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiServiceProducer[] $serviceProducers List of service producers
     *
     * @return $this
     */
    public function setServiceProducers($serviceProducers)
    {
        $this->container['serviceProducers'] = $serviceProducers;

        return $this;
    }

    /**
     * Gets security
     *
     * @return \Tampere\PtvV11\PtvModel\ISecurityOwnOrganization
     */
    public function getSecurity()
    {
        return isset($this->container['security']) ? $this->container['security'] : null;
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
     * Gets municipalities
     *
     * @return \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]
     */
    public function getMunicipalities()
    {
        return isset($this->container['municipalities']) ? $this->container['municipalities'] : null;
    }

    /**
     * Sets municipalities
     *
     * @param \Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[] $municipalities List of municipality codes and names that the service is available for. Used in conjunction with service coverage type Local.
     *
     * @return $this
     */
    public function setMunicipalities($municipalities)
    {
        $this->container['municipalities'] = $municipalities;

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
