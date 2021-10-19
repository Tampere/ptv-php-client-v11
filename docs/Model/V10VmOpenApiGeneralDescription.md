# V10VmOpenApiGeneralDescription

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Entity Guid identifier. | [optional] 
**sourceId** | **string** | External system identifier. User needs to be logged in to be able to get/set value. | [optional] 
**names** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized names. Possible type values are: Name, AlternativeName (in version 7 AlternateName). (Max.Length: 100). | [optional] 
**descriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized descriptions. Possible type values are: Description, Summary, BackgroundDescription, UserInstruction, GeneralDescriptionTypeAdditionalInformation, ChargeTypeAdditionalInfo, DeadLine, ProcessingTime, ValidityTime. | [optional] 
**requirements** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**type** | **string** | Service type. Possible values in version 8 are: Service, PermitOrObligation or ProfessionalQualification.  In version 7: Service, PermissionAndObligation or ProfessionalQualifications.  In older versions: Service or PermissionAndObligation. | [optional] 
**serviceChargeType** | **string** | Service charge type. Possible values are:  Chargeable or FreeOfCharge.  In version 7 and older: Charged, Free or Other | [optional] 
**legislation** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]**](V4VmOpenApiLaw.md) | Laws that a general description is based on. | [optional] 
**generalDescriptionType** | **string** | General description type. Possible values are: Municipality, BusinessSubregion, Church. | [optional] 
**generalDescriptionTypeId** | **string** | General description type id. Used internally to check the restrictions for usage.  In older versions: Default general description is Municipality. | [optional] 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**serviceClasses** | [**\Tampere\PtvV11\PtvModel\V7VmOpenApiFintoItemWithDescription[]**](V7VmOpenApiFintoItemWithDescription.md) | List of service classes. | [optional] 
**ontologyTerms** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]**](V4VmOpenApiOntologyTerm.md) | List of ontology terms. | [optional] 
**targetGroups** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of target groups. | [optional] 
**lifeEvents** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of life events. | [optional] 
**industrialClasses** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of industrial classes. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 
**serviceChannels** | [**\Tampere\PtvV11\PtvModel\V6VmOpenApiServiceServiceChannel[]**](V6VmOpenApiServiceServiceChannel.md) | List of linked service channels including relationship data. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

