# V11VmOpenApiPhoneChannelIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**supportEmails** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**isVisibleForAll** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**channelId** | **string** | Gets or sets the special channel identifier. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | PTV identifier for the service channel. | [optional] 
**serviceChannelNamesWithType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of service channel names. | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Date when item should be published. | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) | Date when item should be archived. | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**serviceChannelServices** | **string[]** | Internal property for adding service relations for a service channel. | [optional] 
**userName** | **string** | User name. | [optional] 
**webPage** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized urls. (Max.Length: 500). | [optional] 
**webPages** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]**](V9VmOpenApiWebPage.md) | List of service channel web pages. | [optional] 
**supportPhones** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of support phone numbers for the service channel. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: ServiceChannelNames, ServiceChannelDescriptions  and PhoneNumbers lists. | [optional] 
**areaType** | **string** | Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType. | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]**](VmOpenApiAreaIn.md) | List of areas. List can contain different types of areas. | [optional] 
**phoneNumbers** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhoneWithType[]**](V4VmOpenApiPhoneWithType.md) | List of support phone numbers for the service channel. | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of service channel service hours. | [optional] 
**publishingStatus** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | 
**organizationId** | **string** | PTV organization identifier of organization responsible for this channel. | 
**serviceChannelNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of service channel names. | 
**serviceChannelDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of service channel descriptions. Possible type values are: Description, Summary. | 
**services** | **string[]** | List of related services (GUID). | [optional] 
**deleteAllServiceHours** | **bool** | Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true. | [optional] 
**deleteAllWebPages** | **bool** | Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true. | [optional] 
**deleteAllSupportEmails** | **bool** | Set to true to delete all existing support emails for the service channel. The SupportEmails collection should be empty when this property is set to true. | [optional] 
**deleteAllSupportPhones** | **bool** | Set to true to delete all existing support phonesfor the service channel. The SupportPhones collection should be empty when this property is set to true. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

