# V11VmOpenApiServiceAndChannelRelationBySource

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceSourceId** | **string** | The external source id for service. | 
**serviceChannelSourceId** | **string** | The external source id for service channel. | 
**serviceChargeType** | **string** | Service charge type. Possible values are: Chargeable, FreeOfCharge or Other | [optional] 
**description** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel relationship descriptions. Possible type values are: Description, ChargeTypeAdditionalInfo. (Max.Length: 500 Description). (Max.Length: 500 ChargeTypeAdditionalInfo). | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of connection related service hours. | [optional] 
**contactDetails** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsIn**](V9VmOpenApiContactDetailsIn.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

