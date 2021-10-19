# V10VmOpenApiGeneralDescriptionInBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier. User needs to be logged in to be able to get/set value. | [optional] 
**requirements** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**legislation** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]**](V4VmOpenApiLaw.md) | Laws that a general description is based on. | [optional] 
**generalDescriptionType** | **string** | General description type. Possible values are: Municipality, BusinessSubregion, Church. | [optional] 
**generalDescriptionTypeId** | **string** | General description type id. Used internally to check the restrictions for usage.  In older versions: Default general description is Municipality. | [optional] 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | Entity Guid identifier. | [optional] 
**serviceClasses** | **string[]** | List of service class urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v1065 | [optional] 
**ontologyTerms** | **string[]** | List of ontology term urls. Sample url: http://www.yso.fi/onto/koko/p2435 | [optional] 
**targetGroups** | **string[]** | List of target group urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v2004 | [optional] 
**lifeEvents** | **string[]** | List of life event urls. Sample url: http://urn.fi/URN:NBN:fi:au:ptvl:v3017 | [optional] 
**industrialClasses** | **string[]** | List of industrial class codes (see http://tilastokeskus.fi/meta/luokitukset/toimiala/001-2008/tekstitiedosto_en.txt). | [optional] 
**deleteAllLifeEvents** | **bool** | Set to true to delete all existing life events (the LifeEvents collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllIndustrialClasses** | **bool** | Set to true to delete all existing industrial classes (the IndustrialClasses collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllLaws** | **bool** | Set to true to delete all existing laws within legislation (the legislation collection for this object should be empty collection when this option is used). | [optional] 
**deleteServiceChargeType** | **bool** | Set to true to delete service charge type (ServiceChargeType property for this object should be empty when this option is used). | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: Names and Descriptions | [optional] 
**names** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized names. Possible type values are: Name, AlternativeName. | [optional] 
**descriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized descriptions. Possible type values are: Description, Summary, BackgroundDescription, UserInstruction, GeneralDescriptionTypeAdditionalInformation, ChargeTypeAdditionalInfo, DeadLine, ProcessingTime, ValidityTime. (Max.Length: 150 Summary). (Max.Length: 2500 Description). (Max.Length: 2500 UserInstruction). (Max.Length: 2500 BackgroundDescription). (Max.Length: 2500 GeneralDescriptionTypeAdditionalInformation). | [optional] 
**type** | **string** | Service type. Possible values are: Service, PermitOrObligation or ProfessionalQualification. | [optional] 
**serviceChargeType** | **string** | Service charge type. Possible values are:  Chargeable or FreeOfCharge. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

