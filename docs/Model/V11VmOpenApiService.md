# V11VmOpenApiService

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Entity identifier. | [optional] 
**sourceId** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**type** | **string** | Service type. Possible values are: Service, PermitOrObligation or ProfessionalQualification. In version 7 Service, PermissionAndObligation or ProfessionalQualifications. | [optional] 
**fundingType** | **string** | Service funding type. Possible values are: PubliclyFunded or MarketFunded. | [optional] 
**serviceNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service names. Possible type values are: Name, AlternativeName (in version 7 AlternateName). (Max.Length: 100). | [optional] 
**serviceChargeType** | **string** | Service charge type. Possible values are: Chargeable or FreeOfCharge.  In version 7: Charged or Free.  NOTE! If service charge type has been defined within attached statutory service general description, the charge type for service is ignored. | [optional] 
**areaType** | **string** | Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType.  In version 7: WholeCountry, WholeCountryExceptAlandIslands, AreaType. | [optional] 
**serviceDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service descriptions. Possible type values are: Description, Summary, UserInstruction, ValidityTime, ProcessingTime, DeadLine, ChargeTypeAdditionalInfo, ServiceType.  In version 7: Description, ShortDescription, ServiceUserInstruction, ValidityTimeAdditionalInfo, ProcessingTimeAdditionalInfo, DeadLineAdditionalInfo, ChargeTypeAdditionalInfo, ServiceTypeAdditionalInfo. | [optional] 
**languages** | **string[]** | List of service languages. | [optional] 
**legislation** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiLaw[]**](V4VmOpenApiLaw.md) | List of laws related to the service. | [optional] 
**keywords** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized service keywords. (Max.Length: 150). | [optional] 
**requirements** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized service usage requirements (description of requirement). (Max.Length: 2500). | [optional] 
**serviceVouchersInUse** | **bool** | Indicates if service vouchers are used in the service. | [optional] 
**serviceVouchers** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiServiceVoucher[]**](V9VmOpenApiServiceVoucher.md) | List of service vouchers. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**generalDescriptionId** | **string** | PTV identifier for linked general description. | [optional] 
**subType** | **string** | Service sub-type. It is used for SOTE and its taken from GeneralDescription&#x27;s generalDescriptionType. Possible values are: PrescribedByFreedomOfChoiceAct, OtherPermissionGrantedSote. | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiArea[]**](VmOpenApiArea.md) | List of service areas. | [optional] 
**serviceClasses** | [**\Tampere\PtvV11\PtvModel\V7VmOpenApiFintoItemWithDescription[]**](V7VmOpenApiFintoItemWithDescription.md) | List of service classes related to the service. | [optional] 
**ontologyTerms** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]**](V4VmOpenApiOntologyTerm.md) | List of ontology terms related to the service. | [optional] 
**targetGroups** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of target groups related to the service. | [optional] 
**lifeEvents** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of life events  related to the service. | [optional] 
**industrialClasses** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of industrial classes related to the service. | [optional] 
**serviceChannels** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceServiceChannel[]**](V11VmOpenApiServiceServiceChannel.md) | List of linked service channels including relationship data. | [optional] 
**organizations** | [**\Tampere\PtvV11\PtvModel\V6VmOpenApiServiceOrganization[]**](V6VmOpenApiServiceOrganization.md) | List of organizations, responsible and producer organizations of the service. | [optional] 
**serviceCollections** | [**\Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[]**](VmOpenApiServiceServiceCollection.md) | List of service collections that the service has been linked to | [optional] 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 
**responsibleSoteOrganization** | **string** | Sote organization that is responsible for the service. Notice! At the moment always empty - the property is a placeholder for later use. | [optional] 
**mainOrganization** | [**\Tampere\PtvV11\PtvModel\VmOpenApiItem**](VmOpenApiItem.md) |  | [optional] 
**serviceProducers** | [**\Tampere\PtvV11\PtvModel\VmOpenApiServiceProducer[]**](VmOpenApiServiceProducer.md) | List of service producers | [optional] 
**security** | [**\Tampere\PtvV11\PtvModel\ISecurityOwnOrganization**](ISecurityOwnOrganization.md) |  | [optional] 
**municipalities** | [**\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]**](VmOpenApiMunicipality.md) | List of municipality codes and names that the service is available for. Used in conjunction with service coverage type Local. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

