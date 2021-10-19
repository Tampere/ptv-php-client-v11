# V11VmOpenApiServiceCollection

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | PTV service identifier. | [optional] 
**sourceId** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**serviceCollectionNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized service collection names. (Max.Length: 100). | [optional] 
**serviceCollectionDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service collection descriptions. | [optional] 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft, Published, Deleted or Modified. | 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**organizationId** | **string** | Main responsible organization Id. | [optional] 
**services** | [**\Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionService[]**](VmOpenApiServiceCollectionService.md) | List of service collection services. | [optional] 
**serviceChannels** | [**\Tampere\PtvV11\PtvModel\VmOpenApiServiceCollectionChannel[]**](VmOpenApiServiceCollectionChannel.md) |  | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Date when item was modified/created (UTC). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

