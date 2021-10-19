# V10VmOpenApiOrganization

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Entity identifier. | [optional] 
**oid** | **string** | Organization OID. - must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot; | [optional] 
**sourceId** | **string** | Organization external system identifier. User needs to be logged in to be able to get/set value. | [optional] 
**organizationType** | **string** | Organization type (State, Municipality, RegionalOrganization, Organization, Company, SotePublic, SotePrivate, Region). | [optional] 
**businessCode** | **string** | Organization business code (Y-tunnus). | [optional] 
**businessName** | **string** | Organization business name (name used for business code). This property is not used in the API anymore. Do not use. | [optional] 
**organizationNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of organization names. Possible type values are: Name, AlternativeName (in version 7 AlternateName). | [optional] 
**displayNameType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]**](VmOpenApiNameTypeByLanguage.md) | List of Display name types (Name or AlternativeName) for each language version of OrganizationNames. | [optional] 
**areaType** | **string** | Area type (Nationwide, NationwideExceptAlandIslands, LimitedType). | [optional] 
**organizationDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of organization descriptions. Possible type values are: Description, Summary (in version 7 ShortDescription). (Max.Length: 2500 Description). (Max.Length: 150 ShortDescription). | [optional] 
**emails** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiEmail[]**](V4VmOpenApiEmail.md) | List of email addresses. | [optional] 
**phoneNumbers** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of organizations phone numbers. | [optional] 
**webPages** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]**](V9VmOpenApiWebPage.md) | List of organizations web pages. | [optional] 
**electronicInvoicings** | [**\Tampere\PtvV11\PtvModel\VmOpenApiOrganizationEInvoicing[]**](VmOpenApiOrganizationEInvoicing.md) | List of organizations electronic invoicing information. | [optional] 
**businessId** | **string** | Business code entity identifier. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**parentOrganizationId** | **string** | Organizations parent organization identifier if exists. | [optional] 
**organizationRootId** | **string** | Organizations root organization identifier if exists. | [optional] 
**municipality** | [**\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality**](VmOpenApiMunicipality.md) |  | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiArea[]**](VmOpenApiArea.md) | List of organization areas. | [optional] 
**areaMunicipalities** | [**\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]**](VmOpenApiMunicipality.md) | List of organization area municipalities | [optional] 
**addresses** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiAddress[]**](V9VmOpenApiAddress.md) | List of organizations addresses. | [optional] 
**publishingStatus** | **string** | Publishing status (Draft, Published, Deleted or Modified). | [optional] 
**services** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[]**](V10VmOpenApiOrganizationService.md) | List of organizations services. | [optional] 
**responsibleOrganizationServices** | [**\Tampere\PtvV11\PtvModel\VmOpenApiItem[]**](VmOpenApiItem.md) | List of organizations services where organization is main responsible. | [optional] 
**producerOrganizationServices** | [**\Tampere\PtvV11\PtvModel\V10VmOpenApiOrganizationService[]**](V10VmOpenApiOrganizationService.md) | List of organizations services where organization is a producer. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 
**subOrganizations** | [**\Tampere\PtvV11\PtvModel\VmOpenApiItem[]**](VmOpenApiItem.md) | The sub organizations | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

