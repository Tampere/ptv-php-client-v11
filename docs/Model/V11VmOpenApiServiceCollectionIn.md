# V11VmOpenApiServiceCollectionIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sourceId** | **string** | External system identifier for the entity. User needs to be logged in to be able to get/set value. | [optional] 
**availableLanguages** | **string[]** | Gets or sets available languages | [optional] 
**versionId** | **string** | The identifier for current version. | [optional] 
**id** | **string** | PTV service identifier. | [optional] 
**currentPublishingStatus** | **string** | Current version publishing status. | [optional] 
**services** | **string[]** | List of service collection services. | [optional] 
**serviceCollectionServices** | **string[]** | Internal property for adding service collection services for service collection. | [optional] 
**serviceCollectionChannels** | **string[]** | Internal property for adding service collection services for service collection. | [optional] 
**deleteAllChannels** | **bool** | Set to true to delete all existing channels (the services collection for this object should be empty collection when this option is used). | [optional] 
**requiredPropertiesAvailableLanguages** | **string[]** | Internal property to check the languages within required lists: ServiceCollectionNames and ServiceCollectionDescriptions | [optional] 
**serviceCollectionDescriptions** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service colections descriptions. Possible type values are: Description, Summary. (Max.Length: 150 Summary). (Max.Length: 2500 Description). | [optional] 
**serviceChannels** | **string[]** | List of service collection channels. | [optional] 
**serviceCollectionNames** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized service collection names. | 
**organizationId** | **string** | Main responsible organization Id. | 
**publishingStatus** | **string** | Publishing status. Possible values are: Draft or Published. | 
**deleteAllServices** | **bool** | Set to true to delete all existing services (the services collection for this object should be empty collection when this option is used). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

