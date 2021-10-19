# V8VmOpenApiAddressDeliveryIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the identifier. | [optional] 
**subType** | **string** | Address sub type, Street, PostOfficeBox or NoAddress. | 
**postOfficeBoxAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn**](VmOpenApiAddressPostOfficeBoxIn.md) |  | [optional] 
**streetAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetIn**](VmOpenApiAddressStreetIn.md) |  | [optional] 
**deliveryAddressInText** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of foreign address information. (Max.Length: 150). | [optional] 
**formReceiver** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | List of localized form receivers. One per language. (Max.Length: 100). | [optional] 
**orderNumber** | **int** | Gets or sets the order number | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

