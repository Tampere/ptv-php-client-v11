# V11VmOpenApiServiceServiceChannel

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**serviceChargeType** | **string** | Service charge type. Possible values are: Chargeable, FreeOfCharge or Other. | [optional] 
**description** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLocalizedListItem[]**](VmOpenApiLocalizedListItem.md) | List of localized service channel relationship descriptions. (Max.Length: 500 Description). (Max.Length: 500 ChargeTypeAdditionalInfo). | [optional] 
**serviceHours** | [**\Tampere\PtvV11\PtvModel\V11VmOpenApiServiceHour[]**](V11VmOpenApiServiceHour.md) | List of connection related service hours. | [optional] 
**isASTIConnection** | **bool** | Indicates if connection between service and service channel is ASTI related. | [optional] 
**ownerReferenceId** | **string** | Contact details for connection. | [optional] 
**serviceChannel** | [**\Tampere\PtvV11\PtvModel\VmOpenApiItem**](VmOpenApiItem.md) |  | [optional] 
**extraTypes** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiExtraType[]**](V9VmOpenApiExtraType.md) | The extra types related to service and service channel connection. | [optional] 
**contactDetails** | [**\Tampere\PtvV11\PtvModel\V9VmOpenApiContactDetails**](V9VmOpenApiContactDetails.md) |  | [optional] 
**digitalAuthorizations** | [**\Tampere\PtvV11\PtvModel\V4VmOpenApiFintoItem[]**](V4VmOpenApiFintoItem.md) | List of digital authorizations related to the service. | [optional] 
**modified** | [**\DateTime**](\DateTime.md) | Date when connection was modified/created (UTC). | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

