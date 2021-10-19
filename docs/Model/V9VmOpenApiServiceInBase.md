# V9VmOpenApiServiceInBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**fundingType** | **string** | Service funding type. Possible values are: PubliclyFunded or MarketFunded. | [optional] 
**languages** | **string[]** | List of service languages. | [optional] 
**legislation** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]**](V4VmOpenApiLaw.md) | List of laws related to the service. | [optional] 
**keywords** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized service keywords. (Max.Length: 150). | [optional] 
**requirements** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**serviceVouchersInUse** | **bool** | Indicates if service vouchers are used in the service. | [optional] 
**serviceVouchers** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceVoucher[]**](V9VmOpenApiServiceVoucher.md) | List of service vouchers. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | PTV service identifier. | [optional] 
**generalDescriptionId** | **string** | Valid PTV statutory service general description identifier that this service will be linked to. List of valid identifiers can be retrieved from the endpoint /api/GeneralDescription | [optional] 
**lifeEvents** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017  NOTE! If life event has been defined within attached statutory service general description, the life event is not added for service. | [optional] 
**industrialClasses** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt).  NOTE! If industrial class has been defined within attached statutory service general description, the industrial class is not added for service. | [optional] 
**otherResponsibleOrganizations** | **string[]** | List of other responsible organizations for the service. | [optional] 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**deleteAllLifeEvents** | **bool** | Set to true to delete all existing life events (the LifeEvents collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllIndustrialClasses** | **bool** | Set to true to delete all existing industrial classes (the IndustrialClasses collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllLaws** | **bool** | Set to true to delete all existing laws within legislation (the legislation collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllKeywords** | **bool** | Set to true to delete all existing keywords (the Keywords collection for this object should be empty collection when this option is used). | [optional] 
**deleteServiceChargeType** | **bool** | Set to true to delete service charge type (ServiceChargeType property for this object should be empty when this option is used). | [optional] 
**deleteGeneralDescriptionId** | **bool** | Set to true to delete statutory service general description (GeneralDescriptionId property for this object should be empty when this option is used). | [optional] 
**mainResponsibleOrganization** | **string** | Main responsible organization Id | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Date when item should be published. | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) | Date when item should be archived. | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**serviceServiceChannels** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceServiceChannelAstiInBase[]**](V11VmOpenApiServiceServiceChannelAstiInBase.md) | Internal property for adding service channel connections for a service.  This property is also used when attaching general description propsed channels into service (PTV-2315). | [optional] 
**userName** | **string** | User name. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: ServiceNames and ServiceDescriptions | [optional] 
**type** | **string** | Service type. Possible values are: Service, PermitOrObligation or ProfessionalQualification.  NOTE! If service type has been defined within attached statutory service general description, the type for service is ignored. | [optional] 
**serviceNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service names. Possible type values are: Name, AlternativeName. | [optional] 
**serviceChargeType** | **string** | Service charge type. Possible values are: Chargeable or FreeOfCharge.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored. | [optional] 
**areaType** | **string** | Area type (Nationwide, NationwideExceptAlandIslands, LimitedType). | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]**](VmOpenApiAreaIn.md) | List of areas. List can contain different types of areas. | [optional] 
**serviceDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service descriptions. Possible type values are: Description, Summary, UserInstruction, ValidityTime, ProcessingTime, DeadLine, ChargeTypeAdditionalInfo, ServiceType. (Max.Length: 2500 Description). (Max.Length: 2500 UserInstruction). (Max.Length: 150 Summary). (Max.Length: 500 ProcessingTime). (Max.Length: 500 DeadLine). (Max.Length: 500 ChargeTypeAdditionalInfo). (Max.Length: 500 ValidityTime). (Max.Length: 500 ServiceType). | [optional] 
**serviceClasses** | **string[]** | List of service class urls (see http://finto.fi/ptvl/fi/).  NOTE! If service class has been defined within attached statutory service general description, the service class is not added for service. | [optional] 
**ontologyTerms** | **string[]** | List of ontology term urls (see http://finto.fi/koko/fi/).  NOTE! If ontology term has been defined within attached statutory service general description, the ontology term is not added for service. | [optional] 
**targetGroups** | **string[]** | List of target group urls (see http://finto.fi/ptvl/fi/page/?uri&#x3D;http://urn.fi/URN:NBN:fi:au:ptvl:KR).  NOTE! If target group has been defined within attached statutory service general description, the target group is not added for service. | [optional] 
**serviceProducers** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceProducerIn[]**](V9VmOpenApiServiceProducerIn.md) | List of service producers | [optional] 
**deleteAllMunicipalities** | **bool** | Set to true to delete all existing municipalities (the Municipalities collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllServiceVouchers** | **bool** | Set to true to delete all existing service vouchers (the ServiceVouchers collection for this object should be empty collection when this option is used). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

