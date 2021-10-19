# V10VmOpenApiPrintableFormChannelInBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier for this service channel. User needs to be logged in to be able to get/set value. | [optional] 
**supportEmails** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of support email addresses for the service channel. (Max.Length: 100). | [optional] 
**languages** | **string[]** | List of languages the service channel is available in (two letter language code). | [optional] 
**isVisibleForAll** | **bool** | Indicates if channel can be used (referenced within services) by other users from other organizations. | [optional] 
**channelId** | **string** | Gets or sets the special channel identifier. | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | PTV identifier for the service channel. | [optional] 
**organizationId** | **string** | PTV organization identifier for organization responsible for this service channel. | [optional] 
**serviceChannelNamesWithType** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | Localized list of service channel names. | [optional] 
**deleteAllSupportEmails** | **bool** | Set to true to delete all existing support email addresses for the service channel. The SupportEmails collection should be empty when this property is set to true. | [optional] 
**deleteAllSupportPhones** | **bool** | Set to true to delete all existing support phone numbers for the service channel. The SupportPhones collection should be empty when this property is set to true. | [optional] 
**validFrom** | [**\DateTime**](\DateTime.md) | Date when item should be published. | [optional] 
**validTo** | [**\DateTime**](\DateTime.md) | Date when item should be archived. | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**serviceChannelServices** | **string[]** | Internal property for adding service relations for a service channel. | [optional] 
**userName** | **string** | User name. | [optional] 
**serviceChannelNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of service channel names. (Max.Length: 100). | [optional] 
**formIdentifier** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized form identifiers. One per language. (Max.Length: 100). | [optional] 
**deliveryAddresses** | [**\Tampere\PtvV11\PtvModel\V8VmOpenApiAddressDeliveryIn[]**](V8VmOpenApiAddressDeliveryIn.md) | Gets or sets the delivery addresses. | [optional] 
**channelUrls** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized channel urls. Possible type values are: PDF, DOC, Excel. (Max.Length: 500). | [optional] 
**attachments** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAttachment[]**](VmOpenApiAttachment.md) | List of attachments. | [optional] 
**deleteAllDeliveryAddresses** | **bool** | Set to true to delete all existing delivery addresses for the service channel. The DeliveryAddresses should be empty when this property is set to true. | [optional] 
**deleteAllChannelUrls** | **bool** | Set to true to delete all existing channel urls for the service channel. The ChannelUrls collection should be empty when this property is set to true. | [optional] 
**deleteAllAttachments** | **bool** | Set to true to delete all existing attachments for the service channel. The Attachments collection should be empty when this property is set to true. | [optional] 
**deleteAllFormIdentifiers** | **bool** | Set to true to delete all existing form identifiers for the service channel. The form identifiers collection should be empty when this property is set to true. | [optional] 
**webPages** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiWebPage[]**](V9VmOpenApiWebPage.md) | List of service channel web pages. | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of service channel service hours. | [optional] 
**deleteAllWebPages** | **bool** | Set to true to delete all existing web pages for the service channel. The WebPages collection should be empty when this property is set to true. | [optional] 
**deleteAllServiceHours** | **bool** | Set to true to delete all existing service hours for the service channel. The ServiceHours collection should be empty when this property is set to true. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: ServiceChannelNames, ServiceChannelDescriptions  and ChannelUrls lists. | [optional] 
**serviceChannelDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel descriptions. Possible type values are: Description, Summary. (Max.Length: 150 Summary). | [optional] 
**areaType** | **string** | Area type. Possible values are: Nationwide, NationwideExceptAlandIslands or LimitedType. | [optional] 
**areas** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAreaIn[]**](VmOpenApiAreaIn.md) | List of areas. List can contain different types of areas. | [optional] 
**supportPhones** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiPhone[]**](V4VmOpenApiPhone.md) | List of support phone numbers for the service channel. | [optional] 
**publishingStatus** | **string** | Service channel publishing status. Values: Draft, Published, Deleted or Modified. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

