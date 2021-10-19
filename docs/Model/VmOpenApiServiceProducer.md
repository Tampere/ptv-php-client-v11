# VmOpenApiServiceProducer

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Gets or sets the identifier. | [optional] 
**ownerReferenceId** | **string** | Gets or sets the owner reference identifier. | [optional] 
**orderNumber** | **int** | The order of service voucher. | [optional] 
**provisionType** | **string** | Provision type, valid values for version 8 are SelfProducedServices, ProcuredServices or Other.  For older versions valid values are SelfProduced, PurchaseServices or Other. | 
**additionalInformation** | [**\Tampere\PtvV11\PtvModel\VmOpenApiLanguageItem[]**](VmOpenApiLanguageItem.md) | Localized list of additional information. (Max.Length: 150). | [optional] 
**organizations** | [**\Tampere\PtvV11\PtvModel\VmOpenApiItem[]**](VmOpenApiItem.md) | Gets or sets the organization information. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

