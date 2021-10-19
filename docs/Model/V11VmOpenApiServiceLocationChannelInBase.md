# V11VmOpenApiServiceLocationChannelInBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**webPages** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]**](V9VmOpenApiWebPage.md) | List of service channel web pages. | [optional] 
**isVisibleForAll** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**channelId** | **string** | Gets or sets the special channel identifier. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | PTV identifier for the service channel. | [optional] 
**organizationId** | **string** | PTV organization identifier for organization responsible for this service channel. | [optional] 
**serviceChannelNamesWithType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of service channel names. | [optional] 
**deleteAllWebPages** | **bool** | Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true. | [optional] 
**deleteAllServiceHours** | **bool** | Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true. | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Date when item should be published. | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) | Date when item should be archived. | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**serviceChannelServices** | **string[]** | Internal property for adding service relations for a service channel. | [optional] 
**userName** | **string** | User name. | [optional] 
**oid** | **string** | Service channel OID. Must match the regex @\&quot;^[A-Za-z0-9.-]*$\&quot;.  NOTICE! At the moment the property is only a placeholder. The data is not saved into database! | [optional] 
**emails** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List email addresses for the service channel. | [optional] 
**supportEmails** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List email addresses for the service channel. | [optional] 
**faxNumbers** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneSimple[]**](V4VmOpenApiPhoneSimple.md) | Service location contact fax numbers. | [optional] 
**addresses** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiAddressLocationIn[]**](V9VmOpenApiAddressLocationIn.md) | List of service location addresses. | [optional] 
**deleteAllSupportEmails** | **bool** | Set to true to delete emails. The email property should be empty when this property is set to true. | [optional] 
**deleteAllPhoneNumbers** | **bool** | Set to true to delete phone number. The prohone property should be empty when this property is set to true. | [optional] 
**deleteAllFaxNumbers** | **bool** | Set to true to delete fax number. The fax property should be empty when this property is set to true. | [optional] 
**deleteOid** | **bool** | Set to true to delete OID. The Oid property should be empty when this property is set to true. | [optional] 
**supportPhones** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of support phone numbers for the service channel. | [optional] 
**deleteAllSupportPhones** | **bool** | Set to true to delete all existing support phone numbers for the service channel. The SupportPhones collection should be empty when this property is set to true. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: ServiceChannelNames, ServiceChannelDescriptions  and ChannelUrls lists. | [optional] 
**serviceChannelNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of organization names. Possible type values are: Name, AlternativeName. | [optional] 
**serviceChannelDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel descriptions. Possible type values are: Description, Summary. (Max.Length: 150 Summary). | [optional] 
**displayNameType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiNameTypeByLanguage[]**](VmOpenApiNameTypeByLanguage.md) | List of Display name types (Name or AlternativeName) for each language version of ServiceChannelNames. | [optional] 
**areaType** | **string** | Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType. | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]**](VmOpenApiAreaIn.md) | List of areas. List can contain different types of areas. | [optional] 
**phoneNumbers** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of support phone numbers for the service channel. | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of service channel service hours. | [optional] 
**publishingStatus** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

