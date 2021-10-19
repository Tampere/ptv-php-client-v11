# V9VmOpenApiOrganizationInBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | Organization external system identifier. User needs to be logged in to be able to get/set value. | [optional] 
**businessCode** | **string** | Organization business code (Y-tunnus). | [optional] 
**businessName** | **string** | Organization business name (name used for business code). This property is not used in the API anymore. Do not use. | [optional] 
**emails** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiEmail[]**](V4VmOpenApiEmail.md) | List of email addresses. | [optional] 
**webPages** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]**](V9VmOpenApiWebPage.md) | List of organizations web pages. | [optional] 
**electronicInvoicings** | [**\Tampere\PtvV11\PtvModel\VmOpenApiOrganizationEInvoicing[]**](VmOpenApiOrganizationEInvoicing.md) | List of organizations electronic invoicing information. | [optional] 
**businessId** | **string** | Business code entity identifier. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**oid** | **string** | Organization OID. - must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot; (Max.Length: 100). | [optional] 
**municipality** | **string** | Municipality code (like 491 or 091). | [optional] 
**addresses** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiAddressIn[]**](V9VmOpenApiAddressIn.md) | List of addresses. | [optional] 
**parentOrganizationId** | **string** | Parent organization identifier. | [optional] 
**deleteAllEmails** | **bool** | Set to true to delete all existing emails (the EmailAddresses collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllPhones** | **bool** | Set to true to delete all existing phone numbers (the PhoneNumbers collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllWebPages** | **bool** | Set to true to delete all existing web pages (the WebPages collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllAddresses** | **bool** | Set to true to delete all existing addresses (the Addresses collection for this object should be empty collection when this option is used). | [optional] 
**deleteAllElectronicInvoicings** | **bool** | Set to true to delete all existing electronic invoicing addresses (the ElectronicInvoicings collection for this object should be empty collection when this option is used). | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Date when item should be published. | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) | Date when item should be archived. | [optional] 
**id** | **string** | Entity identifier. | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**userName** | **string** | User name. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: OrganizationNames and OrganizationDescriptions | [optional] 
**organizationNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of organization names. Possible type values are: Name, AlternativeName. | [optional] 
**organizationDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of organization descriptions. Possible type values are: Description, Summary. (Max.Length: 2500 Description). (Max.Length: 150 Summary). | [optional] 
**displayNameType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]**](VmOpenApiNameTypeByLanguage.md) | List of Display name types (Name or AlternativeName) for each language version of OrganizationNames. | [optional] 
**organizationType** | **string** | Organization type (State, Municipality, RegionalOrganization, Organization, Company, SotePublic, SotePrivate, Region). | [optional] 
**areaType** | **string** | Area type (Nationwide, NationwideExceptAlandIslands, LimitedType). | [optional] 
**subAreaType** | **string** | Sub area type (Municipality, Region, BusinessSubRegion, HospitalDistrict). | [optional] 
**areas** | **string[]** | Area codes related to sub area type. For example if SubAreaType &#x3D; Municipality, Areas-list need to include municipality codes like 491 or 091. | [optional] 
**phoneNumbers** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of organizations phone numbers. | [optional] 
**publishingStatus** | **string** | Organization publishing status. Values: Draft, Published, Deleted or Modified. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

