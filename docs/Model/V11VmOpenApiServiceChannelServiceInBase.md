# V11VmOpenApiServiceChannelServiceInBase

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceId** | **string** | PTV service identifier. | 
**serviceChargeType** | **string** | Service charge type. Possible values are: Chargeable, FreeOfCharge or Other. | [optional] 
**description** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel relationship descriptions. Possible type values are: Description, ChargeTypeAdditionalInfo. (Max.Length: 500 Description). (Max.Length: 500 ChargeTypeAdditionalInfo). | [optional] 
**extraTypes** | [**\Tampere\PtvV11\PtvModel\VmOpenApiExtraType[]**](VmOpenApiExtraType.md) | The extra types related to service and service channel connection. | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of connection related service hours. | [optional] 
**contactDetails** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetailsInBase**](V9VmOpenApiContactDetailsInBase.md) |  | [optional] 
**deleteServiceChargeType** | **bool** | Indicates if value for property ServiceChargeType should be deleted. | [optional] 
**deleteAllDescriptions** | **bool** | Indicates if all descriptions should be deleted. | [optional] 
**deleteAllExtraTypes** | **bool** | Indicates if all extra types should be deleted. | [optional] 
**deleteAllServiceHours** | **bool** | Gets or sets a value indicating whether all service hours should be delted. | [optional] 
**serviceGuid** | **string** | Gets or sets the service unique identifier. | [optional] 
**channelGuid** | **string** | Gets or sets the channel unique identifier. | [optional] 
**isASTIConnection** | **bool** | Indicates if connection between service and service channel is ASTI related. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

