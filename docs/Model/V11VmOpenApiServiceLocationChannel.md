# V11VmOpenApiServiceLocationChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV identifier for the service channel. | [optional] 
**sourceId** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**serviceChannelDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel descriptions. Possible type values are: Description, Summary (in version 7 ShortDescription). (Max.Length: 2500 Description). | [optional] 
**areaType** | **string** | Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType.  In version 7 and older: WholeCountry, WholeCountryExceptAlandIslands, AreaType. | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**webPages** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]**](V9VmOpenApiWebPage.md) | List of service channel web pages. | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of service channel service hours. | [optional] 
**channelId** | **string** | Gets or sets the special channel identifier. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**serviceChannelType** | **string** | Type of the service channel. Channel types: EChannel, WebPage, PrintableForm, Phone or ServiceLocation. | [optional] 
**organizationId** | **string** | PTV organization identifier responsible for the channel. | [optional] 
**serviceChannelNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of service channel names. Possible type values are: Name, AlternativeName (in version 7 AlternateName). | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiArea[]**](VmOpenApiArea.md) | List of service channel areas. | [optional] 
**services** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceChannelService[]**](V11VmOpenApiServiceChannelService.md) | List of linked services including relationship data. | [optional] 
**serviceCollections** | [**\Tampere\PtvV11\PtvModel\VmOpenApiServiceServiceCollection[]**](VmOpenApiServiceServiceCollection.md) |  | [optional] 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 
**responsibleSoteOrganization** | **string** | Sote organization that is responsible for the service channel. Notice! At the moment always empty - the property is a placeholder for later use. | [optional] 
**ontologyTerms** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiOntologyTerm[]**](V4VmOpenApiOntologyTerm.md) | List of ontology terms related to the all service connections. | [optional] 
**areaMunicipalities** | [**\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality[]**](VmOpenApiMunicipality.md) | List of municipalities including municipality code and a localized list of municipality names. | [optional] 
**isVisibleForAll** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**security** | [**\Tampere\PtvV11\PtvModel\ISecurityOwnOrganization**](ISecurityOwnOrganization.md) |  | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**oid** | **string** | Service channel OID. Must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot;. | [optional] 
**displayNameType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]**](VmOpenApiNameTypeByLanguage.md) | List of Display name types (Name or AlternativeName) for each language version of ServiceChannelNames. | [optional] 
**phoneNumbers** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneWithType[]**](V4VmOpenApiPhoneWithType.md) | List of phone numbers for the service channel. Includes also fax numbers. | [optional] 
**supportEmails** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List email addresses for the service channel. | [optional] 
**addresses** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiAddressLocation[]**](V9VmOpenApiAddressLocation.md) | List of service location addresses. | [optional] 
**supportPhones** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of support phone numbers for the service channel. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

