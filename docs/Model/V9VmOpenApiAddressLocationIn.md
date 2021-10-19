# V9VmOpenApiAddressLocationIn

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the identifier. | [optional] 
**postOfficeBoxAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBoxIn**](VmOpenApiAddressPostOfficeBoxIn.md) |  | [optional] 
**country** | **string** | Country code (ISO 3166-1 alpha-2), for example FI. | [optional] 
**ownerReferenceId** | **string** | Gets or sets the owner reference identifier. | [optional] 
**uniqueId** | **string** | Gets or sets the address unique id | [optional] 
**type** | **string** | Address type, Location or Postal. | 
**subType** | **string** | Address sub type, Single, Street, PostOfficeBox, Abroad or Other. | 
**foreignAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of foreign address information. | [optional] 
**streetAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetWithCoordinatesIn**](VmOpenApiAddressStreetWithCoordinatesIn.md) |  | [optional] 
**otherAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressOtherIn**](VmOpenApiAddressOtherIn.md) |  | [optional] 
**locationAbroad** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of foreign address information. (Max.Length: 500). | [optional] 
**orderNumber** | **int** | Gets or sets the order number | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

