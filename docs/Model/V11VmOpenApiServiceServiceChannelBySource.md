# V11VmOpenApiServiceServiceChannelBySource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceChannelSourceId** | **string** | The external source id for service channel. | 
**description** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel relationship descriptions. Possible type values are: Description, ChargeTypeAdditionalInfo. (Max.Length: 500 Description). (Max.Length: 500 ChargeTypeAdditionalInfo). | [optional] 
**serviceChargeType** | **string** | Service charge type. Possible values are: Chargeable, FreeOfCharge or Other | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of connection related service hours. | [optional] 
**contactDetails** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsInBase**](V9VmOpenApiContactDetailsInBase.md) |  | [optional] 
**deleteServiceChargeType** | **bool** | Indicates if value for property ServiceChargeType should be deleted. | [optional] 
**deleteAllDescriptions** | **bool** | Indicates if all descriptions should be deleted. | [optional] 
**deleteAllServiceHours** | **bool** | Gets or sets a value indicating whether all service hours should be deleted. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

