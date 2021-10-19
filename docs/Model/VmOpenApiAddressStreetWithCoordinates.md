# VmOpenApiAddressStreetWithCoordinates

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the identifier. | [optional] 
**postalCode** | **string** | Postal code, for example 00100. | 
**postOffice** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized Post offices, for example Helsinki, Helsingfors. | [optional] 
**municipality** | [**\Tampere\PtvV11\PtvModel\VmOpenApiMunicipality**](VmOpenApiMunicipality.md) |  | [optional] 
**additionalInformation** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of additional information about the address. (Max.Length: 150). | [optional] 
**street** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized street addresses. (Max.Length: 100). | [optional] 
**streetNumber** | **string** | Street number for street address. (Max.Length: 30). | [optional] 
**latitude** | **string** | Location latitude coordinate. | [optional] 
**longitude** | **string** | Location longitude coordinate. | [optional] 
**coordinateState** | **string** | State of coordinates. Coordinates are fetched from a service provided by Maanmittauslaitos (WFS).  Possible values are: Loading, Ok, Failed, NotReceived, EmptyInputReceived, MultipleResultsReceived, WrongFormatReceived or EnteredByUser. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

