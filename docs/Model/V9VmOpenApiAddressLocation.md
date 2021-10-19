# V9VmOpenApiAddressLocation

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the identifier. | [optional] 
**postOfficeBoxAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressPostOfficeBox**](VmOpenApiAddressPostOfficeBox.md) |  | [optional] 
**streetAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressStreetWithCoordinates**](VmOpenApiAddressStreetWithCoordinates.md) |  | [optional] 
**country** | **string** | Country code (ISO 3166-1 alpha-2), for example FI. | [optional] 
**type** | **string** | Address type, Location or Postal. | [optional] 
**subType** | **string** | Address sub type, Single, Street, PostOfficeBox, Abroad or Other. | [optional] 
**otherAddress** | [**\Tampere\PtvV11\PtvModel\VmOpenApiAddressOther**](VmOpenApiAddressOther.md) |  | [optional] 
**locationAbroad** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of foreign address information. | [optional] 
**entrances** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiEntrance[]**](V9VmOpenApiEntrance.md) | Entrances for an address. Includes accessibility sentences. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

