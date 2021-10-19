# V9VmOpenApiAddressIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the identifier. | [optional] 
**postOfficeBoxAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn**](VmOpenApiAddressPostOfficeBoxIn.md) |  | [optional] 
**streetAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetWithCoordinatesIn**](VmOpenApiAddressStreetWithCoordinatesIn.md) |  | [optional] 
**country** | **string** | Country code (ISO 3166-1 alpha-2), for example FI. | [optional] 
**ownerReferenceId** | **string** | Gets or sets the owner reference identifier. | [optional] 
**uniqueId** | **string** | Gets or sets the address unique id | [optional] 
**type** | **string** | Address type, Visiting or Postal. | 
**subType** | **string** | Address sub type, Street, PostOfficeBox, Foreign or Other. | 
**otherAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressOtherIn**](VmOpenApiAddressOtherIn.md) |  | [optional] 
**foreignAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of foreign address information. | [optional] 
**orderNumber** | **int** | Gets or sets the order number | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

